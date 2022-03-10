@include('header')

<h2>Look at all those exhibitions!</h2>

<p>list of all exhibitions that leads to a single exhibition page?</p>

@foreach ($images as $image)
<div>
    <img src="/images/{{ $image->image }}" alt="picture of art">
    <p>Artwork: {{$image->title}}</p>
    <p>Artist: {{$image->artist}}</p>
    <p>Exhibition: {{$image->exhibition}}</p>

</div>

@endforeach


@include('footer')