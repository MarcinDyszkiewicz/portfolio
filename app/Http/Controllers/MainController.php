<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class MainController extends Controller
{
    public function index() {

        return view('index');
}

    public function portfolio() {

        return view('portfolio');
    }

    public function about() {

        return view('about');
    }


    public function contact() {

        return view('contact');
    }


    public function contactPost($request) {

        $this->validate($request, [
            'name' => 'min 2',
            'email' => 'required|email',
            'subject' => 'min 3',
            'message' => 'min 10'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contactMessage', $data, function ($message) use($data){
            $message->from($data['email']);
            $message->to('marcin.dyszkiewicz@gmail.com');
            $message->subject($data['subject']);
        });

        return view('contact');
    }

}