@extends('layourts.app')
@section('main-content')
<section class="flex flex-col items-center gap-8 w-full mb-8">
    <div class="bg-cover bg-center bg-no-repeat w-full h-[250px]" style="background-image: url('/images/icone3.jpg');">
        <h1 class=" h-full flex items-center justify-center uppercase text-4xl font-bold text-white">comprehension orale series <span>(145)</span></h1>
    </div>
    <section class="flex flex-wrap gap-4 w-[60%] h-auto bg-blue-200 rounded-lg  border-4 border-blue-500 p-4  max-h-[150px] overflow-y-auto">
        <span class="flex items-center justify-center bg-white rounded-full border-2 border-zinc-400 h-[50px] w-[50px]">1</span>
        <span class="flex items-center justify-center bg-white rounded-full border-2 border-zinc-400 h-[50px] w-[50px]">2</span>
    </section>
    <section class="flex flex-col gap-4 w-[60%]">
        <div class="w-full flex gap-4">
            <span><i class="far fa-circle px-2"></i>Actuel</span>
            <span><i class="fas fa-circle px-2"></i>Repondu</span>
            <span><i class="fas fa-circle text-yellow-400 px-2"></i>Revision</span>
        </div>
        <div class="flex ">
            <button class="bg-gradient-button rounded-lg p-2 text-white font-bold">REVISER LA QUESTION</button>
        </div>
    </section>
    <section class="flex flex-col gap-4 w-[60%]">
        <span class="w-full text-right border-t border-b py-6">15 points</span>
        <h1 class="w-full font-bold text-2xl">Question n°<span>1</span></h1>
        <div class="w-full flex items-center justify-center bg-gray-100 p-4 rounded-lg shadow-lg">
            <audio controls class="w-full z-[0]"> 
                <source src="" type="audio/mpeg">
            </audio>
        </div>
        <p class="w-full flex items-center justify-center underline">Ecouter les 4 propositions et choississez en une qui correspond</p>
        <form action="" class="flex flex-col gap-4 w-full">
            <div class="p-4 bg-blue-50 rounded-lg">
                <input type="radio" name="" id="audio">
                <label for="audio">Aller au canada</label>
            </div>
            <div class="p-4 bg-blue-50 rounded-lg">
                <input type="radio" name="" id="audio">
                <label for="audio">Aller au canada</label>
            </div>
            <div class="p-4 bg-blue-50 rounded-lg">
                <input type="radio" name="" id="audio">
                <label for="audio">Aller au canada</label>
            </div>
            <div class="p-4 bg-blue-50 rounded-lg">
                <input type="radio" name="" id="audio">
                <label for="audio">Aller au canada</label>
            </div>
            <div class="w-full flex justify-between">
                <button class="bg-gradient-button rounded-lg py-2 px-8 text-white font-bold">Retour</button>
                <button class="bg-gradient-button rounded-lg py-2 px-8 text-white font-bold">Suivant</button>
            </div>

        </form>
        <div class="fixed bottom-0 left-0 right-0 flex flex-col gap-2 h-[75px] bg-blue-50 items-center">
            <span class=" font-bold">Temps Restant: </span>
            <div class="w-[90%] h-[20px] bg-white rounded-full">
                <div class="w-[20%] h-full bg-blue-600 rounded-full"></div>
            </div>
        </div>
    </section>
</section>
@endsection