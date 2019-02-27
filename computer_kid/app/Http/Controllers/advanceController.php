<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class advanceController extends Controller
{
    public function index(){
        $parts=DB::table('advance_parts')->get();
        return view("advance",compact('parts'));
    }
    public function question($q_id){

        $question=DB::table('advance_questions')->where('id',$q_id)->pluck('question');
        
        $answers=DB::table('answer_advance')->select('answer1','answer2','answer3','answer4')->where('q_id',$q_id)->get();
        
        return view('advance_questions',compact('question','answers','q_id'));
    }
    public function success(){
        return view('successAdvance');
    }
    public function error($correct_answer){
        return view('errorAdvance',compact('correct_answer'));
    }
}
