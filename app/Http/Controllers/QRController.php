<?php

namespace App\Http\Controllers;

use App\Models\DiemDanh;
use Illuminate\Http\Request;
use App\Models\MonHoc;
use App\Models\SinhVien;

class QRController extends Controller
{
    public function index()
    {
        $mh = MonHoc::select('mamh', 'tenmh', 'sotc')->get();
        $ketquadd = DiemDanh::all();
        foreach ($ketquadd as $dd) {
            $sinhvien = SinhVien::find($dd->mssv);
            $dd->hoten = $sinhvien ? $sinhvien->hoten : '???';
        }
        return view('scan.scan', compact('mh'), ['ketquadd' => $ketquadd]);
    }

    public function layMSSV(string $sv)
    {
        $mssv = substr($sv, 0, 10);
        return $mssv;
    }

    public function dd(Request $request)
    {
        $mssv = substr($request->mssv, 0, 10);
        $data = DiemDanh::where([
            'mssv' => $mssv,
            'monhoc' => $request->cbbmonhoc,
            'ngay' => date('Y-m-d'),
            'trangthai' => $request->cbbstatus,

        ])->first();

        if ($data) {
            return redirect()->route('diemdanh')->with('thatbai', 'Đã điểm danh rồi');
        }


        DiemDanh::create([
            'mssv' => $mssv,
            'monhoc' => $request->input('cbbmonhoc'),
            'ngay' => date('Y-m-d'),
            'trangthai' => $request->cbbstatus,
        ]);
        $cbbmh = $request->input('monhoc');
        $cbbtrangthai = $request->status;

        return redirect()->route('diemdanh')->with(['thanhcong', 'Điểm danh thành công'], ['cbbmh' => $cbbmh], ['cbbtrangthai' => $cbbtrangthai]);
    }

    public function kqDiemDanh()
    {
        $diemdanh = DiemDanh::all();
        foreach ($diemdanh as $dd) {
            $sinhvien = SinhVien::find($dd->mssv);
            $dd->hoten = $sinhvien ? $sinhvien->hoten : '???';
        }

        return view('scan.kqdiemdanh', ['diemdanh' => $diemdanh]);
    }

    public function kqDiemDanhSV($mssv)
    {
        $diemdanh = DiemDanh::where('mssv', $mssv)->get();
        foreach ($diemdanh as $dd) {
            $sinhvien = SinhVien::find($dd->mssv);
            $dd->hoten = $sinhvien ? $sinhvien->hoten : '???';
        }
        return view('font-end-SV.kqdiemdanhSV', ['diemdanh' => $diemdanh]);
    }

    public function xoaDD($id)
    {
        $diemdanh = DiemDanh::find($id);
        $diemdanh->delete();

        return redirect()->route('kqdiemdanh');
    }
}
