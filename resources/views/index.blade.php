@include('header')

@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<h2>Sign up to view and collect your art</h2>
<h3>hejhej</h3>

<p>Already a member? Log in here!</p>

<form method="post" action="/login">
    @csrf
    <div>
        <label for="email">Email</label><br>
        <input name="email" id="email" type="email" />
    </div>
    <br>
    <br>
    <div>
        <label for="password"> Password</label><br>
        <input name="password" id="password" type="password" />
    </div>

    <button type="submit">Login</button>
</form>

@include('footer')
