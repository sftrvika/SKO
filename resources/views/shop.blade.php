<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKO</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F8F7F3] text-[#3C4043]">
 
  {{-- Navbar Components --}}
  @include('components.navbar')
  {{-- Navbar Components --}}

    <main class="container-sm px-10 py-24">
        <section class="mb-16">
            <h2 class="text-2xl font-semibold">Sepatu Compass</h2>
            <div class="flex flex-col md:flex-row justify-between gap-2">
                <div class="text-center">
                    <img src="img/Cmp1.png" alt="Compass Gazelle Low Black Gum" class="mx-auto">
                    <h3 class="mt-4">Compass Gazelle Low Black Gum</h3>
                    <p class="text-red-600">IDR 408.000</p>
                </div>
                <div class="text-center">
                    <a href="product">
                        <img src="img/Cmp2.png" alt="Proto Lite Purple" class="mx-auto">
                        <h3 class="mt-4">Proto Lite Purple</h3>
                        <p class="text-red-600">IDR 578.000</p>
                    </a>
                </div>
                
                <div class="text-center">
                    <img src="img/Cmp3.png" alt="Retrograde Low White Blue" class="mx-auto">
                    <h3 class="mt-4">Retrograde Low White Blue</h3>
                    <p class="text-red-600">IDR 538.000</p>
                </div>
            </div>
        </section>
        <section>
            <h2 class="text-2xl font-semibold mt-20">Sepatu Ventela</h2>
            <div class="flex flex-col md:flex-row justify-between gap-2">
                <div class="text-center">
                    <img src="img/Ven1.png" alt="Public Low Black Natural" class="mx-auto">
                    <h3 class="mt-4">Public Low Black Natural</h3>
                    <p class="text-red-600">IDR 229.000</p>
                </div>
                <div class="text-center">
                    <img src="img/Ven2.png" alt="Public Low Grey" class="mx-auto">
                    <h3 class="mt-4">Public Low Grey</h3>
                    <p class="text-red-600">IDR 239.000</p>
                </div>
                <div class="text-center">
                    <img src="img/Ven3.png" alt="Public Low Yellow" class="mx-auto">
                    <h3 class="mt-4">Public Low Yellow</h3>
                    <p class="text-red-600">IDR 239.000</p>
                </div>
            </div>
        </section>
    </main>
    <footer class="px-8 py-4 text-center text-black">
        ©SKO 2023. All rights reserved.
    </footer>
</body>
</html>
