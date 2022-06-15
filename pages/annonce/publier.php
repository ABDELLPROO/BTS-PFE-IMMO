
<?php  
    session_start();
    $formValidation = $_SESSION['FORM_VALIDATION'];
    $_SESSION['FORM_VALIDATION'] = [];
 
?>

<div class=" bg-fixed  py-[5.75rem] bg-gray-50 pb-0">
<div class="mt-[-2.5rem] max-w-4xl p-6 m-auto bg-white rounded-md shadow-md dark:bg-gray-600 ">
    <div class="flex items-center justify-between mt-4">
          <span class="w-5 border-b dark:border-gray-600 lg:w-80 border-gray-400"></span>
        <h1 class="text-3xl text-center font-bold text-cyan-600 ">ANNONCE</h1>
          <span class="w-5 border-b dark:border-gray-600 lg:w-80 border-gray-400"></span>
    </div>
        <form method="POST" action="" >
            <div >
               <h4 class=" cursor-pointer font-Oswald">Titre <span class="text-red-600 font-bold">*</span></h4>
               <input id="input" type="text" name="titre" placeholder="Titre de l'annonce " maxlength="60" 
                    class=" text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"/>
                    <span id="count" class="text-sm float-right block relative top-[-30] left-[-5] opacity-50 ">60</span>
                   
            </div>
            <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['titre'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['titre']; ?>
                    </p>
                <?php endif; ?>
            <div id="piv" class="mt-4">
            <h4 class=" cursor-pointer font-Oswald">Description <span class="text-red-600 font-bold">*</span></h4>
               <input id="des" type="text" name="Description" placeholder="Description de l'annonce " maxlength="5000"
                    class="h-32 pb-28 text-sm  block w-full px-4 py-2 mt-2 text-gray-600 bg-white border-b rounded dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <span class="text-xs float-right block relative top-[-22] left-[-5] opacity-50"> caractères maximum</span>
                    <p id="counter" class="text-sm float-right block relative top-[-25] left-[-5] opacity-50 "> 5000 </p>
                    <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['Description'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['Description']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div >
               <h4 class=" cursor-pointer font-Oswald">Adresse <span class="text-red-600 font-bold">*</span></h4>
               <input type="text" name="adresse" placeholder="Adresse ou Ville " maxlength="50" 
                    class=" text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    
            </div>
            <div class="pt-3">
               <h4 class=" cursor-pointer font-Oswald">Régions </h4>
               <select type="text" name="region" 
                    class=" text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">>
                    <option class="font-bold" value="choi">--Régions--</option>
                    <option value="1">Tanger-Tétouan-Al Hoceïma</option>
                    <option value="2">L'Oriental</option>
                    <option value="3">Fès-Meknès</option>
                    <option value="4">Rabat-Salé-Kénitra</option>
                    <option value="5">Béni Mellal-Khénifra</option>
                    <option value="6">Casablanca-Settat</option>
                    <option value="7">Marrakech-Safi</option>
                    <option value="8">Drâa-Tafilalet</option>
                    <option value="9">Souss-Massa</option>
                    <option value="10">Guelmim-Oued Noun</option>
                    <option value="11">Laâyoune-Sakia El Hamra</option>
                    <option value="12">Dakhla-Oued Ed-Dahab</option>
                </select>
            </div>
            <div class="pt-3">
               <h4 class=" cursor-pointer font-Oswald">Ville </h4>
               <select type="text" name="ville" 
                    class=" text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">>
                    <option class="font-bold" value="choi">--Ville--</option>
                    <option  value="1">Casablanca</option>
                    <option value="2">Marrackech</option>
                    <option value="3">Fès</option>
                    <option value="3">Meknès</option>
                    <option value="4">Rabat</option>
                    <option value="5">Béni Mellal</option>
                    <option value="6">Settat</option>
                    <option value="7">Safi</option>
                    <option value="8">Kénitra</option>
                    <option value="9">Tanger</option>
                    <option value="10">Agadir</option>
                    <option value="11">Laâyoune</option>
                    <option value="12">Dakhla</option>
                </select>
                <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['ville'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['ville']; ?>
                    </p>
                <?php endif; ?>
            </div>
               <h3 class="font-Exo pt-5">Caractéristiques</h3> 
               <hr>
            <div class="pt-3">
               <h4 class=" cursor-pointer font-Oswald">Type de bien </h4>
               <select type="text" name="type_de_bien" 
                    class=" text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <option value="choi">--Choisissez--</option>
                    <option value="villa">Villa</option>
                    <option value="Appartement">Appartement</option>
                    <option value="Studio">Studio</option>
                    <option value="Maison">Maison</option>
                    <option value="Riad">Riad</option>
                    <option value="Ferme">Ferme</option>
                    <option value="Bureaux">Bureaux</option>
                </select>
            </div>
        <div class="flex ">
            <div class="mt-4">
            <h4 class=" cursor-pointer font-Oswald">Chambers</h4> 
               <input type="number" name="chamber" min='0' max='20' name="chamber" placeholder="Chambers"
                    class="w-96 text-sm block px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600  dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div class="mt-4 ml-8">
            <h4 class=" cursor-pointer font-Oswald">Pièces</h4>
               <input type="number" min='0' name="Piece" placeholder="Pièces"
                    class="text-sm block w-96 px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600  dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>      
        <div class="flex ">
            <div class="mt-4">
            <h4 class=" cursor-pointer font-Oswald">Etage</h4>  
             <input type="number" name="etage" min='0' max='20' placeholder="Etage"
                    class="text-sm block w-96 px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div class="mt-4 ml-8">
            <h4 class=" cursor-pointer font-Oswald">Supérficie</h4> 
                <input type="number" name="Superficie" min='0' placeholder="Supérficie"
                    class="text-sm block w-96 px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>

        <div class="flex ">
            <div class="mt-4">
            <h4 class=" cursor-pointer font-Oswald">Salles de bain</h4>  
             <input type="number" name="Salles_de_bain" min='0' max='10' placeholder="Salles de bain"
                    class="text-sm block w-96 px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div class="mt-4 ml-8">
            <h4 class=" cursor-pointer font-Oswald">Prix</h4> 
                <input type="number" name='prix' min='0' placeholder="Votre prix (MAD)"
                    class="text-sm block w-96 px-4 py-2 mt-2 text-gray-700 bg-white border-b rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>
        <h3 class="font-Exo pt-5 ">Medias</h3>
            <hr>
            <div class="mt-4 ">
                <h4 class=" cursor-pointer font-Oswald">Image(s)</h4> 
                <div class=" pt-4 w-full h-12  justify-center ">
               <label class="w-[52rem] h-16 flex flex-col items-center px-4 py-2 bg-white text-blue-500 rounded shadow-blue-500 tracking-wide uppercase border-dashed border-2 border-blue-500 cursor-pointer hover:bg-blue-500 hover:text-white">
               <svg id="Layer_1" style="enable-background:new 0 0 200 200;" version="1.1" viewBox="0 0 200 200" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
	         .st0{fill:url(#SVGID_1_);}
	         .st1{fill:url(#SVGID_2_);}
            </style><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="170.4592" x2="31.2292" y1="177.4471" y2="38.217"><stop offset="0" style="stop-color:#007FE2"/><stop offset="1" style="stop-color:#39D3B8"/></linearGradient><path class="st0" d="M171.413,39.408H28.587c-1.981,0-3.587,1.606-3.587,3.587v63.993c0,1.981,1.606,3.587,3.587,3.587   s3.587-1.606,3.587-3.587V46.582h135.653v115.553l-44.592-45.951c-1.351-1.391-3.797-1.391-5.147,0l-18.455,19.019L67.19,101.77   c-1.351-1.391-3.797-1.391-5.147,0l-36.029,37.128c-0.055,0.057-0.094,0.123-0.144,0.182c-0.097,0.114-0.196,0.226-0.278,0.351   c-0.061,0.093-0.106,0.192-0.157,0.289c-0.058,0.109-0.12,0.214-0.167,0.329c-0.046,0.113-0.073,0.229-0.107,0.344   c-0.032,0.108-0.07,0.213-0.091,0.326c-0.027,0.143-0.034,0.288-0.044,0.433c-0.006,0.082-0.024,0.159-0.024,0.242v29.584   c0,1.981,1.606,3.587,3.587,3.587h112.699c1.981,0,3.587-1.606,3.587-3.587s-1.606-3.587-3.587-3.587H32.173V142.85l32.443-33.432   l39.207,40.402c0.703,0.724,1.638,1.089,2.574,1.089c0.899,0,1.802-0.337,2.498-1.013c1.421-1.379,1.456-3.65,0.076-5.072   l-4.341-4.473l16.031-16.52l48.179,49.647c0.689,0.71,1.622,1.089,2.575,1.089c0.453,0,0.909-0.086,1.346-0.263   c1.353-0.549,2.239-1.863,2.239-3.324V42.995C175,41.014,173.394,39.408,171.413,39.408z"/><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_2_" x1="201.5168" x2="62.2868" y1="146.3895" y2="7.1595"><stop offset="0" style="stop-color:#007FE2"/><stop offset="1" style="stop-color:#39D3B8"/></linearGradient><path class="st1" d="M135.311,96.919c9.227,0,16.734-7.507,16.734-16.735s-7.507-16.734-16.734-16.734s-16.734,7.507-16.734,16.734   S126.084,96.919,135.311,96.919z M135.311,70.623c5.272,0,9.561,4.289,9.561,9.561c0,5.272-4.289,9.561-9.561,9.561   s-9.561-4.289-9.561-9.561C125.75,74.912,130.039,70.623,135.311,70.623z"/></g>
            </svg>
             <span class="mt-2 text-base leading-normal">choisir des images</span>
             </label>
             <input type='file' name='image' multiple class="hidden" accept='image/png, image/jpg ' required >
               
        </div>
            </div>  
            
            <div class="mt-11 ">
                <h4 class=" cursor-pointer font-Oswald">Vidéo(s)</h4> 
                <div class=" pt-4 w-full h-12  justify-center ">
               <label class="w-[52rem] h-16 flex flex-col items-center px-4 py-2 bg-white text-blue-500 rounded shadow-blue-500 tracking-wide uppercase border-dashed border-2 border-blue-500 cursor-pointer hover:bg-blue-500 hover:text-white">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve"><style type="text/css">
                .st0{fill:#57CEF3;}
                .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#2D8CFF;}
                .st2{fill-rule:evenodd;clip-rule:evenodd;fill:#314A52;}
                .st3{fill:#FFFFFF;}
                 </style><g id="Zoom"><circle class="st0" cx="32" cy="32" r="30"/><path class="st1" d="M18.5,7.5C9.9,12.2,4,21.4,4,32c0,15.5,12.5,20,28,20c15.5,0,28-4.5,28-20h2c0,11.4-4,21.5-13,27.1   C44.1,62.2,38.2,64,32,64C14.3,64,0,49.7,0,32C0,20,6.7,9.5,16.5,4L18.5,7.5z"/><path class="st2" d="M16,4.3C23.3,0,32.1-1.1,40.3,1.1S55.5,8.7,59.7,16c4.2,7.3,5.4,16.1,3.2,24.3S55.3,55.5,48,59.7l-2-3.5   c6.4-3.7,11.1-9.8,13-17S60,24.4,56.2,18c-3.7-6.4-9.8-11.1-17-13S24.4,4,18,7.8L16,4.3z"/><path class="st3" d="M12,23c0-1.7,1.3-3,3-3h17c4.4,0,8,3.6,8,8v13c0,1.7-1.3,3-3,3H20c-4.4,0-8-3.6-8-8V23z M49.6,20.4l-6.4,6.4   c-0.8,0.8-1.2,1.8-1.2,2.8v4.7c0,1.1,0.4,2.1,1.2,2.8l6.4,6.4c0.3,0.3,0.6,0.4,1,0.4c0.8,0,1.4-0.6,1.4-1.4V21.4   c0-0.8-0.6-1.4-1.4-1.4C50.2,20,49.9,20.1,49.6,20.4z"/></g></svg>
                <span class="mt-2 text-base leading-normal">choisir des Vidéos</span>
                </label>  
                <input type='file' name='video' multiple class="hidden" accept=" video/*" >
               
        </div>
        
            </div>
          
            <div class="flex mt-20 ml-80">
                <button type="submit" name="envann" class=" flex w-24 px-4 py-2  text-white  bg-blue-500 rounded-md text-white transition ease-in-out delay-100 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-rose-500 duration-200 rounded-md focus:outline-none focus:bg-gray-600   ">
                 Envoyer
               </button>
                <!-- <button type="submit" name="annuler" class="flex ml-3 w-24 px-4 py-2  text-white transition ease-in-out delay-100 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-rose-500 duration-200 rounded-md focus:outline-none focus:bg-gray-600 ">
                Annuler
            </button>  -->
               
            </div>
        </form>

</div>
</div>
<?php
  
$DATABASE = new mysqli("localhost", "root", "", "pfe_immo");

if(isset($_POST['envann'])){
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
    
        // else{
        
        //     $titre=$_POST['titre'];
        //     $description=$_POST['Description'];
        //     $adresse=$_POST['adresse'];
        //     $region=$_POST['region']; 
        //     $ville=$_POST['ville'];
        //     $chambre=$_POST['chambre'];
        //     $etage=$_POST['etage'];
        //     $salle_de_bain=$_POST['salle_de_bain'];
        //     $piece=$_POST['piece']; 
        //     $superficie=$_POST['Superficie'];
  
        //     $sql= "insert into `annonce`(`titre`, `description`, `adresse`, `region`, `ville`, `chambre`, `etage`, `salle_de_bain`, `piece`, `superficie`, `prix`) 
        //     VALUES ('$titre','$description','$adresse','$region','$ville','$chambre','$etage','$salle_de_bain','$piece','$superficie','$prix')";
        //     $res = $DATABASE -> query($sql);
        //     if($res){
        //     		$_SESSION['num_annonce'] = $data['id'];
        //     }
            
        //     header('location:http://localhost:8000/Accueil');
        // }
}
?>





