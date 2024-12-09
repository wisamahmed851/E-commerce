const getEditorContent = (formId) => {
    const editorContents = {};

    $(`#${formId} .dg-text-editor`).each(function () {
        const editor = CKEDITOR.instances[$(this).attr('name')];
        const fieldName = $(this).attr('name');
        editorContents[fieldName] = editor ? editor.getData() : null;
    });

    return editorContents;
}

function handleForm(
    formMethod,
    formId,
    btnId,
    targetUrl,
    refreshOrRedirect = "refresh",
    timer = 3000
) {
    
    $(btnId).prop("disabled", true);
    $(btnId).html(
        '<span class="spinner-border spinner-border-sm"></span> Processing...'
    );
    const formAttrId = $(formId).attr('id');
    const editorContents = getEditorContent(formAttrId);
    const formData = $(`#${formAttrId}`).serializeArray();
    // const editorContent = getEditorContent();

    if (Object.keys(editorContents).length > 0) {
        // Include editor content in form data
        formData.push(...Object.entries(editorContents).map(([name, value]) => ({ name, value })));
    }
    

    $.ajax({
        url: targetUrl,
        type: formMethod,
        data: formData,

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (data) {
            var response = JSON.parse(JSON.stringify(data));
            if (response.status === "success") {
                $.notify(response.message, {
                    animate: {
                        enter: "animated bounceInDown",
                        exit: "animated bounceOutUp",
                    },
                    type: "success",
                    delay: timer,
                    allow_dismiss: false,
                });
                setTimeout(() => {
                    if (refreshOrRedirect === "refresh") {
                        location.reload();
                    } else {
                        location.replace(refreshOrRedirect);
                    }
                }, timer);
            } else if (response.status === "warning") {
                $.notify(response.message, {
                    animate: {
                        enter: "animated bounceInDown",
                        exit: "animated bounceOutUp",
                    },
                    type: "warning",
                    allow_dismiss: false,
                    delay: timer,
                });
                $(btnId).prop("disabled", false);
                $(btnId).html("Submit");
            } else {
                $.notify(response.message, {
                    animate: {
                        enter: "animated bounceInDown",
                        exit: "animated bounceOutUp",
                    },
                    type: "danger",
                    allow_dismiss: false,
                    delay: timer,
                });
                $(btnId).prop("disabled", false);
                $(btnId).html("Submit");
            }
        },
        error: function (jqXHR) {
            $.notify("An error occurred. Please try again later.", {
                animate: {
                    enter: "animated bounceInDown",
                    exit: "animated bounceOutUp",
                },
                type: "danger",
                allow_dismiss: false,
                delay: timer,
            });
            $(btnId).prop("disabled", false);
            $(btnId).html("Submit");
        },
    });
    // });
}




function saBox(msg) {
    return swal({
        title: "Are you sure?",
        text: msg,
        icon: "warning",
        buttons: true,
        dangerMode: true,
    });
}


const handleStatusUpdate = (route, id) => {
    $.ajax({
        url: route,
        data: {
            id: id,
        },
        type: 'POST',
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (data) {
            var response = JSON.parse(JSON.stringify(data));
            if (response.status === "success") {
                $.notify(response.message, {
                    animate: {
                        enter: "animated bounceInDown",
                        exit: "animated bounceOutUp",
                    },
                    type: "success",
                    delay: 3000,
                    allow_dismiss: false,
                });
            } else if (response.status === "warning") {
                $.notify(response.message, {
                    animate: {
                        enter: "animated bounceInDown",
                        exit: "animated bounceOutUp",
                    },
                    type: "warning",
                    allow_dismiss: false,
                    delay: 3000,
                });
            } else {
                $.notify(response.message, {
                    animate: {
                        enter: "animated bounceInDown",
                        exit: "animated bounceOutUp",
                    },
                    type: "danger",
                    allow_dismiss: false,
                    delay: 3000,
                });
            }
        },
        error: function (jqXHR) {
            $.notify("An error occurred. Please try again later.", {
                animate: {
                    enter: "animated bounceInDown",
                    exit: "animated bounceOutUp",
                },
                type: "danger",
                allow_dismiss: false,
                delay: 3000,
            });
        },

    });
}

const switchLanguage = async (data,formId,url) => {
    try {
        let id = $(data).data('id');
        let lang = $(data).data('lang');

        $(formId).parent().find('.nav-link').removeClass('active');
        $(data).addClass('active');
        $(formId).empty();
        $(formId).append(`
            <div style="display:flex;justify-content:center">
                <span class="spinner-border spinner-border-sm"></span>&nbsp; Processing...
            </div>
        `);

        const response = await fetch(`${url}?lang=${lang}&id=${id}`);
        const responseData = await response.text(); // or response.json() if the response is JSON

        // Update the form content with the API response
        $(formId).html(responseData);

        // Set the value of input[name="lang"]
        $('input[name="lang"]').val(lang);
        // Call functions after the API response is received
        textEditor();
        tags();
        filemanagerImagepreview();
    } catch (error) {
        $.notify("An error occurred. Please try again later.", {
            animate: {
                enter: "animated bounceInDown",
                exit: "animated bounceOutUp",
            },
            type: "danger",
            allow_dismiss: false,
            delay: 3000,
        });
    }
}
