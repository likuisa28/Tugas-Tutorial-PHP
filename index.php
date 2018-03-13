<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu Login</title>
        <link rel="icon" href="index.php">
        <link rel="stylesheet"href="aset/css/bootstrap.css">
        <link rel="stylesheet"href="aset/css/floating-labels.css">
        <script>
             function hellocoba(){
                // var  email = document.getElementById("email").value;
                // alert("Horreeeee.......: "+email);
               document.getElementById("email").addEventListener("keyup",function (event)(
                event.preventDefault();
                if(event===13){
                    document.getElementById("passwordd").focus();
                    
                }
                )); 
             }
        </script>
    </head>
    <body>
       
        <form class="form-signin">
            <div class="text-center mb-4">
                <img  class="mb-4" width="72" height="72" src="aset/image/bootstrap-solid.svg">
               <h1>Login From</h1>  
               <p>Untuk mencoba buat form</p>
            </div> 
            <div class="form-label-group">
                <input onkeyup="hellocoba();" class="form-control" type="email" name="email"id="email" placeholder="email address" 
                       required="yes" autofocus="yes" autocomplete="no">
                <label for="email">Email address</label>
            </div>
            
            <div class="form-label-group">
                <input class="form-control" type="password" name="password" id="password" placeholder="passwordd" 
                       required="yes"autofocus="yes" autocomplete="no" >
                <label for="password">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                <input type="checkbox">Remember Me </input>
                </label>
            </div>
            <button   class="btn btn-lg btn-primary btn-block" type="button"> sign in  </button>
            <button  class="btn btn-lg btn-primary btn-block" type="submit"> Lupa Pasword </button>

        </form>
        
    </body>
</html>
 