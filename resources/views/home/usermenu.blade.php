@auth
User Panel
<ul>
    <li><a href="{{route('myprofile')}}" class="active">My Profile</a></li>
    <li><a href="{{route('myprofile')}}" class="active">My orders</a></li>
    <li><a href="{{route('user_transfer')}}" class="active">My Transfer</a></li>
    <li><a href="{{route('logout')}}" class="active">Logout</a></li>
    @php
        $userRoles=Auth::user()->roles->pluck('name');
    @endphp
    @if($userRoles->contains('admin'))
        <li><a href="{{route('admin_home')}}" target="_blank" >Admin Panel</a></li>
        @endif

</ul>
@endauth
