<nav>
    <div>
        <ul>
            <li><a href="dashboard">Home</a></li>
            @if (Auth::guest())
            <!-- Hide when logged in -->
            <li><a href="signup">Signup</a></li>
            @endif
            <!-- hide when not logged in -->
            @if (Auth::user())
            <li><a href="exhibitions">Exhibitions</a></li>
            <li><a href="user-page">My page</a></li>
            <!-- show only to admin -->
            <li><a href="admin">Admin</a></li>
            @endif
        </ul>
    </div>
</nav>