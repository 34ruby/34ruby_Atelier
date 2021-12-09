@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Image Preview') }}</div>

                <div class="card-body">
                    <div class="input-group mb-3">
                    <div class="input-group">
                        <img src="{{URL::asset('https://34rubybucket02.s3.ap-northeast-2.amazonaws.com/test1/b0iO9uoYOmSyOvOEq3xYr6FU6ffftjK5eGq7aiut.jpg')}}"  width="100%" class="watermark_text">
                    </div></div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card">
                <div class="card-header">{{ __('Image Infomation') }}</div>
                <div class="card-body">
                    <p>Title : fripside</p>
                    <p>Uploder : Ruby</p>
                    <p>Created : 2021-12-08</p>
                    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Download</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Comment') }}</div>
                <div class="card-body">
                    <p><b>Ruby</b> : hello &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></p>
                    <p> 2021-12-08</p>
                    <hr>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Comment</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js" ></script> --}}
</div>

<script>
// $(function(){
//  add text water mark;


 $('img.watermark_text').watermark({
  text: 'Atelier',
  textWidth: 300,
  textSize: 50,
  textColor: 'white',
 });
//  $.getJSON('url' + "?callback=?", data, callback);

//  add image water mark
//  $('img.watermark_img').watermark({
//   path: '/images/image03.jpg'
//  });
// // })

</script>

@endsection
