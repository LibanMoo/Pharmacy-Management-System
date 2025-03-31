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
<body class="bg-[var(--color-background)]">
    <div class="containerr">
        <div class="sidebar">
            <?php include './includes/sidebar.php'; ?>
        </div>
        <div class="content ml-[16.6%]">
        <div class="admin w-[13%] h-[7%] bg-[var(--color-primary)] flex items-center justify-center rounded hover:cursor-pointer max-sm:w-[35%] max-md:w-[25%] ">
                <button onclick="callModal()" class="hover:cursor-pointer text-[var(--color-white)] text-bold">Add Customer</button>
            </div>
            <table id="myTable" class="stripe row-border hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Address </th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (read('customers') as $customer) {
                    ?>
                        <tr>
                            <td><?= $customer['customer_name']; ?></td>
                            <td><?= $customer['customer_number'] ?></td>
                            <td><?= $customer['address'] ?></td>
                            <td><?= $customer['address'] ?></td>
                            <td><?= $customer['date'] ?></td>
                            <td><?= $customer['time'] ?></td>
                            <td class="flex h-full gap-5 text-3xl">
                                <div class="edit text-[var(--color-primary)] cursor-pointer"><i onclick="callModal();fillForm(<?= $admin['admin_id']; ?>);" class="fa-solid fa-pen-to-square"></i></div>
                                <div class="delete text-[var(--color-danger)] cursor-pointer">
                                    <i onclick="deleteModal();fillDeleteForm(<?= $admin['admin_id']?>, `<?= $admin['username'] ?>`);" class="fa-solid fa-trash"></i>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/datatables/dataTables.js"></script>
</body>
</html>