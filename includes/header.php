<link rel="stylesheet" href="../output.css">
<script src="https://kit.fontawesome.com/4be9701c6b.js" crossorigin="anonymous"></script>
<div class="w-5/6 h-[130px] flex justify-between items-center p-10 bg-[var(--color-background)] ml-[16.6%] max-md:p-0">
    <div class="dark-mode bg-slate-700 w-14 h-6 rounded cursor-pointer flex justify-between items-center ml-[35%] max-md:ml-[25%] max-sm:ml-[10%]">
        <div class="light text-white p-0.5">
        <i class="fa-solid fa-sun"></i>
        </div>
        <div class="dark hidden">
        <i class="fa-solid fa-moon"></i>
        </div>
    </div>
    <div class="flex gap-8">
    <div class="text flex flex-col text-[var(--info-dark)]">
        <span><?= $_SESSION['admin_username'] ?></span>
        <span><?= $_SESSION['admin_role'] ?></span>
        </div>
        <img class="w-14 h-14 rounded-full" src="../bird-colorful-gradient-design-vector_343694-2506.avif" alt="">
        
    </div>
</div>