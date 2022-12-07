import HttpCrudRequests from "./HttpCrudRequests.js";

var http = new HttpCrudRequests()

var baseURL = "http://localhost:8000/"

console.log(http)

function getJoueurs(){
   return http.get(baseURL+"api/joueurs")
}

function getEquipes(){
    return http.get(baseURL+"api/equipes")
}
 
 function getCoachs(){
    return http.get(baseURL+"api/liste_coachs")
}

 function getClubs(){
    return http.get(baseURL+"api/clubs")
}

 function getPersonnes(){
    return http.get(baseURL+"api/personnes")
}
 

console.log(getJoueurs() , getEquipes() , getCoachs(), getClubs(), getPersonnes())