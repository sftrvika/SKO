@extends('../layout/main')

@section('head')
<title>Home - SKO</title>
@endsection

@section('content')
<!-- Start Content Section -->
<section>
    <div class="text-center  pt-[100px] lg:pt-[130px]">
        <p id="jumbotron">SEPATU LOKAL</p>
    </div>

    <div class="container max-w-[1200px] mt-[-150px] lg:mt-[-560px]">
        <p id="quote" class="hidden absolute mt-[580px] text-[17px] xl:block">Berkarya dengan gaya <br> SKO selalu
            tersedia.</p>
        <img class="mt-[50px] max-h-[900px]" src="dist/img/sepatu 1.png" alt="">
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

@endsection