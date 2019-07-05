@extends('main.app')
@section('headSection')

        <link href="{{ asset('css/piyumika.css') }}" rel="stylesheet">
        <script type="text/javascript" src="/js/piyumika.js"></script>
@endsection
@section('content')
<div class="container">
    <center><img src="{{url('main\images\image2.jpg')}}" style="width:50%" alt="Image"/></center>
</div>
@foreach($parts as $part)
<div class="details-description"  style="background:#6495ED;">
    <button class="accordion">{{$part->name}}</button>
    <div class="panel">
        <div class="col-md-6">
        <p>{{$part->description}}</p>
            <?php
                $numberOfQuestions=DB::table('intermediate_questions')->where('part_id',$part->id)->count();
                $questions=DB::table('intermediate_questions')->where('part_id',$part->id)->get();
                $question=DB::table('intermediate_questions')->where('part_id',$part->id)->pluck('id');
                
                $i=0;
                foreach($questions as $q){
                    $i++?>
                <br>
                    <a href='{{ route('questionIntermediate',[$q->id])}}' role="button" class="btn btn-info btn-block">Question {{$i}}</a><?php
                }
            ?>
            <br>
        </div>
        <div class="col-md-6">
            <div class="thumbnail"> 
                <img src="main/images/intermediate/{{$part->id}}.jpg" alt={{$part->name}} />
            </div>
        </div>
    </div>
</div>
    
@endforeach  
<script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            } 
        });
        }
    </script>    
@endsection
