<!-- <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" /> -->
<link rel="stylesheet" href="../output.css">
<script src="../lib/jquery/jquery.min.js"></script>

<!-- This is an example component -->
<div id="modalContainer" class="w-full h-full fixed top-0 left-0 z-10 flex justify-center items-center bg-[var(--color-transparent)]">

    <!-- Modal toggle -->
    <!-- <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
    Toggle login modal
    </button> 

     Main modal -->
    <div class="bg-white rounded-lg shadow relative dark:bg-gray-700 w-[50%] max-md:w-[70%] max-sm:w-[90%]">
        <div class="flex justify-end p-2">
            <button type="button" id="close1" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <form class="space-y-4 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" method="post">
            <h3 id="addAdmin" class="text-xl font-medium text-gray-900 dark:text-white">Register a new Customer</h3>
            <div>
                <label for="name" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Customer Name</label>
                <input type="text" name="customerName" id="customerName" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Liban" required="">
            </div>
            <div>
                <label for="address" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Address</label>
                <input type="text" name="customerAddress" id="customerAddress" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Madiina" required="">
            </div>
            <div>
                <label for="number" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Customer Number</label>
                <input type="number" name="customerNumber" id="customerNumber" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-moz-inner-spin-button]:appearance-none [&::-moz-outer-spin-button]:appearance-none" placeholder="+252612569167" required="">
            </div>
            <div>
                <label for="role" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Damiin</label>
                <select name="damiinOptions" id="damiinOptions" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <option selected disabled>--- Damiin ---</option>
                    <option id="optionHaa" value="1">Haa</option>
                    <option id="OptionMaya" value="0">Maya</option>
                </select>
            </div>
            <div id="damiinRow" class="hidden">
                <label for="datalist" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Damiin Number</label>
                <input list="customersDatalist" name="damiinInput" id="damiinInput" onkeyup="validateCustomer()" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-moz-inner-spin-button]:appearance-none [&::-moz-outer-spin-button]:appearance-none" placeholder="Ali Abdi">
                <datalist id="customersDatalist">
                    <!-- <option id="validationOption" value="haa">haa</option>
                    <option id="validationOption" value="hee">haa</option> -->
                 </datalist>
            </div>
            <div class="flex justify-between">
                <div class="flex items-start">
                    <button id="register" name="send" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register Customer</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script> -->

<script>

    const optionHaa = $('#optionHaa'),
          optionMaya = $('#optionMaya'),
          damiinRow = $('#damiinRow'),
          damiinNameContent = $('#damiinNameContent'),
          damiinOptions = $('#damiinOptions'),
          damiinName = $('#damiinName');

    damiinOptions.on('change', (e)=>{
        console.log('here')
        const selectedValue = e.target.value;
        console.log(selectedValue);
        if (selectedValue == '1'){
            console.log('reached here')
            damiinRow.removeClass('hidden');
            damiinNameContent.removeClass('hidden');
        }
        else if (selectedValue == '0'){
            console.log('reached the else')
           damiinRow.addClass('hidden')
           damiinNameContent.addClass('hidden')
        }
    })

    function validateCustomer(){
      $('#damiinInput').on('keyup', function(){
        let customer = $(this).val();
        console.log(customer)
        let datalist = $('#customersDatalist');
       console.log('hello')
        $.ajax({
           url: './includes/validate.php',
           type: 'POST',
           data: {customer: customer},
           dataType: 'json',
           success: (result)=>{
            console.log('reached here')
            console.log(result)
         
                 let customersDatalist = $('#customersDatalist');
                 console.log(customersDatalist)
                 if (result.valid){
                    customersDatalist.html('');
                    console.log(result)
                    let damiinNameVal = '';
                    result.customer.forEach((element)=>{
                     console.log('reached the foreach')
                     console.log(element['customer_name'])
                   if(customersDatalist.append(`<option id='customerNameOption' value="${element['customer_number']}"> ${element['customer_name']} </option>`)){
                     damiinNameVal = element['customer_name'];
                     damiinName.val(damiinNameVal);
                   }  
                     
                    })
                 }
           },
           error: function(err) {
            console.log('reached the error')
            console.error(err)
           }
        })
    })
    }
</script>