<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Recipe Project</title>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#DEE4B8]">
    
    {{-- HEADER NAVBAR --}}
    @include('components/header')
    {{-- HEADER NAVBAR-END --}}

    {{-- SECTION-1 CAROUSEL --}}
    <section class="pt-6 px-4">

        <div class="w-full text-3xl flex justify-center items-center font-jockey_one">
            Are You Hungry? Let’s Cook!
        </div>

        <div class="w-full pt-6 px-36">
            <div class="rounded-3xl flex justify-center items-center px-12 py-8" style="background-image: url('{{asset('img/bg_picture.jpg')}}')">
                <div class="w-full bg-[#7B7D67] opacity-90 rounded-3xl flex-col justify-center items-center px-12 py-8">
                    <div class="w-full py-4 opacity-35 bg-[#FFFFFF] rounded-full"></div>
                    <div class="flex-col py-4">
                        <div class="w-full text-3xl text-white font-jockey_one">
                            Delicious Food Is Waiting
                        </div>
                        <div class="mt-12 w-full text-sm text-white font-inter">
                            From the first taste to the last, let our
                            <br>
                            culinary creations take you on a
                            <br>
                            journey through a world of rich,
                            <br>
                            diverse, and delectable flavors.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- SECTION-1 END --}}

    {{-- SECTION-2 POPULAR RECIPE --}}
    <section class="py-6 px-4">

        <div class="w-full text-3xl flex justify-center items-center font-jockey_one">
            POPULAR RECIPE
        </div>

        <div class="w-full pb-6 pt-16 px-36 flex justify-center items-center space-x-16">

            <div class="flex-col items-center justify-center bg-[#A3AE73] rounded-[2rem] py-2 px-4">
                <img class="h-28 w-28 object-contain mt-[-4rem]" src="{{asset('img/food_picture.png')}}" alt="">
                <div class="flex-col">
                    <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Tomyam
                    </div>
                </div>
                <div class="pt-2 pb-4 font-jockey_one text-sm text-black text-center">
                    Sup penuh rempah,
                    <br>
                    pedas, dan segar.
                </div>
            </div>

            <div class="flex-col items-center justify-center bg-[#E0A534] rounded-[2rem] py-2 px-4">
                <div class="flex justify-center items-center">
                    <img class="h-28 w-28 object-contain mt-[-4rem]" src="{{asset('img/food_picture2.png')}}" alt="">
                </div>
                <div class="flex-col">
                    <div class="flex justify-center items-center">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sop Buntut
                    </div>
                </div>
                <div class="pt-2 pb-4 font-jockey_one text-sm text-black text-center">
                    Sop lezat dengan buntut
                    <br>
                    sapi, kaya rasa.
                </div>
            </div>

            <div class="flex-col items-center justify-center bg-[#A3AE73] rounded-[2rem] py-2 px-4">
                <div class="flex justify-center items-center">
                    <img class="h-28 w-28 object-contain mt-[-4rem]" src="{{asset('img/food_picture3.png')}}" alt="">
                </div>
                <div class="flex-col">
                    <div class="flex justify-center items-center">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Putu Ayu
                    </div>
                </div>
                <div class="pt-2 pb-4 font-jockey_one text-sm text-black text-center">
                    kue lembut & manis
                    <br>
                    dengan aroma pandan.
                </div>
            </div>

            <div class="flex-col items-center justify-center bg-[#E0A534] rounded-[2rem] py-2 px-4">
                <div class="flex justify-center items-center">
                    <img class="h-28 w-28 object-contain mt-[-4rem]" src="{{asset('img/food_picture4.png')}}" alt="">
                </div>
                <div class="flex-col">
                    <div class="flex justify-center items-center">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Bakso Aci
                    </div>
                </div>
                <div class="pt-2 pb-4 font-jockey_one text-sm text-black text-center">
                    makanan yang dimasak
                    <br>
                    dengan bumbu pedas.
                </div>
            </div>

            <div class="flex-col items-center justify-center bg-[#A3AE73] rounded-[2rem] py-2 px-4">
                <img class="h-28 w-28 object-contain mt-[-4rem]" src="{{asset('img/food_picture5.png')}}" alt="">
                <div class="flex-col">
                    <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Rawon
                    </div>
                </div>
                <div class="pt-2 pb-4 font-jockey_one text-sm text-black text-center">
                    Hitam, lezat, bumbu
                    <br>
                    khas, daging sapi.
                </div>
            </div>

        </div>

    </section>
    {{-- SECTION-2 END --}}

    {{-- SECTION-3 SIGN IN FOL-UP --}}
    <section class="py-6">

        <div class="py-4 bg-bottom" style="background-image: url('{{asset('img/bg_picture2.png')}}')">
            <div class="py-8">
                <div class="w-full text-3xl text-white flex justify-center items-center font-jockey_one">
                    Lets Join and Find Another Recipe!
                </div>
                <div class="w-full mt-1 text-[0.935rem] text-white flex justify-center items-center font-jockey_one">
                    What's your favorite food? Find it and start cooking now.
                </div>
            </div>

            <div class="pb-12 flex justify-center items-center">
                <a href="/login" class="bg-[#D9D9D9] font-jockey_one text-lg text-black px-20 py-1 rounded-full shadow-lg">
                    Sign In Now
                </a>
            </div>
        </div>

    </section>
    {{-- SECTION-3 END --}}

    {{-- SECTION-4 RECIPE BASED ON SEARCH --}}
    <section class="py-2">

        <div class="w-full text-3xl flex justify-center items-center font-jockey_one">
            Search for recipes based on
        </div>

        <div class="mt-8 bg-bottom" style="background-image: url('{{asset('img/bg_picture3.png')}}')">
            <div class="bg-[#DEE4B8] bg-opacity-45 py-12">
                <div class="flex-col">
                    <div class="flex justify-center items-center space-x-12">
                        <a href="/recipe/dessert" class="bg-[#A3AE73] rounded-[1.25rem] text-black text-2xl py-2 px-8 font-jockey_one">
                            Indonesian Dessert
                        </a>
                        <a href="/recipe/traditional" class="bg-[#A3AE73] rounded-[1.25rem] text-black text-2xl py-2 px-8 font-jockey_one">
                            Traditional Food
                        </a>
                        <a href="/recipe/international" class="bg-[#A3AE73] rounded-[1.25rem] text-black text-2xl py-2 px-12 font-jockey_one">
                            International Food
                        </a>
                    </div>

                    <div class="flex justify-center items-center space-x-12 mt-8">
                        <a href="/recipe/drink" class="bg-[#A3AE73] rounded-[1.25rem] text-black text-2xl py-2 px-8 font-jockey_one">
                            Drink or Coffe
                        </a>
                        <a href="/recipe/cake" class="bg-[#A3AE73] rounded-[1.25rem] text-black text-2xl py-2 px-8 font-jockey_one">
                            Cake & Sweet
                        </a>
                    </div>
                </div>

                <div class="h-32"></div>
            </div>
        </div>

    </section>
    {{-- SECTION-4 END --}}

    {{-- SECTION-5 TIPS AND TRIK --}}
    <section id="tipstrik" class="py-4">

        <div class="w-full text-3xl flex justify-center items-center font-jockey_one">
            Tips And Trik
        </div>

        <div class="flex text-white text-lg font-jockey_one justify-center items-center py-4 space-x-12">
            <a href="https://sajiansedap.grid.id/read/103788561/cara-ampuh-mencuci-daging-ayam-supaya-bebas-dari-kuman-dan-bakteri-jangan-harap-bersih-kalau-cuma-direndam-di-baskom?page=all">
                <div class="bg-[#7B7D67] rounded-xl flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img class="w-52 h-40 object-contain" src="{{asset('img/item1.png')}}" alt="">
                    </div>
                    <div class="flex text-center items-center justify-center">
                        Tips mencuci ayam dengan
                        <br>
                        benar dan baik
                    </div>
                </div>
            </a>

            <a href="https://www.fimela.com/food/read/3766017/6-cara-agar-daging-nggak-alot-waktu-dimasak-tipsnya-simpel">
                <div class="bg-[#7B7D67] rounded-xl flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img class="w-52 h-40 object-contain" src="{{asset('img/item2.png')}}" alt="">
                    </div>
                    <div class="flex text-center items-center justify-center">
                        Tips mengolah daging sapi
                        <br>
                        agar tidak alot
                    </div>
                </div>
            </a>

            <a href="https://www.alodokter.com/amankah-mencuci-buah-dan-sayur-menggunakan-sabun#:~:text=Cuci%20buah%20dan%20sayur%20pada,sikat%20halus%20untuk%20membersihkan%20kulitnya.">
                <div class="bg-[#7B7D67] rounded-xl flex-col">
                    <div class="rounded-xl overflow-hidden">
                        <img class="w-52 h-40 object-contain" src="{{asset('img/item3.png')}}" alt="">
                    </div>
                    <div class="flex text-center items-center justify-center">
                        Tips mencuci buah dan sayur
                        <br>
                        agar bisa awet
                    </div>
                </div>
            </a>
        </div>

    </section>
    {{-- SECTION-5 END --}}

    {{-- FOOTER --}}
    <section class="mt-4">
        <div class="w-full h-20 rounded-t-3xl bg-[#9C9F82]">

        </div>
    </section>
    {{-- FOOTER-END --}}

</body>
</html>