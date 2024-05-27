<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SKO</title>
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
        <div class="flex flex-col gap-y-11">
          <h2 class="text-2xl bodycopy font-medium mb-4">Profile</h2>
          <div class="flex gap-x-4 items-center">
            <label for="username" class="bodycopy text-base w-1/4">Username:</label>
            <input type="text" id="username" name="username" class="p-2 border rounded-md w-3/4" value="">
          </div>
          <div class="flex gap-x-4 items-center">
            <label for="email" class="bodycopy text-base w-1/4">Email:</label>
            <input type="email" id="email" name="email" class="p-2 border rounded-md w-3/4" value="">
          </div>
          <div class="flex gap-x-4 items-center">
            <label for="phone" class="bodycopy text-base w-1/4">Phone:</label>
            <input type="text" id="phone" name="phone" class="p-2 border rounded-md w-3/4" value="">
          </div>
          <div class="flex gap-x-4 items-center">
            <label for="address" class="bodycopy text-base w-1/4">Address:</label>
            <input type="text" id="address" name="address" class="p-2 border rounded-md w-3/4" value="">
          </div>
          <div class="flex justify-end gap-4 mt-4">
            <a href="profile" class="py-5 px-10 border-2 border-gray-400 hover:border-black text-gray-500 hover:text-black rounded-xl shadow-md bodycopy">Cancel</a>
            <a href="profile" class="py-5 px-10 bg-[#FFF3B2] hover:bg-black text-gray-800 hover:text-white rounded-xl shadow-md bodycopy">Save</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
