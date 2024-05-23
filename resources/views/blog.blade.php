<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKO Footer</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-gray-100">
    <!-- Start Navbar -->
    <nav class="navbar bg-transparent w-full text-black py-4 lg:py-2 px-5">
        <div class="px-4 mx-auto items-center flex justify-between relative">

            <!-- Start Menu Button -->
            <div class="lg:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-gray-400 " x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Start Logo -->
            <div class="px-4">
                <a id="logo" class="py-6 text-xl hidden lg:static lg:block" href="">SKO<sup
                        style="font-family: Poppins; font-size: 14px;">®</sup></a>
            </div>
            <!-- Start Menu Navbar -->
            <div id="nav-menu"
                class="hidden absolute pt-4  bg-white shadow-lg rounded-lg max-w-[150px] w-full top-full lg:block lg:static lg:max-w-fit lg:shadow-none lg:bg-transparent  lg:pl-20">
                <ul id="navbar-nav" class="block lg:flex">
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="/">Home</a></li>
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="shop">Shop</a></li>
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="ourstory">Our Story</a></li>
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="blog">Blog</a></li>
                </ul>
            </div>

            <!-- Start Search -->
            <div class="w-5/6 md:w-1/4 xl:w-1/5">
                <form class="flex mx-3" action="">
                    <input class="focus:outline-none w-full mr-5 rounded-lg px-2" type="text" />
                    <button class="p-[6px] hover:bg-black hover:text-white rounded-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- End Search -->

        </div>
    </nav>
    <!-- End Navbar -->

    <footer class="bg-[#3C4043] text-white pt-20 ">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 mb-20">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- SKO Description -->
                <div>
                    <h2 class="text-lg font-bold mb-4">SKO</h2>
                    <p class="text-sm">Berkarya dengan gaya<br>SKO selalu tersedia.</p>
                    <div class="mt-4">
                        <h3 class="text-sm font-bold mb-2">OFFICIAL BRAND</h3>
                        <div class="flex space-x-4">
                            <img src="img/brand1.png" alt="Compass" class="h-8">
                            <img src="img/brand2.png" alt="Ventela" class="h-8">
                            <img src="img/brand3.png" alt="Patrobas" class="h-8">
                        </div>
                    </div>
                </div>
                <!-- Customer Service -->
                <div>
                    <h2 class="text-lg font-bold mb-4">CUSTOMER SERVICE</h2>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:underline">Kontak Kami</a></li>
                        <li><a href="#" class="hover:underline">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:underline">Pengiriman & Pengembalian</a></li>
                    </ul>
                </div>
                <!-- Tentang SKO -->
                <div>
                    <h2 class="text-lg font-bold mb-4">TENTANG SKO</h2>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:underline">Tentang SKO</a></li>
                        <li><a href="#" class="hover:underline">Official Brand</a></li>
                        <li><a href="#" class="hover:underline">Inspirasi</a></li>
                    </ul>
                </div>
                <!-- Hubungi Kami -->
                <div>
                    <h2 class="text-lg font-bold mb-4">HUBUNGI KAMI</h2>
                    <p class="text-sm mb-2">Alamat: Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten
                        Sleman, Daerah Istimewa Yogyakarta 55281</p>
                    <p class="text-sm mb-2">Email Support: skolocal@sko.com</p>
                    <p class="text-sm">CS SKO: 087812345678</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#"><img src="instagram-icon-url" alt="Instagram" class="h-6"></a>
                        <a href="#"><img src="twitter-icon-url" alt="Twitter" class="h-6"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 py-4 mt-auto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-sm">&copy;SKO 2023. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>