@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <div>
                    {{ __('Dashboard') }}
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="max-width:908px;margin:auto;padding:0 10px 10px">
                        <div id="demo1" class="flex-images">
                        <div class="item"  data-w="200" data-h="180" ><img src="{{URL::asset('/images/image01.png')}}"></div>
                        <div class="item"  data-w="200" data-h="180" ><img src="{{URL::asset('/images/image02.jpg')}}"></div>
                        <div class="item" data-w="200" data-h="180" ><img src="{{URL::asset('/images/image03.jpg')}}"></div>
                        <div class="item"  data-w="200" data-h="180" ><img src="{{URL::asset('/images/image04.jpg')}}"></div>
                        <div class="item" data-w="200" data-h="180" ><img src="{{URL::asset('/images/image03.jpg')}}"></div>
                        <div class="item" data-w="200" data-h="180" ><img src="{{URL::asset('/images/image02.jpg')}}"></div>
                        <div class="item" data-w="200" data-h="180" ><img src="{{URL::asset('/images/image02.jpg')}}"></div>
                        <div class="item"  data-w="200" data-h="180" ><img src="{{URL::asset('/images/image01.png')}}"></div>
                        <div class="item" data-w="200" data-h="180" ><img src="{{URL::asset('/images/image02.jpg')}}"></div>
                        <div class="item" data-w="200" data-h="180" ><img src="{{URL::asset('/images/image02.jpg')}}"></div>
                        {{-- @foreach($uploads as $upload)
                        <div id="demo1" class="flex-images">
                            <div class="item"  data-w="180" data-h="180" ><img src="{{URL::asset( $uploads->url )}}"></div>
                        </div>
                      @endforeach --}}
                      <tr>
                        {{-- <td><a href="{{ route('posts.show', ['post'=>$post->id]) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->writer->name }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>{{ $post->likes->count() }}</td> --}}
                      </tr>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#demo1').flexImages({rowHeight: 200});

</script>

@endsection


