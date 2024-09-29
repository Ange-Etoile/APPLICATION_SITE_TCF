import {  checkVariableInUrl, getData, getHours, setData } from "./fonction.js";

let url = new URLSearchParams(window.location.search);
let clear_url = new URL(window.location.href)
let id = url.get('id') === null ? 1 :url.get('id');
const span_duree = document.querySelector('#duree');
const progressbar = document.querySelector('#progress-bar');
const taille = document.querySelectorAll('[span_of]').length;
let endquiz = true
let verify = 0 ;

document.querySelector(`[span_of="${id}"]`).classList.add('actuel')
//=================================affichage de la question cocher====================================//
document.querySelectorAll('[span_of]').forEach(element =>{
    element.addEventListener('click',function(e){
        e.preventDefault()
        let redirect = element.getAttribute('span_of')
        const proposition = getData('propositions');
        let i = 0
        while(i<(proposition.length - 1) && endquiz === true){
            if(proposition[i][0] === -1 && proposition[i][1] === -1){
                endquiz = false
            }else{
                i++
            }
        }
        if(endquiz === true && parseInt(redirect) === taille ){
            window.location.href = window.location.pathname + '?finish&id='+redirect+'#container-question-answer';
        }else {
            
            window.location.href = window.location.pathname + '?id='+redirect+'#container-question-answer';
        }
    })
})

//=============================================================================================//
let array_proposition = [];
for(let i = 0;i<taille;i++){
    array_proposition[i] = [];
    for(let j = 0; j<2; j++){
        array_proposition[i][j] = -1;
    }
}
//==================================definitions des cookies==============================================//
if(getData('propositions') === null){
    setData('propositions', array_proposition)
}
if(getData('propositions') !== null){
    const proposition = getData('propositions');
    console.log(proposition)
}
//====================================================================================================//
if(getData('propositions') !== null){
    const proposition = getData('propositions');
    for(const[cle,valeur] of Object.entries(proposition)){
        if(valeur[0] != -1 && valeur[1] != -1){
            document.querySelector(`[span_of="${parseInt(cle) + 1}"]`).classList.add('repondu')
        }
    }
}
//======================================enregistrement des propositions faites ===========================//
document.querySelectorAll('#div_proposition').forEach(div =>{
    div.addEventListener('click',function(){
        document.querySelectorAll('#div_proposition').forEach(element =>{
            element.classList.remove('active')
        })
        this.classList.add('active')
        this.querySelector('input').checked = true;
        let input = this.querySelector('input')
        let reponse = input.getAttribute('value')
        let point = input.getAttribute('point')
        let index = parseInt(id) - 1;
        if(getData('propositions') !== null){
            const proposition = getData('propositions');
            proposition[index][0] = reponse
            proposition[index][1] = point
            setData('propositions', proposition)

            for(const[cle,valeur] of Object.entries(proposition)){
                if(valeur[0] != -1 && valeur[1] != -1){
                    document.querySelector(`[span_of="${parseInt(cle) + 1}"]`).classList.add('repondu')
                }
            }
        }
    })
})
//================================================Gestion du temps======================================//
if(getData('heure') === null){
    setData('heure','3600-100');
}



//================================================= pour gerer le debut
let duree_Width = getData('heure');
let duree = duree_Width.split('-')[0];
let width =duree_Width.split('-')[1];
if(duree > 0 && width > 0){
    span_duree.textContent = `Temps Restants : ${(getHours(duree))}`;
    progressbar.style.width = `${width}%`;
    duree--;
    width -=0.02778;
    let data = [duree,width];
    let newValue = data.join('-')
    setData('heure',newValue);
}
//===================================== code qui genre le progress
let idset = setInterval(function(){
    let duree_Width = getData('heure');
    let duree = duree_Width.split('-')[0];
    let width =duree_Width.split('-')[1];
    if(duree > 0 && width > 0){
        span_duree.textContent = `Temps Restants : ${(getHours(duree))}`;
        progressbar.style.width = `${width}%`;
        duree--;
        width -=0.02778;
        let data = [duree,width];
        let newValue = data.join('-')
        setData('heure',newValue,1);
    }
},1000);
//================================cochage de la question repondus=====================================//
if(getData('propositions') !== null){
    const proposition = getData('propositions')
    const current = proposition[id-1];
    if(current[0] !== -1 && current[1] !== -1){
        const input = document.querySelector(`[value="${parseInt(current[0])}"]`)
        input.checked = true
        input.parentNode.classList.add('active')

    }
}
//==================================verification de toutes les reponse=====================================//

//================================action de terminer le quiz==========================================//

//====================================action du bouton suivant==============================================//
if(!checkVariableInUrl('finish') && parseInt(id) !== taille){
    document.getElementById('suivant').addEventListener('click',function(e){
        e.preventDefault();
        const proposition = getData('propositions')
        const current = proposition[parseInt(id)-1];
        let ischecked = false
        if(current[0] !== -1){
            ischecked = true
        }
        if(!ischecked){
            window.location.href = window.location.pathname + '?required&id='+id+'#container-question-answer';
        }
        else{
            let ids = id;
            ids++;
            const proposition = getData('propositions');
            let i = 0
            while(i<(proposition.length - 1) && endquiz === true){
                if(proposition[i][0] === -1 && proposition[i][1] === -1){
                    endquiz = false
                }else{
                    i++
                }
            }
            if(endquiz === true && parseInt(ids) === taille ){
                window.location.href = window.location.pathname + '?finish&id='+ids+'#container-question-answer';
            }else {
                window.location.href = window.location.pathname + '?id='+ids+'#container-question-answer';
            }
        }
    })
}
//=====================================action du bouton retour==========================================//
if(id>1){
    document.getElementById('precedent').addEventListener('click',function(e) {
        e.preventDefault();
        let ids = id;
        ids--;
        window.location.href = window.location.pathname + '?id='+ids+'#container-question-answer';
    })
}
//===================================action sur le bouton terminer============================//
document.getElementById('terminez').addEventListener('click',function(){
    
})
