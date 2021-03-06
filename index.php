<!doctype html>
<html lang="en">

<head>
         <meta charset="utf-8">
         <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>SuperMovie_For_Iyad_App</title>

        <style>
        * {
        box-sizing: border-box;
        }

        body {
        margin: 0;
        font-family: Arial;
        font-size: 17px;
        }

        #myVideo{
        object-fit: cover;
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        }

        .content {
                position: fixed;
                top: 0;
                background: rgba(0, 0, 0, 0.5);
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
        }

        h1{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: #2ecc71;
                letter-spacing: -.03em;
                font-weight: 300;
                font-size: 50px;
        }

        input{
                display: inline;
                width: 230px;
                height:30px;
                background-color:#2ecc71;
                color: rgb(9, 9, 9);
                border-radius:35px;
                border-color: rgb(0, 123, 255);
        }

        input:hover{
                background:#ffff0b ;
                color:black;
        }

        #responseSearch{
                color:#2ecc71;

        }
        #myBtn {
                display: inline;
                width: 130px;
                height:30px;
                background-color: #239b56;
                color: whitesmoke;
                border-radius:35px;
                border-color: red;
                border-bottom-left-radius: 7px;
                border-top-right-radius: 7px;
                margin: 15px;
                cursor: pointer;
        }
        #myBtn:hover {
                background:#ffff0b ;
                color:black;
        }

        #btn {
                display: inline;
                width: 130px;
                height:30px;
                background-color: #239b56;
                color: whitesmoke;
                border-radius:35px;
                border-color: red;
                border-bottom-left-radius: 7px;
                border-top-right-radius: 7px;
                margin: 15px;
                cursor: pointer;
        }

        #btn:hover {
                background:#ffff0b ;
                color:black;
        }

        #modalBtn {
                display: inline;
                width: 130px;
                height:30px;
                background-color: #239b56;
                color: whitesmoke;
                border-radius:35px;
                border-color: red;
                border-bottom-left-radius: 7px;
                border-top-right-radius: 7px;
                margin: 15px;
                cursor: pointer;
        }

        #modalBtn:hover {
                background:#ffff0b ;
                color:black;
        }
        </style>


</head>
          <video autoplay muted loop id="myVideo">
          <source src="img/640.mp4" type="video/mp4">
          </video>
        <body>
                <div class="content"> 
                <h1>Super Movies API</h1>
                <input type="text" id="inputMovies" placeholder="Search TvMaze..."/>
                <button id="btn" name="GO" onclick="searchMovies()">Search_Movie</button>

                        <button id="myBtn"onclick="myPlayPauseBtn()">Pause</button>

                <br>
                <br>

                <div id="responseSearch"> Search Result:</div>
       

</div>

<script>

function searchMovies() {

          var modal = document.getElementById("myModal");

                
          var inputMovies = document.getElementById("inputMovies").value;
          var endpoint = "https://api.tvmaze.com/search/shows";            
          var reqEndpointTvMaze = endpoint + "?q=" + inputMovies;      

               
          var xhr = new XMLHttpRequest();//abreviation xhr: XMLHttpReques
              xhr.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                        output = JSON.parse(this.responseText);

                        var number_tv = output.length;

                        for (var i = 0; i < number_tv; i++) {

                                console.log(output[i]);  

                                var url = output[i]['show']['url']; 
                                var name = output[i]['show']['name'];
                        

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
          var video = document.getElementById("myVideo");
          var myBtn = document.getElementById("myBtn");
          var btn = document.getElementById("btn");



function myPlayPauseBtn() {
     if (video.paused) {
              video.play();
              myBtn.innerHTML = "Pause";

    }else{

             video.pause();
             myBtn.innerHTML = "Play";
    }
}

</script>
<button id="modalBtn">Open Modal</button>
</body>
</html>
