<!--section booking-->

<!--part text and bottun-->
<div class=" bgME ">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class=" grid grid-cols-2  gap-10 w-full h-96">
            <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
                <div class="max-w-xl mb-6">
                    <h2 class="max-w-lg mb-6 font-sans text-xs font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        Lorem ipsum <br> dolor sit amet
                    </h2>
                    <p class=" text-xs text-white md:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div>
                    <button onclick="openModal(true)" class="inline-flex items-center justify-center h-12 px-5 mr-6 font-medium tracking-wide text-oceangreen-100 bg-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none ">
                        Book Now
                    </button>
                </div>
            </div>

            <!--part of images-->
            <div class=" w-ff h-full  relative">
                <div class=" w-80 h-56 absolute bottom-24 left-32 bg-white bg-opacity-25  rounded">
                    <div class="w-60 absolute border-8 top-8 right-32 rounded border-white border-opacity-25">
                        <img src="src/assets/img/booking1.jpg" class=" border-8 border-white rounded">
                    </div>
                    <div class="w-60 absolute border-8 top-24 left-7 rounded border-white border-opacity-25">
                        <img src="src/assets/img/booking2.jpg" class=" h-36 object-cover  border-8 border-white rounded">
                    </div>
                    <div class=" absolute border-8 right-1 top-4 rounded border-white border-opacity-25">
                        <img src="src/assets/img/booking3.jpg" class=" w-32 h-40 object-cover  border-8 border-white rounded">
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>


<!-- overlay -->
<div id="modal_overlay" class="hidden absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

    <!-- modal -->
    <div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300">

        <!-- button close -->
        <button onclick="openModal(false)" class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
            &cross;
        </button>

        <!-- header -->
        <div class="px-4 py-3 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-600"> Vikings Hotel</h2>
        </div>

        <!-- body -->
        <div class="w-full p-3 flex justify-between">
            <div class="w-7/12">
                <img src="./modal.jpg" alt="image of our hotel" class="h-80 w-80 object-cover">
            </div>
            <div class="w-5/12">
                <p class=" font-bold">
                    Dear Guest<br> <br>

                    It is our pleasure to welcome you to <small class="text-purple-700 text-lg font-sans">Vikings Hotel</small>. Whether you are traveling on business or pleasure, we know you have a variety of hotels to choose from. We strive to provide you a room that is clean and comfortable, with friendly attentive service at a value conscious price.
                </p>
            </div>

        </div>

        <!-- footer -->
        <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">

            <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none"> <a href="src/components/payment.php"> Next</a></button>
        </div>
    </div>

</div>
