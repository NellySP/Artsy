@include('header')

<h2>My favorites</h2>

<p>on this page you'll see a selection of pieces that you've marked with a like ♡</p>

<ul>

    @foreach($user->like as $like)
    <img src="/images/{{$images -> image}}" alt="picture of art">
    <li>
        {{ $like->image_id}}
    </li><br>
    @endforeach
</ul>

@include('footer')