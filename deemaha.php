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
            <div class="tablle">
            <table id="myTable" class="stripe row-border hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Address </th>
                        <th>Total</th>
                        <th>Admin Username</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (read('customers') as $customer) {
                        foreach (getSum('deemaha', 'amount', 'total', $customer['customer_id']) as $deen) {
                            // echo $deen['total'];
                            if (empty($deen['total'])) {
                                $deen['total'] = 0;
                                // echo $deen['total'];
                            }
                        }
                    ?>
                        <tr>
                            <td><?= $customer['customer_name']; ?></td>
                            <td><?= $customer['customer_number'] ?></td>
                            <td><?= $customer['address'] ?></td>
                            <td>$<?= $deen['total'] ?></td>
                            <td><?= $customer['admin_username'] ?></td>
                            <td><?= $customer['date'] ?></td>
                            <td><?= $customer['time'] ?></td>
                            <td class="flex h-full gap-5 text-3xl">
                                <div class="view text-[var(--color-primary)] cursor-pointer"><i onclick="callModal();fillForm(<?= $admin['admin_id']; ?>);" class="fa-solid fa-eye"></i></div>
                                <div class="delete text-[var(--color-danger)] cursor-pointer">
                                    <i onclick="deleteModal();fillDeleteForm(<?= $customer['customer_id'] ?>, `<?= $customer['customer_name'] ?>`);" class="fa-solid fa-trash"> </i>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>