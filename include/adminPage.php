<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>

<div id="leftMenu">
   <div id="logoAdmin"></div>
   <ul>
        <li ><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
        <li onclick="selectOptionAdmin(1)"><a href="#"><i class="fas fa-plus-square"></i> Add services</a></li>
        <li onclick="selectOptionAdmin(2)"><a href="#"><i class="far fa-trash-alt"></i> Delete Services</a></li>
        <li onclick="selectOptionAdmin(3)"><a href="#"><i class="far fa-eye"></i> Go appointments</a></li>
   </ul>
</div>

<div id="rigthArea">

<div id="wrap-serviciiAdmin"> 
   <div id="optionAdmin1">
   <h2>Add services</h2>
      <form action="../include/addServices.php" method="post">
         <input type="text" id="serviciu" name="serviciu" placeholder="Add services"/>
         <input type="text" id="pret" name="pret" placeholder="Add pricet"/>
         <input type="submit" id="submitServici" value="Send"/>
      </form>
   </div>
   <div id="optionAdmin2">
      <h2>Select the services you want to delete</h2>
      <?php include "../include/selectToDelServices.php"; ?>
   </div>
   <div id="optionAdmin3">
      
   <h2>appointments List : </h2>
   <?php include "../include/showProgramari.php"; ?>
   </div>
</div>


</div>
<script src="../js/script.js"></script>
</body>
</html>
