@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Image Upload Table') }}</div>
                <a href="https://34rubybucket02.s3.ap-northeast-2.amazonaws.com/test1/b0iO9uoYOmSyOvOEq3xYr6FU6ffftjK5eGq7aiut.jpg">d</a>
                {{-- {{ $image->title }} --}}
                <div class="card-body">
                    <div class="input-group mb-3">
                    <label>Image Title</label>
                    <div class="input-group">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div></div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" onchange="loadFile(event)"/>
                        <button type="submit" class="btn btn-success">Upload to Atelier</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Image Preview Table') }}</div>
                <div class="card-body">
                    <img id="output" width="100%"/>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection


<script>
    var loadFile = function(event) {
        alert('이미지 업로드 완료')
        var resize_width = 240;
        var resize_height = 240;

        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

<style>
    #output {
        text-align: center;
    }
</style>

