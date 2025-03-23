<link rel="stylesheet" href="../output.css">
<script src="https://kit.fontawesome.com/4be9701c6b.js" crossorigin="anonymous"></script>
<div class="btnOpen absolute top-11 left-3 hidden max-md:block text-4xl cursor-pointer">
    <button id="btnOpen"><i class="fa-solid fa-bars-staggered cursor-pointer"></i></button>
</div>
<div id="sidebar" class="side w-1/6 h-screen p-[2%] bg-[var(--color-background)] absolute top-0 max-md:hidden max-md:w-[45.5%] max-md:fixed max-md:bg-[var(--color-white)] max-md:pl-0 z-10">
    <div id="close" class="close absolute top-3 right-3 hidden max-md:block text-3xl">
    <i class="fa-solid fa-xmark cursor-pointer"></i>
    </div>
    <div class="logo w-full h-[18%] flex justify-center max-md:w-[90%] max-md:h-[16%] ">
        <img class="h-[80%] w-[60%] rounded-[50%]" src="../desktop/unfininshed_building.jpg" alt="">
    </div>
    <div class="elements h-[90%] w-[full] rounded  flex flex-col gap-6 text-[var(--color-info-dark)] bg-[var(--color-white)]">
        <div id="admin" class="dashboard h-8 pl-3 rounded flex items-center hover:bg-[var(--color-primary)] hover:text-[var(--color-white)]">
            <a class="flex gap-2 items-center" href="./index.php"><i class="fa-solid fa-house"></i>
                <span>Dashboard</span></a>
        </div>
        <div class="Admins h-8 pl-3 rounded flex items-center hover:bg-[var(--color-primary)] hover:text-[var(--color-white)]">
            <a class="flex gap-2 items-center" href="./admins.php"><i class="fa-solid fa-user"></i>
                <span>Admins</span></a>
        </div>
        <div class="Customers h-8 focus:bg-slate-400 pl-3 rounded flex items-center hover:bg-[var(--color-primary)] hover:text-[var(--color-white)]">
            <a class="flex gap-2 items-center" href="customers.php"><i class="fa-solid fa-users"></i>
                <span>Customers</span></a>
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
        const btnOpen = document.querySelector('#btnOpen'),
      sideBar = document.querySelector('#sidebar'),
      btnClose = document.querySelector('#close');
    //   console.log(sideBar);
      

btnOpen.addEventListener('click', (e)=>{
    // console.log('reached here');
    sideBar.classList.remove('max-md:hidden');
    btnOpen.classList.add('max-md:hidden');
    // console.log('reached here too');
    
})

btnClose.addEventListener('click', (e)=>{
    sideBar.classList.add('max-md:hidden')
    btnOpen.classList.remove('max-md:hidden');
})
    </script>
    <!-- <script>
        let element = document.getElementById("admin");
        console.log(element);
        
        element.addEventListener('click', (e)=>{
            e.preventDefault();
            element.classList.add('text-[var(--color-white)] bg-[var(--color-primary)]')
        })
    </script> -->
</div>