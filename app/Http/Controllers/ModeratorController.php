<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Count;
use App\Post;
use Redirect;
use App\Support;

class ModeratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $posts = Count::where('counter','>','0')->get();
        $sup = Support::where('replied','0')->orderBy('id','desc')->get();
        if(Auth::User()->role > 0){
            return view('moderator.index')->withPosts($posts)->withSup($sup);
        }
        else {
            return view('errors.404');
        }
    }
    public function removeSup($id){
      $sup=Support::finfOrfail($id);
      $sup->delete();
      return redirect()->back();
    }
    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return Redirect::action('ModeratorController@index');
    }
    public function dismiss($id){
      $flag=Count::finfOrfail($id);
      $flag->counter = 0;
      $flag->update();
      return redirect()->back();
    }
    public function reply(Request $request,$id){
      $sup = Support::findOrfail($id);
      $sup->reply=$request->reply;
      $sup->replied=1;
      $sup->update();
      return redirect()->back();
    }
}
