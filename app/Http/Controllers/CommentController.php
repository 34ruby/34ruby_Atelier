<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Picture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function index() {
        $comments = Comment::latest()->paginate(3);

        return view('dd.show', ['comments'=>$comments]);
    }


    public function store(){
        $validator = Validator::make(request()->all(), [
            'parent_id' => 'required',
            'comment_content' => 'required|max:255'
        ]);
        if($validator->fails()){
            return redirect()->back();
        } else{
            Comment::create([
                'parent_id' => request() -> parent_id,
                'user_id' => auth() -> id(),
                'user_name' => Auth::user()->name,
                'comment_content' => request() -> comment_content,
                // 'picture_id' => request()->parent_id
            ]);
            return redirect()->back();
        }
    }
    public function destroy(Request $request, $id){
        Comment::find($id)->delete();
        return redirect()->route('dd.show');
    }
}
