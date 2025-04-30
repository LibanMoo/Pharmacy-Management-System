<?php include "./includes/init.php";
      include "./includes/header.php";

      $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="./lib/data/dataTables.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-[var(--color-background)]">
    <div class="container flex w-full h-screen">
        <div class="sidebar">
            <?php include "./includes/sidebar.php"; ?>
        </div>
        <div class="content w-full ml-[17%] flex flex-col  max-md:ml-0">
            <div class="deemaha w-full flex justify-between h-[8%] pr-4 max-md:pl-4">
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
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Total</th>
                        <th>Admin Username </th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $amount_cleaned = "";
                    foreach (read_where('deemaha', "customer_id = $id") as $deen) {
                        $amount_cleaned = str_replace("-", "", $deen['amount']);

                        foreach (getSum('deemaha', 'amount', 'total', "customer_id = $id") as $total) {
                            // echo $deen['total'];
                            if (empty($deen['total'])) {
                                $deen['total'] = 0;
                                // echo $deen['total'];
                            }
                       
                    ?>
                        <tr>
                            <td><?= $amount_cleaned; ?></td>
                            <td><?= $deen['description'] ?></td>
                            <td>$<?= $total['total'] ?></td>
                            <td><?= $deen['admin_username'] ?></td>
                            <td><?= $deen['date'] ?></td>
                            <td><?= $deen['time'] ?></td>
                            <td class="flex h-full gap-5 text-3xl">
                                <div class="view text-[var(--color-primary)] cursor-pointer"><i onclick="callModal();" class="fa-solid fa-pen-to-square"></i></div>
                                <div class="delete text-[var(--color-danger)] cursor-pointer">
                                    <i onclick="deleteModal();fillDeleteForm(<?= $customer['customer_id'] ?>, `<?= $customer['customer_name'] ?>`);" class="fa-solid fa-trash"> </i>
                                </div>
                            </td>
                        </tr>
                    <?php  }}; ?>
                </tbody>
            </table>
            </div>
        </div>
        <div id="modalBox" class="modalBox"></div>
    </div>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/data/dataTables.js"></script>

    <script>
          $(document).ready(function() {
            $('#myTable').DataTable({
                pagingType: 'full',
                order: [],
                select: true,
                language: {
                    searchPlaceholder: "...search"
                }


            });

        });

        const modalBox = $('#modalBox');

        function callModal() {
            $.ajax({
                url: './modals/deenModal.php',
                type: 'POST',
                async: false,
                success: function(data) {
                    modalBox.html(data)
                    // let modalContainer = $('#modalContainer');
                    // console.log(modalContainer)
                    console.log($('#close1'))
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
    </script>
</body>
</html>