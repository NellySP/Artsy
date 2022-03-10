@include('header')

@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<h2>Registration</h2>
<p>Register here and join our world of exclusive art</p>

<form action="signup" method="post">
    @csrf
    <label for="name">Username</label>
    <input type="text" name="name" required><br>
    <label for="email">Email</label>
    <input type="text" name="email" required><br>
    <label for="password">Password</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Register" class="login-button">
</form>

@include('footer')