<?php

namespace App\Http\Controllers;
use Filament\Pages\Auth\Login;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    public function index(){
        echo route('app\Filament\Pages\Auth\Login');
    }
}
