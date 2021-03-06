@extends('layouts.app')


{{-- <x-picture-list :pictures="$pictures" /> --}}
@section('content')

<div class="container" >

    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Image Upload Table') }}</div>
                {{-- {{ $image->title }} --}}

                <div class="card-body">
                    <label>Image Title</label>
                    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="text" name="title" class="form-control" id="title" >


                        <input type="file" name="file" onchange="loadFile(event)"/>
                        <button type="submit" class="btn btn-success" id="button1" onclick="button1_click();">Upload to Atelier</button>
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
        alert('이미지 첨부 완료!')
        var resize_width = 240;
        var resize_height = 240;

        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
    function button1_click() {

        Swal.fire(
            '사진 업로드 완료!',
            '메인 페이지에서 업로드 된 이미지를 확인하세요',
            'success'
            )
    }


</script>

<style>
    #output {
        text-align: center;
    }
</style>

