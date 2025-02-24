<?php include "functions.php";
      include "sessions.php";

      if (!isset($_SESSION['admin_id']) && $_SESSION['isLogin']!== true){
            header('location: login.php');
      };
?>