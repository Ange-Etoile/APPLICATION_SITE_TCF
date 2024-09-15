<!DOCTYPE html>
<html lang="en" class="w-[100%]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('fontawesome6/css/all.css')}}">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col gap-4 w-full h-full ">
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
    <div class=" sticky top-0 left-0 right-0 bg-white w-full flex justify-around items-center shadow-lg h-[75px]">
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
    <main>
        <h1>bonjour le monde</h1>
    </main>
    <footer class="flex justify-around items-baseline h-[400px] w-full bg-blue-500 py-4">
        <div class="flex flex-col gap-4 w-[20%] h-[80%]">
            <h2 class="font-bold">Les pages</h2>
            <div class="flex flex-col gap-4 list-none">
                <li class="border-b border-black"><a href="#"><i class="fas fa-home px-2"></i>Page d'acceuil</a></li>
                <li class="border-b border-black"><a href="#"><i class="fas fa-book-open px-2"></i>Compréhension écrites</a></li>
                <li class="border-b border-black"><a href="#"><i class="fas fa-headphones-alt px-2"></i>Compréhension orales</a></li>
                <li class="border-b border-black"><a href="#"><i class="fas fa-edit px-2"></i>Expressions écrites</a></li>
                <li class="border-b border-black"><a href="#"><i class="fas fa-people-arrows px-2"></i>Expressions orales</a></li>
            </div>
        </div>
        <div class="flex flex-col gap-4 w-[20%] h-[80%]">
            <div class="flex flex-col gap-2 list-none">
                <li class="border-b border-black"><a href="#"><i class="fas fa-gavel px-2"></i>Politique de confidentialité</a></li>
                <li class="border-b border-black"><a href="#"><i class="fas fa-blog px-2"></i>Blog</a></li>
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="font-bold">Paramètre du compte</h2>
                <div class="flex flex-col gap-2 list-none bg-blue-900 rounded-lg border-2 border-blue-700">
                    <li class="p-2 rounded-tl-lg rounded-tr-lg hover:bg-blue-400"><a href="#"><i class="fas fa-sign-in-alt px-2"></i>se connecter</a></li>
                    <li class="p-2  hover:bg-blue-400"><a href="#"><i class="fas fa-user-plus px-2"></i>S'inscrire</a></li>
                    <li class="p-2 rounded-bl-lg rounded-br-lg hover:bg-blue-400"><a href="#"><i class="fas fa-lock px-2"></i>Mot de passe oublié</a></li>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 w-[20%] h-[80%]">
            <div class="div_reseau-title-body">
                <h2 class="font-bold">Nos Réseaux sociaux</h2>
                <div class="div-reseau">
                    <span class="first-child"><a href="#"><i class="fab fa-youtube"></i></a></span>
                    <span class="sd-child"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="th-child"><a href="#"><i class="fab fa-whatsapp"></i></a></span>
                    <span class="fr-child"><a href="#"><i class="fab fa-instagram"></i></a></span>
                </div>
            </div>
            <div class="div_propos">
                <h2 class="font-bold">à propos de nous</h2>
                <p>plateforme specialisée dans la préparation au TCF Canada test à conditions réelles, sujets récents</p>
            </div>
        </div>
        <div class="flex flex-col gap-4 w-[20%] h-[80%]">
            <h2 class="font-bold">Nous Acceptons</h2>
            <div class="div-all-paiment">
                <div class="div_paiement-exterieur">
                    <div class="div-paiement-card">
                        <div><i class="fab fa-cc-visa"></i></div>
                        <div><i class="fab fa-cc-mastercard"></i></div>
                        <div><i class="fab fa-cc-paypal"></i></div>
                        <div><i class="fab fa-cc-discover"></i></div>
                    </div>
                    <div><img src="images/western.png" alt=""></div>
                </div>
                <div class="div-paiment-interieur">
                    <div><img src="images/orange.jpg" alt=""></div>
                    <div><img src="images/mtn.png" alt=""></div>
                </div>
            </div>
            <button>cliquer ici</button>
        </div>
    </footer>
</body>
</html>
