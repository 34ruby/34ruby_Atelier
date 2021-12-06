
<div>


@foreach ($posts as $post)

<div class="my-2">

    <p> {{ $post->user_id }} <p>
    <p> {{ $post->title }} <p>
    <p> {{ $post->image }} <p>

</div>

@endforeach

<div>
