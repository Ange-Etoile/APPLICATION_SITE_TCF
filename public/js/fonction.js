
export function setData(name,value){
    const name_json = JSON.stringify(value);
    localStorage.setItem(name,name_json);
}
export function getData(name){
    const array = localStorage.getItem(name);
    const timeJson = array ? JSON.parse(array) : null;
    return timeJson;
}
export function getHours(seconde){
    const hours  = Math.floor(seconde / 3600).toString().padStart(2,'0') ;
    const minute = Math.floor(( seconde % 3600) / 60).toString().padStart(2,'0');
    const seconds = Math.floor(seconde % 60).toString().padStart(2,'0');
    return `${hours}:${minute}:${seconds}`
}
export function checkVariableInUrl(variable){
    const urlparams = new URLSearchParams(window.location.search);
    return urlparams.has(variable)
}