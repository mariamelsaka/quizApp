<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function addblogview(){

        return view('admin.add_quiz');
    }
    public function takequizview(){

        return view('take_quiz');
    }

    public function errorview2(){

        return view('error');
    }
    public function homeview3(){

        return view('home');
    }


    public function DoAddQuiz(Request $request){

        $question=DB::table('question')->insert([
            "questionName"=>$request->questionName,
            "answer"=>$request->answer	,
        ]);
        return redirect("admin/dashboard");
    }

    public function delete_question($id) {
        DB::delete('delete from blogs where id = ?',[$id]);

        echo "Record deleted successfully.<br/>";
        echo '<a href = "admin/editblogs">Click Here</a> to go back.';
    }

}
