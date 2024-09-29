@extends('layourts.app')
@section('main-content')
<section class="flex flex-col items-center gap-8 w-full mb-8">
    <div class="bg-cover bg-center bg-no-repeat w-full h-[250px]" style="background-image: url('/images/icone3.jpg');">
        <h1 class=" h-full flex items-center justify-center uppercase text-4xl font-bold text-white">comprehension orale series <span>(145)</span></h1>
    </div>
    <section class="flex flex-wrap gap-4 w-[60%] h-auto bg-blue-200 rounded-lg  border-4 border-blue-500 p-4  max-h-[150px] overflow-y-auto">
        @foreach ($allquestions as $row)
            <span span_of="{{$row->id}}" class="flex items-center justify-center bg-white rounded-full border-2 border-zinc-400 h-[50px] w-[50px]">{{$row->id}}</span>
        @endforeach
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
    <section id="container-question-answer" class="flex flex-col gap-4 w-[60%]">
        <span class="w-full text-right border-t border-b py-6">{{$question->nombre_point}} points</span>
        <h1 class="w-full font-bold text-2xl">Question n°<span>{{$question->id}}</span></h1>
        <div class="w-full flex items-center justify-center bg-gray-100 p-4 rounded-lg shadow-lg">
            <audio controls class="w-full z-[0]"> 
                <source src="sons/{{$question->audio}}" type="audio/mpeg">
            </audio>
        </div>
        <p class="w-full flex items-center justify-center underline">Ecouter les 4 propositions et choississez en une qui correspond</p>
        <form action="" class="relative flex flex-col gap-4 w-full">
            @if($containsRequiredUrl === true)
                <div class="absolute top-[20%] left-[15%] w-auto h-auto rounded-[7px] z-200 shadow-xl p-[15px] flex flex-col items-center justify-center bg-blue-400">
                    <div class="text-[18px] font-black text-white mb-[22px]">Veillez sellectionner une proposition avant de continuer</div>
                    <a href="#" class="w-[60px] h-auto p-[2px] text-white flex justify-center items-center rounded-[7px] text-[20px]" style="background:linear-gradient(90deg, rgb(137, 137, 250) 60%, lightgray 100%);">ok</a>
                </div>
            @endif
            @foreach ($array_aleatoire as $key =>$value )
                <div id="div_proposition" class="p-6 bg-blue-50 rounded-lg">
                    <input class="w-[20px] h-[20px]" type="radio" name="proposition" id="audio" value="{{$value}}"   point = "{{$question->nombre_point}}">
                    <label class="text-[20px] px-2" for="audio">{{$propositions[$value]}}</label>
                </div>  
            @endforeach
            <div class="w-full flex justify-between">
                @if ($id>1)
                    <button id="precedent" class="bg-gradient-button rounded-lg py-2 px-8 text-white font-bold">Retour</button>   
                @endif
                @if($containsfinishInUrl === false && $id != $number_question)
                    <button id="suivant" class="bg-gradient-button rounded-lg py-2 px-8 text-white font-bold">Suivant</button>
                @endif
                @if ($containsfinishInUrl === true && $id == $number_question)     
                    <button id="terminez" class="bg-gradient-button rounded-lg py-2 px-8 text-white font-bold">Terminez le quiz</button>
                @endif
            </div>

        </form>
        <div class="fixed bottom-0 left-0 right-0 flex flex-col gap-2 h-[75px] bg-blue-50 items-center">
            <span id="duree" class=" font-bold">Temps Restant: </span>
            <div class="w-[90%] h-[20px] bg-white rounded-full">
                <div id="progress-bar" class="w-[20%] h-full bg-blue-600 rounded-full"></div>
            </div>
        </div>
    </section>
</section>
@endsection