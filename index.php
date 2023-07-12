<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <style>
    *{
      color: white;
    }
        body{
          background: url('images/log_bg.jpg');
          background-attachment: fixed;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        }
        
        .border{
            border-radius: 40px;
            height: 1300px;
            width: 80%;
            position: relative;
            left: 100px;
            top: 250px;
            overflow: hidden;
            
        }
        #pink{
          position: relative;
          right: 410px;
          top: -120px;
          animation: rotate 5s linear infinite;
          transform-origin: bottom right;
          width: 830px;
          height: 800px;
        }
        
        #blue{
          position: relative;
          width: 830px;
          height: 800px;
          left: 380px;
          bottom: 140px;
          animation: rotate 5s linear infinite;
          transform-origin: top left;
        }
        
        
        
        @keyframes rotate {
            0%{
              transform: rotate(0deg);
            }
            100%{
              transform:rotate(360deg);
            }
        }
        
        body form{
          border-radius: 40px;
          inset: 5px;
          background-color: black;
          z-index: 2;
          position: absolute;
        }
        #sign_in{
          font-size: 70px;
          position: relative;
          top: -50px;
          left: 40px;
        }
        #username , #password{
          position: relative;
          left: 60px;
          width: 650px;
          height: 90px;
          border: 6px solid lightblue;
          border-top: hidden;
          border-left: hidden;
          border-right: hidden;
          background-color: black;
          font-size: 40px;

          
        }
        #username{
          left: 60px;
        }
          
       #user{
        
          position: relative;
          top: -65px;
          font-size: 20px;
         left: -600px;
         color: lightblue;
         
          
        }
        
        #pass{
          position: relative;
          top: -65px;
          font-size: 20px;
         left: -600px;
         color: lightblue;
        }
        
        .username:hover #user{
          color:pink;
        }
        
         .username:hover #username{
          border: 6px solid pink;
          border-top: hidden;
          border-left: hidden;
          border-right: hidden;
          background-color: black;
        }
        
         .password:hover #pass{
          color:pink;
        }
        
         .password:hover #password{
          border: 6px solid pink;
          border-top: hidden;
          border-left: hidden;
          border-right: hidden;
          background-color: black;
        }
        
        #submit{
          position: relative;
          top: 30px;
          left: 280px;
          height: 100px;
          width: 200px;
          border: hidden;
          font-size: 50px;
         border-radius: 50px;
         text-transform: capitalize;
         background-color: black;
         border: 2px solid lightblue;
        }
        #submit:hover{
          border: 2px solid pink;
        }
        
        #or{
          font-size: 30px;
          position: relative;
          display: flex;
          justify-content: center;
          top: 80px;
        }
        
        .facebook{
          background-color: #3b5998;
          height: 100px;
          width: 650px;
          position: relative;
          top: 120px;
          left: 60px;
          border-radius: 50px;
        }
          
        
        #facebook{
          height: 80px;
          width: 80px;
          border-radius: 100%;
        }
        
        #word1{
          font-size: 30px;
          letter-spacing: 5px;
          text-decoration: none;
          position: relative;
          top: -53px;
          left: 0px;
          
          padding: 30px;
          padding-left: 230px;
          padding-right: 230px;
          border-radius: 50px;
        }
            .google{
          background-color: white;
          height: 100px;
          width: 650px;
          position: relative;
          top: 140px;
          left: 60px;
          border-radius: 50px;
        }
        
        #google {
          height: 80px;
          width: 80px;
          border-radius: 100%;
          position: relative;
          top: 10px;
          left: 12px;
        }
        
        #word2{
          color: black;
          font-size: 30px;
          letter-spacing: 5px;
          text-decoration: none;
          position: relative;
          top: -53px;
          left: 0px;
          padding: 30px;
          padding-left: 260px;
          padding-right: 250px;
          border-radius: 50px;
        }
        
        #signup_direct{
          font-size: 30px;
          position: relative;
          top: 190px;
          left: 50px;
        }
        #signup_direct a{
          text-decoration: none;
          letter-spacing: 2px;
          color: red;
        }

        

        
        
        
        
        
        
    </style>
</head>
<body>

       <div class = "border">
         
         <img src = "images/pink.jpg" id = "pink">
         
         <img src = "images/blue.jpg" id = "blue">
         
           <form action = "index.php" method = "post">
             
             <h4 id = "sign_in"> Sign In <h4>
               
               <div class = "username">

                 <input type = "text" name = "username" id = "username">
                               <label id = "user">
                   username
                   </label>
               </div>
               <br>
               <br>
               <br>
               <br>
               <br>
                
               <div class = "password">
                 <input type = "password" max = 12 name = "password" id = "password">
                 <label id = "pass">
                   password
                   </label>
                   
                   <br>
                   <br>
                   <br>

                 
               </div>
               
                <input type = "submit" name = "signi" value = "Sign In" id = "submit">
                
                <br>
                <b id = "or"> or </b>
                
                <div class = "signups">
                   <div class = "facebook">
                                        <img src = "images/facebook.jpg" id = "facebook">
                   
                   <a href = "https://www.facebook.com/?stype=lo&jlou=AffEWOCjbXiyKJTgUWpER_jy-gRfr9y7VZg704YZswqZSbTCu6UDFNZfX8BkULEtOLqx2fichpYXr1yLvtKnShynAAa0QkX9s8dzy6v0hi2nfg&smuh=44364&lh=Ac98KXPWv1ReFdIYCKM"  id = "word1">
                     facebook
                     </a>
                   
                   </div>
                   
                   <div class = "google">
                       <img src = "images/google.jpg" id = "google">
                       
                       <a href = "https://mail.google.com/mail/mu/mp/900/#tl/priority/%5Esmartlabel_personal" id = "word2">
                         Google
                       </a>
                       
                     </div>
                 </div>
                 
                 <h5 id = "signup_direct"> You don't have an account? <a href = "signup.php" > "CLICK HERE" ! </a> 
                 </h5>
             
       
           </form>
         
         
         
         
         
          
       </div>
       
       
  
    
</body>
</html>
<?php

$username_data = $_POST["username"];
$password_data = $_POST["password"];





?>