<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduSpace Login</title>
<link rel="stylesheet" href="login.css"><!-- Linking the CSS file -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="wrapper">
        <form action="" class="form-box login">
            <h1>Login</h1> <!-- Main heading for the login form -->
            <p class="f">Welcome back! Please log in to your account.</p>
            
            <div class="input-box">
                <input type="text" class="input-box" placeholder="Username" required>
                <i class='bx bxs-user'></i><!-- Icon for username -->
            </div>
            <div class="input-box">
                <input type="password" class="input-box" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i><!-- Icon for password -->
            </div>
            <div class="remember-forget">
                <label><input type="checkbox"> Remember me</label><!-- Checkbox for remember me -->
                <a href="#">Forgot Password?</a><!-- Forgot password link -->
            </div>
            <button type="submit" class="btn">Login</button><!-- Login button -->
            <div class="register-link">
                <p>Don't have an account? <a href="/signup" /*class="register-toggle"*/>Register</a> <!-- Register link --></p>
            </div>
        </form>
        
        