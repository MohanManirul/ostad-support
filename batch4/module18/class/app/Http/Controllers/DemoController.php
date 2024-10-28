<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class DemoController extends Controller
{

    // Pagination
    function demo()
    {
        // $result=DB::table('categories')->simplePaginate();
       $perPage=3;
       $pageName='item';
       $column=['id','name']; // * all column
       $result=DB::table('categories')->paginate($perPage,$column,$pageName);
       return $result;
    }



    function  demo1()
    {

        // Simply use on same table

        /*
        $qry1=DB::table('products')->where('price','>','500');
        $qry2=DB::table('products')->where('price','<','300')
            ->union($qry1)->get();
        return $qry2;
        */

        // use on multipule
        // $qry1=DB::table('products')->get();
        // $qry2=DB::table('categories')->get();
        // return ['qry1'=>$qry1,'qry2'=>$qry2];
    }



    function demo2()
    {

        /*
         * $result=DB::table('products')
            ->orderBy('price','asc')
            ->get();
        return $result;

        $result=DB::table('products')
           ->inRandomOrder()->get();
         */

    //     $result=DB::table('products')
    //         ->latest()->first();
    //    return $result;

    }




    function demo3()
    {
    //     $result=DB::table('products')
    //         ->groupBy('price')
    //         -> having('price','>','300')
    //         ->get();
    //    return $result;
    }

    function demo4()
    {
        // $result=DB::table('products');
    }


}
