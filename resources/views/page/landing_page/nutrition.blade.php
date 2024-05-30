<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nutrition | Recipe Project</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tailwindchart/flowbite.min.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#949870]">

    <div class="w-full" style="background-image: url('{{ asset('img/bg1.png') }}')">
        {{-- HEADER --}}
        @include('components/header_2')
        {{-- HEADER-END --}}

        {{-- SECTION-1 CONTENT 1 --}}
        <section class="py-16 px-16">
            <div class="w-full flex-col">
                <div class="text-5xl leading-normal font-jockey_one text-white">
                    Mari sajikan masakan
                    <br>
                    lezat bernutrisi
                    <br>
                    sesuai panduan !
                </div>
                <div class="mt-4 text-2xl font-jockey_one text-white w-[27rem]">
                    Menurut World Health Organization (WHO) definisi nutrisi adalah kandungan zat gizi yang seseorang
                    peroleh dari sumber makanan dan minuman yang berguna untuk kesehatan dan pembangunan sel tubuh.
                </div>
            </div>
        </section>
        {{-- SECTION-1 END --}}

        {{-- GAP --}}
        <div class="h-[17rem]"></div>
        {{-- GAP-END --}}

        {{-- SECTION-2 CONTENT 2 --}}
        <section class="px-16">
            <div class="grid grid-cols-2 gap-4">
                <div class="mt-4 text-2xl font-jockey_one text-white">
                    Kurangnya nutrisi dapat menyebabkan stunting, yaitu gangguan pertumbuhan fisik dan otak sejak
                    kehamilan hingga masa anak-anak. Stunting mengakibatkan gangguan saraf, motorik, dan kognitif.
                    Faktor lingkungan, seperti pencemaran, dapat memperparah stunting. Pencegahan memerlukan asupan
                    nutrisi seimbang, terutama bagi ibu hamil dan anak-anak. Nutrisi baik mendukung tumbuh kembang
                    optimal anak.
                </div>
                <div class="flex justify-center items-center px-4 py-4">
                    <div class="rounded-xl overflow-hidden">
                        <img class="h-[18rem]" src="{{ asset('img/nutrition_image.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- SECTION-2 END --}}
    </div>

    {{-- SECTION-3 GRAFIK 1 --}}
    <section class="px-16 py-12">
        <div class="w-full bg-[#DEE4B8] rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-800 dark:border-gray-700">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                            <path
                                d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                            <path
                                d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Prevalensi Data
                            Penduduk Indonesia yang Menderita Gizi Buruk</h5>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Tahun 2016</p>
                    </div>
                </div>
            </div>

            <div id="column-chart"></div>

        </div>
    </section>
    {{-- SECTION-3 END --}}

    {{-- SECTION-4 GRAFIK 2 --}}
    <section class="px-16 py-8">
        <div class="w-full bg-[#DEE4B8] rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-800 dark:border-gray-700">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                            <path
                                d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                            <path
                                d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Prevalensi Data
                            Penduduk Indonesia yang Menderita Gizi Buruk</h5>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Tahun 2017</p>
                    </div>
                </div>
            </div>

            <div id="column-chart2"></div>

        </div>
    </section>
    {{-- SECTION-4 END --}}

    {{-- SECTION-5 GRAFIK 3 --}}
    <section class="px-16 py-12">
        <div class="w-full bg-[#DEE4B8] rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-800 dark:border-gray-700">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                            <path
                                d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                            <path
                                d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Prevalensi Data
                            Penduduk Indonesia yang Menderita Gizi Buruk</h5>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Tahun 2018</p>
                    </div>
                </div>
            </div>

            <div id="column-chart3"></div>

        </div>
    </section>
    {{-- SECTION-5 END --}}

    {{-- SECTION-6 FOOTER --}}
    <section class="px-16 py-12">
        <div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex justify-center items-center">
                    <div class="overflow-hidden">
                        <img class="h-[30rem]" src="{{ asset('img/nutrition_image2.png') }}" alt="">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="text-6xl leading-normal font-jockey_one text-white">
                        Ayo sajikan menu sehat dan bernutrisi lainnya, hanya di sini!
                    </div>
                    <div class="flex mt-8">
                        <a href="/recipe"
                            class="bg-[#D9D9D9] font-jockey_one text-3xl text-black px-16 py-2 rounded-full shadow-lg">
                            Tampilkan Resep
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION-6 END --}}

    <script src="{{ asset('tailwindchart/js/apexcharts.js') }}"></script>
    <script src="{{ asset('tailwindchart/js/flowbite.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const options = {
                colors: ["#A3AE73", "#FDBA8C"],
                series: [{
                    name: "Penduduk",
                    color: "#A3AE73",
                    data: [{
                            x: "Aceh",
                            y: 2.15
                        },
                        {
                            x: "Sumatera Utara",
                            y: 2.84
                        },
                        {
                            x: "Sumatera Barat",
                            y: 1.63
                        },
                        {
                            x: "Sumatera Selatan",
                            y: 1.61
                        },
                        {
                            x: "Riau",
                            y: 1.89
                        },
                        {
                            x: "Jambi",
                            y: 2.37
                        },
                        {
                            x: "Bengkulu",
                            y: 0.88
                        },
                        {
                            x: "Lampung",
                            y: 1.85
                        },
                        {
                            x: "DKI Jakarta",
                            y: 2.93
                        },
                        {
                            x: "Kep. Bangka Belitung",
                            y: 2.01
                        },
                        {
                            x: "Kep. Riau",
                            y: 4.11
                        },
                        {
                            x: "Jawa Barat",
                            y: 2.35
                        },
                        {
                            x: "Jawa Tengah",
                            y: 2.7
                        },
                        {
                            x: "Jawa Timur",
                            y: 2.63
                        },
                        {
                            x: "DI Yogyakarta",
                            y: 2.32
                        },
                        {
                            x: "Banten",
                            y: 3.19
                        },
                        {
                            x: "Bali",
                            y: 0.54
                        },
                        {
                            x: "NTB",
                            y: 2.47
                        },
                        {
                            x: "NTT",
                            y: 6.48
                        },
                        {
                            x: "Kalimantan Barat",
                            y: 6.59
                        },
                        {
                            x: "Kalimantan Tengah",
                            y: 4.59
                        },
                        {
                            x: "Kalimantan Selatan",
                            y: 3.64
                        },
                        {
                            x: "Kalimantan Utara",
                            y: 4.57
                        },
                        {
                            x: "Kalimantan Timur",
                            y: 3.44
                        },
                        {
                            x: "Sulawesi Utara",
                            y: 1.5
                        },
                        {
                            x: "Sulawesi Tengah",
                            y: 4.78
                        },
                        {
                            x: "Sulawesi Selatan",
                            y: 4.43
                        },
                        {
                            x: "Sulawesi Tengah",
                            y: 1.61
                        },
                        {
                            x: "Sulawesi Barat",
                            y: 4.12
                        },
                        {
                            x: "Gorontalo",
                            y: 4.13
                        },
                        {
                            x: "Maluku",
                            y: 4.91
                        },
                        {
                            x: "Maluku Barat",
                            y: 2.28
                        },
                        {
                            x: "Papua Barat",
                            y: 5.61
                        },
                        {
                            x: "Papua",
                            y: 3.67
                        },
                    ],
                }, ],
                chart: {
                    type: "bar",
                    height: "320px",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 1,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                },
                grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    opacity: 1,
                },
            }

            if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart"), options);
                chart.render();
            }



        });

        document.addEventListener('DOMContentLoaded', function() {

            const options2 = {
                colors: ["#A3AE73", "#FDBA8C"],
                series: [{
                    name: "Penduduk",
                    color: "#A3AE73",
                    data: [{
                            x: "Aceh",
                            y: 3.5
                        },
                        {
                            x: "Sumatera Utara",
                            y: 48
                        },
                        {
                            x: "Sumatera Barat",
                            y: 46
                        },
                        {
                            x: "Sumatera Selatan",
                            y: 34
                        },
                        {
                            x: "Riau",
                            y: 43
                        },
                        {
                            x: "Jambi",
                            y: 26
                        },
                        {
                            x: "Bengkulu",
                            y: 19
                        },
                        {
                            x: "Lampung",
                            y: 25
                        },
                        {
                            x: "DKI Jakarta",
                            y: 29
                        },
                        {
                            x: "Kep. Bangka Belitung",
                            y: 47
                        },
                        {
                            x: "Kep. Riau",
                            y: 34
                        },
                        {
                            x: "Jawa Barat",
                            y: 44
                        },
                        {
                            x: "Jawa Tengah",
                            y: 29
                        },
                        {
                            x: "Jawa Timur",
                            y: 27
                        },
                        {
                            x: "DI Yogyakarta",
                            y: 28
                        },
                        {
                            x: "Banten",
                            y: 25
                        },
                        {
                            x: "Bali",
                            y: 36
                        },
                        {
                            x: "NTB",
                            y: 17
                        },
                        {
                            x: "NTT",
                            y: 34
                        },
                        {
                            x: "Kalimantan Barat",
                            y: 68
                        },
                        {
                            x: "Kalimantan Tengah",
                            y: 62
                        },
                        {
                            x: "Kalimantan Selatan",
                            y: 53
                        },
                        {
                            x: "Kalimantan Utara",
                            y: 36
                        },
                        {
                            x: "Kalimantan Timur",
                            y: 45
                        },
                        {
                            x: "Sulawesi Utara",
                            y: 5
                        },
                        {
                            x: "Sulawesi Tengah",
                            y: 3
                        },
                        {
                            x: "Sulawesi Selatan",
                            y: 47
                        },
                        {
                            x: "Sulawesi Tenggara",
                            y: 45
                        },
                        {
                            x: "Sulawesi Barat",
                            y: 45
                        },
                        {
                            x: "Gorontalo",
                            y: 55
                        },
                        {
                            x: "Maluku",
                            y: 49
                        },
                        {
                            x: "Maluku Barat",
                            y: 47
                        },
                        {
                            x: "Papua Barat",
                            y: 42
                        },
                        {
                            x: "Papua",
                            y: 3.67
                        },
                    ],
                }, ],
                chart: {
                    type: "bar",
                    height: "320px",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 1,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                },
                grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    opacity: 1,
                },
            }

            if (document.getElementById("column-chart2") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart2"), options2);
                chart.render();
            }



        });

        document.addEventListener('DOMContentLoaded', function() {

            const options3 = {
                colors: ["#A3AE73", "#FDBA8C"],
                series: [{
                    name: "Penduduk",
                    color: "#A3AE73",
                    data: [{
                            x: "Aceh",
                            y: 2.15
                        },
                        {
                            x: "Sumatera Utara",
                            y: 2.84
                        },
                        {
                            x: "Sumatera Barat",
                            y: 1.63
                        },
                        {
                            x: "Sumatera Selatan",
                            y: 1.61
                        },
                        {
                            x: "Riau",
                            y: 1.89
                        },
                        {
                            x: "Jambi",
                            y: 2.37
                        },
                        {
                            x: "Bengkulu",
                            y: 0.88
                        },
                        {
                            x: "Lampung",
                            y: 1.85
                        },
                        {
                            x: "DKI Jakarta",
                            y: 2.93
                        },
                        {
                            x: "Kep. Bangka Belitung",
                            y: 2.01
                        },
                        {
                            x: "Kep. Riau",
                            y: 4.11
                        },
                        {
                            x: "Jawa Barat",
                            y: 2.35
                        },
                        {
                            x: "Jawa Tengah",
                            y: 2.7
                        },
                        {
                            x: "Jawa Timur",
                            y: 2.63
                        },
                        {
                            x: "DI Yogyakarta",
                            y: 2.32
                        },
                        {
                            x: "Banten",
                            y: 3.19
                        },
                        {
                            x: "Bali",
                            y: 0.54
                        },
                        {
                            x: "NTB",
                            y: 2.47
                        },
                        {
                            x: "NTT",
                            y: 6.48
                        },
                        {
                            x: "Kalimantan Barat",
                            y: 6.59
                        },
                        {
                            x: "Kalimantan Tengah",
                            y: 4.59
                        },
                        {
                            x: "Kalimantan Selatan",
                            y: 3.64
                        },
                        {
                            x: "Kalimantan Utara",
                            y: 4.57
                        },
                        {
                            x: "Kalimantan Timur",
                            y: 3.44
                        },
                        {
                            x: "Sulawesi Utara",
                            y: 1.5
                        },
                        {
                            x: "Sulawesi Tengah",
                            y: 4.78
                        },
                        {
                            x: "Sulawesi Selatan",
                            y: 4.43
                        },
                        {
                            x: "Sulawesi Tengah",
                            y: 1.61
                        },
                        {
                            x: "Sulawesi Barat",
                            y: 4.12
                        },
                        {
                            x: "Gorontalo",
                            y: 4.13
                        },
                        {
                            x: "Maluku",
                            y: 4.91
                        },
                        {
                            x: "Maluku Barat",
                            y: 2.28
                        },
                        {
                            x: "Papua Barat",
                            y: 5.61
                        },
                        {
                            x: "Papua",
                            y: 3.67
                        },
                    ],
                }, ],
                chart: {
                    type: "bar",
                    height: "320px",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 1,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                },
                grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    opacity: 1,
                },
            }

            if (document.getElementById("column-chart3") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart3"), options3);
                chart.render();
            }



        });
    </script>
</body>

</html>
