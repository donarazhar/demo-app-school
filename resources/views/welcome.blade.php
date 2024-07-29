<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Coding App School</title>
</head>

<body>
    <div
        class="bg-[url('https://cdn.pixabay.com/photo/2016/11/14/03/16/book-1822474_1280.jpg')] flex justify-center items-center h-screen relative">
        <div
            class="absolute top-0 left-0 py-4 px-10 w-full flex justify-between items-center md:flex-row flex-col md:items-center">
            <div class="text-2xl font-bold text-white py-2">
                School
            </div>
            <span class="text-3xl cursor-pointer mx-2 md:hidden block absolute top-0 right-0 mt-4 mr-4"
                onclick="toggleMenu(this)">
                <ion-icon name="menu" id="menu-icon"></ion-icon>
            </span>
            <ul id="menu"
                class="md:flex md:items-center z-[10] absolute md:z-auto md:static w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 opacity-0 md:opacity-100 top-[-400px] transition-all duration-500 ease-in bg-slate-200 md:bg-transparent md:text-white">
                <li class="hover:bg-slate-400 py-2 px-2 mx-2 rounded-full duration-500">Home</li>
                <li class="hover:bg-slate-400 py-2 px-2 mx-2 rounded-full duration-500">About</li>
                <li class="hover:bg-slate-400 py-2 px-2 mx-2 rounded-full duration-500"><a href="/admin"
                        class="hover:bg-slate-400 py-2 px-2 mx-2 rounded-full duration-500">Register</a></li>
            </ul>
        </div>

        <div class="flex flex-col absolute top-20 left-[50%] translate-x-[-50%] text-center">
            <h1 class="text-[40px] m-auto font-bold">Coding App School</h1>
            <p class="whitespace-nowrap pt-1 text-[16px] text-[#5c5d61]">
                Upgrade Skill
                <span class="underline underline-offset-4 hover:decoration-2 cursor-pointer">
                    Keep Learning
                </span>
            </p>
        </div>

        <div class="md:space-x-4 absolute bottom-[80px] left-[50%] translate-x-[-50%]">
            <button class="mt-2 md:mt-0 uppercase bg-slate-200 rounded-full text-gray-900 w-96 h-10 md:w-60">Get
                Started</button>
        </div>

        <div class="absolute left-[50%] translate-x-[-50%] bottom-3">
            <ion-icon name="arrow-down-circle-outline" class="h-7 w-7 animate-bounce"></ion-icon>
        </div>

        <script>
            function toggleMenu(icon) {
                let menu = document.getElementById('menu');
                let menuIcon = document.getElementById('menu-icon');

                if (menu.classList.contains('opacity-0')) {
                    menu.classList.remove('top-[-400px]');
                    menu.classList.remove('opacity-0');
                    menu.classList.add('top-[80px]');
                    menu.classList.add('opacity-100');
                    menuIcon.setAttribute('name', 'close');
                } else {
                    menu.classList.remove('top-[80px]');
                    menu.classList.remove('opacity-100');
                    menu.classList.add('top-[-400px]');
                    menu.classList.add('opacity-0');
                    menuIcon.setAttribute('name', 'menu');
                }
            }
        </script>
    </div>
</body>

</html>
