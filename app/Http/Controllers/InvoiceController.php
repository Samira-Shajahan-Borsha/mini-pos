<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function create(Request $req)
    {
        return view('Invoice.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'invoice_num'=>'required',
            'payment_method'=>'required',
            'customer_email'=>'required',
            'date'=>'required'
        ]);
        dd(123);
    }
}
