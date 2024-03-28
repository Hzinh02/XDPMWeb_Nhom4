<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonHoc;

class MonHocController extends Controller
{
    public function hienthi()
    {
        $monhoc = MonHoc::select('mamh', 'tenmh', 'sotc')->get();
        return view('font-end.monhoc', ['monhoc' => $monhoc]);
    }

    public function formthem()
    {
        return view('font-end.monhoc');
    }

    public function themMH(Request $request)
    {
        $mamh = $request->input('mamh');
        $tenmh = $request->input('tenmh');
        $sotc = $request->input('sotc');

        MonHoc::create([
            'mamh' => $mamh,
            'tenmh' => $tenmh,
            'sotc' => $sotc,

        ]);

        return redirect()->route('mh');
    }

    public function xoaMH($id)
    {
        $monhoc = MonHoc::find($id);
        $monhoc->delete();
        return redirect()->route('mh');
    }

    public function formSuaMH($id)
    {
        $monhoc = MonHoc::find($id);
        return view('font-end.suamonhoc', ['monhoc' => $monhoc]);
    }

    public function capnhatMH(Request $request, $id)
    {
        $monhoc = MonHoc::find($id);
        $monhoc->update([
            'mamh' => $request->input('mamh'),
            'tenmh' => $request->input('tenmh'),
            'sotc' => $request->input('sotc'),
        ]);
        return redirect()->route('mh');
    }
}
