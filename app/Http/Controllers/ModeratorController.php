<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Count;
use App\Post;
use Redirect;

class ModeratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $posts = Count::where('counter','>','0')->get();
        if(Auth::User()->role > 0){
            return view('moderator.index')->withPosts($posts);
        }
        else {
            return view('errors.404');
        }
    }
    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return Redirect::action('ModeratorController@index');
    }
}
