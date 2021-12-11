@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div class='bigPictureWrapper'>
            <div class='bigPicture'>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Image Preview') }}</div>

                <div class="card-body" oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
                    <div class="input-group mb-3">
                    <div class="input-group">
                        <a href="{{URL::asset($picture->url)}}" "="" class="image-popup-no-margins watermark_text"><img src="{{URL::asset($picture->url)}}" width="100%"></a>
                        {{-- <img src="{{URL::asset($picture->url)}}" class="watermark_text"> --}}
                        {{-- <img src="{{URL::asset($picture->url)}}"  width="100%" class="watermark_text" id="imgControll" name="imgControll" onclick="fnImgPop(this.src)"> --}}
                    </div></div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card" >
                <div class="card-header">{{ __('Image Infomation') }}</div>
                <div class="card-body">
                    <p>Title : {{ $picture->title }}</p>
                    <p>Uploder : Ruby</p>
                    <p>Created : {{ $picture->created_at }}</p>
                    <hr>
                    <div style="display: flex;">
                    @if($picture->writer->name == Auth::user()->name)

                    <form method="post" action="{{ route('pictures.destroy', ['picture'=>$picture->id]) }}">
                        @csrf
                        @method('delete')
                        {{-- <input type="hidden" name="_method" value="delete"> --}}

                            <button class="btn btn-outline-secondary mr-4 " type="submit">
                                Delete
                                </button>



                    </form>

                    <a href="{{ url('/upload') }}" class="btn btn-outline-secondary">
                        Edit</a>

                    </div>
                    @endif

                    {{-- <a href="#">{{URL::asset($picture->url)}}</a> --}}
                </div>

            </div>
            <div class="card">
                <div class="card-header">{{ __('Comment') }}</div>
                <div class="card-body">
                    <form method="post" action="{{route('comment.add')}}">
                        @csrf
                        <input type="hidden" name="parent_id" value="{{$picture->id}}">
                        <textarea name="comment_content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="255자 이내로 작성!" ></textarea><br>
                        <button class="btn btn-outline-secondary" type="submit">Comment</button>
                        {{-- <input type="submit" value="작성" class="mt-4 px-4 py-1 bg-gray-500 hover:bg-gray-700 text-gray-200"> --}}
                    {{-- <p><b>Ruby</b> : hello &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></p>
                    <p> 2021-12-08</p>
                    <hr> --}}
                    {{-- <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Comment</button>
                      </div> --}}
                      @foreach($comment as $item)
                      <hr>
                      <div class="mt-4 w-full border-b border-gray-500">
                          <p class="font-bold mb-2 ml-2">{{$item->user_name}} : {{$item->comment_content}}</p>
                          <p class="font-bold mb-2 ml-2">{{ $item->created_at }}
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg> --}}
                        </p>

                          <div class="mb-2">

                          </div>
                      </div>

                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js" ></script> --}}
</div>

<script>
// $(function(){
//  add text water mark;
$('.image-popup-no-margins').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
          verticalFit: true
      },
      zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
      }
  });

// $(document).ready(function (e){

// 		$(document).on("click","img",function(){
// 			var path = $(this).attr('src')
// 			showImage(path);
// 		});//end click event

// 		function showImage(fileCallPath){

// 		    $(".bigPictureWrapper").css("display","flex").show();

// 		    $(".bigPicture")
// 		    .html("<img src='"+fileCallPath+"' >")
// 		    .animate({width:'100%', height: '100%'}, 1000);

// 		  }//end fileCallPath

// 		$(".bigPictureWrapper").on("click", function(e){
// 		    $(".bigPicture").animate({width:'0%', height: '0%'}, 1000);
// 		    setTimeout(function(){
// 		      $('.bigPictureWrapper').hide();
// 		    }, 1000);
// 		  });//end bigWrapperClick event
// 	});

//  $('img.watermark_text').watermark({
//   text: 'Atelier',
//   textWidth: 300,
//   textSize: 50,
//   textColor: 'white',
//  });
//  $.getJSON('url' + "?callback=?", data, callback);

//  add image water mark
//  $('img.watermark_img').watermark({
//   path: '/images/image03.jpg'
//  });
// // })

</script>

@endsection
