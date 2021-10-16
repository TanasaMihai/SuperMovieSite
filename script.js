function searchMovies() {

var inputMovies = document.getElementById("inputMovies").value;
var endpoint = "https://api.tvmaze.com/search/shows";            
var reqEndpointTvMaze = endpoint + "?q=" + inputMovies;      

               
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
output = JSON.parse(this.responseText);

var number_tv = output.length;
for (var i = 0; i < number_tv; i++) {

console.log(output[i]);      

var name = output[i]['show']['name'];
var url = output[i]['show']['url'];   

var output_html  = "<div class = 'displayMovies'>"  + ">" + name + ">" + url +  "</div><br><br><br>";

var currentHTML = document.getElementById("responseSearch").innerHTML;
output_html = currentHTML + output_html;

document.getElementById("responseSearch").innerHTML = output_html;

}
}
}; 

xhr.open("GET", reqEndpointTvMaze , true);
xhr.send();

}


