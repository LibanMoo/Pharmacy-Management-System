<?php include "functions.php";
     if (isset($_POST['action']) and $_POST['action'] == 'update'){
          $result = read_where($_POST['table'], 'admin_id ='. $_POST['id']);
          echo json_encode($result[0]);
     };
?>