<?php


namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransaction(){
        $data = Transaction::all();
        $no = 1;

        return view('admin.transaction', ['datas' => $data, 'no' => $no]);
    }
    public function store(Request $request) {
        $data = [
            'user_id' => auth()->id(),
            'barang_id' => $request->price,
            'date' => $request->price
        ];

        Transaction::create($data);

        return redirect()->route('home')->with('status', 'success');
    }
}
