<?php
    include './database/Database.php';
    include 'repositories/UserRepository.php';

    session_start();

    if(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin']) {
        header('Location: index.php');
    }
    
    $repo = new UserRepository($conn);

    $errors = [];

    if($_POST) {
        if(isset($_POST['register'])) {
            $fullname = $_POST['fname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm = $_POST['confirmPassword'];

            $user = $repo->readByEmail($email);

            if(count($user) != 0) {
                array_push($errors, 'User exists');
            }

            if(count($errors) == 0) {
                $user = new User($fullname, $email, $password);
                $repo->create(new User($fullname, $email, $password));
            }
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>SIgn Up</title>
    <link rel="stylesheet" href="css/signup.css">

  </head>
  <body style="background-image: url('photos/gt63.jpg'); background-size: cover; background-position: center; height: 100vh;">

   <div class="signup-box">
    <h1>Sign Up</h1>
    <form action='<?= $_SERVER['PHP_SELF'] ?>' method='POST' class="registerforma">
        <label>Full Name</label>
        <input type="text" placeholder="Full Name" name="fname" class="fname">
        <label>Email</label>
        <input type="email" placeholder="Email" name="email" class="email">
        <label>Password</label>
        <input type="password" placeholder="Password" name="password" class="password">
        <label>Confirm Password</label>
        <input type="password" placeholder="Confirm Password" name="confirmPassword" class="confirmPassword">
        <button class="button" name="register">Register</button>
        <p class="para-2">Already have an account? <a href="login.php">Login here</a></p>
        <?php foreach($errors as $error) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endforeach; ?>
        <div class="errors_div">
            
        </div>

        <div class="errorContainer">

        </div>
    </form>
   </div>

   <script src="js/register.js"></script>
</body>
</html>