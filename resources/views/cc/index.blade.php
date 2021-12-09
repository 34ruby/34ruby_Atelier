@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div>
                    {{ __('Admin Table') }}
                    </div>
                </div>

                <div class="card-body">
                    <x-post-list :posts="$uploads" />
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
