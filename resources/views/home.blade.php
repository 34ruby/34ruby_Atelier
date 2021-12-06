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

                    {{ __('ようこそ、アトゥルリエへ。') }} <br>
                    {{ __('アトゥルリエはストックイメージサイトで、YJU学生がプログラミング、文書作業など様々な活動に役立つイメージを提供しています。') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
