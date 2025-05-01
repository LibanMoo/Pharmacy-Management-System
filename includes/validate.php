<?php include '../includes/functions.php';
   header('Content-Type: application/json');


 
   
   if (isset($_POST['customer'])) {
    $customer = $_POST['customer'];
   
       // Make sure the value is safely quoted
       $result = read_where_limit('customers', "customer_name OR customer_number LIKE '%$customer%'", '3');
   
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
   } elseif(isset($_POST['product'])){
    $product = $_POST['product'];

    $result = read_where_limit('products', "product_name LIKE '%$product%'", '3');

       echo json_encode([
           "valid" => true,
           "product" => $result
       ]);
   } else {
       echo json_encode([
           "valid" => false,
           "message" => "No Data Found"
       ]);
   }
   
?>