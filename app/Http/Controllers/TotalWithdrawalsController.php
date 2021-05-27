<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class TotalWithdrawalsController extends Controller
{
    public function index()
    {
        $data = Entry::where(['description'=>'Withdrawal', 'type' => 'debit'])->sum('amount');
        return response()->json(['data' => $data]);
    }
}
