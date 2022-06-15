<?php  
    session_start();
    $formValidation = $_SESSION['FORM_VALIDATION'];
    $_SESSION['FORM_VALIDATION'] = [];
?>

<div class="bg-bottom bg-fixed w-full py-[5.75rem] bg-[url('/assets/images/imgann.jpg')] bg-no-repeat bg-cover">
    <div class=" max-w-sm p-6 m-auto bg-white rounded-md shadow-md dark:bg-gray-600 ">
        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/5 border-gray-400"></span>
            <h1 class=" text-3xl from-neutral-800 text-center text-gray-700 dark:text-white ">S'INSCRIRE</h1>
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/5 border-gray-400"></span>
        </div>
        <form class="mt-6" action="/actions/SignUp.php" method="post">
            <div>
                <input type="text" name="prenom" placeholder="Prénom *" class=" text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['prenom'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['prenom']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="mt-4">
                <input type="text" name="nom" placeholder="Nom *" class=" text-sm  block w-full px-4 py-2 mt-2 text-gray-600 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['nom'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['nom']; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mt-4">
                <input type="email" name="email" placeholder="Adresse email *" class="text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['email'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['email']; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mt-4">
                <input type="tel" name="phone_number" placeholder="N° de téléphone *" class="text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['phone_number'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['phone_number']; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mt-4">
                <input type="password" name="password" placeholder="Mot de passe *" class="text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['password'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['password']; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mt-4">
                <input type="password" name="confirm_password" placeholder="Confirmer mot de passe *" class="text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['confirm_password'])
                    ):  
                ?>
                    <p class="text-xs text-red-500 ml-2">
                    <i class="fa fa-frown-o"></i>
                        <?php echo $formValidation['confirm_password']; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mt-6">
                <button type="submit" name="SignUpEvent" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                    SE CONNECTER
                </button>
            </div>
        </form>

        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/5"></span>

            <a class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">ou S'inscrire rapidement avec</a>

            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/5"></span>
        </div>

        <div class="flex items-center mt-6 -mx-2">
            <button type="button" class="flex items-center justify-center w-full px-6 py-2 mx-2 text-sm font-medium text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:bg-blue-400 focus:outline-none">
                <svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
                    <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z">
                    </path>
                </svg>

                <span class="hidden mx-2 sm:inline"> Google </span>
            </button>


        </div>

        <p class="mt-8 text-xs font-light text-center text-gray-400"> Déjà inscrit ?<a href="sign-in" class="font-medium text-gray-700 dark:text-gray-200 hover:underline"> Connectez-vous</a></p>
    </div>
</div>