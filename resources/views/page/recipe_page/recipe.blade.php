<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipe | Recipe Project</title>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#DEE4B8]">

    {{-- SECTION-1 SEARCH BAR --}}
    <section>
        <div class="px-48 py-8 bg-center bg-cover" style="background-image: url('{{asset('img/bg_picture4.png')}}')">
            <div class="flex w-full rounded-full py-1 px-4 bg-[#FFFFFF] opacity-75 space-x-4">
                <i class="fa-solid fa-magnifying-glass text-lg"></i>
                <input class="w-full text-lg font-inter bg-none outline-none" type="text">
            </div>

            <div class="w-full text-[1.925rem] mt-6 text-white font-jockey_one">
                POPULAR RECIPE
            </div>
        </div>
    </section>
    {{-- SECTION-1 END --}}

    {{-- SECTION-2 RECIPE ITEM --}}
    <section class="py-8">
        <div class="h-[29rem] overflow-y-auto no-scrollbar">
            <div class="grid grid-cols-5 gap-x-20 gap-y-12 px-32">
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>

                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>

                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
                <div class="bg-white rounded-3xl py-2 shadow-xl">
                    <div class="flex justify-center items-center">
                        <img class="h-28 w-28 object-contain" src="{{asset('img/recipe_item.png')}}" alt="">
                    </div>
    
                    <div class="flex justify-center items-center py-2">
                        <img class="w-28" src="{{asset('img/five_star.png')}}" alt="">
                    </div>
    
                    <div class="text-2xl font-jockey_one text-black flex justify-center items-center">
                        Sayur Asem
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    {{-- SECTION-2 END --}}

    {{-- FOOTER NAVBAR --}}
    @include('components/footer_navbar')
    {{-- FOOTER NAVBAR-END --}}
    
</body>
</html>