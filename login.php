<?php  session_start();
     include "./includes/functions.php";
 
    if(isset($_POST['btn_login'])){
       $username = escape($_POST['username']);
       $password = md5(trim(escape($_POST['password'])));

       $admin = read_where('admins', "username = '{$username}' and password = '{$password}'");

       

       if ($admin){
        if (headers_sent()) {
            die("Headers already sent");
        }
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_id'] = $admin[0]['admin_id'];
        $_SESSION['admin_role'] = $admin[0]['role'];
        $_SESSION['isLogin']  = true;
        
        // filling the session data

        // getting the local date
       
        $get_date = new DateTime("now", new DateTimeZone("Africa/Mogadishu"));
        $date = $get_date->format('Y-m-d');
        $time = $get_date->format('H:i:s');

        $info = [
            'user_ref'=> $_SESSION['admin_id'],
            'username'=>  $_SESSION['admin_username'],
            'date'=> $date,
            'time'=> $time

        ];
        insert('login_session', $info);
        if (!insert('login_session', $info)) {
            die("Database insert failed");
        }
        
        header("location: index.php");
        exit;
       }
       else {
        echo "invalid email or password";
       }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="output.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="containerr w-full h-screen flex flex-col justify-center items-center bg-[var(--color-background)]">
        
        <form method="post" class= "w-[50%] h-[70%] flex flex-col gap-[5%] pl-10 pr-10 pt-5 bg-[var(--color-white)] items-center max-md:w-[70%] max-sm:w-[90%]">
        <h2 class="font-semibold">Login</h2>
            <input class="w-full bg-[var(--color-background)] h-[12%] pl-[2%] rounded focus:border-2 focus:border-[var(--color-success)]" type="text" name="username" placeholder="Username">
            <input class="w-full bg-[var(--color-background)] h-[12%] pl-[2%] rounded" type="password" name="password" placeholder="Password">
            <input class="w-[30%] bg-[var(--color-success)] text-white font-semibold h-[15%] rounded cursor-pointer max-sm:h-[10%]" type="submit" value="Send" name="btn_login">
        </form>
    </div>
</body>
</html>