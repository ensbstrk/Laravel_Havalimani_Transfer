<li>
    <a href="#" class="dropdown-toggle">Kategorilerimiz</a>
    @php
        $parentCategories = \App\Http\Controllers\Homecontroller::categorylist()
    @endphp
    <ul>
        @foreach($parentCategories as $category)
        <li><a href="about.html">{{$category->title}}</a></li>
            @endforeach
    </ul>
</li>
