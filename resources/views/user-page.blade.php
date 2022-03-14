@include('header')

<h2>My favorites</h2>

<p>on this page you'll see a selection of pieces that you've marked with a like ♡</p>

<ul>

    @foreach($user->like as $like)
    <img src="/images/{{$like -> image}}" alt="picture of art">
    @endforeach
</ul>

@include('footer')