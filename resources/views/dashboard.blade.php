@include('header')

<h1>Välkommen {{$user->name}}! </h1>

<p>Hello {{$user->name}}!</p>
<p>Do you want to <button href="logout">logout?</button></p>

<p>view your page</p>
<button> <a href="user-page">HERE</a></button>

@include('footer')
