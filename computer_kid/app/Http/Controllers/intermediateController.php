<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class intermediateController extends Controller
{
    public function index(){
        $parts=DB::table('intermediate_parts')->get();
        
        return view("intermediate",compact('parts'));
    }
    public function question($q_id){

        $question=DB::table('intermediate_questions')->where('id',$q_id)->pluck('question');
        $answers=DB::table('answer_intermediate')->select('answer1','answer2','answer3','answer4')->where('q_id',$q_id)->get();
        
        return view('intermediate_questions',compact('question','answers','q_id'));
    }
    public function success(){
        return view('successIntermediate');
    }
    public function error($correct_answer){
        return view('errorIntermediate',compact('correct_answer'));
    }
}
