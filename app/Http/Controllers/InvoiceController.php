<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice; 
use App\Models\Product; 

class InvoiceController extends Controller
{
    public function create()
    { 
        $products = Product::all();
        return view('Invoice.create', compact('products'));
    }
    /* public function index(){

    } */
    public function store(Request $request)
    {
        $this->validate($request,[
            'invoice_num'=>'required',
            'payment_method'=>'required',
            'customer_email'=>'required',
            'date'=>'required'
        ]);
        // dd(123);
    }
   
}
