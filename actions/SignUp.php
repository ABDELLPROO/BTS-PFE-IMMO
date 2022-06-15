<?php
//global $DATABASE;
$DATABASE = new mysqli("localhost", "root", "", "pfe_immo");

    function validate() {
        // Validation des données
        session_start();

        $result = [];
        $result['is_valid'] = true;

        if ( empty($_POST['nom']) ) 
        { 
            $result['nom'] = 'ajouter le nom !';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['prenom']) ) 
        { 
            $result['prenom'] = 'ajouter le prenom !';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['email']) ) 
        { 
            $result['email'] = 'add your email!!';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['phone_number']) ) 
        { 
            $result['phone_number'] = 'add your telephone!!';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['password']) ) 
        { 
            $result['password'] = 'add your password!!';
            $result['is_valid'] = false;
        }
        if ( $_POST['password'] !== $_POST['confirm_password'] ) 
        {
            $result['confirm_password'] = 'passwords must be exactly the same!';
            $result['is_valid'] = false;
        }

        return $result;
    }

    $validationResult = validate();
    if (!$validationResult['is_valid'])
    {
        $_SESSION['FORM_VALIDATION'] = $validationResult;
        header('Location: http://localhost:8000/sign-up');
    }
    else{
        
    $nomV=$_POST['nom'];
    $prenomV=$_POST['prenom'];
    $emailV=$_POST['email'];
    $telV=$_POST['phone_number']; 
    $passwordV=$_POST['password'];
    

    $sql= "INSERT INTO `vendeur`( `nomV`, `prenomV`, `emailV`, `telV`, `motpassV`) 
    VALUES ('$nomV','$prenomV','$emailV','$telV','$passwordV')";
    $res = $DATABASE -> query($sql);
    // if($res){
        
    //     session_start();
	// 		$_SESSION['num_vendeur'] = $data['id_ven'];
    // }
    
    header('location:http://localhost:8000/Accueil');
}
?>