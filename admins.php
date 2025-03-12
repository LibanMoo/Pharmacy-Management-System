<?php include './includes/init.php';
      include './includes/header.php';
      include './includes/sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="./lib/datatables/dataTables.css">
    <script src="https://kit.fontawesome.com/4be9701c6b.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-[var(--color-background)]">
    <div class="containerr w-[83%] h-screen ml-[16.6%] max-md:ml-0 max-md:w-full max-md:pl-[3%]">
        <div class="">
        <div class="admin w-[13%] h-[7%] bg-[var(--color-primary)] flex items-center justify-center rounded hover:cursor-pointer max-sm:w-[35%] max-md:w-[25%] ">
                <button onclick="callModal()" class="hover:cursor-pointer text-[var(--color-white)] text-bold">Add Admin</button>
            </div>
    <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Role </th>
            <th>Date</th>
            <th>Time</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (read('admins') as $admin){

         ?>
        <tr>
            <td><?= $admin['username'];?></td>
            <td><?= $admin['admin_name']?></td>
            <td><?= $admin['role']?></td>
            <td><?= $admin['date']?></td>
            <td><?= $admin['time']?></td>
            <td><i class="fa-solid fa-pen-to-square"></i></td>
            <td><?= $admin['time']?></td>
            
        </tr>
        <?php };?>
    </tbody>
</table>
</div>
<div class="modalBox" id="modalBox"></div>
</div>
.
<script src="./lib/jquery/jquery-3.7.1.js"></script>
<script src="./lib/datatables/dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

const modalBox = $('#modalBox');
console.log(modalBox)
function callModal(){
    $.ajax({
        url:'./modals/adminModal.php',
        type: 'POST',
        success: function (data){
            modalBox.html(data)
            // let modalContainer = $('#modalContainer');
            // console.log(modalContainer)
            console.log($('#close'))
            $('#close1').click(function (){
                console.log("You clicked me")
                $('#modalContainer').hide();
            })
            console.log("reached in the modal")
        },

        error: function(error){
             console.log(`Here is the error: ${error}`)
        }
    });
}
</script>
   
</body>
</html>