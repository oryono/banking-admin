<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class TotalDepositsController extends Controller
{
    public function index()
    {
        $data = Entry::where(['description'=>'Deposit', 'type' => 'credit'])->sum('amount');
        return response()->json(['data' => $data]);
    }
}
