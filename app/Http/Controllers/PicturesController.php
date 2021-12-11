<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::latest()->paginate(16);
        // $comment = Comment
        // dd($pictures);

        return view('dd.index', ['pictures'=>$pictures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title'=>'required', 'url'=>'required']);
        $input = array_merge($request->all(), ["user_id"=>Auth::user()->id]);
        Picture::create($input);
        return redirect()->route('picture.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $picture = Picture::find($id);
        $comment = Comment::where('parent_id', $id)->get();

        // $parent_id = $picture -> id;
        // $comment = DB::table('comments')->where('parent_id', '=', $parent_id)->get();
        return view('dd.show', ['picture'=>$picture, 'comment'=>$comment]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy(Request $request, $id)
    {
        Picture::find($id)->delete();
        return redirect()->route('pictures.index');
    }
}
