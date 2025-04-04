<?php
    header('content-type: application/json');
    if (isset($_POST['damiinInput'])){
      $customer = $_POST['damiinInput'];
    $result = read_where('customers', "customer_name = $customer");
    
    if ($result){
        json_encode($result);
    }
    else {
        echo 'No data found';
    }
    
}

?>