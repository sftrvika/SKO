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
    @include('components.navbar',['color' => 'bg-white'])
    <!-- End Navbar -->

    <footer class="bg-[#3C4043] text-white pt-20 ">
        <div class="max-w-8xl mx-auto py-20 px-4 sm:px-6 lg:px-8 mb-20">
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
                    <ul class="text-sm space-y-8">
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
                    <ul class="text-sm space-y-8">
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
        <div class="bg-[#3C4040] py-4 mt-auto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-sm">&copy;SKO 2023. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>