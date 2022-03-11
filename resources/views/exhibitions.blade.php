@include('header')

<h2>Look at all those exhibitions!</h2>

<p>list of all exhibitions that leads to a single exhibition page?</p>

@foreach ($exhibitions as $exhibition)
<div>
    <button><a href="singleExhibition/{{$exhibition->id}}"><img src="/images/{{ $exhibition->exhibition_image }}" alt="picture of art"></button>
    <h3>{{$exhibition->exhibition}}</h3>
</div>

@endforeach


@include('footer')