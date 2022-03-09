@include('header')

<h2>Look at all those exhibitions!</h2>

<img src="" alt="representative image">
<p>list of all exhibitions that leads to a single exhibition page?</p>

<?php

use Illuminate\Support\Facades\DB;

$photos = DB::select('select * from photos'); ?>

<ul>

    @foreach ($photos as $photo)
    <li>{{$photo->title}}<img src="./images/<?= $photo->filename ?>" alt=""></button> </li>
    @endforeach
</ul>

@include('footer')