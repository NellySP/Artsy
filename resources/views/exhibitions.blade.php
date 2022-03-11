@include('header')

<h2>Look at all those exhibitions!</h2>

<p>list of all exhibitions that leads to a single exhibition page?</p>

@foreach ($exhibitions as $exhibition)
<div>
    <img src="/images/{{ $exhibition->exhibition_image }}" alt="picture of art">
    <p>{{$exhibition->exhibition}}</p>
</div>

@endforeach


@include('footer')