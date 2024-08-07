
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

                <?php
                    include("php/config.php");
                    if(isset($_POST["submit"])){
                        $username = $_POST["username"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];

                    //verify existing emails
                    $verify_email = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'") or die("select error");

                    if(mysqli_num_rows($verify_email) != 0){
                        echo "<div class='message'>
                                <p>email already in use</p>
                            </div><br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button>";
                    }
                    else{
                        mysqli_query($con, "INSERT INTO users(email, username, password) VALUES('$email','$username','$password')") or die("error occured. Cannot add user");
                        echo "<div class='succes'>
                                <p>email registration succesful!</p>
                            </div><br>";
                        echo "<a href='index.php'><button class='btn'>Login now</button>";
                    }
                
                    }else{
                    
                    ?>
                    
                <header>Sign up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="unsername">Username</label>
                        <input type="text" name="username" id="unsername" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="unsername">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" name="submit" value="Sign up" class="btn" required>
                    </div>

                    <div class="link">
                        Already have an account ? <a href="index.php">Login</a>
                    </div>
                </form>
        </div>
        <?php } ?>

    </div>
    
</body>
</html>