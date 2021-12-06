@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('이미지 업로드') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" onchange="loadFile(event)"/>
                        <button type="submit" class="btn btn-danger">이미지 업로드</button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">제목</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('이미지 미리보기') }}</div>
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
        alert('ok')
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

