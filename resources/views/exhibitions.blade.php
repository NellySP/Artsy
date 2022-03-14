@include('header')

<h2>Current exhibitions </h2>
@foreach ($exhibitions as $exhibition)
<div>
    <button><a href="singleExhibition/{{$exhibition->id}}"><img src="/images/{{ $exhibition->exhibition_image }}" alt="picture of art"></button>
    <h3>{{$exhibition->exhibition}}</h3>
</div>

@endforeach

<p>Click on each images to get to each exhibition.</p>


@include('footer')
