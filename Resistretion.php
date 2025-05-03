<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MILAN</title>
</head>
<body>


    <div class="container"> 
       <form id="contact" action="#" method="POST">
       <h3>Resistretion Form</h3>

       <div class="topnav">
        <a class="active" href="Login.php">Home</a>
       
        </div>
      
      <fieldset>
        <label for="firstname">First name:</label><br>
        <input type="text" id="firstname" name="firstname" placeholder="First Name"><br><br>
        <label for="lastname">Last name:</label><br>
        <input type="text" id="lastname" name="lastname" placeholder="Last Name"><br><br>
        

        Country:<br>
        <input type="text" placeholder="Enter your Country name"> <br><br>



        City:<br>
        <input type="text" placeholder="Enter your city name"> <br><br>

        Marital Status:<br>
        <input type="text" placeholder="Enter your Marital Status"> <br><br>


    

        <p>please select your Gender</p>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label><br>

        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br>

        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label><br>

        <label for="email">Enter your E-mail</label>
        <input type="email" name="email" id="email" placeholder="Enter Your Email id "><br><br>
        <input type="button" value="Submit"><br><br>
      
    
    </fieldset>
       </form>


    </div>
</body>
</html>