<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiangVien;

class GvController extends Controller
{
    public function hienthi()
    {
        $giangvien = GiangVien::select('magv', 'hotengv')->get();
        return view('font-end.giangvien', ['giangvien' => $giangvien]);
    }

    public function formthem()
    {
        return view('font-end.giangvien');
    }

    public function themGV(Request $request)
    {
        $magv = $request->input('magv');
        $tengv = $request->input('hotengv');

        GiangVien::create([
            'magv' => $magv,
            'hotengv' => $tengv,

        ]);

        return redirect()->route('gv');
    }

    public function xoaGV($id)
    {
        $giangvien = GiangVien::find($id);
        $giangvien->delete();
        return redirect()->route('gv');
    }

    public function formSuaGV($id)
    {
        $giangvien = GiangVien::find($id);
        return view('font-end.suagiangvien', ['giangvien' => $giangvien]);
    }

    public function capnhatGV(Request $request, $id)
    {
        $giangvien = GiangVien::find($id);
        $giangvien->update([
            'magv' => $request->input('magv'),
            'hotengv' => $request->input('hotengv'),
        ]);
        return redirect()->route('gv');
    }
}
