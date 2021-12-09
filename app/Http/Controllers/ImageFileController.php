<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Image;

class ImageFileController extends Controller
{
    public function index()
    {
        return view('view');
    }

    public function imageFileUpload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:4096',
        ]);

        $image = $request->file('file');
        $input['file'] = time().'.'.$image->getClientOriginalExtension();
        $imgFile = Image::make($image->getRealPath());
        $imgFile->text('© 2016-2020 positronX.io - All Rights Reserved', 120, 100, function($font) {
            $font->size(35);
            $font->color('#ffffff');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(90);
        })->save(public_path('/uploads').'/'.$input['file']);

        return back()
            ->with('success','File successfully uploaded.')
            ->with('fileName',$input['file']);
    }
}
