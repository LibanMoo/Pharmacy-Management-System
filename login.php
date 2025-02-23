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
        
        <form method="post" class= "w-[50%] h-[70%] flex flex-col gap-[4%] pl-10 pr-10 pt-5 bg-[var(--color-white)] items-center">
        <h2 class="font-semibold">Login</h2>
            <input class="w-full bg-[var(--color-background)] h-[12%] pl-[2%] rounded" type="text" name="username" placeholder="Username">
            <input class="w-full bg-[var(--color-background)] h-[12%] pl-[2%] rounded" type="password" name="password" placeholder="Password">
            <input class="w-[30%] bg-[var(--color-success)] text-white font-semibold h-[15%] rounded cursor-pointer" type="submit" value="Send" name="send">
        </form>
    </div>
</body>
</html>