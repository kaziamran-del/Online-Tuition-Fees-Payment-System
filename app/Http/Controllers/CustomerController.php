<?php
// Our Controller 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;// This is important to add here. 
use PDF;
use App\Temporary;
  
class CustomerController extends Controller
{
    public function printPDF()
    {
        $cards = Temporary::orderBy('id', 'DESC')->first();              
        $pdf = PDF::loadView('checkout.after-pay',compact('cards'));  
        return $pdf->download('checkout.pdf');
    }
}