<li>
    {{ $subcategory->name }}
    @if($subcategory->children->isNotEmpty())
        <ul>
            @foreach($subcategory->children as $child)
                @include('ecommerce.category.partials.subcategory', ['subcategory' => $child])
            @endforeach
        </ul>
    @endif
</li>
