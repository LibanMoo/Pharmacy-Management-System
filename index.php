<?php include "./includes/init.php";
include "./includes/sidebar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <?php include "./includes/header.php";
  ?>
</head>
<body class="bg-[var(--color-background)] overflow-x-hidden">
  <div class="containerr ml-[16.6%] w-full h-screen flex bg-[var(--color-background)] max-md:ml-0">
  <div class="content w-[84%] flex flex-col gap-[10%] max-md:w-[100%] max-md:justify-center">
   <div class="chart flex gap-[4%] max-md:flex-col max-md:justify-center ">
  <div class="canvas shadow-md hover:shadow-none p-[2%] rounded w-[50%] max-md:w-[95%]">
  <canvas id="myChart"></canvas>
  </div>
  <div class="canvas1 shadow-md hover:shadow-none -[2%] rounded w-[50%] max-md:w-[95%]">
  <canvas id="myChart1"></canvas>
  </div>
</div>

  

<div class="relative overflow-x-auto overflow-y-auto sm:rounded-lg flex flex-col gap-5">
    <h3 class="text-center">Recents</h3>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
           
            <tr>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Page
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    User
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Time
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach(read_limit('sessions', 'session_id', 3) as $session ) {
                  
          ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $session['type'] ?>
                </th>
                <td class="px-6 py-4">
                <?= $session['page'] ?>
                </td>
                <td class="px-6 py-4">
                <?= $session['description'] ?>
                </td>
                <td class="px-6 py-4">
                <?= $session['username'] ?>
                </td>
                <td class="px-6 py-4">
                <?= $session['date'] ?>
                </td>
                <td class="px-6 py-4">
                <?= $session['time'] ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <h3 class="text-center mb-[5px] hover:underline"><a href="#">Read More...</a></h3>
</div>
</div>
  </div>

<script src="./includes/script.js"></script>
</body>
</html>