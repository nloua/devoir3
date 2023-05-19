

<!--?/*php  if(isset($_SESSION['emailType'])){ ?>

    <h1><strong>Welcome <?php echo $_SESSION['first_name']; ?> in new-account menu </strong></h1>
    
    <div class="bar_new_count">
        <h3>Here are you options : </h3>
        <a href="new-account.php">Create New Account</a><br/>
        <a href="isnt-working.php">My computer isnt working</a><br/>
        
    
     </div-->
    
     <?php //}
    
     //else{
        include 'header.php';?>
        <div class="form-style-2">
        <div class="form-style-2-heading"> <h1>Admin - Add Adventure</h1></div>
        <form method="POST" action="admin-confirm.php">
        <h3>Input details about the trip</h3><br/>
        <label for="field1"><span>Heading <span class="required">*</span></span><input type="text" class="input-field" name="heading" value="" /></label>
        <label for="field2"><span>Trip Date <span class="required">*</span></span><input type="date" class="input-field" name="tripdate" value="" /></label>
        <label for="field1"><span>Duration <span class="required">*</span></span><input type="text" class="input-field" name="duration" value="" /></label>
        <label for="field1"><span>Summary <span class="required">*</span></span><input type="text" class="input-field" name="summary" value="" /></label>
        <label><span> </span><input type="submit" value="Submit" /></label>
      </form>
      </div>
        <?php 
        
        include 'footer.php';
   // }
    ?>
    