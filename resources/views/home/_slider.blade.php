<div id="home" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner active">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('assets/')}}/images/slider-image-1-1920x700.jpg" alt="First slide">
        </div>
        @foreach($slider as $rs)
        <div class="carousel-item">
            <h3>{{$rs->title}}</h3>
            <h3 class="carousel">{{$rs->baseprice}}</h3>
            <img class="d-block  w-100" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 650px"  >
        </div>

        @endforeach
    </div>
    <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
