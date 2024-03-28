<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DangNhapController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function formDangNhap()
    {
        return view('font-end.dangnhap');
    }

    public function formDangKy()
    {
        return view('font-end.dangky');
    }

    public function dangNhap(Request $request)
    {
        // $a = $request->email;
        // $b = $request->password;
        // dd($a, $b);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1])) {
            return redirect()->route('index');
        } else if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 0])) {
            return redirect()->route('indexSV');
        }
    }

    public function dangKy(Request $request)
    {
        $email = $request->email;
        $password = Hash::make($request->password);
        $usercode = $request->usercode;
        $name = $request->name;

        User::create([
            "email" => $email,
            "password" => $password,
            "usercode" => $usercode,
            "name" => $name,
        ]);
        session()->flash('succes', 'Đăng ký thành công');
        return redirect()->route('dangnhap');
    }

    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dangnhap');
    }

    public function trangSinhVien()
    {
        return view('font-end-SV.indexSV');
    }
}
