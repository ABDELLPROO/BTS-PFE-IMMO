<?php

$DATABASE = new mysqli("localhost", "root", "", "pfe_immo");

    function validate() {    
        // Validation des données
        session_start();

        $result = [];
        $result['is_valid'] = true;
        
        if ( empty($_POST['titre']) ) 
        { 
            $result['titre'] = 'ajouter le titre !';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['Description']) ) 
        { 
            $result['Description'] = 'ajouter le Description !';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['adresse']) ) 
        { 
            $result['adresse'] = "Ajouter l'adresse!!";
            $result['is_valid'] = false;
        }
       
        if ( empty($_POST['ville']) ) 
        { 
            $result['ville'] = 'Ajouter la Ville!!';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['type_de_bien']) ) 
        { 
            $result['type_de_bien'] = 'Ajouter le Type !!';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['chamber']) ) 
        { 
            $result['chamber'] = 'Ajouter la nombre du chambers!!';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['Superficie']) ) 
        { 
            $result['Superficie'] = 'Ajouter la Superficie!!';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['prix']) ) 
        { 
            $result['prix'] = 'Ajouter le Prix!!';
            $result['is_valid'] = false;
        }
        if ( empty($_POST['image']) ) 
        { 
            $result['image'] = 'Ajouter image!!';
            $result['is_valid'] = false;
        }
        // if ( isset($_POST['image']) && isset($_FILES['image']) ) 
        // {
        //    echo"<pre>";
        //    print_r($_FILES['image']);
        //    echo"</pre>";
        // }

        return $result;
     } 


    $validationResult = validate();
    if (!$validationResult['is_valid'])
    {
        $_SESSION['FORM_VALIDATION'] = $validationResult;
        header('Location: http://localhost:8000/publier');
    }
    // if(isset($_POST['annuler'])){
    //     header('Location: http://localhost:8000/Accueil');
    // }
    
        else{
        
            $titre=$_POST['titre'];
            $description=$_POST['Description'];
            $adresse=$_POST['adresse'];
            $region=$_POST['region']; 
            $ville=$_POST['ville'];
            $chambre=$_POST['chambre'];
            $etage=$_POST['etage'];
            $salle_de_bain=$_POST['salle_de_bain'];
            $piece=$_POST['piece']; 
            $superficie=$_POST['Superficie'];
  
            $sql= "insert into `annonce`(`titre`, `description`, `adresse`, `region`, `ville`, `chambre`, `etage`, `salle_de_bain`, `piece`, `superficie`, `prix`) 
            VALUES ('$titre','$description','$adresse','$region','$ville','$chambre','$etage','$salle_de_bain','$piece','$superficie','$prix')";
            $res = $DATABASE -> query($sql);
            if($res){
            		$_SESSION['num_annonce'] = $data['id'];
            }
            
            header('location:http://localhost:8000/Accueil');
        }
    
?>

