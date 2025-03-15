<?php include './includes/init.php';
      include './includes/header.php';


  if (isset($_POST['send'])){
    function randomPassword() {
        $alphabet = '1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        
        return implode($pass); //turn the array into a string
        
    }

    $generatedPass = randomPassword();
 
    $get_date = new DateTime("now", new DateTimeZone("Africa/Mogadishu"));
    $date = $get_date->format('Y-m-d');
    $time = $get_date->format('H:i:s');

    $info = [
    
    'username' => escape($_POST['username']),
    'admin_name' => escape($_POST['name']),
    'role' => escape($_POST['role']),
    'password' => md5($generatedPass),
    'date' => $date,
    'time' => $time
    ];
    if (insert('admins', $info)) {
       echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'> </script>";
       echo " <script> Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
});
</script>";

       
    }
  }

  
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
    <div class="containerr w-[100%] h-screen  max-md:ml-0 max-md:w-full max-md:pl-[3%] flex">
        <div class="sidebar"><?= include './includes/sidebar.php';?></div>
        <div class="content w-full ml-[16.6%] max-md:ml-0">
        <div class="admin w-[13%] h-[7%] bg-[var(--color-primary)] flex items-center justify-center rounded hover:cursor-pointer max-sm:w-[35%] max-md:w-[25%] ">
                <button onclick="callModal()" class="hover:cursor-pointer text-[var(--color-white)] text-bold">Add Admin</button>
            </div>
    <table id="myTable" class="">
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
            <td class="flex h-full gap-5 text-3xl max-md:text-4xl max-sm:text-5xl "> <div class="edit text-[var(--color-primary)] cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></div>
            <div class="delete text-[var(--color-danger)] cursor-pointer">
            <i class="fa-solid fa-trash"></i>
            </div>
        </td>
        </tr>
        <?php };?>
    </tbody>
</table>
</div>
<div class="modalBox" id="modalBox"></div>
<div class="notifications"></div>
</div>
<script src="./lib/jquery/jquery-3.7.1.js"></script>
<script src="./lib/datatables/dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        pagingType: 'full',
        language: {
            searchPlaceholder: "...search"
        }


    });

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

function notification (message, color){
    let content = document.querySelector(".notification");
    content.innerHTML("")
}
</script>
   
</body>
</html>