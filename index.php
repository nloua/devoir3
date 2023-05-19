<?php include 'header.php';?>

<div class="formulaire">
<h1>Welcome To Your IT Support System</h1>
<div class="zone_form">
    <form method="POST" action="problem.php">
    
           
                <select class="gender" id="gender" name="gender">
                    <optgroup label="gender">
                        <option value="mr" selected>Mr</option>
                        <option value="Ms">Ms.</option>

                    </optgroup>
                </select>

                <input class="first_name" type="text" id="first_name" name="first_name" placeholder="First Name" required>
             
                <input class="last_name" type="text" id="last_name" name="last_name" placeholder="Last Name" required>
             
                <select class="role" id="role" name="role">
                    <optgroup label="role">
                    <option value="admin" selected>Admin</option>
                    <option value="manager">Manager</option>
                    <option value="ceo" >CEO</option>
                </optgroup>
                </select>
                
                <input class="submit" name="submit" type="submit" value="Submit">
          
            
    </form>
    </div>
</div>





<?php include 'footer.php';?>