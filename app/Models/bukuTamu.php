<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuTamu extends Model
{
    use HasFactory;
    protected $fillable = ['nama','keperluan','jenis_kelamin','no_hp'];
}
