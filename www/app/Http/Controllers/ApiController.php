<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Response;


class ApiController extends Controller
{
    
    public function getQuestions()
    {
         $data = DB::table('question')->select('id','question','choice1','choice2','choice3','choice4','answer')->get();

        return Response::json(array('success'=>true,'data' => $data));
        
    }
    public function getQuests()
    {
        $data = DB::table('quest')->select('id','type','text','answer','other','title','icon','color','status')->get();

        return Response::json(array('success'=>true,'data' => $data));

    }

}
