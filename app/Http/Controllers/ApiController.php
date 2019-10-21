<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vocabs;
class ApiController extends Controller
{
    public function apidata(){
        $data = Vocabs::all();
        return response()->json($data);
    }
}
