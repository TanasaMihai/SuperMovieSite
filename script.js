//TVMAZE API KEY: kHbRZbHSw1fCuDZb-fFVtmBaTpNLM5mq

function searchMovies(){
//  define  a constant/object to acces http/url site  //

const xhr = new XMLHttpRequest();

xhr.onload = function() {  //you can use this 2 lines or //xhr.addEventListener("load", function () {}); // this a call back function will get call when data is arrived
 const movieInfo = JSON.parse(xhr.responseText);// sort data from json we need to convert to an object


 //console.log(movieInfo);// response will be json text
} 
//  abreviation 'xhr' stand for = xml http request  //

const url = "https://api.tvmaze.com/search/shows?q=girls&appid=kHbRZbHSw1fCuDZb-fFVtmBaTpNLM5mq"

// in order to send a request you need cmd 'open' to innitialise the request
// and pas the 2 parrameters "GET"and "url" (open xhr).

xhr.open("GET", url);
 
// After we open the 'xhr' we, Now, send the 'xhr'
//SEND request to the remote server.
// in our case we send nothing (); because we do a GET request

xhr.send(); // we dont get the result  imediatly because  XMLHttpReques works  assyncronisly for verify that see ligne 8
}
window.onload = function(){
document.getElementById("btn").onclick = function(){
   searchMovies();
}
}