<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    <div class="container relative mx-auto px-4 sm:px-6 lg:px-16 py-4 h-full overflow-hidden">

        <div class="absolute -top-24 -left-24 w-[200px] sm:w-[400px] lg:w-[600px] h-[200px] sm:h-[400px] lg:h-[600px] -z-30 bg-violet-300 rounded-full blur-[100px] sm:blur-[200px] lg:blur-[300px]"></div>

        <!-- Navbar -->
        <section class="navbar flex flex-col sm:flex-row w-full items-center justify-between px-5 py-4" id="navbar">
            <div class="mb-4 sm:mb-0">
                <img src="{{asset('img/logo.png')}}" alt="Logo" class="w-24 sm:w-32">
            </div>
            <div class="flex-grow text-center sm:text-right">
                <ul class="flex flex-col sm:flex-row gap-4 sm:gap-6 lg:gap-10">
                    <li><a href="" class="text-gray-700 hover:text-blue-500">Beranda</a></li>
                    <li><a href="" class="text-gray-700 hover:text-blue-500">Katalog</a></li>
                    <li><a href="" class="text-gray-700 hover:text-blue-500">Tentang Kami</a></li>
                    <li><a href="" class="text-gray-700 hover:text-blue-500">Mitra</a></li>
                </ul>
            </div>
            <div class="mt-4 sm:mt-0">
                <button type="button" class="border py-2 px-4 sm:px-6 rounded-full text-gray-700 hover:bg-blue-500 hover:text-white transition">
                    Lihat Sekarang
                </button>
            </div>
        </section>

        <!-- Hero -->
        <section class="hero w-full mt-8 sm:mt-12 lg:mt-16" id="hero">
            <div class="text-gray-500 text-sm sm:text-base">
                Home &gt;&gt; Katalog &gt;&gt; Detail
            </div>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-12 mt-5">
                <div class="w-full lg:w-1/2 flex flex-col items-center">
                    <div class="w-full">
                        <img src="{{asset('img/MainImg.png')}}" alt="Main Image" class="w-full rounded-lg">
                    </div>
                    <div class="grid grid-cols-3 gap-2 sm:gap-4 w-full mt-4 sm:mt-7">
                        <img src="{{asset('img/image.png')}}" alt="Thumbnail 1" class="w-full rounded-md">
                        <img src="{{asset('img/image3.png')}}" alt="Thumbnail 2" class="w-full rounded-md">
                        <img src="{{asset('img/image2.png')}}" alt="Thumbnail 3" class="w-full rounded-md">
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col gap-4 mt-6 lg:mt-10">
                    <h1 class="font-bold text-2xl sm:text-3xl lg:text-4xl">Virtual Office (vOffice)</h1>

                    <div class="flex items-center gap-2 mt-3">
                        <img src="{{asset('img/location.png')}}" alt="Location" class="w-5 h-5">
                        <h1 class="text-gray-500 text-sm sm:text-base">Jl. Braga No. 109, Bandung</h1>
                    </div>

                    <div class="flex items-center gap-2">
                        <img src="{{asset('img/calendar.png')}}" alt="Calendar" class="w-5 h-5">
                        <p class="text-gray-500 text-sm sm:text-base">Setiap Hari</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img src="{{asset('img/clock.png')}}" alt="Clock" class="w-5 h-5">
                        <p class="text-gray-500 text-sm sm:text-base">08.00 - 17.00</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6 w-full">
                        <div class="p-4 border border-gray-200 shadow-md rounded-xl w-[70%] bg-white">
                            <div class="flex items-center gap-2">
                                <img src="{{asset('img/clock.png')}}" alt="Clock">
                                <p class="font-semibold">Pilihan Meja</p>
                            </div>
                            <p class="mt-2 text-gray-600">6 Meja</p>
                        </div>
                        <div class="p-4 border border-gray-200 shadow-md rounded-xl w-[70%] bg-white">
                            <div class="flex items-center gap-2">
                                <img src="{{asset('img/clock.png')}}" alt="Clock">
                                <p class="font-semibold">Pilihan Ruangan</p>
                            </div>
                            <p class="mt-2 text-gray-600">3 Ruangan</p>
                        </div>
                        <div class="p-4 border border-gray-200 shadow-md rounded-xl w-[70%] bg-white">
                            <div class="flex items-center gap-2">
                                <img src="{{asset('img/clock.png')}}" alt="Clock">
                                <p class="font-semibold">Daftar Menu</p>
                            </div>
                            <p class="mt-2 text-gray-600">Klik <span class="text-orange-500 font-bold">Menu</span></p>
                        </div>
                        <div class="p-4 border border-gray-200 shadow-md rounded-xl w-[70%] bg-white">
                            <div class="flex items-center gap-2">
                                <img src="{{asset('img/clock.png')}}" alt="Clock">
                                <p class="font-semibold">Kontak WhatsApp</p>
                            </div>
                            <p class="mt-2 text-gray-600">Hubungi via <span class="text-green-500 font-bold">WhatsApp</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Decorative Circles -->
        <div
            class="w-[200px] sm:w-[300px] lg:w-[400px] h-[200px] sm:h-[300px] lg:h-[400px] bg-blue-500 rounded-full -z-10 absolute top-40 -right-20 lg:-right-40"></div>
        <div
            class="w-[50px] sm:w-[80px] lg:w-[100px] h-[50px] sm:h-[80px] lg:h-[100px] bg-green-500 rounded-full absolute top-60 sm:top-80 lg:top-96 -right-5 lg:-right-10"></div>
        <div
            class="absolute top-96 sm:top-128 lg:top-160 -right-24 sm:-right-48 lg:-right-64 w-[200px] sm:w-[400px] lg:w-[600px] h-[200px] sm:h-[400px] lg:h-[600px] -z-10 bg-violet-300 rounded-full blur-[100px] sm:blur-[200px] lg:blur-[300px]"></div>

        <!-- Deskripsi -->
        <section class="mt-10 flex flex-col" id="deskripsi">
            <div class="flex flex-col lg:flex-row gap-6 lg:gap-12">
                <div class="w-full lg:w-2/3 flex flex-col">
                    <div class="text-2xl sm:text-3xl font-semibold">Deskripsi Lokasi</div>
                    <p class="mt-6 text-sm sm:text-base">
                        Terletak di Jalan Braga, vOffice menawarkan suasana kerja yang profesional dengan ruang modern yang nyaman. Cocok bagi pekerja yang membutuhkan kantor virtual dengan fasilitas lengkap. Ruangan ini memiliki desain minimalis yang membantu meningkatkan produktivitas.
                    </p>

                    <!-- Pilihan Ruangan -->
                    <section class="mt-10 flex flex-col">
                        <div class="font-semibold text-2xl sm:text-3xl mb-6">Pilihan Ruangan</div>
                        <div class="space-y-6">
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Room" class="w-full sm:w-1/3 rounded-md">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-3 mt-2">
                                        <div class="bg-green-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Maks. 8 Orang</div>
                                        <div class="bg-red-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Non Smoking</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Mulai Dari</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 90.000 / 2 jam</h2>
                                </div>
                            </div>
                            <!-- Repeat for other rooms -->
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Room" class="w-full sm:w-1/3 rounded-md">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-3 mt-2">
                                        <div class="bg-green-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Maks. 8 Orang</div>
                                        <div class="bg-red-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Non Smoking</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Mulai Dari</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 90.000 / 2 jam</h2>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Room" class="w-full sm:w-1/3 rounded-md">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-3 mt-2">
                                        <div class="bg-green-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Maks. 8 Orang</div>
                                        <div class="bg-red-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Non Smoking</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Mulai Dari</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 90.000 / 2 jam</h2>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Pilihan Meja -->
                    <section class="mt-10 flex flex-col">
                        <div class="font-semibold text-2xl sm:text-3xl mb-6">Pilihan Meja</div>
                        <div class="space-y-6">
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Table" class="w-full sm:w-1/3 rounded-md">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-3 mt-2">
                                        <div class="bg-green-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">3 - 5 Orang</div>
                                        <div class="bg-red-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Outdoor</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Minimal Order</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 100.000 / 2 jam</h2>
                                </div>
                            </div>
                            <!-- Repeat for other tables -->
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Table" class="w-full sm:w-1/3 rounded-md">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-3 mt-2">
                                        <div class="bg-green-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">3 - 5 Orang</div>
                                        <div class="bg-red-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Outdoor</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Minimal Order</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 100.000 / 2 jam</h2>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row border border-gray-200 bg-white gap-4 rounded-xl p-4 shadow-lg">
                                <img src="{{asset('img/contoh1.png')}}" alt="Table" class="w-full sm:w-1/3 rounded-md">
                                <div class="flex flex-col">
                                    <h2 class="text-lg sm:text-xl font-semibold">Melawai Room</h2>
                                    <div class="flex gap-3 mt-2">
                                        <div class="bg-green-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">3 - 5 Orang</div>
                                        <div class="bg-red-300 rounded-xl text-xs sm:text-sm text-white px-2 py-1">Outdoor</div>
                                    </div>
                                    <h2 class="text-orange-500 mt-2 font-semibold">Minimal Order</h2>
                                    <h2 class="font-semibold text-base sm:text-lg">Rp. 100.000 / 2 jam</h2>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="w-full lg:w-1/3" id="maps">
                    <p class="text-center text-xl sm:text-2xl font-semibold">Temukan Lokasi Tempat di <span class="text-orange-500">Maps</span></p>
                    <div class="w-full border border-gray-200 shadow-xl rounded-xl mt-5 p-4">
                        <div class="w-full h-48 sm:h-64">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027677.9212814716!2d105.19650925625!3d-6.972890399999993!2m3!1f0!2f0!3f0!3m2!1i104!2i768!4f13.1!3m3!1m2!1s0x2e68e969bc54be89%3A0x2cde296cfcd5b037!2sDiagram%20Coffee%20%26%20Space!5e0!3m2!1sen!2sid!4v1745821243003!5m2!1sen!2sid" width="100%" height="100%" style="border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-xl sm:text-2xl font-semibold mt-4">Fasilitas Lokasi</h2>
                            <ul class="text-sm font-medium list-disc flex flex-col ml-5 gap-1 mt-2">
                                <li>Parkir Mobil</li>
                                <li>Parkir Motor</li>
                                <li>Keamanan 24 Jam</li>
                                <li>Rak Helm</li>
                            </ul>
                            <div class="w-full text-center text-sm sm:text-base text-white bg-[#363062] p-2 rounded-xl mt-4">
                                Buka Maps
                            </div>
                        </div>
                    </div>

                    <h1 class="mt-8 text-xl sm:text-2xl font-bold mb-3">Hubungi Sekarang</h1>
                    <div class="flex flex-col border border-gray-200 w-full py-4 px-6 rounded-xl shadow-xl">
                        <div class="flex justify-between items-center">
                            <div class="flex flex-col text-sm">
                                <h1 class="font-semibold text-lg sm:text-xl">Kontak WhatsApp</h1>
                                <h3 class="text-base sm:text-lg">Hubungi via <span class="text-green-400 font-bold">WhatsApp</span></h3>
                            </div>
                            <img src="{{asset('img/phone.png')}}" alt="Phone" class="w-8 sm:w-10">
                        </div>
                        <div class="w-full text-center text-sm sm:text-base text-white bg-[#00C652] p-2 rounded-xl mt-4">
                            Chat WhatsApp
                        </div>
                    </div>

                    <h1 class="mt-8 text-xl sm:text-2xl font-bold mb-3">Social Media</h1>
                    <div class="w-full p-4 flex flex-col border rounded-xl shadow-xl bg-white border-gray-200 gap-2">
                        <h1 class="text-sm sm:text-base"><span class="font-semibold">Instagram : </span> @voffice_bdg</h1>
                        <h1 class="text-sm sm:text-base"><span class="font-semibold">TikTok : </span> @voffice_bdg</h1>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi -->
            <section class="mt-10 flex flex-col mb-16">
                <div class="font-semibold text-2xl sm:text-3xl mb-6">Rekomendasi Tempat Lainnya</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border border-gray-200 rounded-xl p-4 flex flex-col shadow-xl">
                        <img src="{{asset('img/contoh1.png')}}" alt="Recommendation" class="w-full rounded-md">
                        <h1 class="mt-2 text-base sm:text-lg font-semibold">PointLab - Private Team/Individual Room</h1>
                        <div class="flex items-center gap-2 mt-2">
                            <p class="text-gray-400 text-sm">Jl. Lengkong kecil, Bandung</p>
                        </div>
                        <div class="w-full rounded-lg text-center text-sm sm:text-base text-white mt-4 bg-[#4C6FFF] py-2">
                            Detail
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-xl p-4 flex flex-col shadow-xl">
                        <img src="{{asset('img/contoh1.png')}}" alt="Recommendation" class="w-full rounded-md">
                        <h1 class="mt-2 text-base sm:text-lg font-semibold">PointLab - Private Team/Individual Room</h1>
                        <div class="flex items-center gap-2 mt-2">
                            <p class="text-gray-400 text-sm">Jl. Lengkong kecil, Bandung</p>
                        </div>
                        <div class="w-full rounded-lg text-center text-sm sm:text-base text-white mt-4 bg-[#4C6FFF] py-2">
                            Detail
                        </div>
                    </div>
                    <div class="border border-gray-200 rounded-xl p-4 flex flex-col shadow-xl">
                        <img src="{{asset('img/contoh1.png')}}" alt="Recommendation" class="w-full rounded-md">
                        <h1 class="mt-2 text-base sm:text-lg font-semibold">PointLab - Private Team/Individual Room</h1>
                        <div class="flex items-center gap-2 mt-2">
                            <p class="text-gray-400 text-sm">Jl. Lengkong kecil, Bandung</p>
                        </div>
                        <div class="w-full rounded-lg text-center text-sm sm:text-base text-white mt-4 bg-[#4C6FFF] py-2">
                            Detail
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>

    <div class="w-full h-[1.5px] bg-[#2F327D]"></div>

    <!-- Footer -->
    <div class="flex flex-col w-full px-4 sm:px-6 lg:px-16 py-8">
        <div class="w-full flex flex-col lg:flex-row gap-6">
            <div class="mt-6">
                <img src="{{asset('img/logo.png')}}" alt="Logo" class="w-32 sm:w-40">
            </div>
            <div class="flex flex-col sm:flex-row gap-6 lg:gap-12 lg:ml-auto">
                <div>
                    <h1 class="text-lg sm:text-xl font-bold mt-6 mb-3">Kontak Kami</h1>
                    <ul class="text-gray-600 text-sm sm:text-base">
                        <li class="mb-3">spacehub@gmail.com</li>
                        <li>+62 8883 8883</li>
                    </ul>
                </div>
                <div>
                    <h1 class="text-lg sm:text-xl font-bold mt-6 mb-3">Social Media</h1>
                    <ul class="text-gray-600 text-sm sm:text-base">
                        <li class="mb-3">Instagram</li>
                        <li>LinkedIn</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center text-gray-600 text-xs sm:text-sm mt-8">
            All rights reserved © 2025 SpaceHub.<br>Menghubungkan Ruang Kerja, Memberdayakan Bisnis
        </div>
    </div>

</body>
</html>
