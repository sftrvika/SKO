<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SKO - Our Company Story</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    
  

   {{-- Navbar Components --}}
   @include('components.navbar',['textColor' => 'text-white'])
   {{-- Navbar Components --}}  
   
  <section class="bg-cover bg-center -z-50 w-screen h-screen flex justify-center items-center" style="background-image: url('img/bg2.png');">
      <h1 class="text-[50px] font-bold mb-4 text-white fonthin">OUR COMPANY STORY</h1>
  </section>

  <section class="bg-gray-50 py-20 h-90">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-4">THE HISTORY OF <span class="text-black">SKO</span></h2>
      <p class="text-lg text-gray-700 max-w-2xl mx-auto">Established in 2023 in Yogyakarta, Indonesia, SKO was founded by 6 students majoring in informatics who have a vision - mission to voice local brands to the international scene, especially shoes.</p>
    </div>
  </section>

  <footer class="bg-gray-800 py-6 h-80">
    <div class="container mx-auto px-4 text-center text-white">
      <div class="text-[150px] font-bold mb-2 logosko">SKO</div>
      <p class="text-sm">&copy; SKO 2023. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
