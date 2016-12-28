<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// we will use Mail namespace
use Mail;

class MailController extends Controller
{
    // first, we create function for send Basics email
    public function basic_email(){
        $data=['name'=>'Harison matondang'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('gerbvl2015@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with Basics Email');
            $message->from('dambiidark@gmail.com','Nabila');
        });
        echo 'Basics Email was sent!';
    }

    	public function getContact() {
		return view('mail');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);

		Mail::send('contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('hello@devmarketer.io');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your Email was Sent!');

		return redirect('/');
	}

   
}