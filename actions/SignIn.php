
<?php

$DATABASE = new mysqli("localhost", "root", "", "pfe_immo");

    function validate() {
        // Validation des données
        session_start();

        $result = [];
        $result['is_valid'] = true;

        if ( empty($_POST['login_signin']) ) 
        { 
            $result['login_signin'] = 'ajouter login !';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['password_signin']) ) 
        { 
            $result['password_signin'] = 'ajouter le mot de passe !';
            $result['is_valid'] = false;
        }
        
        return $result;
    }

    $validationResult = validate();
    if (!$validationResult['is_valid'])
    {
        $_SESSION['FORM_VALIDATION'] = $validationResult;
        header('Location: http://localhost:8000/sign-in');
    }

    else{
         
        $login_signin = $_POST['login_signin'];
        $password_signin = $_POST['password_signin'];

        $sql2= "select * from vendeur where emailV ='".$login_signin."' AND motpassV ='".$password_signin."' " ;
        $res = $DATABASE -> query($sql2);
        if($res->num_rows>0){
            $data=$res->fetch_assoc();
            $_SESSION['nom_vendeur'] = $data['nomV'];
            header('location:http://localhost:8000/Accueil');
        }
   
     else {
        $login_signin = $_POST['login_signin'];
        $password_signin = $_POST['password_signin'];
    
        $sql2= "select * from admin where login_admin ='$login_signin' AND motpass_admin ='$password_signin' " ;
        $res = $DATABASE -> query($sql2);
         if($res->num_rows>0){
            $data=$res->fetch_assoc();
            $_SESSION['nomadmin'] = $data['nom_admin'];
            header('location:http://localhost:8000/admin'); 
     }
     else {
         echo"login or mot de pass inccorect";
     }
    }     
 }
    

?>