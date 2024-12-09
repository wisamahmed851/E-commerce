@extends('ecommerce.layout.layouts')

@section('content')
<h1>Category List</h1>
<ul>
    @foreach($categories as $category)
        <li>
            <strong>{{ $category->name }}</strong>
            @if($category->children->isNotEmpty())
                <ul>
                    @foreach($category->children as $child)
                        @include('ecommerce.category.partials.subcategory', ['subcategory' => $child])
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
@endsection
