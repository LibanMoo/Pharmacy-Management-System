<?php include './includes/init.php';
      include './includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="output.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="containerr">
        <div class="sidebar">
            <?php include './includes/sidebar.php'; ?>
        </div>
        <div class="content ml-[16.6%]">
        <div class="admin w-[13%] h-[7%] bg-[var(--color-primary)] flex items-center justify-center rounded hover:cursor-pointer max-sm:w-[35%] max-md:w-[25%] ">
                <button onclick="callModal()" class="hover:cursor-pointer text-[var(--color-white)] text-bold">Add Customer</button>
            </div>
        </div>
    </div>
</body>
</html>