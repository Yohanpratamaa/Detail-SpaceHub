<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
</head>
<body class="overflow-x-hidden w-screen bg-white">
    <!-- Circle Ungu -->
    <div class="circle-blue"></div>
    <!-- Circle Hijau -->
    <div class="circle-green"></div>

    <div class="relative py-4 h-full w-full flex flex-col items-center justify-center px-4 sm:px-6 lg:px-10">
        <div class="blur-circle -top-100 -left-24"></div>

        <div class="max-w-[90rem] w-full">
            <!-- Navbar -->
            <section class="navbar flex items-center justify-between px-5 py-4" id="navbar">
                <div>
                    <img src="{{asset('img/logo.png')}}" alt="Logo" class="h-10">
                </div>
                <div class="hidden md:flex">
                    <ul class="flex gap-x-6 lg:gap-x-10">
                        <li><a href="" class="text-gray-700 hover:text-blue-600">Beranda</a></li>
                        <li><a href="" class="text-gray-700 hover:text-blue-600">Katalog</a></li>
                        <li><a href="" class="text-gray-700 hover:text-blue-600">Tentang Kami</a></li>
                        <li><a href="" class="text-gray-700 hover:text-blue-600">Mitra</a></li>
                    </ul>
                </div>
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden md:block border py-2 px-6 rounded-full hover:bg-gray-100">
                    <button type="button">Lihat Sekarang</button>
                </div>
            </section>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white w-full px-5 py-4 border-t">
                <ul class="flex flex-col gap-y-4">
                    <li><a href="" class="text-gray-700 hover:text-blue-600">Beranda</a></li>
                    <li><a href="" class="text-gray-700 hover:text-blue-600">Katalog</a></li>
                    <li><a href="" class="text-gray-700 hover:text-blue-600">Tentang Kami</a></li>
                    <li><a href="" class="text-gray-700 hover:text-blue-600">Mitra</a></li>
                    <li><button type="button" class="border py-2 px-6 rounded-full w-full text-center">Lihat Sekarang</button></li>
                </ul>
            </div>

            <!-- Hero -->
            <section class="w-full mt-10 flex flex-col px-4 sm:px-8 lg:px-14" id="hero">
                <div class="text-gray-500 text-sm">
                    Home >> Katalog >> Detail
                </div>

                <div class="flex flex-col lg:flex-row gap-8 lg:gap-20 justify-between w-full mt-5">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <div>
                            <img src="{{asset('img/MainImg.png')}}" alt="Main Image" class="w-full h-auto rounded-lg">
                        </div>
                        <div class="grid grid-cols-3 gap-4 mt-4 w-full">
                            <img src="{{asset('img/image.png')}}" alt="Thumbnail" class="w-full h-auto rounded">
                            <img src="{{asset('img/image3.png')}}" alt="Thumbnail" class="w-full h-auto rounded">
                            <img src="{{asset('img/image2.png')}}" alt="Thumbnail" class="w-full h-auto rounded">
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-3 mt-6 lg:mt-10 w-full lg:w-1/2">
                        <h1 class="font-bold text-2xl sm:text-3xl lg:text-4xl">Virtual Office (vOffice)</h1>
                        <div class="flex gap-x-2 mt-3 items-center">
                            <img src="{{asset('img/location.png')}}" alt="Location" class="w-5 h-5">
                            <h1 class="text-gray-500 text-sm sm:text-base">Jl. Braga No. 109, Bandung</h1>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="{{asset('img/calendar.png')}}" alt="Calendar" class="w-5 h-5">
                            <p class="text-gray-500 text-sm sm:text-base">Setiap Hari</p>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <img src="{{asset('img/clock.png')}}" alt="Clock" class="w-5 h-5">
                            <p class="text-gray-500 text-sm sm:text-base">08.00 - 17.00</p>
                        </div>

                        <div class="flex flex-col gap-y-5 mt-6 w-[30rem]">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="py-4 px-3 border border-gray-100 shadow-md rounded-xl bg-white">
                                    <div class="flex items-center gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="Clock" class="w-5 h-5">
                                        <p class="font-semibold">Pilihan Meja</p>
                                    </div>
                                    <p class="px-1 text-gray-600 mt-1">6 Meja</p>
                                </div>
                                <div class="py-4 px-3 border border-gray-100 shadow-md rounded-xl bg-white">
                                    <div class="flex items-center gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="Clock" class="w-5 h-5">
                                        <p class="font-semibold">Pilihan Ruangan</p>
                                    </div>
                                    <p class="px-1 text-gray-600 mt-1">3 Ruangan</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="py-4 px-3 border border-gray-100 shadow-md rounded-xl bg-white">
                                    <div class="flex items-center gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="Clock" class="w-5 h-5">
                                        <p class="font-semibold">Daftar Menu</p>
                                    </div>
                                    <p class="px-1 text-gray-600 mt-1">Klik <span class="text-orange-500 font-bold">Menu</span></p>
                                </div>
                                <div class="py-4 px-3 border border-gray-100 shadow-md rounded-xl bg-white">
                                    <div class="flex items-center gap-x-2">
                                        <img src="{{asset('img/clock.png')}}" alt="Clock" class="w-5 h-5">
                                        <p class="font-semibold">Kontak WhatsApp</p>
                                    </div>
                                    <p class="px-1 text-gray-600 mt-1">Hubungi via <span class="text-green-500 font-bold">WhatsApp</span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Deskripsi -->
            <section class="mt-10 flex flex-col px-4 sm:px-8 lg:px-14" id="deskripsi">
                <div class="flex flex-col lg:flex-row gap-[5rem]">
                    <div class="w-full lg:w-5/8">
                        <!-- Deskripsi -->
                        <div class="text-2xl sm:text-3xl font-semibold">Deskripsi Lokasi</div>
                        <p class="mt-6 text-gray-700 text-sm sm:text-base">
                            Terletak di Jalan Braga, vOffice menawarkan suasana kerja yang profesional dengan ruang modern yang nyaman. Cocok bagi pekerja yang membutuhkan kantor virtual dengan fasilitas lengkap. Ruangan ini memiliki desain minimalis yang membantu meningkatkan produktivitas.
                        </p>
                        <!-- Pilihan Ruangan -->
                        <section class="mt-10 flex flex-col">
                            <div class="flex items-center gap-x-4 font-semibold text-2xl sm:text-3xl mb-6">
                                <img src="{{asset('img/Room.png')}}" alt="Room" class="w-8 h-8">
                                Pilihan Ruangan
                            </div>
                            <!-- Ruangan -->
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Room" class="w-full sm:w-1/3 h-auto rounded">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-x-3 mt-2">
                                        <div class="bg-green-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Maks. 8 Orang</div>
                                        <div class="bg-red-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Non Smoking</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Mulai Dari</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 90.000 / 2 jam</h2>
                                </div>
                            </div>
                            <!-- Repeat for other rooms -->
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg mt-6">
                                <img src="{{asset('img/contoh1.png')}}" alt="Room" class="w-full sm:w-1/3 h-auto rounded">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-x-3 mt-2">
                                        <div class="bg-green-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Maks. 8 Orang</div>
                                        <div class="bg-red-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Non Smoking</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Mulai Dari</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 90.000 / 2 jam</h2>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg mt-6">
                                <img src="{{asset('img/contoh1.png')}}" alt="Room" class="w-full sm:w-1/3 h-auto rounded">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-x-3 mt-2">
                                        <div class="bg-green-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Maks. 8 Orang</div>
                                        <div class="bg-red-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Non Smoking</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Mulai Dari</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 90.000 / 2 jam</h2>
                                </div>
                            </div>
                        </section>
                        <!-- Pilihan Meja -->
                        <section class="mt-10 flex flex-col">
                            <div class="flex items-center font-semibold gap-x-4 text-2xl sm:text-3xl mb-5">
                                <img src="{{asset('img/Table.png')}}" alt="Table" class="w-8 h-8">
                                Pilihan Meja
                            </div>
                            <!-- Meja -->
                            <div class="flex flex-col sm:flex-row border bg-white border-gray-200 gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Table" class="w-full sm:w-1/3 h-auto rounded">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-x-3 mt-2">
                                        <div class="bg-green-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">3 - 5 Orang</div>
                                        <div class="bg-red-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Outdoor</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Minimal Order</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 100.000 / 2 jam</h2>
                                </div>
                            </div>
                            <!-- Repeat for other tables -->
                            <div class="flex flex-col sm:flex-row border bg-white border-gray-200 gap-4 rounded-xl p-4 shadow-lg mt-6">
                                <img src="{{asset('img/contoh1.png')}}" alt="Table" class="w-full sm:w-1/3 h-auto rounded">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-x-3 mt-2">
                                        <div class="bg-green-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">3 - 5 Orang</div>
                                        <div class="bg-red-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Outdoor</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Minimal Order</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 100.000 / 2 jam</h2>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row border bg-white border-gray-200 gap-4 rounded-xl p-4 shadow-lg mt-6">
                                <img src="{{asset('img/contoh1.png')}}" alt="Table" class="w-full sm:w-1/3 h-auto rounded">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-x-3 mt-2">
                                        <div class="bg-green-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">3 - 5 Orang</div>
                                        <div class="bg-red-500 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Outdoor</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Minimal Order</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 100.000 / 2 jam</h2>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="md:w-[60rem] lg:w-3/8 sm:w-full" id="maps">
                        <p class="text-center text-2xl sm:text-3xl font-semibold">Temukan Lokasi Tempat di <span class="text-orange-500">Maps</span></p>
                        <div class="w-full h-auto border bg-white border-gray-200 shadow-xl rounded-xl mt-5 p-5">
                            <div class="w-full h-64" id="peta">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027677.9212814716!2d105.19650925625!3d-6.972890399999993!2m3!1f0!2f0!3f0!3m2!1i104!2i768!4f13.1!3m3!1m2!1s0x2e68e969bc54be89%3A0x2cde296cfcd5b037!2sDiagram%20Coffee%20%26%20Space!5e0!3m2!1sen!2sid!4v1745821243003!5m2!1sen!2sid" width="100%" height="100%" style="border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="flex flex-col items-start" id="fasilitas">
                                <h2 class="text-xl sm:text-2xl font-semibold mt-5">Fasilitas Lokasi</h2>
                                <ul class="text-sm font-medium list-disc flex flex-col ml-5 gap-y-1 mt-1">
                                    <li>Parkir Mobil</li>
                                    <li>Parkir Motor</li>
                                    <li>Keamanan 24 Jam</li>
                                    <li>Rak Helm</li>
                                </ul>
                                <a href="#" class="w-full text-center text-sm sm:text-base text-white bg-[#363062] p-2 rounded-xl mt-5 transition ease-in-out hover:-translate-y-1 duration-300">Buka Maps</a>
                            </div>
                        </div>
                        <h1 class="mt-10 text-2xl sm:text-3xl font-bold mb-3">Hubungi Sekarang</h1>
                        <div class="flex flex-col border border-gray-200 w-full text-start py-5 px-6 sm:px-8 rounded-xl shadow-xl bg-white">
                            <div class="flex justify-between items-center">
                                <div class="flex flex-col text-sm">
                                    <h1 class="font-semibold text-xl sm:text-2xl">Kontak WhatsApp</h1>
                                    <h3 class="text-lg sm:text-xl">Hubungi via <span class="text-green-400 font-bold">WhatsApp</span></h3>
                                </div>
                                <img src="{{asset('img/phone.png')}}" alt="Phone" class="w-8 h-8">
                            </div>
                            <div class="w-full text-center text-sm sm:text-base text-white bg-[#00C652] p-2 rounded-xl mt-6">Chat WhatsApp</div>
                        </div>
                        <h1 class="mt-10 text-2xl sm:text-3xl font-bold mb-3">Social Media</h1>
                        <div class="w-full p-5 flex flex-col border rounded-xl shadow-xl bg-white border-gray-200 gap-y-2">
                            <h1 class="text-sm sm:text-base"><span class="font-semibold">Instagram : </span> @voffice_bdg</h1>
                            <h1 class="text-sm sm:text-base"><span class="font-semibold">TikTok : </span> @voffice_bdg</h1>
                        </div>
                    </div>
                </div>
                <!-- Rekomendasi -->
                <section class="mt-10 flex flex-col mb-20">
                    <div class="font-semibold text-2xl sm:text-3xl mb-6">Rekomendasi Tempat Lainnya</div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Rekomendasi -->
                        <div class="border border-gray-200 rounded-xl p-4 flex flex-col shadow-xl">
                            <img src="{{asset('img/contoh1.png')}}" alt="Recommendation" class="w-full h-auto rounded">
                            <h1 class="mt-2 text-base sm:text-lg font-semibold">PointLab - Private Team/Individual Room</h1>
                            <div class="flex items-center mt-2">
                                <img src="{{asset('img/GrayMap.png')}}" alt="Map" class="w-4 h-4 mr-2">
                                <p class="text-gray-400 text-sm">Jl. Lengkong kecil, Bandung</p>
                            </div>
                            <div class="flex items-center mt-1">
                                <img src="{{asset('img/GrayJam.png')}}" alt="Clock" class="w-4 h-4 mr-2">
                                <p class="text-gray-400 text-sm">08.00 - 22.00</p>
                            </div>
                            <div class="w-full rounded-lg text-center text-white mt-4 bg-[#4C6FFF] py-2 px-4 text-sm sm:text-base">Detail</div>
                        </div>
                        <!-- Repeat for other recommendations -->
                        <div class="border border-gray-200 rounded-xl p-4 flex flex-col shadow-xl">
                            <img src="{{asset('img/contoh1.png')}}" alt="Recommendation" class="w-full h-auto rounded">
                            <h1 class="mt-2 text-base sm:text-lg font-semibold">PointLab - Private Team/Individual Room</h1>
                            <div class="flex items-center mt-2">
                                <img src="{{asset('img/GrayMap.png')}}" alt="Map" class="w-4 h-4 mr-2">
                                <p class="text-gray-400 text-sm">Jl. Lengkong kecil, Bandung</p>
                            </div>
                            <div class="flex items-center mt-1">
                                <img src="{{asset('img/GrayJam.png')}}" alt="Clock" class="w-4 h-4 mr-2">
                                <p class="text-gray-400 text-sm">08.00 - 22.00</p>
                            </div>
                            <div class="w-full rounded-lg text-center text-white mt-4 bg-[#4C6FFF] py-2 px-4 text-sm sm:text-base">Detail</div>
                        </div>
                        <div class="border border-gray-200 rounded-xl p-4 flex flex-col shadow-xl">
                            <img src="{{asset('img/contoh1.png')}}" alt="Recommendation" class="w-full h-auto rounded">
                            <h1 class="mt-2 text-base sm:text-lg font-semibold">PointLab - Private Team/Individual Room</h1>
                            <div class="flex items-center mt-2">
                                <img src="{{asset('img/GrayMap.png')}}" alt="Map" class="w-4 h-4 mr-2">
                                <p class="text-gray-400 text-sm">Jl. Lengkong kecil, Bandung</p>
                            </div>
                            <div class="flex items-center mt-1">
                                <img src="{{asset('img/GrayJam.png')}}" alt="Clock" class="w-4 h-4 mr-2">
                                <p class="text-gray-400 text-sm">08.00 - 22.00</p>
                            </div>
                            <div class="w-full rounded-lg text-center text-white mt-4 bg-[#4C6FFF] py-2 px-4 text-sm sm:text-base">Detail</div>
                        </div>
                    </div>
                </section>
            </section>

            <div class="w-full h-px bg-[#2F327D]"></div>

            <!-- Footer -->
            <div class="flex flex-col w-full justify-center items-center py-10 px-4 sm:px-10 lg:px-20">
                <div class="w-full flex flex-col lg:flex-row justify-between items-center lg:items-start">
                    <div class="mt-6">
                        <img src="{{asset('img/logo.png')}}" alt="Logo" class="w-32 sm:w-40">
                    </div>
                    <div class="flex flex-col sm:flex-row gap-8 lg:gap-20 mt-6 lg:mt-10">
                        <div>
                            <h1 class="text-lg sm:text-xl font-bold mb-3">Kontak Kami</h1>
                            <ul class="text-gray-600 text-sm sm:text-base">
                                <li class="mb-3">spacehub@gmail.com</li>
                                <li>+62 8883 8883</li>
                            </ul>
                        </div>
                        <div>
                            <h1 class="text-lg sm:text-xl font-bold mb-3">Social Media</h1>
                            <ul class="text-gray-600 text-sm sm:text-base">
                                <li class="mb-3">Instagram</li>
                                <li>Linkedln</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center text-gray-600 text-xs sm:text-sm mt-8">
                    All rights reserved© 2025 SpaceHub.<br>Menghubungkan Ruang Kerja, Memberdayakan Bisnis
                </div>
            </div>
        </div>

        <div class="blur-circle top-350 -right-48"></div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
