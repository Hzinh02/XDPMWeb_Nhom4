<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'monhoc';
    protected $fillable = ['mamh', 'tenmh', 'sotc'];
    protected $keyType = 'string';
    public function getKeyName()
    {
        return 'mamh';
    }
}
