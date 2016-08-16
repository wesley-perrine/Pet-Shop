<?php
    $pgTitle = 'Sandys Pet Shop';
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name='viewport' content='initial-scale=1.0, width=decive-width'/>
<title><?php echo $pgTitle; ?></title>
<script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
<script src='Scripts/main.js' type='text/javascript'></script>
<link href='CSS/reset-meyer.css' rel='stylesheet' type="text/css">
<link href='CSS/main.css' rel='stylesheet' type="text/css">
</head>    
<body> 
<!--Header-->
<header class='header'>
    <?php
      require 'Includes/Header.php';
    ?>
 </header>
   
<!--Main Content-->
<div class='maincontent'>
    <section id='overview'>
       <h1>Welcome to Sandy's Pet Shop!!!</h1><br>
       <p>Sandy's Pet Shop offfers a wide variety of services to get and keep your pet looking good. We welcome cats and dogs, all breeds and coat types. We are able to handle any age pet, but preffer that puppies be vaccinated and over six months.  Please feel free contact us with questions or to make a grooming appointment to get your pet the spa day they deserve!!</p><br>
       
       <ul><h1>Services</h1><br>
           <li>Bathing</li>
           <li>Coat Trims</li>
           <li>De-fur Brushing</li>
           <li>Extra Long Brushing Sessions</li>
           <li>Nail Trimming</li><br>
       </ul>
    </section>
    
    <section id='teddy'>
        <p>Meet Teddy!!!! Teddy is our unofficial mascot of Sandy's Pet Shop.</p>
        <img src='Images/teddy.jpg' alt="Teddy">        
    </section>
</div>

<!--Footer--> 
    <footer class='footer'>
        <?php
        require 'Includes/Footer.php';
        ?>
    </footer>
</body>
</html>