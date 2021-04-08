<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal</title>
    <link rel="stylesheet" href="../../public/styles/main.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" integrity="sha384-vuFJ2JiSdUpXLKGK+tDteQZBqNlMwAjhZ3TvPaDfN9QmbPb7Q8qUpbSNapQev3YF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- overlay -->
    <div id="modal_overlay" class=" absolute inset-0 bg-black bg-opacity-30 h-screen w-full  flex justify-center items-start md:items-center pt-10 md:pt-0">




        <!-- component -->

        <div class="flex flex-row items-center">
            <!--the first div , it has form booking --->

            <div>

                <!-- ---------------header------------------ -->

                <form class="max-w-xl  m-2 p-5 bg-white rounded shadow-xl ">
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


                    <!-- <div>
      <button class="px-4 py-1 text-white  tracking-wider bg-gray-900  hover:bg-gray-700 rounded" type="submit"> <a href="./model.php">back</a></button>
      </div> -->

                    <div class="mt-4 ml-8 ">
                        <button class=" w-96 bg-green-500 hover:bg-green-600 px-4 py-1 text-white  tracking-wider  rounded" type="submit"> Subscribe Now </button>
                    </div>



                </form>
            </div>

            <!-- the second div it has side page -->

            <div class=" p-5 rounded shadow bg-gray-800 w-96   ">

                <!-- person info -->

                <div class="font-medium border-b-2 border-white h-10 relative ">
                    <h2 class="text-white text-2xl absolute bottom-2 left-16">information summary</h2>
                </div>

                <div class="flex flex-col justify-between text-white">
                    <div class="flex flex-col mt-2"> <span>Guest full Name :</span> <span class="text-gray-300">Mr.Mohamed Barada</span> </div>
                    <div class="flex flex-col mt-2"> <span>Email :</span> <span class="text-gray-300"> flan@gmail.com</span> </div>
                    <div class="flex flex-col mt-2"><span>Number Phone :</span> <span class="text-gray-300">+212662386767</span> </div>
                    <div class="flex flex-col mt-2"> <span>Address :</span> <span class="text-gray-300">hay flan N°87 Casablanca Maroc</span></div>
                    <div class="flex flex-row justify-between mt-2">
                        <div class="flex flex-col"> <span>Arrival Date</span> <span class="text-gray-300">07.07.2021</span></div>
                        <div class="flex flex-col float-right text-white "> <span>Departure Date</span> <span class="text-gray-300">01.08.2021</span></div>
                    </div>
                </div>

                <!-- payment info -->

                <div class="font-medium border-b-2 border-white h-14 relative ">
                    <h2 class="text-white text-2xl absolute bottom-2 left-16">payment information</h2>
                </div>

                <div class="flex flex-col mt-2 text-white"><span>The amount withdrawn :</span> <span class="text-white text-xl font-bold">$1600.00</span>
                </div>

                <!-- Bookings Terms & Conditions -->

                <div class="font-medium border-b-2 border-white h-14 relative ">
                    <h2 class="text-white text-2xl bottom-0 absolute ">Bookings Terms & Conditions</h2>
                </div>

                <div class="flex flex-col text-white text-xs">
                    <span>Rates are subject to change without prior notice.</span>
                    <span>Payment can be made by company’s cheque, cash or credit card.</span>
                    <span>Reservations will be release automatically if full payment is not received by the hotel.</span>
                    <span>Early check-in are subject to room availability.</span>
                </div>


            </div>




        </div>

</body>

</html>