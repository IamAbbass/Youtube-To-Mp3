<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Free Youtube to MP3 Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Free Youtube to MP3 Converter">
    <meta name="keywords" content="youtube,mp3,converter,youtube2mp3,mp4,mp3,fast,youtube,download">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $("#youtube").submit(function(e){
          e.preventDefault();
          $("#mp3_here").html("Converting Youtube to MP3..");
          $.getJSON("download.php?url="+$("#url").val(),function(data){

            if(data.error){
              alert(data.message);
              $("#mp3_here").html(data.message);
            }else{
              $("#mp3_here").html("<audio controls>"+
                  "<source src='"+(data.file)+"' type='audio/ogg'>"+
                  "<source src='"+(data.file)+"' type='audio/mpeg'>"+
                  "Your browser does not support the audio element."+
                  "</audio><br/>"+
                  "Click to download: <a target='_blank' href='"+(data.file)+"'>"+(data.title)+"</a>");
            }

          });
        });
      });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <style>
      *{
        margin:0;
        padding:0;
      }
      body{
        background: #eee;
      }
      .clear{
        clear:both;
      }
      .center_container{
        width: 75%;
        display: block;
        margin: 8% auto;
        padding: 24px;
        box-shadow: 3px 3px 10px #111111;
        border-radius: 5px;
        background: #fff;
      }
      #youtube{

      }
      #url{
        display: block;
        padding: 12px 1%;
        font-family: 'Lato', sans-serif;
        margin: 0 0 12px 0;
        width: 98%;
        outline: none !important;
        font-size: 18px;
        border: 2px solid #333;
      }
      #submit{
        padding: 8px;
        float: right;
        outline: none;
        font-size: 18px;
      }
      .title{
        text-align:center;
        font-family: 'Lato', sans-serif;
        margin: 0 0 10px 0;
      }
    </style>
  </head>
  <body>
      <div class="center_container">
        <h1 class="title">Free Youtube to MP3 Converter</h1>

        <form id="youtube">
          <input id="url" name="url" type="url" placeholder="https://www.youtube.com/watch?v=VDB65S6rCC0" required />
          <button id="submit" type="submit">Youtube to MP3</button>
        </form>
        <div id="mp3_here"></div>
        <div class="clear"></div>
      </div>
  </body>
</html>
