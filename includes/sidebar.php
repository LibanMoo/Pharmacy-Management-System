<link rel="stylesheet" href="../output.css">
<script src="https://kit.fontawesome.com/4be9701c6b.js" crossorigin="anonymous"></script>
<div class="side w-1/6 h-full p-[2%] bg-[var(--color-background)]">
    <div class="elements h-[90%] w-full rounded  flex flex-col gap-6 text-[var(--color-info-dark)] bg-[var(--color-white)]">
        <div id="admin" class="dashboard h-8 pl-3 rounded flex items-center hover:bg-[var(--color-primary)] hover:text-[var(--color-white)]">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-house"></i>
                <span>Dashboard</span></a>
        </div>
        <div class="Admins h-8 pl-3 rounded flex items-center hover:bg-[var(--color-primary)] hover:text-[var(--color-white)]">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-user"></i>
                <span>Admins</span></a>
        </div>
        <div class="Customers h-8 focus:bg-slate-400 pl-3 rounded flex items-center">
            <a class="flex gap-2 items-center" href="#"><i class="fa-solid fa-users"></i>
                <span class="text-[var(--color-info-dark)]">Customers</span></a>
        </div>
        <div class="dashboard h-8 color-third pl-3 rounded flex items-center">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-warehouse"></i>
                <span>Products</span></a>
        </div>
        <div class="dashboard h-8 color-third pl-3 rounded flex items-center">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-chart-line"></i>
                <span>Analytics</span></a>
        </div>
        <div class="dashboard h-8 pl-3 rounded flex items-center">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-bars-staggered"></i>
                <span>Retail</span></a>
        </div>
        <div class="dashboard h-8 pl-3 rounded flex items-center">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-truck"></i>
                <span>Companies</span></a>
        </div>
        <div class="history h-8 pl-3 rounded flex items-center">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-clock-rotate-left"></i>
                <span>History</span></a>
        </div>
        <div class="dashboard h-8 pl-3 rounded flex items-center">
            <a class="flex gap-2 items-center" href="../index.php"><i class="fa-solid fa-right-from-bracket"></i>
                <span>Log Out</span></a>
        </div>
        
    </div>
    <script>
        let element = document.getElementById("admin");
        console.log(element);
        
        element.addEventListener('click', (e)=>{
            e.preventDefault();
            element.classList.add('text-[var(--color-white)] bg-[var(--color-primary)]')
        })
    </script>
</div>