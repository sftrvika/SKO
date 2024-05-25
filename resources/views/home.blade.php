<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    @vite('resources/css/app.css')
    <title>SKO</title>
    <style>
        .dropdown-content {
            right: 0;
            left: auto;
        }
    </style>
 <link rel="icon" type="image/png" href="img/CMp3.png" />
</head>

<body>

   {{-- Navbar Components --}}
   @include('components.navbar')
   {{-- Navbar Components --}}

    <!-- Start Content Section -->
    <section>
        <div class="text-center  pt-[100px] lg:pt-[130px]">
            <p id="jumbotron">SEPATU LOKAL</p>
        </div>

        <div class="container max-w-[1200px] mt-[-150px] lg:mt-[-560px]">
            <p id="quote" class="hidden absolute mt-[580px] text-[17px] xl:block">Berkarya dengan gaya <br> SKO selalu
                tersedia.</p>
            <img class="mt-[50px] max-h-[900px]" src="img/sepatu 1.png" alt="">
            <div class="hidden lg:block" id="shadow"></div>
            <img class="hidden absolute h-[350px] mt-[-500px] ml-[950px] xl:block" src="img/sepatu 2.png" alt="">
            <div class=" lg:mt-[-220px]">
                <a href="shop"><button
                        class="rounded-lg text-sm px-24 py-10 mx-auto flex justify-between items-center custom-btn btn-15 ">Shop
                        Now</button></a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container w-full h-5 text-center mt-20">
            <p class="text-gray-500">©SKO 2023. All rights reserved.</p>
        </div>
    </footer>

    <script src="/js/script.js"></script>
    <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.profile-button') && !event.target.matches('.profile-button *')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.add('hidden');
                    }
                }
            }
        }
    </script>
</body>

</html>