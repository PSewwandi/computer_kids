
@extends('main.app')
    @section('headSection')
        <link href="{{ asset('css/cross.css') }}" rel="stylesheet">
    @endsection
@section('content')
<script>
    var audio = new Audio("https://www.soundjay.com/button/sounds/beep-05.mp3");
    audio.play();
</script>
<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
  <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
  <path class="checkmark__check" fill="none" d="M16 16 36 36 M36 16 16 36" />
</svg>
<div>
<center>
 <font color="#ba1016"> <h1>වැරදි<br><br> <font color="#438616"> පිළිතුර {{$correct_answer}}</font></h1></font>
</center>
<br><br><br><br><br>
<a href='{{ URL::previous() }}' class="btn btn1 btn-info">පෙර</a>
<a href='{{route('intermediate')}}' class="btn btn2 btn-info" >මීළග</a>
</div>
@endsection