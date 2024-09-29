<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{   public function array_Aleatoire($taille){
        $tableau = range(0,$taille-1);

        shuffle($tableau);
        return $tableau;
    }
    public function IsInURL($property){
        $currentUrl = request()->fullUrl();
        return  strpos($currentUrl,$property) !== false;
    }
    public function array_proposition($chaine){
        $tableau = explode(';;', $chaine);
        return $tableau;
    }
    public function liste_question(Request $request){

        $id = $request->query("id")?$request->query("id"):1;
        $question = Question::find($id);
        $number_question = Question::count();
        $allquestions = Question::all();
        $containsfinishInUrl = $this->IsInURL("finish");
        $containsRequiredUrl = $this->IsInURL("required");
        $propositions = $this->array_proposition($question->propositions);
        $array_aleatoire = $this->array_Aleatoire(count($propositions));
        return view("question",['id'=>$id],compact("containsfinishInUrl","containsRequiredUrl","allquestions","question","propositions","array_aleatoire","id","number_question"));
    }
}
