<?php
session_start();
$noNavbar = '';
$pageTitle = 'Login';


if (isset($_SESSION['Username'])) {
    header('Location: dashboard.php');
}
include 'init.php';

// check if user coming from http post request


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass =  sha1($password);

    // check if the user exist in database 

    $stmt = $con->prepare("SELECT 
                                 UserID, Username, Password 
                           FROM 
                                 users 
                           WHERE 
                                 Username = ? 
                           AND 
                                 Password = ? 
                           AND 
                                 GroupID = 1
                           LIMIT  1");
    $stmt->execute(array($username, $hashedPass));
    $row = $stmt->fetch();
    $count = $stmt->rowCount();


    // check if count > 0 this mean database contains Record  about this username 

    if ($count > 0) {
        $_SESSION['Username'] = $username; // Register session Name 
        $_SESSION['ID'] = $row['UserID'];    // Register session ID 
        header('Location: dashboard.php'); // Redirect to Dashboard 
        exit();
    }
}

?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
    <input class="btn btn-primary btn-block" type="submit" value="Login">
</form>

<?php include $tpl . 'footer.php';
