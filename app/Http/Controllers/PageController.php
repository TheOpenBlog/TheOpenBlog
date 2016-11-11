<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use Auth;
use Input;
use App\User;
use DB;

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
     public function search()
     {
         
        $query = Input::get('query');
        if($query){
        $users = DB::table('users')
         ->where('name', 'LIKE','%'.$query.'%' )
         ->orWhere('email', 'LIKE','%'.$query.'%' )->get();
        return view('pages.search')->withUsers($users)->withQuery($query); 
        }   
        else{
            $users=null;
            $query=null;
            return view('pages.search')->withUsers($users)->withQuery($query);
        }
     }
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
