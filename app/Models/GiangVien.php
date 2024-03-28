<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    protected $table = 'giangvien';
    protected $fillable = ['magv', 'hotengv'];
    protected $keyType = 'string';
    public function getKeyName()
    {
        return 'magv';
    }
}
