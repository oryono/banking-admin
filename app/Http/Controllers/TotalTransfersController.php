<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class TotalTransfersController extends Controller
{
    public function index()
    {
        $data = Entry::where(['description'=>'transfer', 'type' => 'credit'])->sum('amount');
        return response()->json(['data' => $data]);
    }
}
