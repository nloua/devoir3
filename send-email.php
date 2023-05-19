<?php include 'header.php';
$space=" ";
if($_SESSION['emailType']=='newAccount'){?>

<h1><strong>Add account <?php echo $_SESSION['gender'].$space; echo $_SESSION['first_name'].$space; echo $_SESSION['last_name'];?> as <?php echo $_SESSION['role']; ?> </strong></h1>

<?php }

 else{?>
  <h1><strong>Reset account of <?php echo $_SESSION['gender'].$space; echo $_SESSION['first_name'].$space; echo $_SESSION['last_name'];?> </strong></h1>
<?php };?>

<div class="bar_new_count">

</div>

 <?php include 'footer.php';?>