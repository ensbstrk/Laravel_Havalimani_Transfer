<li>
    <a href="#" class="dropdown-toggle">Category</a>
    @php
        $parentCategories = \App\Http\Controllers\Homecontroller::categorylist()
    @endphp
    <ul>
        @foreach($parentCategories as $category)
        <li><a href="{{route('categorytransfers',['id'=>$category->id,'slug'=>$category->title])}}">{{$category->title}}</a></li>

            @endforeach
    </ul>
</li>
