<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    function MyInfo(Request $request)
    {
        // লগ ফাইলের পাথ নির্ধারণ করুন
        $logFilePath = storage_path('logs/laravel.log');

        // লগ ফাইলটি অস্তিত্ব আছে কিনা তা পরীক্ষা করুন
        if (!File::exists($logFilePath)) {
            return response()->json(['message' => 'Log file does not exist.'], 404);
        }

        // লগ ফাইলের কনটেন্ট পড়ুন
        $logs = File::get($logFilePath);

        // লগ ডাটা রেসপন্স হিসেবে ফেরত দিন
        return response()->json([
            'logs' => explode("\n", $logs) // লাইন অনুযায়ী বিভক্ত করুন
        ]);
    }

    function MyInfo1(Request $request)
    {
        $course=[
            'name'=>'PHP Laravel',
            'batch'=>'04',
            'learning'=>'Middleware'
        ];
        return $course;
    }

    function MyInfo2(Request $request)
    {
        $course=[
            'name'=>'PHP Laravel',
            'batch'=>'04',
            'learning'=>'Middleware'
        ];
        return $course;
    }
    function MyInfo3(Request $request)
    {
        $course=[
            'name'=>'PHP Laravel',
            'batch'=>'04',
            'learning'=>'Middleware'
        ];
        return $course;
    }
}
