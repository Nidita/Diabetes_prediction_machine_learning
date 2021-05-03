<!DOCTYPE html>
<html lang="en">
<head>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .error {
            color: #FF0000;
        }
       
        body {
            font-family: "Lato", sans-serif;
        }
        
        body {
            margin: 1.5vw;
            padding: 1.5vw;
            background-color: #E0FFFF;
        }
        
        html,
        body {
            height: 100vh;
        }
        
       
        
        .fa-caret-down {
            float: right;
            padding-right: 2vw;
        }
     
        
        q {
            text-align: justify;
        }
        
        .container {
            text-align: left;
        }
  
    </style>
</head>

<body>
<div class="container">
<?php
// define variables and set to empty values
$Age = $Gender = $Polyuria = $Polyphagia = "";
$Polydipsia = $sudden_weight_loss = $weakness = $Genital_thrush = $visual_blurring = "";
$Itching= $Irritability = $delayed_healing = $partial_paresis = $muscle_stiffness = $Alopecia = $Obesity="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Age"])) {
      $Age = "Age is required";
    } 
    if (empty($_POST["Gender"])) {
        $Gender = "required";
      } 
      if (empty($_POST["Polyuria"])) {
        $Polyuria = "required";
      } 
      if (empty($_POST["Polyphagia"])) {
        $Polyphagia = "required";
      } 
      if (empty($_POST["Polydipsia"])) {
        $Polydipsia = "required";
      } 
      if (empty($_POST["sudden_weight_loss"])) {
        $sudden_weight_loss = "required";
      } 
      if (empty($_POST["weakness"])) {
        $weakness = "required";
      } 
      if (empty($_POST["Genital_thrush"])) {
        $Genital_thrush = "required";
      } 
      if (empty($_POST["visual_blurring"])) {
        $visual_blurring  = "required";
      } 
      if (empty($_POST["Itching"])) {
        $Itching = "required";
      } 
      if (empty($_POST["Irritability"])) {
        $Irritability = "required";
      } 
      if (empty($_POST["delayed_healing"])) {
        $delayed_healing = "required";
      } 
      if (empty($_POST["partial_paresis"])) {
        $partial_paresis = "required";
      } 
      if (empty($_POST["muscle_stiffness"])) {
        $muscle_stiffness= "required";
      } 
      if (empty($_POST["Alopecia"])) {
        $Alopecia  = "required";
      } 
      if (empty($_POST["Obesity"])) {
        $Obesity  = "required";
      } 
    }
    
?>
<!--Form-->
<h3 style="color:#32CD32">Fill Out the Information Below!</h3>
<p><span class="error">* required field</span></p>
    <form action="http://localhost:5000" method="post">
        <p><b>Enter your Age: </b></p>
        <p><input type="text" name="Age"  class="form-control"  style="width:50%"/></p>
        <span class="error">* <?php echo $Age;?></span>
        <br><br>

        <p><b>Enter your Gender: </b></p>
        <input type="radio" id="male" name="Gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="Gender" value="female">
        <label for="female">Female</label><br>
        
        <span class="error">* <?php echo $Gender;?></span>
        <br><br>
        <p><b>Do you have abnormally large amount of urine secretion? </b></p>
        <input type="radio" id="yes" name="Polyuria" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Polyuria" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Polyuria;?></span>
        <br><br>
        <p><b>Do you have excessive hunger or appetite? </b></p>
        <input type="radio" id="yes" name="Polyphagia" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Polyphagia" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Polyphagia;?></span>
        <br><br>
        <p><b>Do you have  excessive or abnormal thirst? </b></p>
        <input type="radio" id="yes" name="Polydipsia" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Polydipsia" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Polydipsia;?></span>
        <br><br>
        <p><b>Have you faced sudden weight loss? </b></p>
        <input type="radio" id="yes" name="sudden_weight_loss" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="sudden_weight_loss" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $sudden_weight_loss;?></span>
        <br><br>
        <p><b>Do you have weakness? </b></p>
        <input type="radio" id="yes" name="weakness" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="weakness" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $weakness;?></span>
        <br><br>
        <p><b>Do you have infection in genital area? :</b></p>
        <input type="radio" id="yes" name="Genital_thrush" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Genital_thrush" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Genital_thrush;?></span>
        <br><br>
        <p><b>Do you have blurry vision? </b></p>
        <input type="radio" id="yes" name="visual_blurring" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="visual_blurring" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $visual_blurring;?></span>
        <br><br>
        <p><b>Do you have Itching? </b></p>
        <input type="radio" id="yes" name="Itching" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Itching" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Itching;?></span>
        <br><br>
        <p><b>Do you have the feeling of agitation or irritation? </b></p>
        <input type="radio" id="yes" name="Irritability" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Irritability" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Irritability;?></span>
        <br><br>
        <p><b>Do you take much time for getting cured from wounds like cuts, scrapes, scratches? </b></p>
        <input type="radio" id="yes" name="delayed_healing" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="delayed_healing" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $delayed_healing;?></span>
        <br><br>
        <p><b>Do you have partial paralysis? :</b></p>
        <input type="radio" id="yes" name="partial_paresis" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="partial_paresis" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $partial_paresis;?></span>
        <br><br>
        <p><b>Do you feel that your muscles feel tight or have you ever find it more difficult to move ? </b></p>
        <input type="radio" id="yes" name="muscle_stiffness" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="muscle_stiffness" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $muscle_stiffness;?></span>
        <br><br>
        <p><b>Do you have large amount of hairloss? </b></p>
        <input type="radio" id="yes" name="Alopecia" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Alopecia" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Alopecia;?></span>
        <br><br>
        <p><b>Do you have Obesity? </b></p>
        <input type="radio" id="yes" name="Obesity" value="yes">
        <label for="yes">Yes</label><br>
       
        <input type="radio" id="no" name="Obesity" value="no">
        <label for="no">No</label><br>
        <span class="error">* <?php echo $Obesity;?></span>
        <br>

        <p><input type="submit"style="width:20%;height:3%;color:#006400" value="Submit your information &amp; Check it out!" /></p>
    </form>
    </div>
</body>

</html>