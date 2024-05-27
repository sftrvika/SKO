@extends('../layout/main')

@section('head')
<title>Home - SKO</title>
@endsection

@section('content')

<main class="container px-4 md:px-10 py-28">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
    <!-- Left Column -->
    <div class="flex flex-col items-start space-y-6">
      <div class="flex flex-col space-y-2">
        <div class="flex items-center space-x-2">
          <div class="bg-[#F8F7F3] rounded-lg p-2 shadow-xl">12Oz</div>
          <span>Using 12oz canvas material</span>
        </div>
        <div class="flex items-center space-x-2">
          <div class="bg-[#F8F7F3] rounded-lg p-2 shadow-xl">Low Cut</div>
          <span>Low cut shoes</span>
        </div>
      </div>

      <div class="bg-[#F8F7F3] p-4 rounded-lg shadow-xl w-1/4">
        <h3 class="text-center md:text-left mb-2">Size chart</h3>
        <table class="w-full text-center md:text-left">
          <thead>
            <tr>
              <th class="font-medium">Size</th>
              <th class="font-medium">CM</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>36</td>
              <td>24CM</td>
            </tr>
            <tr>
              <td>37</td>
              <td>24.5CM</td>
            </tr>
            <tr>
              <td>38</td>
              <td>25CM</td>
            </tr>
            <tr>
              <td>39</td>
              <td>26CM</td>
            </tr>
            <tr>
              <td>40</td>
              <td>26.5CM</td>
            </tr>
            <tr>
              <td>41</td>
              <td>27CM</td>
            </tr>
            <tr>
              <td>42</td>
              <td>27.5CM</td>
            </tr>
            <tr>
              <td>43</td>
              <td>28.5CM</td>
            </tr>
            <tr>
              <td>44</td>
              <td>29CM</td>
            </tr>
            <tr>
              <td>45</td>
              <td>29.5CM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Center Column -->
    <div class="flex flex-col items-center justify-center space-y-6">
      <div class="relative ">
        <img src="dist/img/Cmp2.png" alt="Proto Lite Purple" class="mx-auto w-70 aspect-square">
        <div class="flex justify-center mt-4 space-x-2">
          <img src="dist/img/Cmp2.png" alt="Proto Lite Purple" class="w-16 h-16 object-cover rounded-lg shadow-md">
          <img src="dist/img/Cmp2.png" alt="Proto Lite Purple" class="w-16 h-16 object-cover rounded-lg shadow-md">
        </div>
        <button class="absolute left-0 top-1/2 transform -translate-y-1/2" onclick="scrollLeft('productImages')"
          aria-label="Scroll Left">
          <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <line x1="15" y1="19" x2="9" y2="12" stroke-width="2" stroke-linecap="round" />
            <line x1="9" y1="12" x2="15" y2="5" stroke-width="2" stroke-linecap="round" />
          </svg>
        </button>
        <button class="absolute right-0 top-1/2 transform -translate-y-1/2" onclick="scrollRight('productImages')"
          aria-label="Scroll Right">
          <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <line x1="9" y1="19" x2="15" y2="12" stroke-width="2" stroke-linecap="round" />
            <line x1="15" y1="12" x2="9" y2="5" stroke-width="2" stroke-linecap="round" />
          </svg>
        </button>

      </div>
    </div>

    <!-- Right Column -->
    <div class="flex flex-col items-center md:items-start space-y-6">
      <div class="space-y-2 text-center md:text-left">
        <div class="flex items-center justify-center md:justify-start space-x-2">
          <span class="text-yellow-500">★★★★★</span>
          <span>372 Reviews</span>
        </div>
        <h2 class="text-2xl font-bold">Sepatu Compass</h2>
        <h1 class="text-3xl font-bold">Proto Lite Purple</h1>
        <p class="text-red-600 text-xl">IDR 578.000</p>

        <div class="grid grid-cols-5 gap-2 my-4">
          <button class="p-2 border rounded">36</button>
          <button class="p-2 border rounded">37</button>
          <button class="p-2 border rounded">38</button>
          <button class="p-2 border rounded">39</button>
          <button class="p-2 border rounded">40</button>
          <button class="p-2 border rounded">41</button>
          <button class="p-2 border rounded">42</button>
          <button class="p-2 border rounded">43</button>
          <button class="p-2 border rounded">44</button>
          <button class="p-2 border rounded">45</button>
        </div>

        <p>About</p>
        <p class="text-sm">Following the footsteps of the PROTO 1 article, Compass® RESEARCH & DESTROY presents a
          basic variation of its popular predecessor titled PROTO LITE. Signature R&D elements are simplified for a
          more casual wear, while the four bold colours and metallic detail, add a punchy statement to your every
          look.</p>
        <button class="bg-yellow-300 text-black py-2 px-4 rounded-md shadow-md mt-4">Buy</button>
      </div>
    </div>
  </div>
</main>

<footer class="px-8 py-4 text-center text-black">
  ©SKO 2023. All rights reserved.
</footer>
@endsection