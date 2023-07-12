<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style>
    *{
      color: white;
      z-index: 2;
    }
    
       body{
         background:url('log_bg.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         background-position: center;
         
       }
       
       .border {
         border: 10px solid lightblue;
         margin-top: 70px;
         margin-left: 50px;
         height: 1900px;
         width: 100%;
         animation: color 4s linear infinite;
         background-color: black;
         z-index: 1;
         
       }
       @keyframes color{
         0%{
           border: 10px solid lightblue;
         }
         20%{
           border: 10px solid green;
         }
         40%{
           border: 10x solid pink;
         }
         60%{
           border: 10px solid violet;
         }
         80%{
           border: 10px solid yellow;
         }
         99%{
           border: 10px solid white;
         }
         100%{
           border: 10px solid lightblue;
         }
       }
       
       @keyframes design{
         0%{
           border: red 2px solid;
         }
         30%{
           border: yellow 2px solid;
         }
         50%{
           border: green 2px solid;
         }
         70%{
           border: white 2px solid;
         }
         99%{
           border: violet 2px solid;
         }
          100%{
           border: red 2px solid;
         }
         
         
       }
       
       
       #signup{
         display: flex;
         justify-content: center;
         position: relative;
         top: 50px;
         font-size: 100px;
       }
       
       .info1 input{
         padding: 40px;
         position: relative;
         top: 100px;
         left: 60px;
         width: 300px;
         border: none;
         background-color: black;
         border-radius: 90px;
         border-bottom-color: lightblue;
         justify-content: space-between;
         align-items: center;
         font-size: 35px;
         animation: design 3s infinite ease;
       }
      
      .info1 label{
        font-size: 14px;
        position: relative;
        right: 300px;
      }
      
      .info2 input{
        padding: 40px;
         position: relative;
         top: 200px;
         left: 60px;
         width: 600px;
         border: none;
         background-color: black;
         border-radius: 90px;
         border-bottom-color: lightblue;
         align-items: center;
         font-size: 35px;
         animation: design 3s infinite ease;
      }
      .info2 label{
         font-size: 20px;
        position: relative;
        right: 300px;
        left: -600px;
        top: 100px;
        
      }
      
      .info3 input{
        padding: 40px;
         position: relative;
         top: 290px;
         left: 60px;
         width: 600px;
         border: none;
         background-color: black;
         border-radius: 90px;
         border-bottom-color: lightblue;
         align-items: center;
         font-size: 35px;
         animation: design 3s infinite ease;
      }
      
      .info3 label{
        font-size: 20px;
        position: relative;
        right: 300px;
        left: -600px;
        top: 190px;
      }
      
      #choose1{
        position: relative;
          top: 400px;
          left: 180px;
          padding: 10px;
          height: 100px;
          width: 600px;
          border: hidden;
          font-size: 50px;
         border-radius: 50px;
         text-transform: capitalize;
         background-color: black;
         border: 2px solid lightblue;
         letter-spacing: 3px;
      }
      
      #choose1:hover {
          background-color: pink;
      }
         #choose2:hover {
          background-color: pink;
      }
      
      #choose2 {
        position: relative;
          top: 450px;
          left: 180px;
          padding: 3px;
          height: 100px;
          width: 600px;
          border: hidden;
          font-size: 50px;
         border-radius: 50px;
         text-transform: capitalize;
         background-color: black;
         border: 2px solid lightblue;
         letter-spacing: 3px;
         text-align: center;
         
      }
      
      #foot{
        font-size: 30px;
        position: relative;
        top: 600px;
        left: 110px;
        letter-spacing: 3px;
      }
      
      #foot a{
        letter-spacing: 2px;
        text-decoration: none;
        color: yellowgreen;
      }
      
      
     
         
       
       
       
       
       
       
    </style>
</head>
<body>
<div class = border>
  <form id = "myform" action = "signup.php" method = "post">
    
    <h3 id = "signup"> Sign Up </h3>
    
    
     <div class = "info1">
       <input type = "text" name = "firstname">
       <label> FIRSTNAME: </label>         <input type = "text" name = "lastname">
       <label> LASTNAME: </label>
     </div>
     
     <div class = "info2">
       <input type = "text" name = "signup_username" >
       <label>
         Username:
         </label>
     </div>
     
     <div class= "info3">
       <input type = "password" name = "signup_password">
       
       <label>
         Password:
         </label>
     </div>
     
     <input type = "submit" value = "SIGN UP"
      name = "signup_data" id = "choose1">
      
   <button id = "choose2" type = "button" onclick = "clearForm()">CLEAR DATA </button>
      
      <br>
      <br>
      <br>
      
      <h5 id = "foot"> 
        Already have an account? <a href = "index.php"> "CLICK HERE! </a>
      </h5>
      
      
    
     </form>
 </div>
 
 <script>
    function clearForm() {
      document.getElementById("myform").reset();
    }
  </script>
</body>
</html>
<?php



?>
