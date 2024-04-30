<?php
require_once '../config.php';
$actionPath = $proj_root . "Models/signupregistration.php";
?>
<main>
    <div class="wrapper">
        <form action="<?php echo $actionPath; ?>" method="POST">
            <img src="../assets/images/SAIKYO.png">
            <div class="input-box">
                <input type="text" placeholder="Name" name="name" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" name="email" required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <button type="submit" class="btn" value="Signup">Signup</button>
            <div class="register">
                <p>Have an account ? </p>
                <a href="../index.php">Login now</a>
            </div>
        </form>
    </div>
</main>