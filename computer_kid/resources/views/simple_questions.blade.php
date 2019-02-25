@extends('main.app')
    @section('headSection')
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <br><br><br><br><br><br><br><br><br>
            <div class="col-md-4"></div><div class="col-md-4">
                <h1>{{$question[0]}}</h1>
            </div>
        </div>
           
        <div class="row">
            <ul><?php
            foreach($answers[0] as $answer){?>
                <li><h3>{{$answer}}</h3></li>
            <?php
            }
            ?>
            </ul>
        <br><br><br><br><br><br><br><br><br><br></div>
    </div>
@endsection