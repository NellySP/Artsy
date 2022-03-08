@include('header')

@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<h1>Welcome to Artsy</h1>

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

<h2>Registration</h2>

<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Username" required><br>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Email Adress" required><br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="submit" name="submit" value="Register" class="login-button">
</form>

@include('footer')