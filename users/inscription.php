
<?php  
require_once("../panier/db.php");

if(isset($_POST['valider'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5($_POST['password']);
    $confirmpass = md5($_POST['confirm']);
    $user_type = $_POST['user_type'];

    $select_user = "SELECT * FROM utilisateur WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($con, $select_user);
   // $pass = password_hash($password, PASSWORD_BCRYPT);
    if(mysqli_num_rows($result) > 0){
        $errors[] = 'user already exist';
    }else{
        if($password != $confirmpass){
            @$errors[] = 'password not matched';
        }else{
            $inserer = "INSERT INTO utilisateur(username, email, password, user_type) VALUES('$name', '$email', '$password', '$user_type')";
            mysqli_query($con, $inserer);
            header('Location : login_form.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant.Bresil.Com</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <img src="../image/img1.png" alt="">
            <?php 
               if(isset($errors)){
                foreach($errors as $error){
                    echo'<span class="error_msg">'.$error.'</span>';
                }
               }
            ?>
            <h3>Register now</h3>
            <div class="input-field">
                <p>Your name <sup>*</sup></p>
                <input type="text" name="name" required placeholder="Enter your name">
            </div>
            <div class="input-field">
                <p>Your Email <sup>*</sup></p>
                <input type="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="input-field">
                <p>Your password <sup>*</sup></p>
                <input type="password" name="password" required placeholder="Enter your password">
            </div>

            <div class="input-field">
                <p>confirm your password<sup>*</sup></p>
                <input type="password" name="confirm" required placeholder="confirm your password">
            </div>
            <div class="input-field">
                <p>user type <sup>*</sup></p>
                <select name="user_type" id="">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <input type="submit" name="valider" value="Register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>
        </form>
    </div>
</body>
</html>