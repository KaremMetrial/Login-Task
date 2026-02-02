<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);

        $today = Carbon::now();
        $day = $today->day;
        $month = $today->month;
        $secret = 10;

        $expectedPassword = ($day * $month) + $secret;

        if (Session::get('last_password') == $expectedPassword) {
            return back()->withErrors('Password already used');
        }

        if ($request->password == $expectedPassword) {
            Session::put('last_password', $expectedPassword);
            return "✅ Login Success";
        }

        return back()->withErrors('❌ Wrong Password');
    }
}
