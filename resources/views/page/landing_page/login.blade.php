<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Recipe Project</title>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#DEE4B8]">
    
    {{-- HEADER NAVBAR --}}
    @include('components/header')
    {{-- HEADER NAVBAR-END --}}

    {{-- SECTION-1 SIGN IN --}}
    <section class="py-6 px-4">

        <div class="w-full text-3xl flex justify-center items-center font-jockey_one">
            Lets Join and Find Another Recipe!
        </div>

        <form action="">
            <div class="flex-col py-6 px-12">
                <div class="flex justify-center items-center space-x-12 font-inter py-3">
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="text" placeholder="First Name" name="first_name" required>
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="text" placeholder="Last Name" name="last_name" required>
                </div>
                <div class="flex justify-center items-center space-x-12 font-inter py-3">
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="email" placeholder="E-mail*" name="email" required>
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="text" placeholder="Phone Number" name="phone_number" required>
                </div>
                <div class="flex justify-center items-center space-x-12 font-inter py-3">
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="password" placeholder="Password" name="password" required>
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="password" placeholder="Confirm Password" required>
                </div>
            </div>
    
            <div class="flex justify-center items-center">
                <button class="bg-[#6E7732] font-jockey_one text-2xl text-white px-28 py-2 rounded-full shadow-lg" href="" type="submit">
                    Sign In
                </button>
            </div> 
        </form>

    </section>
    {{-- SECTION-1 END --}}
    
    {{-- SECTION-2 LOG IN --}}
    <section class="py-2 px-4">

        <div class="w-full text-3xl flex justify-center items-center font-jockey_one">
            Already Have An Account?
        </div>

        <form action="">
            <div class="flex-col py-6 px-12">
                <div class="flex justify-center items-center space-x-12 font-inter py-3">
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="email" placeholder="E-mail*" name="email" required>
                    <input class="text-center text-sm rounded-md italic py-3 px-32" type="password" placeholder="Password" name="password" required>
                </div>
            </div>
    
            <div class="flex justify-center items-center">
                <button class="bg-[#6E7732] font-jockey_one text-2xl text-white px-28 py-2 rounded-full shadow-lg" href="" type="submit">
                    Log In
                </button>
            </div> 
        </form>

    </section>
    {{-- SECTION-2 END --}}

    {{-- SECTION-3 FAVORITE --}}
    <section class="py-6">

        <div class="py-4 bg-bottom" style="background-image: url('{{asset('img/bg_picture2.png')}}')">
            <div class="flex justify-center items-center space-x-4 py-4">
                <i class="fa-solid fa-heart text-3xl text-black"></i>
                <span class="text-white text-3xl font-jockey_one">Favorite</span>
            </div>
            <div class="flex justify-center items-center text-black text-center text-lg font-jockey_one pb-2">
                Save favorite recipes and articles for later.
                <br>
                Click to save.
            </div>
            <div class="flex justify-center items-center">
                <a href="" class="bg-[#6E7732] mb-[-1rem] font-jockey_one text-2xl text-white px-28 py-2 rounded-full shadow-lg">
                    See Recipe
                </a>
            </div>
        </div>

    </section>
    {{-- SECTION-3 END --}}
</body>
</html>