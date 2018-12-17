<?php
$page_title = 'Home';
$page_header_title = 'Home Page';
include './includes/preferences.php';
include HEADER;
?>
<h3 style="text-align:center; font-weight:bold; font-size:40px; color:black; padding-top:30px;">Welcome, <?php echo isset($_SESSION['full_name'])?'['.$_SESSION['full_name'].']':' guest'; ?>
</h3>
<?php include FOOTER; ?>
