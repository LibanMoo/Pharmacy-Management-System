<!-- <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" /> -->
<link rel="stylesheet" href="../output.css">

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
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-4 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" method="post">
                    <h3 id="addAdmin" class="text-xl font-medium text-gray-900 dark:text-white">Register a new Transaction</h3>
                    <div id="total" class="hidden p-2 absolute top-9 right-2">
                    <input type="text" value="0" name="total" id="total"  class="text-gray-400 w-5 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5  items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">

                </div>
                    <div>
                        <label id="amountLabel" for="amount" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Amount</label>
                        <input type="number" name="amount" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-moz-inner-spin-button]:appearance-none [&::-moz-outer-spin-button]:appearance-none" placeholder="$" required="">
                    </div>
                    <div>
                        <label for="description" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Description</label>
                        <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="description" required="">
                    </div>
                    <div>
                        <input type="hidden" name="transaction" id="transaction" value="insert" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name" required="">
                    </div>
                    <div>
                        <label for="productOption" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Product</label>
                      <select name="productOption" id="productOption" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <option selected disabled>--- Select Role ---</option>
                        <option id="optionHaa" value="1">Haa</option>
                        <option id="optionMaya" value="0">Maya</option>
                      </select>
                      </div>
                      <div id="productRow" class="hidden">
                        <label for="productName" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Product Name</label>
                        <input list="productDatalist" type="text" name="productName" id="productName" onkeyup="validateProduct()" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="product name" required="">
                        <datalist id="productDatalist">

                        </datalist>
                    </div>
                    <div id="quantityRow" class="hidden">
                        <label for="quantity" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Quantity</label>
                        <input type="text" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="quantity" required="">
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                    <button id="register" name="send" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register Transaction</button>
                </form>
            </div>
        </div>
        <script src="../lib/jquery/jquery.min.js"></script>

        <script>
            const productOptions = $('#productOption'),
                  optionHaa = $('#optionHaa'),
                  optionMaya = $('#optionMaya'),
                  productRow = $('#productRow'),
                  quantityRow = $('#quantityRow'),
                  total = $('#total'),
                  productName = $('#productName'),
                  amountLabel = $('#amountLabel'),
                  productDatalist = $('#productDatalist');

            productOptions.on('change', (e)=>{
        console.log('here')
        const selectedValue = e.target.value;
        console.log(selectedValue);
        if (selectedValue == '1'){
            console.log('reached here')
            productRow.removeClass('hidden');
            quantityRow.removeClass('hidden');
            total.removeClass('hidden');
            amountLabel.text('Discount');
        }
        else if (selectedValue == '0'){
            console.log('reached the else')
           productRow.addClass('hidden')
           quantityRow.addClass('hidden')
           total.addClass('hidden')
           total.addClass('hidden')
           amountLabel.text('Amount');
        }
    })

    function validateProduct(){
      productName.on('keyup', function(){
        let product = $(this).val();
        console.log(product)
       console.log('hello')
        $.ajax({
           url: './includes/validate.php',
           type: 'POST',
           data: {product: product},
           dataType: 'json',
           success: (result)=>{
            console.log('reached here')
            console.log(result)
                 console.log(productDatalist)
                 if (result.valid){
                    productDatalist.html('');
                    console.log(result)
                    let damiinNameVal = '';
                    result.product.forEach((element)=>{
                     console.log('reached the foreach')
                     console.log(element['product_name'])
                   if(productDatalist.append(`<option id='productNameOption' value="${element['product_name']}"> ${element['product_name']} </option>`)){
                    
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

<!-- <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script> -->