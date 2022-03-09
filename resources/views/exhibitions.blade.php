@include('header')

<h2>Look at all those exhibitions!</h2>


@foreach ($images as $image)
<div>
    <p>{{$image->title}}</p>
    <img src="{{ $image->image }}" alt="picture of art">
</div>

@endforeach

<p>list of all exhibitions that leads to a single exhibition page?</p>

<?php

use Illuminate\Support\Facades\DB;

$photos = DB::select('select * from photos'); ?>

<ul>

    @foreach ($photos as $photo)
    <li>{{$photo->title}}<br><img src="./images/<?= $photo->filename ?>" alt=""></button> </li>
    @endforeach
</ul>

@include('footer')