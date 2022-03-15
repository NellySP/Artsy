@include('header')

<h2>My favorites</h2>

<p>on this page you'll see a selection of pieces that you've marked as liked </p>

<div>
    <ul>
        @foreach($user->like as $like)
        <img src="/images/{{$like -> image}}" alt="picture of art">
        <p>{{$like->image_name}}</p>
        @endforeach
    </ul>
</div>

@include('footer')