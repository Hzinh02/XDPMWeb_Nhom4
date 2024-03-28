<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinhvien';
    protected $fillable = ['mssv', 'hoten', 'lop'];
    protected $keyType = 'string';
    public function getKeyName()
    {
        return 'mssv';
    }
}
