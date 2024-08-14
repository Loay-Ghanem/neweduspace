<form action="" class="form-box register">
    <h1>Registration</h1> <!-- Main heading for the Registration form -->
    <p class="f">Join EduSpace by creating your account!</p>
    
    <div class="input-box">
        <input type="text" class="input-box" placeholder="Username" required>
        <i class='bx bxs-user'></i><!-- Icon for username -->
    </div>
    <div class="input-box">
        <input type="email" class="input-box" placeholder="Email" required>
        <i class='bx bxs-envelope'></i><!-- Icon for email -->
    </div>
    <div class="input-box">
        <input type="password" class="input-box" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i><!-- Icon for password -->
    </div>
    <div class="remember-forget">
        <label><input type="checkbox" required> I agree to the terms & conditions</label><!-- Checkbox for agree to terms -->
    </div>
    <button type="submit" class="btn">Register</button><!-- Register button -->
    <div class="login-link">
        <p>Already have an account? <a href="/login" /*class="login-toggle"*/>Login</a> <!-- Login link --></p>
    </div>
</form>
</div>

<script src="login.js"></script>
</body>
</html>