@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title">
            Welcome to Greenbook 
        </div>
        <div class="text">
            Please <a href="{{ url('/login') }}">login</a> or <a href="{{ url('/register') }}">register</a> for a new account
        </div>
        <img src="img/rifleman.jpg" class="logo" alt="Rifleman">
    </div>  
  
<!-- Services -->
<section class="services">
    <div class="container grid-3 center">
        <div>
            <i class="fab fa-youtube fa-3x"></i>
            <h3>YouTube</h3>
            <a href="https://www.youtube.com/watch?v=pUjDu7V8jHk">RGJRA 50th Anniversary Reunion</a> 
        </div>
        <div>
            <i class="fab fa-facebook fa-3x"></i>
            <h3>Facebook</h3>
            <a href="https://www.facebook.com/groups/416285255481388/">RGJ Facebook page (members only)</a>
        </div>
        <div>
            <i class="fas fa-archway fa-3x"></i>
            <h3>Historical</h3>
            <a href="http://rgjmuseum.co.uk/">The Royal Green Jackets (Rifles) Museum</a>
        </div>
    </div> 
</section>
@endsection