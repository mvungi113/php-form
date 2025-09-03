<?php require './includes/header.php'; ?>
<?php 
// initialize variable
$name=$email="";
$submittedData = "";


//check if the form is submited
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // get and sanitize form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    // $name = $_POST["name"];
    // $email = $_POST["email"];


    $submittedData = 
    "
    <h1>Submitted Information </h1>
    <p>Name : $name</p>
    <p>Email Address : $email</p>
    ";



}


?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label for="name">Name:</label>
    <input type="text"  name="name" placeholder="Enter your name" required>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="abc@gmail.com" required>
    <button type="submit">Submit</button>
</form>


<?php
// display submitted data
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $submittedData;
}else{
    echo "<p>No Data Submitted</p>";
}
?>
<?php require_once './includes/footer.php'; ?>
