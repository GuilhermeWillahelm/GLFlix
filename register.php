<?php 
  if(isset($_POST["submitButton"])) 
  {
    echo "Form submitted";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="src/style/style.css">
</head>
<body>
    <div class="signInContainer">
        <div class="column">
            <form action="" method="post">
                <input type="text" name="firstName" placeholder="First Name" required>

                <input type="text" name="lastName" placeholder="Last Name" required>

                <input type="text" name="username" placeholder="Username" required>

                <input type="email" name="email" placeholder="Email" required>

                <input type="email" name="confirmName" placeholder="Confirm Email" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="confirmPassword" placeholder="Confirm Password" required>

                <input type="submit" name="submitButton" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>