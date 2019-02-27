@extends('main.app')
    @section('headSection')
    <link href="{{ asset('css/tick.css') }}" rel="stylesheet">
    @endsection
@section('content')
<script>
    var audio = new Audio("https://www.soundjay.com/button/sounds/button-2.mp3");
    audio.play();
                
</script>
<div>
<br><br><br><br><br>
</div>
<div class="check_mark">
  <div class="sa-icon sa-success animate">
    <span class="sa-line sa-tip animateSuccessTip"></span>
    <span class="sa-line sa-long animateSuccessLong"></span>
    <div class="sa-placeholder"></div>
    <div class="sa-fix"></div>
  </div>
</div>
<br><br>
<center>
 <font color="#1BA41B"> <h1>නිවැරදියි</h1></font>
</center>
<a href='{{ URL::previous() }}' class="btn btn1 btn-info">පෙර</a>
<a href='{{route('intermediate')}}' class="btn btn2 btn-info" >මීළග</a>
<br><br><br><br><br>
@endsection