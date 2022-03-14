@include('header')

<h2>My favorites</h2>

<p>on this page you'll see a selection of pieces that you've marked with a like ♡</p>

@foreach($images as $image)
<img src="/images/{{$image -> image}}" alt="picture of art">
<p>{{$image->image_id}}</p>

@endforeach

@include('footer')