<?php include './includes/init.php';
      include './includes/header.php';
      include './includes/sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="./lib/datatables/dataTables.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-[var(--color-background)]">
    <div class="containerr w-full h-screen ml-[16.6%]">
        
    <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
<script src="./lib/jquery/jquery-3.7.1.js"></script>
<script src="./lib/datatables/dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    </div>
</body>
</html>