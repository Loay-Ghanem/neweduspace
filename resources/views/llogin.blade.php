<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Space Log In</title>
    <!-- You can include your CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header Section -->
    <header>

    </header>

    <!-- Main Content Section -->
    <section class="content">
        <div class="mid-section">
            <h1>Login Page</h1>
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="user_name">Name</label>
                <input id="user_name" name="user_name" type="text" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </div>
            <div>


                <button type="submit">Login</button>
            </div>
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Edu Space. All rights reserved.</p>
    </footer>
</body>
</html>
