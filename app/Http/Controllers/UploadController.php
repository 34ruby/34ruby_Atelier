<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Post;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::all();
        // dd($posts);
        // return view('ee.create', ['pictures'=>$pictures]);
        return view('upload', ['pictures'=>$pictures]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('file')->store(
            '34ruby_images', 's3'
        );


        Storage::disk('s3')->setVisibility($path, 'public');

        $image = Picture::create([
            'filename' => basename($path),
            'url' => Storage::disk('s3')->url($path),
            'title'=> $request->title,
            'user_id' => Auth::user()->id,
        ]);
        // Picture::find($id);
        return redirect('/pictures');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $image)
    {
        // return $image;
        return $image->url;
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
    public function destroy($id)
    {
        //
    }

    public function download($file)
    {
        $file = base64_decode($file);
        $name = basename($file);
        Storage::disk('s3')->download($file, $name);
        return back()->withSuccess('File downloaded successfully');
    }

}
