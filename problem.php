<?php 
include 'header.php';

/**********************Recuperation data******************************** */

// Vérifier si le formulaire est soumis 
if ( isset( $_POST['submit'] ) ) 
{
    /* récupérer les données du formulaire en utilisant       */
    $gender = $_POST['gender']; 
    $first_name = $_POST['first_name']; 
    $last_name = $_POST['last_name']; 
    $role = $_POST['role'];
    //$emailType = 'role';
    //exit;
    //echo $gender;

/**********************Values Session************************************************** */
    $_SESSION['gender'] = $gender;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['role'] = $role;
    $_SESSION['emailType'] = '';
    //echo  $_SESSION['role'];


/************************************************************************ */
    switch ($role) 
    {
        case $role=="admin":
            //header("Location:new-account.php/"); 
            //Redirect('new-account.php');
            $_SESSION['emailType'] = 'newAccount';
            include 'new-account.php';
            break;
            
        case $role=="manager":
            $_SESSION['emailType'] = 'lostPassword';
            include 'lost-password.php';
            break;

        case $role=="ceo":
            include 'need-help.php';
            break;


    }

   
}


include 'footer.php';

?>