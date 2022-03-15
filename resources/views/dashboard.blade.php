@include('header')

<h2>Welcome {{$user->name}}! </h2>

<p>Here is your personal homepage. In the menu above you can visit <br>
    our page exhibitions and your own personal favorites page. </p>

<div class="bye">
    <button><a href="/logout">Log out</a></button>
</div>




@include('footer')