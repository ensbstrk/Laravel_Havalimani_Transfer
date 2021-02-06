<div>
    <input type="text" name="search" class="form-control" list="mylist" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2"/>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
