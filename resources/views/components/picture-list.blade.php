
        @extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <div>
                                <center>{{ __('34ruby Image Stock Atelier') }}</center>

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

                                    <div style="max-width:908px;margin:auto;padding:0 10px 10px">
                                        <div id="demo1" class="flex-images">
                                            @foreach ($pictures as $picture)
                                            <div class="item" data-w="250" data-h="250" >
                                                <a href="{{ route('pictures.show', ['picture'=>$picture->id]) }}">
                                                    <img src="{{URL::asset($picture->url)}}">
                                                </a>
                                            </div>

                                            @endforeach

                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{ $pictures->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#demo1').flexImages({rowHeight: 200});

        </script>

        @endsection







