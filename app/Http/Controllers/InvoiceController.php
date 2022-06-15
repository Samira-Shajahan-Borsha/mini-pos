<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice; 
use App\Models\Product; 
use App\Models\SoldItem;


class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('Invoice.index',compact('invoices'));
    }
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
        // dd($request->all());
        $invoice = new Invoice();
        $invoice->invoice_number = $request->invoice_num;
        $invoice->payment_method = $request->payment_method;
        $invoice->date = $request->date;
        $invoice->customer_mail = $request->customer_email;
        $invoice->total = 0;

        $invoice->save();

        $cart = json_decode($request->cart,true);
        // dd($cart);
        $total = 0;
        foreach($cart as $item)
        {
            $soldItem = new SoldItem();
            $soldItem->invoice_id = $invoice->id;
            $soldItem->product_id = $item['productId'];
            $soldItem->quantity = $item['quantity'];
            $soldItem->selling_price = $item['sellingPrice'];
            $soldItem->save();

            $total += ($item['quantity'] * $item['sellingPrice']);
        }

        $invoice->total = $total;
        $invoice->save();
        return redirect()->route('invoice.create');
    }
    public function show($id)
    {
        $invoice = Invoice::find($id);
        return view('Invoice.show',compact('invoice'));
    }
    
    
}
