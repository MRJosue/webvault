<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\mail\ContactForm; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 

class ContactFormController extends Controller
{
    protected $fillable = [

        'email',
        'name',
        'comment',
    ];

    
 public function index(){
    return view('contact-form');
 }


 public function store(Request $request){
    dd($request);
    //Mail::to('ingjosue.cardona@gmail.com')->seend(new ContactanosMailable)
 }

}
