@include('header')

<h2>{{$exhibition->exhibition}}</h2>

@foreach ($images as $image)
<div>
    <button><img src="/images/{{$image -> image}}" alt="picture of art"></button>
    <h3>{{$image -> title}}</h3>
</div>

@endforeach

@include('footer')