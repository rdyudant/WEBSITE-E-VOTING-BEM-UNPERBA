<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/png">
      
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="../icons/remixicon.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="css/login-adm.css">

      <title>E-Voting BEM UNPERBA</title>
   </head>
   <body>
      <div class="login">
         <img src="img/login-adm-bg.jpg" alt="login image" class="login__img">

         <form method="post" action="logincek.php" class="login__form">
            <h1 class="login__title">Administrator</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="text" autofocus required="required" name="username" class="login__input" placeholder=" ">
                     <label for="" class="login__label">Username</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" required="required" name="password" class="login__input" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <button type="submit" class="login__button">Sign In</button>

            <div class="login__register">
               <a href="../index.php"><h3>Back to Home</h3></a>
            </div>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script>
         // Show - Hidden Password
         const showHiddenPass = (loginPass, loginEye) =>{
            const input = document.getElementById(loginPass),
                  iconEye = document.getElementById(loginEye)

            iconEye.addEventListener('click', () =>{
               // Change password to text
               if(input.type === 'password'){
                  // Switch to text
                  input.type = 'text'

                  // Icon change
                  iconEye.classList.add('ri-eye-line')
                  iconEye.classList.remove('ri-eye-off-line')
               } else{
                  // Change to password
                  input.type = 'password'

                  // Icon change
                  iconEye.classList.remove('ri-eye-line')
                  iconEye.classList.add('ri-eye-off-line')
               }
            })
         }
         showHiddenPass('login-pass','login-eye')
      </script>
   </body>
</html>