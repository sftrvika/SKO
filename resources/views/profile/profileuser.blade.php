<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  @vite('resources/css/app.css')
</head>
<body>

  {{-- Navbar Components --}}
  @include('components.navbar')
  {{-- Navbar Components --}}

  <!-- Profile Section -->
  <section class="flex items-center justify-center py-12 w-screen h-screen">
    <div class="p-6 md:p-12 rounded-lg max-w-4xl w-full mx-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Profile Image and Button -->
        <div class="flex flex-col items-center justify-around shadow-2xl rounded-3xl">
          <img src="img/logo.png" alt="Profile Image" class="w-72 aspect-square rounded-full shadow-md">
          <button class="mt-4 bg-[#FFF3B2] hover:bg-black text-gray-800 hover:text-white py-4 px-8 rounded-full shadow-md bodycopy">Change</button>

        </div>
        <!-- Profile Details -->
        <div class="flex flex-col gap-y-10">
          <h2 class="text-2xl mb-4 font-medium bodycopy">Profile</h2>
          <p class="text-lg"><span class="font-bold bodycopy">Username:</span> ZhafirZidan</p>
          <p class="text-lg mt-2"><span class="font-bold bodycopy">Email:</span> zidan@gmail.com</p>
          <p class="text-lg mt-2"><span class="font-bold bodycopy">Phone:</span> 085212345678</p>
          <p class="text-lg mt-2"><span class="font-bold bodycopy">Address:</span> Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
          <a class="self-end mt-4 w-fit py-5 px-10 bg-[#FFF3B2] hover:bg-black text-gray-800 hover:text-white rounded-xl shadow-md bodycopy" href="editprofile">Edit</a>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
