<?php include "./includes/init.php";
      include "./includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="output.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-[var(--color-background)]">
    <div class="container flex w-full h-screen">
        <div class="sidebar">
            <?php include "./includes/sidebar.php"; ?>
        </div>
        <div class="content w-full h-full ml-[17%] max-md:ml-0">
            <div class="deemaha w-full flex justify-between h-[8%] pr-4">
        <div class="Deen_ku_dar w-[13%]  bg-[var(--color-primary)] flex items-center justify-center rounded hover:cursor-pointer max-sm:w-[35%] max-md:w-[25%] ">
                <button onclick="callModal()" class="hover:cursor-pointer text-[var(--color-white)] text-bold">Deen Ku dar</button>
            </div>
        <div class="Deen_ku_dar w-[13%] bg-[var(--color-primary)] flex items-center justify-center rounded hover:cursor-pointer max-sm:w-[35%] max-md:w-[25%] ">
                <button onclick="callModal()" class="hover:cursor-pointer text-[var(--color-white)] text-bold">Deen Ka jar</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>