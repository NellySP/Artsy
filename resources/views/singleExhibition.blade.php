@include('header')

<h2>{{$exhibition->exhibition}}</h2>

@foreach ($images as $image)
<div>
    <button><img src="/images/{{$image -> image}}" alt="picture of art"></button>
    <h3>{{$image -> title}}</h3>
    <h3>{{$image -> id}}</h3>

    <form method="post" action="/like">
        @csrf
        <input type="hidden" id="image_id" name="image_id" value="{{$image->id}}">
        <input type="hidden" id="like" name="like" value="1">

        <button type="submit">Like </button>
    </form>
</div>

@endforeach

@include('footer')
