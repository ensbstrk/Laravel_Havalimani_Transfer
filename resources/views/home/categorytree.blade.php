@foreach($children as $category)
    <ul class="list-links">
        @if(count($category->children))
            <li style="...">{{$category->title}}</li>
            <ul class="list-links">
                @include('home.categorytree',['children'=>$category->children])
            </ul>
            <hr>
        @else
            <li><a href="#">{{$category->title}}</a> </li>
        @endif
    </ul>
@endforeach
