<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Post;
use Auth;
use App\Support;

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
     public function supportPost(Request $request){
       $sup=new Support();
       $sup->user_id=Auth::User()->id;
       $sup->subject=$request->subject;
       $sup->message=$request->message;
       $sup->reply="Thank you for submitting the query, our Support team will reply you in a short while.";
       $sup->save();

       return redirect()->back();
          }
    public function index()
    {
        $posts = Post::where('user_id',Auth::User()->id)->get();
        return view('pages.home')->withPosts($posts);
    }
    public function welcome()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('pages.welcome')->withPosts($posts);
    }
    public function dashboard()
    {
      $sup=Support::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();
        return view('pages.dashboard')->withSup($sup);
    }
    public function notifications()
    {
        return view('pages.notifications');
    }
    public function invite()
    {
        return view('emails.invite');
    }

}
