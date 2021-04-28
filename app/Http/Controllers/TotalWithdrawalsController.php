<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class TotalWithdrawalsController extends Controller
{
    public function index()
    {
        $data = Entry::where(['description'=>'Withdrawal', 'type' => 'debit'])->sum('amount');
        return response()->json(['data' => $data]);
    }
}
