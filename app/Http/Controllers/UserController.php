<?php

namespace App\Http\Controllers;

use App\Mail\test_mail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(Request $request)
    {   
        $log = Log::build([
            'driver' => 'daily',
            'path' => storage_path('logs/test/laravel.log'),
        ]);
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $log->info('Success');
            return response()->json($user);
        } catch (\Exception $e) {
            $log->error('Fail');
            return response()->json($e, 500);
        }   
    }

    public function test() {
        Mail::to('phornvathanak18@gmail.com')->send(new test_mail());
        echo 'Success';
    }
}
