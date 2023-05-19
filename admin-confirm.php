<?php include 'header.php';?>

<div class="form-style-2-heading"> <h1>Admin - Add Adventure</h1></div>

<?php
$heading =  $_REQUEST['heading'];
$tripdate =  $_REQUEST['tripdate'];
$duration = $_REQUEST['duration'];
$summary = $_REQUEST['summary'];

include 'db_connect_params.php';
/*$servername='localhost';
$username='root';
$password='';
$dbname='devoir3db';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);*/
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO adventures (heading, tripdate, duration,summary)
VALUES ('$heading', '$tripdate', '$duration', '$summary')";

if ($conn->query($sql) === TRUE) {?>
  <div class="confirm_message">
      <h2>Data has added successfully to DB<h2><br/>
      <!--a href="all-adventures.php"><h2>View All Adventures<h2></a-->
      <a href="all-adventures.php" class="button_all_ad">View All Adventures</a>
</div>
<?php 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include 'footer.php';?>