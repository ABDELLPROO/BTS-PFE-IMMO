<?php  
   $DATABASE = new mysqli("localhost", "root", "", "pfe_immo");

    session_start();
    $formValidation = $_SESSION['FORM_VALIDATION'];
    $_SESSION['FORM_VALIDATION'] = [];

?>
<div class="bg-bottom bg-fixed w-full py-[8.25rem] bg-[url('/assets/images/imgann.jpg')] bg-no-repeat bg-cover">
    
<div class=" max-w-sm p-6 m-auto mb-[31px] bg-white rounded-md shadow-md dark:bg-gray-600 ">
    <div class="flex items-center justify-between mt-4">
          <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/5 border-gray-400"></span>
        <h1 class=" text-3xl from-neutral-800 text-center text-gray-700 dark:text-white ">S'IDENTIFIER</h1>
          <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/5 border-gray-400"></span>
    </div>

        <form class="mt-6" method="POST" action='/actions/SignIn.php' >
                                                      
            <div >                         
               <input type="email" name="login_signin" placeholder="Login"
                    class=" text-sm block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    
                    <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['login_signin'])
                    ):  
                ?>   
                <div class="flex ml-2 ">
                <svg class=" w-5 h-5 mt-[2px] text-red-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <p class= "text-xs text-red-500 m-1">
                        <?php echo $formValidation ['login_signin']; ?>
                    </p>
                    </div>    
                <?php endif; ?>
                
                </div>
            <div class="mt-6">
               <input type="password" name="password_signin" placeholder="password login"
                    class=" text-sm  block w-full px-4 py-2 mt-2 text-gray-600 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <?php 
                    if(
                        isset($formValidation['is_valid']) &&
                        !$formValidation['is_valid'] &&
                        isset($formValidation['password_signin'])
                    ):  
                ?>
                   <div class="flex ml-2 ">
                    <svg class=" w-5 h-5 mt-[2px] text-red-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <p class="text-xs text-red-500 m-1">
                        <?php echo $formValidation['password_signin']; ?>
                    </p>
                    </div> 
                <?php endif; ?>
               
                </div>

            <div class="mt-5">
                <button id="btn"
                   name="valide" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                    SE CONNECTER
                </button>
            </div>
        </form>

        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/5"></span>

            <a class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">ou S'identifier avec</a>

            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/5"></span>
        </div>

        <div class="flex items-center mt-5 -mx-2">
            <button type="button"
                class="flex items-center justify-center w-full px-6 py-2 mx-2 text-sm font-medium text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:bg-blue-400 focus:outline-none">
                <svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z">
                    </path>
                </svg>

                <span class="hidden mx-2 sm:inline"> Google </span>
            </button>

            
        </div  class="mt-4">

        <p class="mt-4 text-xs font-light text-center text-gray-400"> Vous n'avez pas de compte ? <a href="sign-up"
                class="font-medium text-gray-700 dark:text-gray-200 hover:underline"> Créer une </a></p>
</div>

</div>
