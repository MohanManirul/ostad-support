<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Benchmark;

class TestController extends Controller
{
    function test1()
    {
         // Selecting All Rows
        //  $result= DB::table('brands')->get();



        // Selecting First Rows
        // $result= DB::table('brands')->first();




        // Selecting First by ID
    //    $result= DB::table('brands')->find(4);



        // Selecting First by ID
        // $result= DB::table('brands')->find(4);



        // Selecting Specific Column
        // $result= DB::table('brands')->pluck('brandName');



        // Row Count
        // $result= DB::table('products')->count();




        // max(),min(),avg(),sum()
    //    $result= DB::table('products')->sum('price');

    // If you want to get the second-highest price, you should order the products by price in descending order and then use skip(1) to skip the highest price and get the next one.

    //    $result = DB::table('products')
    //             ->select('price')
    //             ->orderBy('price', 'desc')
    //             ->skip(1)
    //             ->first();


    // If you want to get the two second-highest price, you should order the products by price in descending order and then use skip(1) to skip the highest price and get the next two using take(2).

    //    $result = DB::table('products')
    //             ->select('price')
    //             ->orderBy('price', 'desc')
    //             ->skip(1)
    //             ->take(2)
    //             ->get();



        // Select Specific Column from row
    //    $result= DB::table('products')->select('title','price')->get();




        // Select Unique
    //    $result= DB::table('products')->select('title')->distinct()->get();







        // জয়েন= ছেলের বাড়ি + মেয়ে + ছেলে
        // $result= DB::table('products')
        //     ->join('categories','products.category_id', '=','categories.id')
        //     ->join('brands','products.brand_id','=','brands.id')
        //     ->get();





        // জয়েন= ছেলের বাড়ি + মেয়ে + ছেলে
        // $result= DB::table('products')
        //     ->leftJoin('categories','products.category_id', '=','categories.id')
        //     ->leftJoin('brands','products.brand_id','=','brands.id')
        //     ->get();




        // জয়েন= ছেলের বাড়ি + মেয়ে + ছেলে
        // $result= DB::table('products')
        //     ->rightJoin('categories','products.category_id', '=','categories.id')
        //     ->rightJoin('brands','products.brand_id','=','brands.id')
        //     ->get();






        // Cross Join This is essentially the Cartesian product of sets {a,b,c}×{1,2,3}{a,b,c}×{1,2,3}.
        // $result= DB::table('products')
        //         ->crossJoin('brands')
        //         ->get();




        // Simple Pagination
        // $result= DB::table('products')->simplePaginate(3);




        // Custom Pagination
            // $perPage=5;
            //  $cloumns=["*"];
            // $pageName='items';
        // $result= DB::table('products')->paginate(
        //     $perPage=5,
        //     $columns=["*"],
        //     $pageName='items'
        // );





        // Pagination By Using skip & take methods --> This is very poor strategy
        // $result= DB::table('products')
        //     ->skip(4)
        //     ->take(2)
        //     ->get();







        // Latest & Oldest
        // $result9= DB::table('products')->oldest()->first();

        // using where condition
        //   $result= DB::table('products')
        //     ->join('categories',function(JoinClause $join){
        //         $join->on('products.category_id','=','categories.id')
        //         ->where('products.category_id','=',3);
        //     })->get();


        // The issue with your code is that count() returns an integer, not a query builder instance. Once you call count(), it terminates the query, so you can't chain get() after it. Additionally, you don't need get() when using count() because it already provides the count of grouped records.
        
        
        // $result = DB::table('products')
        //         ->select('price')
        //         ->groupBy('price')
        //         ->get()
        //         ->count();


      // Eloquent ORM vs Database Query Builder
      /*
      *In Laravel, Illuminate\Support\Benchmark is a class introduced in Laravel 10.x that helps developers measure the time taken by a block of code to execute. This is useful for performance testing and optimizing your application by identifying slow operations.
      */

        $result = Benchmark::dd([
                'Eloquent ORM' => fn () => Product::all(),
                'Database Query Builder' => fn () => DB::table('users')->get(),
            
            ]);
       
      
    
        return $result;
    }
}
