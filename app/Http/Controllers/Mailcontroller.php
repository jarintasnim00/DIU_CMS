<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
class Mailcontroller extends Controller
{
    public function home(){
    	return view ("mail.Home");
    }

    public function sendemail(Request $get){
    	$this-> validate($get,[
            'subject' => 'required',
            'email' => 'required',
            'message' =>'required'

        ]);
        
         $subject= $get->subject;
         $email = $get->email;
         $message= $get->message;

         Mail::to($email)->send(new SendEmail( $subject,$message));

       
    }
}
