@include('header')

@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<h1>Welcome to Artsy</h1>

<p>Already a member? Log in here!</p>

<form method="post" action="/login">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <button type="submit">Login</button>
</form>

<!-- If we gon have it, we can have it here -->

<h2>Registration</h2>
<p>Register here and join our world of exclusive art</p>

<form action="" method="post">
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username" required><br>
    <label for="email">Email</label>
    <input type="text" name="email" required><br>
    <label for="password">Password</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Register" class="login-button">
</form>

@include('footer')