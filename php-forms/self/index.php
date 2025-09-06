

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your Username">
        <label for="email">Email Address</label>
        <input type="email" name="email" placeholder="Enter your Email">
        <button type="submit">Submit</button>
    </div>
</form>
</body>

<?php 

// if(isset($_POST['username']) && isset($_POST['email'])){
//     $username = htmlspecialchars($_POST['username']);
//     $email = htmlspecialchars($_POST['email']);

//     echo "Username: " . $username . "<br>";
//     echo "Email: " . $email . "<br>";
// }

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST['username'];
    $email = $_POST['email'];

    echo $email . "<br />";
    echo $name . "<br />";

}

?>
</html>

