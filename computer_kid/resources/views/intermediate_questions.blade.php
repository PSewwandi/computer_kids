@extends('main.app')
    @section('headSection')
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    @endsection
@section('content')
<script type='text/javascript'>

$(document).ready(function(){
    <?php 
        $a=DB::table('answer_intermediate')->where('q_id',$q_id)->pluck('correct');
    ?>
    var correct_answer= "<?php echo $a[0]; ?>";
        $("input[type='button']").click(function(){
        	var radioValue = $("input[name='answer']:checked").val();
            var x=radioValue==correct_answer;
            if(x){
                window.location='http://127.0.0.1:8000/successIntermediate';
            
            }else{
                window.location='http://127.0.0.1:8000/errorIntermediate/'+correct_answer;
            }
        });
    });
    function playSound() {
          var sound = document.getElementById("audio");
          sound.play();
      }
</script>
    <div class="container">
        <div class="row">
            <br><br><br><br><br><br>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3>{{$question[0]}}</h3>
                <br><br><br>
                <?php
                $i=0;
                foreach($answers[0] as $answer){
                    $i++; ?>
                  
                    <h3><input type="radio" value={{$i}} name="answer" id="a" > {{"(".$i."). ".$answer}}</h3>
                <?php
                }
                ?>
                <br><br><br><br><br><br>
                <input type="button" value="submit" class="btn btn-success">
                <div class="check_mark">
                    <div class="sa-icon sa-success animate">
                        <span class="sa-line sa-tip animateSuccessTip"></span>
                        <span class="sa-line sa-long animateSuccessLong"></span>
                        <div class="sa-placeholder"></div>
                        <div class="sa-fix"></div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>

@endsection