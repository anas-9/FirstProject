<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index()
    {
        $id=1;
     // $post=DB::select('select * from posts');
     /*
        $post=DB::table('posts')
         ->where('id',$id)
         ->get();
*/
       /* $post=DB::table('posts')
            ->insert(['title'=>'New Post','body'=>'The first line of Lorem Ipsum']);
       */

        $post=DB::table('posts')
            ->where('id',$id)
            ->update(['title'=>'New title','body'=>'New body']);
       dd($post);
    }
    function add(Request $request)
    {
        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        $result= $post->save();
        if($result)
        {
            return ['Result'=>'Your data has been saved'];
        }
        else {
            return ['Result'=>'Something went wrong'];


        }
    }
    function update(Request $request)
    {
        $post=Post::where('id',$request->id)
            ->update([
                'title'=>$request->title,
                'body'=>$request->body
            ]);
        if($post)
        {
            return ['Result'=>'Your data has been edited'];
        }
        else {
            return ['Result'=>'Something went wrong'];


        }
    }

    function search(Request $request,$title)
    {
      return  $post=Post::where('title',$title)->get();


    }

}
