@include('header')

@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<h2>Registration</h2>
<p>Register here and join our variety of art collections</p>

<div class="signUp">
    <form action="signup" method="post">
        @csrf
        <label for="name">Username</label>
        <input type="text" name="name" placeholder="Write your name" required>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Write your email" required>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Choose your password" required>
        <input type="submit" name="submit" value="Register" class="login-button">
    </form>
</div>

@include('footer')
