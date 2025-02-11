
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <?php include "./includes/header.php";
  ?>
</head>
<body>
  <div class="containerr w-full h-screen flex bg-[var(--color-background)]">
  <?php include "./includes/sidebar.php";
?>
  <div class="canvas w-[45%]">
  <canvas id="myChart"></canvas>
  </div>
  
  </div>

<script src="./includes/script.js"></script>
</body>
</html>