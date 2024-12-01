<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

class DemoController extends Controller
{
        function demo1(Request $request){

                $myFile=$request->file('photo');
                $myFile->move(public_path('upload'),$myFile->getClientOriginalName());
                return "Success";

                $myFile=$request->file('photo');
                $myFile->getClientOriginalName()
        
         
           // return "Hello";
           //return 100;
           //return null;
          //return true;
         // return ['A','B','C'];
        // return array(["name"=>"Rabbil","city"=>"Dhaka","country"=>"Bangladesh"]);
        // return response()->json(["name"=>"Rabbil","city"=>"Dhaka","country"=>"Bangladesh"])  ;
        //return response()->json(["name"=>"Rabbil","city"=>"Dhaka","country"=>"Bangladesh"],203)  ;
         // return redirect("/");
        // return response()->file("img.png");

        // return response()->download("img.png");

          //  return view('demo');
        }






        function demo2(Request $request){

            /*
            $qry=$request->query();
            return $qry;
           */

            /*
            $name=$request->name;
            $city=$request->city;
            return $name;
            */
        }


        function demo3(Request $request){
                $JSONBody=$request->input();
                return $JSONBody;
        }



    function demo4(Request $request){
            $HEAD=$request->header();
            return $HEAD;
    }



    function demo5(Request $request){
        $Key1=$request->input('Key1');
        $Key2=$request->input('Key2');
        return $Key2;
    }


    function demo6(Request $request){

         $myFile=$request->file('myFile');
         $myFile->move(public_path('upload'),$myFile->getClientOriginalName());
         return "Success";

    }

    function demo7(Request $request){
            return $request->ip();
    }


}
