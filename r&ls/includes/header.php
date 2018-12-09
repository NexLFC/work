<?php
session_start();
$loggedIn = $admin = FALSE;
if(isset($_SESSION['user_id'])){
    $loggedIn = TRUE;
    if(isset($_SESSION['user_level'])){
        if($_SESSION['user_level']==1){
            $admin = TRUE;
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <h1><?php echo $page_header_title; ?></h1>
            <h2>Registration and Login</h2>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <?php if($loggedIn){
                            if($admin){ ?>
                                    <li>
                                        <a href="edit_users.php">Edit users</a>
                                    </li>
                            <?php } ?>
                    <li>
                        <a href="change_password.php">Change password</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
        <div id="content">
