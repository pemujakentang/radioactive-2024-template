<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mac extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['nama', 'usia', 'no_telp', 'email', 'nim', 'institusi', 'uname', 'link'];
}
