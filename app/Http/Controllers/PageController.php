<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    public function notifications()
    {
        return view('pages.notifications');
    }
    public function invite()
    {
        return view('emails.invite');
    }
    public function sendmail(Request $request)
    {
        $this->validate($request, array(
            'email'   => 'required|max:60',
        ));
            $data = array(
                'name' => "The Open Blog Mail",
            );

            Mail::send('emails.test', $data, function ($message) {

                $message->from('openblogquery@gmail.com', 'The Open Blog');

                $message->to('thepsnappz@gmail.com')->subject('TheOpenBlog|Invitation');

            });

            return "Your email has been sent successfully";

}

}
