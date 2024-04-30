<?php
require_once 'config.php';
?>
<main>
    <div class="wrapper">
        <form action="/DGL_123_PROJECT/Models/loginauthentication.php" method="POST">
            <img src="/DGL_123_PROJECT/assets/images/SAIKYO.png">
            <div class="input-box">
                <input type="email" placeholder="email" name="email" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register">
                <p>Don't have an account ? </p>
                <a href="<?php echo $proj_root; ?>Controllers/signup.php"> Register</a>
            </div>
        </form>
    </div>
</main>