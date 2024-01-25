<?php
    session_start();

    if(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin']) {
        header('Location: index.php');
    }
    
    include './database/Database.php';
    include 'repositories/UserRepository.php';
    
    $repo = new UserRepository($conn);

    $error = null;

    if($_POST) {
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $error = $repo->login($email, $password);

            if($error == null) {
                header('Location: index.php');
            }
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Login</title>
  </head>
  <body style="background-image: url('photos/gt63.jpg'); background-size: cover; background-position: center; height: 100vh;">
   <div class="login-box">
    <h1>Log In</h1>
    <form action='<?= $_SERVER['PHP_SELF'] ?>' method='POST'>
        <label>Email</label>
        <input type="email" placeholder="Email" name="email">
        <label>Password</label>
        <input type="password" placeholder="Password" name="password">
        <button class="button" name="login">Log In</button>
        <p class="para-2">Already have an account? <a href="signup.php">Sign Up here</a></p>
       
        <?php if($error) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
  
     </body>
    </html>