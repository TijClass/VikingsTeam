<!-- overlay -->
<div id="modal_overlay" class=" absolute inset-0 bg-black bg-opacity-30 h-screen w-full  flex justify-center items-start md:items-center pt-10 md:pt-0">
    <!-- component -->

    <!-- ---------------header------------------ -->

    <form class="max-w-xl m-4 p-5 bg-white rounded shadow-xl ">
        <p class="text-gray-800 font-medium border-b-4 border-black ">Booking Form</p>

        <!-- ---------------body------------------ -->

        <div class=" flex justify-between">
            <div>
                <label class="block text-sm text-gray-00">Full Name : </label>
                <input class="w-52 px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" placeholder="Frist Name">
            </div>
            <div>
                <input class="w-52 px-5 py-1 text-gray-700 bg-gray-200 rounded ml-2 mt-5" id="cus_name" name="cus_name" type="text" placeholder="Last Name">
            </div>
        </div>

        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="cus_email">Email :</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="email" placeholder="Your Email">
        </div>

        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="cus_email">Number Phone :</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" placeholder="Your Number phone">
        </div>

        <div class="mt-2">
            <label class=" block text-sm text-gray-600" for="cus_email">Address :</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" placeholder="  Your Adress">
        </div>

        <div class="mt-2">
            <div class=" flex justify-between">
                <div>
                    <label class="block text-sm text-gray-00">Date : </label>
                    <input class="w-52 px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" placeholder="Arrival Date">
                </div>
                <div>
                    <input class="W-52 px-5 py-1 text-gray-700 bg-gray-200 rounded ml-4 mt-5" id="cus_name" name="cus_name" type="text" placeholder="Departure Date">
                </div>
            </div>
        </div>

        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="cus_email">Note :</label>
            <input class="w-full px-5 h-16 py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" placeholder="area text">
        </div>

        <p class="mt-4 text-gray-800 font-medium">Payment information</p>
        <div class="">
            <label class="block text-sm text-gray-600" for="cus_name">Card :</label>
            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" placeholder="Card Number MM/YY CVC">
        </div>

        <!-- ---------------footer------------------ -->

        <div class="mt-4 flex justify-between ">
            <div>
                <button class="px-4 py-1 text-white  tracking-wider bg-gray-900  hover:bg-gray-700 rounded" type="submit"> <a href="./model.php">back</a></button>
            </div>

            <div>
                <button class=" bg-green-500 hover:bg-green-600 px-4 py-1 text-white  tracking-wider b rounded" type="submit"> Submit </button>
            </div>
        </div>
    </form>
</div>