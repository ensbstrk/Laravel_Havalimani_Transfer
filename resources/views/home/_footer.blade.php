@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<footer id="footer">
    <div class="inner">
        <section>
            <h2>Contact Us</h2>
            @include('home.message')
            <form method="post" action="{{route('sendmessage')}}">
                @csrf
                <div class="fields">
                    <div class="field half">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>

                    <div class="field half">
                        <input type="text" name="phone" id="phone" placeholder="Phone Number" />
                    </div>
                    <div class="field half">
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>

                    <div class="field">
                        <input type="text" name="subject" id="subject" placeholder="subject" />
                    </div>

                    <div class="field">
                        <textarea name="message" id="message" rows="3" placeholder="Your Message"></textarea>
                    </div>

                    <div class="field text-right">
                        <label>&nbsp;</label>

                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        <section>
            <h2>Contact Info</h2>

            <ul class="alt">
                <li><span class="fa fa-envelope-o"></span> {{$setting->email}} a></li>
               <li><span class="fa fa-phone"></span> {{$setting->phone}} </li>
                <li><span class="fa fa-map-pin"></span> {{$setting->address}}</li>
            </ul>

            <h2>Follow Us</h2>

            <ul class="icons">
                @if($setting->twitter!=null)<li><a href="{{$setting->twitter}}" target="_blank" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>@endif
                @if($setting->facebook!=null)<li><a href="{{$setting->facebook}}"target="_blank" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>@endif
                      @if($setting->instagram!=null)<li><a href="{{$setting->instagram}}"target="_blank" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>@endif
                <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
            </ul>
        </section>

        <ul class="copyright">
            <li>Copyright © 2020 Company Name </li>
            <li>{{$setting->company}}</li>
        </ul>
    </div>
</footer>



<!-- Scripts -->
<script src="{{asset('assets/')}}/js/jquery.min.js"></script>
<script src="{{asset('assets/')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/')}}/js/jquery.scrolly.min.js"></script>
<script src="{{asset('assets/')}}/js/jquery.scrollex.min.js"></script>
<script src="{{asset('assets/')}}/js/main.js"></script>



