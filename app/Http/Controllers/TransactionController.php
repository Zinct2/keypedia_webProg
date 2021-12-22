<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->paginate(5);
        return view('transaction-history', compact('transactions'));
    }

    public function detail($id)
    {
        $transactions = Transaction::where('id', $id)->first();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        return view('transaction-detail', compact('transactions', 'details'));
    }
}
