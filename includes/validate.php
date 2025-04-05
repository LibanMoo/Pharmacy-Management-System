<?php include '../includes/functions.php';
   header('Content-Type: application/json');
   
   if (isset($_POST['customer'])) {
       $customer = $_POST['customer'];
   
       // Make sure the value is safely quoted
       $result = read_where_limit('customers', "customer_name = '$customer'", '3');
   
       if ($result) {
           echo json_encode([
               "valid" => true,
               "customer" => $result
           ]);
       } else {
           echo json_encode([
               "valid" => false,
               "message" => "Customer not found"
           ]);
       }
   } else {
       echo json_encode([
           "valid" => false,
           "message" => "No customer sent"
       ]);
   }
   
?>