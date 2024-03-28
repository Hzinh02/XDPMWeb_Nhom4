<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien;

class SvController extends Controller
{
    public function hienthi()
    {
        $sinhvien = SinhVien::select('mssv', 'hoten', 'lop')->get();

        return view('font-end.sinhvien', ['sinhvien' => $sinhvien]);
    }

    public function formthem()
    {
        return view('font-end.sinhvien');
    }

    public function themSV(Request $request)
    {
        $mssv = $request->input('mssv');
        $tensv = $request->input('tensv');
        $lop = $request->input('lop');

        SinhVien::create([
            'mssv' => $mssv,
            'hoten' => $tensv,
            'lop' => $lop,

        ]);

        return redirect()->route('sv');
    }

    public function xoaSV($id)
    {
        $sinhvien = SinhVien::find($id);
        $sinhvien->delete();
        return redirect()->route('sv');
    }

    public function formSuaSV($id)
    {
        $sinhvien = SinhVien::find($id);
        return view('font-end.suasinhvien', ['sinhvien' => $sinhvien]);
    }

    public function capnhatSV(Request $request, $id)
    {
        $sinhvien = SinhVien::find($id);
        $sinhvien->update([
            'mssv' => $request->input('mssv'),
            'hoten' => $request->input('hoten'),
            'lop' => $request->input('lop'),
        ]);
        return redirect()->route('sv');
    }
}
