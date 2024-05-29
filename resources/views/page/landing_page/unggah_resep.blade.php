<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Recipe | Recipe Project</title>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#DEE4B8]">

    {{-- SECTION-1 --}}
    <section class="py-8 px-16">
        <div>
            <div class="flex justify-center items-center text-4xl leading-normal font-jockey_one text-black">
                Unggah Resep Anda
            </div>
            <form action="">
                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="col-span-1">
                        <div class="text-2xl text-black font-jockey_one">
                            Pilih Gambar Masakkan 1
                        </div>
                        <div class="mt-4">
                            <label
                                id="labelUpload"
                                class="flex justify-center w-full h-40 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                <span class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <span class="font-jockey_one text-gray-600">
                                        Tarik gambar ke sini atau cari di
                                        <span class="text-blue-600 underline">folder</span>
                                    </span>
                                </span>
                                <input id="inputFile" class="hidden" type="file" name="file_upload" required>
                            </label>
                        </div>

                        <div class="text-2xl text-black font-jockey_one mt-4">
                            Pilih Gambar Masakkan 2
                        </div>
                        <div class="mt-4">
                            <label
                                id="labelUpload2"
                                class="flex justify-center w-full h-40 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                <span class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <span class="font-jockey_one text-gray-600">
                                        Tarik gambar ke sini atau cari di
                                        <span class="text-blue-600 underline">folder</span>
                                    </span>
                                </span>
                                <input id="inputFile2" class="hidden" type="file" name="file_upload">
                            </label>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="text-2xl text-black font-jockey_one">
                            Tambahkan Judul Masakkan
                        </div>
                        <div class="mt-4">
                            <input class="w-full outline-none font-inter py-2 px-2 rounded-lg" type="text" required>
                        </div>
                        <div class="text-2xl text-black font-jockey_one mt-4">
                            Deskripsi Masakan
                        </div>
                        <div class="mt-4">
                            <textarea class="w-full outline-none font-inter py-2 px-2 rounded-lg" name="" id="" rows="5" required></textarea>
                        </div>
                        <div class="text-2xl text-black font-jockey_one mt-4">
                            Cara Membuat
                        </div>
                        <div class="mt-4">
                            <textarea class="w-full outline-none font-inter py-2 px-2 rounded-lg" name="" id="" rows="5" required></textarea>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="text-2xl text-black font-jockey_one">
                            Bahan-Bahan Masakan
                        </div>
                        <div class="mt-4">
                            <textarea class="w-full outline-none font-inter py-2 px-2 rounded-lg" name="" id="" rows="5" required></textarea>
                        </div>
                        <div class="text-2xl text-black font-jockey_one mt-4">
                            Nama Bahan-Bahan Lain (2)
                        </div>
                        <div class="mt-4">
                            <input class="w-full outline-none font-inter py-2 px-2 rounded-lg" type="text" required>
                        </div>
                        <div class="text-2xl text-black font-jockey_one mt-4">
                            Bahan-Bahan (2)
                        </div>
                        <div class="mt-4">
                            <textarea class="w-full outline-none font-inter py-2 px-2 rounded-lg" name="" id="" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex">
                    <button class="w-full rounded-full py-2 font-jockey_one drop-shadow-md bg-[#6E7732] text-white text-2xl" type="submit">
                        Unggah Masakan
                    </button>
                </div>
            </form>
        </div>
    </section>
    {{-- SECTION-1 END --}}

    <script type="text/javascript">
        let label = document.getElementById("labelUpload");
        let input = document.getElementById("inputFile");
        let file;

        input.addEventListener("change", e => {
            e.preventDefault();
            file = input.files[0];
            label.querySelector('span:last-child').innerText = file.name;
        });

        label.addEventListener("dragover", e => {
            e.preventDefault();
            file = this.files[0];
            label.querySelector('span:last-child').innerText = file.name;
        });

        label.addEventListener("drop", e => {
            e.preventDefault();
            file = e.dataTransfer.files[0];
            let dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            input.files = dataTransfer.files;
            label.querySelector('span:last-child').innerText = file.name;
        });

        // INPUT KE @
        let label2 = document.getElementById("labelUpload2");
        let input2 = document.getElementById("inputFile2");
        let file2;

        input2.addEventListener("change", e => {
            e.preventDefault();
            file2 = input2.files[0];
            label2.querySelector('span:last-child').innerText = file2.name;
        });

        label2.addEventListener("dragover", e => {
            e.preventDefault();
            file2 = this.files[0];
            label2.querySelector('span:last-child').innerText = file2.name;
        });

        label2.addEventListener("drop", e => {
            e.preventDefault();
            file2 = e.dataTransfer.files[0];
            let dataTransfer2 = new DataTransfer();
            dataTransfer2.items.add(file);
            input2.files = dataTransfer2.files;
            label2.querySelector('span:last-child').innerText = file2.name;
        });
    </script>

</body>
</html>