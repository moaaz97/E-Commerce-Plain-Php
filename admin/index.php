<?php
    session_start();
    $noNavBar = '';
    $pageTitle = 'Login';
    if(isset($_SESSION['username']))
    {
        header('location: dashboard.php'); //Redirect To Dashboard Page
    }
    include "init.php"; //Initialization file
    //Check if user coming from HTTP POST Request
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPassword = sha1($password);

        //Check if user is Legal
        $stmt = $connection->prepare("SELECT username, password FROM user WHERE username = ? AND password = ?");
        $stmt->execute(array($username, $password));
        $count = $stmt->rowCount();
        //Count of returned rows > 0 means that the credentials is valid.
        if($count > 0)
        {
            $_SESSION['username'] = $username;  //Register Session Name
            header('location: dashboard.php'); //Redirect To Dashboard Page
            exit();
        }
        else
        {
            echo 'Not Valid';
            exit();
        }
    }
?>

    <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h4 class="text-center">Admin Login</h4>
        <input class="form-control" type="text" name="username" placeholder="<?php echo lang('username');?>">
        <input class="form-control" type="password" name="password" placeholder="<?php echo lang('password');?>">
        <input class="form-control btn btn-primary" type="submit" value="<?php echo lang('login');?>">
    </form>

<?php include "include/templates/footer.php"; ?>