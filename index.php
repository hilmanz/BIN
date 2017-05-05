<!DOCTYPE html>
<html lang="en">
<head>
<?php include("meta.php"); ?>
</head>
	<body>
	<?php include("header.php"); ?>	
	<?php 
    if($_GET['menu']=='organisasi'){
        include("organisasi.php");
    }else if($_GET['menu']=='inventory-laporan'){ 
        include("inventory-laporan.php");
    }else if($_GET['menu']=='inventory-laporan-organisasi'){ 
        include("inventory-laporan-organisasi.php");
    }else if($_GET['menu']=='profile-organisasi'){ 
        include("profile-organisasi.php");
    }else{ 
        include("dashboard.php");
    }?>
    <?php include("footer.php"); ?>	
  </body>
</html>
