<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class simpleController extends Controller
{
    public function index(){
        $parts=DB::table('simple_parts')->get();
        
        return view("simple",compact('parts'));
    }
    public function question($q_id){

        $question=DB::table('simple_questions')->where('id',$q_id)->pluck('question');
        $answers=DB::table('answer_simple')->select('answer1','answer2','answer3','answer4')->where('q_id',$q_id)->get();
        
        return view('simple_questions',compact('question','answers','q_id'));
    }
    public function success(){
        return view('successSimple');
    }
    public function error($correct_answer){
        return view('errorSimple',compact('correct_answer'));
    }
}
