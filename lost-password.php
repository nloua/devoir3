<!--h1><strong>Welcome <?php /*echo $_SESSION['first_name'];*/ ?> in lost-password page </strong></h1>

<div class="bar_new_count">
    <h3>Here are you options : </h3>
    <a href="lost-password.php">Lost Password</a><br/>
    <a href="./assets/docs/Skills For Hire Project 2 (FR).pdf">User Mannuel</a>

    <a href="send-email.php">Send email to Assitant</a><br/>
    <a href="./assets/docs/Skills For Hire Project 2 (FR).pdf">User Mannuel</a>

 </div-->

 <?php  if(isset($_SESSION['emailType'])){ ?>

<h1><strong>Welcome <?php echo $_SESSION['first_name']; ?> in lost-password menu </strong></h1>

<div class="bar_new_count">
    <h3>Here are you options : </h3>
    <a href="lost-password.php">Lost Password</a><br/>
    <a href="isnt-working.php">My computer isnt working</a><br/>
    

 </div>

 <?php }

 else{
    include 'header.php';?>
    <h1><strong>Write your mail for reset account </strong></h1>
    <div class="bar_new_count">
    <form method="POST" action="send-email.php">
    <label for="femail">From</label><br/>
    <input class="your_email" type="email"  id="your_email" name="your_email" placeholder="Your email.."><br/>

    <label for="remail">To</label><br/>
    <input class="re_email" type="email" id="re_email" name="receiver_email" placeholder="Receiver email.."><br/>

    <br/><textarea name="message" rows="30" cols="100" placeholder="Write your email.."></textarea><br/>
  
    <input class="send" type="submit" value="Send">
  </form>
  </div>
    <?php 
    
    include 'footer.php';
}
?>
