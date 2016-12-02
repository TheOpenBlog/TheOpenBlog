<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use Auth;
use App\Flag;
use App\Count;

class PostController extends Controller
{
    public static  $flg=null;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request, array(
            'title'   => 'required|max:60',
            'body'    => 'required'
        ));
        //store in the database
        $count = new Count();
        $post = new Post;
        $post->user_id=Auth::user()->id;
        $post->title =$request->title;
        $post->body=$request->body;
        $post->save();
        $count->post_id=$post->id;
        $count->counter=0;
        $count->save();

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrfail($id);
        $flg=null;
        $query= ['user_id'=>Auth::User()->id,'post_id'=>$id];
        $flagged=Flag::where($query)->count();
        if($flagged){
            $flg=1;
        }
        return view('posts.view')->withPost($post)->withFlg($flg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function like($id)
    {
        $like = Post::find($id);
        if($like->liked()){
            $like->unlike();
        }else{
        $like->like();
    }
    $count = $like->likeCount;
        return redirect()->back();
    }

    public function flag($id)
    {
        $post = Post::findOrfail($id);
        $flagCount = Count::where('post_id',$id)->get()->first();
        $flg=null;
        $query= ['user_id'=>Auth::User()->id,'post_id'=>$id];
        $flagged=Flag::where($query)->count();
        if($flagged){
            $flg=1;
        }
        if(!$flg){
            $flagCount->counter+=1;
            $flagCount->update();
            $flag = new Flag();
            $flag->user_id=Auth::User()->id;
            $flag->post_id=$id;
            $flag->flags+=1;
            $flag->save();
        }
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
