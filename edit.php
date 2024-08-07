<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Change profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Song Quotes</a></p>
        </div>
        <div class="right-links">
            <a href="home.php"><button class="btn">Home</button></a>
            <a href="logout.php"><button class="btn">Logout</button></a>
        </div>  
    </div>

    <div class="container">
        <div class="box form-box">
                <header>Change profile</header>
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
                        <input type="submit" name="submit" value="Update" class="btn" required>
                    </div>
                </form>
        </div>

    </div>
    
</body>
</html>