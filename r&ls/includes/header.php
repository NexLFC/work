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
<!DOCTYPE HTML>
<html>
<head>
<title>NexLFC Medium DB</title>
<link rel="stylesheet" href="../../design.css">
<script src="../../test.js"></script>
</head>
<body>
  <div class="navbar">
    <h1>NexLFC Medium DB Project</h1>
    <a href="../main_page.html">Home</a>
    <a href="../tv_shows_and_movies.html">TV Shows & Movies</a>
    <a href="#books">Books</a>
    <a href="#anime">Anime</a>
    <a href="#games">Games</a>
    <div class="dropdown">
    <button class="dropbtn" onclick="loginDropdown()">Login</button>
    <div class="dropdown-content" id="myDropdown">
      <a href="/r&ls/login.php">Sign in</a>
      <a href="/r&ls/logout.php">Sign out</a>
      <a href="/r&ls/register.php">Register</a>
    </div>
    </div>
  </div>
    <footer class="footer">2018 &COPY; Nex</footer>
</body>
</html>
