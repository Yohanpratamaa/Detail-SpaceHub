<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container relative px-[100px] py-4 h-full overflow-hidden">

        <div class="absolute -top-100 -left-100 w-[1000px] h-[800px] -z-10 bg-violet-300 rounded-full blur-[500px]"></div>


        {{-- Navbar --}}
        <section class="navbar inline-flex w-full h-full items-center justify-between px-5">

            <div>
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>

            <div class="">
               <ul>
                    <li class="inline-flex gap-x-10">
                        <a href="">Beranda</a>
                        <a href="">Katalog</a>
                        <a href="">Tentang Kami</a>
                        <a href="">Mitra</a>
                    </li>
               </ul>
            </div>

            <div class="border py-2 px-6 rounded-full">
                <button type="button">
                    Lihat Sekarang
                </button>
            </div>

        </section>

        <section class="hero w-full h-full mt-[80px]">
            <div class="inline-flex text-gray-500">
                Home >> Katalog >> Detail
            </div>

            <div class="flex gap-x-[150px] mt-5">

                <div class="flex flex-col">
                    <div>
                        <img src="{{asset('img/MainImg.png')}}" alt="">
                    </div>
                    <div class="grid grid-cols-3 w-[590px] mt-7">
                        <img src="{{asset('img/image.png')}}" alt="">
                        <img src="{{asset('img/image3.png')}}" alt="">
                        <img src="{{asset('img/image2.png')}}" alt="">
                    </div>
                </div>

                <div class="flex flex-col gap-y-3 mt-10">
                    <h1 class="font-bold text-4xl">Virtual Office (vOffice)</h1>

                    <div class="inline-flex gap-x-2 mt-3">
                        <img src="{{asset('img/location.png')}}" alt="" class="w-[20px] h-[20px]">
                        <h1 class="text-gray-500">Jl. Braga No. 109, Bandung</h1>
                    </div>

                    <div class="inline-flex gap-x-2">
                        <img src="{{asset('img/calendar.png')}}" alt="" class="w-[20px] h-[20px]">
                        <p class="text-gray-500">Setiap Hari</p>
                    </div>

                    <div class="inline-flex gap-x-2">
                        <img src="{{asset('img/clock.png')}}" alt="" class="w-[20px] h-[20px]">
                        <p class="text-gray-500">08.00 - 17.00</p>
                    </div>

                    <div class="flex flex-col gap-y-5 mt-10 w-full">
                        <div class="inline-flex gap-x-5">
                            <div class="w-full h-full py-4 px-2 border border-gray-50 shadow-md rounded-xl bg-white">
                                <div class="flex flex-col">
                                    <div class="inline-flex gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="">
                                        <p class="font-semibold">Pilihan Meja</p>
                                    </div>
                                </div>
                                <p class="px-1 text-gray-600">6 Meja</p>
                            </div>
                            <div class="w-full h-full py-4 px-2 border border-gray-50 shadow-md rounded-xl bg-white">
                                <div class="flex flex-col">
                                    <div class="inline-flex gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="">
                                        <p class="font-semibold">Pilihan Ruangan</p>
                                    </div>
                                </div>
                                <p class="px-1 text-gray-600">6 Meja</p>
                            </div>
                        </div>
                        <div class="inline-flex gap-x-5">
                            <div class="w-full h-full py-4 px-2 border border-gray-50 shadow-md rounded-xl bg-white">
                                <div class="flex flex-col">
                                    <div class="inline-flex gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="">
                                        <p class="font-semibold">Daftar Menu</p>
                                    </div>
                                </div>
                                <p class="px-1 text-gray-600">6 Meja</p>
                            </div>
                            <div class="w-full h-full py-4 px-2 border border-gray-50 shadow-md rounded-xl bg-white">
                                <div class="flex flex-col">
                                    <div class="inline-flex gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="">
                                        <p class="font-semibold">Kontak WhatsApp</p>
                                    </div>
                                </div>
                                <p class="px-1 text-gray-600">6 Meja</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div
            class="w-[500px] h-[500px] bg-blue-500 rounded-full absolute top-40 -right-95">
        </div>

        <div
            class="w-[100px] h-[100px] bg-green-500 rounded-full absolute top-140 -right-13">
        </div>

    </div>

</body>
</html>
