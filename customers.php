<?php include './includes/init.php';
include './includes/header.php';


if (isset($_POST['send'])) {
    $get_date = new DateTime("now", new DateTimeZone("Africa/Mogadishu"));
    $date = $get_date->format('Y-m-d');
    $time = $get_date->format('H:i:s');

    $damiin_number = $_POST['damiinInput'];
    if (isset($damiin_number)) {
        foreach (read_where('customers', "customer_number = $damiin_number") as $damiinNum) {
            $damiin_name = $damiinNum['customer_name'];
        }
        $info = [
            'customer_name' => $_POST['customerName'],
            'address' => $_POST['customerAddress'],
            'customer_number' => $_POST['customerNumber'],
            'damiin' => $_POST['damiinOptions'],
            'damiin_number' => $_POST['damiinInput'],
            'damiin_name' => $damiin_name,
            'user_ref' => $_SESSION['admin_id'],
            'admin_username' => $_SESSION['admin_username'],
            'date' => $date,
            'time' => $time
        ];
        if (insert('customers', $info)) {
        }
    } else {
        $info = [
            'customer_name' => $_POST['customerName'],
            'address' => $_POST['customerAddress'],
            'customer_number' => $_POST['customerNumber'],
            'damiin' => $_POST['damiinOptions'],
            'admin_username' => $_SESSION['admin_username'],
            'user_ref' => $_SESSION['admin_id'],
            'date' => $date,
            'time' => $time
        ];
        if (insert('customers', $info)) {
        };
    }
}

if (isset($_POST['btn_delete'])){
    $customer_id = $_POST['id'];
    delete('customers', "customer_id = $customer_id");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="lib/data/dataTables.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-[var(--color-background)]">
    <div class="containerr w-[100%] flex h-screen">
        <div class="sidebar">
            <?php include './includes/sidebar.php'; ?>
        </div>
        <div class="content w-full ml-[17%] max-md:ml-0">
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
                                <div class="view text-[var(--color-primary)] cursor-pointer"><a href="deemaha.php?id=<?= $customer['customer_id']?>"><i class="fa-solid fa-eye"></i></a></div>
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
    <div id="modalBox"></div>
    </div>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/data/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                pagingType: 'full',
                language: {
                    searchPlaceholder: "...search"
                }


            });

        });

        const modalBox = $('#modalBox');
        console.log(modalBox)


        function callModal() {
            $.ajax({
                url: './modals/customerModal.php',
                type: 'POST',
                async: false,
                success: function(data) {
                    modalBox.html(data)
                    // let modalContainer = $('#modalContainer');
                    // console.log(modalContainer)
                    console.log($('#close'))
                    $('#close1').click(function() {
                        // console.log("You clicked me")
                        $('#modalContainer').hide();
                    })
                    console.log("reached in the modal")
                },

                error: function(error) {
                    console.log(`Here is the error: ${error}`)
                }
            });
        }

        function deleteModal() {
            $.ajax({
                url: './modals/deleteModal.php',
                type: 'POST',
                async: false,
                success: function(data) {
                    modalBox.html(data)
                    // let modalContainer = $('#modalContainer');
                    // console.log(modalContainer)
                    // console.log($('#close'))
                    $('#close1').click(function() {
                        console.log("You clicked me")
                        $('#modalContainer').hide();
                    })
                    console.log("reached in the modal")
                },

                error: function(error) {
                    console.log(`Here is the error: ${error}`)
                }
            });
        }

        function fillDeleteForm(id, username) {
            $('#username').text(username);
            $('#valId').val(id);

            console.log(typeof id)
        }
    </script>
</body>

</html>