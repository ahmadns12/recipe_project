<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nutrition | Recipe Project</title>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#949870]">
    
    <div class="w-full" style="background-image: url('{{asset('img/bg1.png')}}')">
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
                    Menurut World Health Organization (WHO) definisi nutrisi adalah kandungan zat gizi yang seseorang peroleh dari sumber makanan dan minuman yang berguna untuk kesehatan dan pembangunan sel tubuh.
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
                    Kurangnya nutrisi dapat menyebabkan stunting, yaitu gangguan pertumbuhan fisik dan otak sejak kehamilan hingga masa anak-anak. Stunting mengakibatkan gangguan saraf, motorik, dan kognitif. Faktor lingkungan, seperti pencemaran, dapat memperparah stunting. Pencegahan memerlukan asupan nutrisi seimbang, terutama bagi ibu hamil dan anak-anak. Nutrisi baik mendukung tumbuh kembang optimal anak.
                </div>
                <div class="flex justify-center items-center px-4 py-4">
                    <div class="rounded-xl overflow-hidden">
                        <img class="h-[18rem]" src="{{asset('img/nutrition_image.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- SECTION-2 END --}}
    </div>

    {{-- SECTION-3 GRAFIK --}}
    <section>
        <div class="h-[10rem]"></div>
    </section>
    {{-- SECTION-3 END --}}

    {{-- SECTION-4 FOOTER --}}
    <section class="px-16 py-12">
        <div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex justify-center items-center">
                    <div class="overflow-hidden">
                        <img class="h-[30rem]" src="{{asset('img/nutrition_image2.png')}}" alt="">
                    </div>
                </div>
                <div class="flex-col">
                    <div class="text-6xl leading-normal font-jockey_one text-white">
                        Ayo sajikan menu sehat dan bernutrisi lainnya, hanya di sini!
                    </div>
                    <div class="flex mt-8">
                        <a href="/recipe" class="bg-[#D9D9D9] font-jockey_one text-3xl text-black px-16 py-2 rounded-full shadow-lg">
                            Tampilkan Resep
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION-4 END --}}
    
</body>
</html>