<!DOCTYPE html>
<html lang="en" class="w-[100%]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('fontawesome6/css/all.css')}}">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col  w-full h-full ">
    <header class=" bg-blue-500 text-white  flex justify-around items-center font-bold w-full h-[50px]">
        <h1>Bienvenue Sur La Plate Forme TCF Canada</h1>
        <nav class="">
            <ul class="flex gap-4 list-none">
                <li class="border-l  border-white py-4"><a href="#"><i class="fas fa-graduation-cap px-2"></i>Formation</a></li>
                <li class="border-l border-white py-4"><a href="#"><i class=" fas fas fa-table px-2"></i>Tarifs</a></li>
                <li class="border-l border-white py-4"><a href="#"><i class="fas fa-phone px-2"></i>Contactez-nous</a></li>
                <li class="border-l border-white py-4"><a href="#"><i class="fas fa-blog px-2"></i>Blog</a></li>
                <li class="border-l border-white flex gap-6 items-center">
                    <a href="#"><i class ="fab fa-facebook-f px-2"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class=" sticky top-0 left-0 right-0 z-[1000] bg-white w-full flex justify-around items-center shadow-lg h-[60px]">
        <div>
            <img src="images/labo.PNG" class="h-[60px] w-[70px]" alt="">
        </div>
        <nav class="flex gap-4  list-none uppercase font-bold">
            <li class="hover:text-gray-500"><a href="#"><i class="fas fa-edit px-2"></i><span>expression ecrite</span><i class="fas fa-angle-down px-2"></i></a></li>
            <li class="hover:text-gray-500"><a href="#"><i class="fas fa-people-arrows px-2"></i><span>expression orale</span><i class="fas fa-angle-down px-2"></i></a></li>
            <li class="hover:text-gray-500"><a href="#"><i class="fas fa-book-open px-2"></i><span>comprehension ecrite</span></a></li>
            <li class="hover:text-gray-500"><a href="#"><i class="fas fa-headphones-alt px-2"></i><span>comprehension orale</span></a></li>
            <li class="hover:text-gray-500"><a href="#"><i class="fas fa-sign-in-alt px-2"></i><span>se connecter</span></a></li>
            <li class="hover:text-gray-500"><a href="#"></a></li>
        </nav>
    </div>
   