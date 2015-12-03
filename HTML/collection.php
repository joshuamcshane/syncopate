<?php
if(isset($_POST['btn-upload']))
{
	$fileToUpload = $_FILES['fileToUpload']['name'];
    $fileToUpload_loc = $_FILES['fileToUpload']['tmp_name'];
	$folder="../audio/";
	$target_file = $folder . basename($_FILES['fileToUpload']['name']);
	$audioFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if(move_uploaded_file($fileToUpload_loc,$folder.$fileToUpload))
	{
	if (file_exists($target_file)) 
	{
		?><script>alert('File was successfully uploaded.');</script><?php
	}
	}
else
	{
		?><script>alert('Error while uploading file. Please try again later');</script><?php
	}
	
if ($_FILES["fileToUpload"]["size"] > 15000000){
?><script>alert('Sorry, your file is too large. The max is 15 mbs');</script><?php
}
if($audioFileType != "mp3" && $audioFileType != "wav" && $audioFileType != "ogg") {
	?><script>alert('Sorry, only mp3, wav, and ogg files are supported.');</script><?php
}
	
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Music Collection</title>
  <link href="../CSS/collection.css" type="text/css" rel="stylesheet">
  <link href="../CSS/player.css" type="text/css" rel="stylesheet">
  <link href="../CSS/upload.css" type="text/css" rel="stylesheet">

  <script src="../JS/musicPlayer.js" type="text/javascript"></script>
   <script src="../JS/tags.js" type="text/javascript"></script>

 <script src="../JS/id3-minimized.js" type="text/javascript"></script>
  <script type="text/javascript" src="../JS/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="../JS/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="../JS/song-autocomplete.js"></script>
<script>
function play1(){
	audio.src = "../audio/Something.mp3"
	audio.play();
	}
function play2(){
	audio.src = "../audio/Photograph.mp3"
	audio.play();
	}
	function play3(){
	audio.src = "../audio/Letter Home.mp3"
	audio.play();
	}
	function play4(){
	audio.src = "../audio/Slow Ride.mp3"
	audio.play();
	}
	function play5(){
	audio.src = "../audio/Tricks.mp3"
	audio.play();
	}
	function play6(){
	audio.src = "../audio/Blank Space.mp3"
	audio.play();
	}	
	function play7(){
	audio.src = "../audio/Flawless.mp3"
	audio.play();
	}	
	function play8(){
	audio.src = "../audio/Hey Ya!.mp3"
	audio.play();
	}	
	function play9(){
	audio.src = "../audio/Liquor Store Blues.mp3"
	audio.play();
	}
	function play10(){
	audio.src = "../audio/Take It All.mp3"
	audio.play();
	}
	function play11(){
	audio.src = "../audio/Tiptoe.mp3"
	audio.play();
	}	
	function play12(){
	audio.src = "../audio/The Kids Dont Stand A Chance.mp3"
	audio.play();
	}	
</script>
  
</head>

<body onload="albumArt()">

  <header>
    <nav>
      <div id="logo">
        <a href="./home.html"><img src="../images/syncopate_icon.png"></a>
      </div>

      <div id="links">
        <ul id="links">
          <li><a href="home.html">Home</a></li>
          <li><a href="">Collection</a></li>
		  
		  
          <li><a href=""><a href="#popup1">Upload</a></a></li>
		  
		  
		  
          <li><a href="./upload.html">Profile</a></li>
        </ul>
      </div>

      <div id="search">
         <form><input type="text" name="search" class="biginput" id="autocomplete" placeholder="Discover New Music..."></form>
        <!-- <input type="submit" name="search" value="Search"> -->
      </div>
	  
	  
	  
    </nav>
  </header>

  <main>
  <center><h1> Music Collection </h1></center>
    <div id="featured">
      <ul id="albums">
        <li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/priscilla.jpg);" onclick="play1();">
            <div class="text1"><strong><br>Something</strong><br><br>Artist: JMSN<br><br>Album: Priscilla</div>
          </div>
        </li>
        <li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/x.png);" onclick="play2();">
            <div class="text1"><strong><br>Photograph</strong><br><br>Artist: Ed Sheeran<br><br>Album: X</div>
          </div>
        </li>
        <li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/camp.jpg)" onclick="play3();">
            <div class="text1"><strong>Letter Home</strong><br><br>Artist: Childish Gambino<br><br>Album: Camp</div>
          </div>
        </li>
        <li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/ltill.jpg)" onclick="play4();">
            <div class="text1"><strong><br>Slow Ride</strong><br><br>Artist: Beastie Boys<br><br>Album: Licensed To Ill</div>
          </div>
        </li>
        <li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/htfap.jpg)" onclick="play5();">
            <div class="text1"><strong>Tricks</strong><br><br>Artist: Ludovin<br><br>Album: How To Find A Party</div>
          </div>
        </li>
        <li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/1989.png)" onclick="play6();">
            <div class="text1"><strong><br>Blank Space</strong><br><br>Artist: Taylor Swift<br><br>Album: 1989</div>
          </div>
        </li><p>
		<li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/beyonce.jpg)" onclick="play7();">
            <div class="text1"><strong><br>Flawless</strong><br><br>Artist: Beyonce<br><br>Album: Beyonce</div>
          </div>
        </li>
		<li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/speakerboxx.jpg)" onclick="play8();">
            <div class="text1"><strong><br>Hey Ya!</strong><br><br>Artist: OutKast<br><br>Album: Speakerboxx</div>
          </div>
        </li>
		<li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/doowops.jpg)" onclick="play9();">
            <div class="text1"><strong><br>Liquor Store Blues</strong><br><br>Artist: Bruno Mars<br><br>Album: Doo-Wops</div>
          </div>
        </li>
		<li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/21.png)" onclick="play10();">
            <div class="text1"><strong><br>Take It All</strong><br><br>Artist: Adele<br><br>Album: 21</div>
          </div>
        </li>
		<li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/nightvisions.jpg)" onclick="play11();">
            <div class="text1"><strong><br>Tiptoe</strong><br><br>Artist: Imagine Dragons<br><br>Album: Night Visions</div>
          </div>
        </li>
		
		<li>
          <div class="pic1" style="cursor: pointer; background-image: url(../images/vampire.jpg)" onclick="play12();">
            <div class="text1"><strong>Kids</strong><br><br>Artist: Vampire Weekend<br>Album: Vampire Weekend</div>
          </div>
        </li>
		<p>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<p>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<p>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic1">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<li>
          <div class="pic2">
            <div class="text1">Item two<br>Item description</div>
          </div>
        </li>
		<br>
		</ul>
    </div>


	

</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Uploads</h2>
		<a class="close" href="#">X</a>
		<div class="content" style="height: 500px; overflow-y: auto">
		
		<center>Please select the audio file you wish to upload. <br>
		<strong>Accepted files: .mp3, .wav, .ogg</strong></center>
		
		<form id="upload" action="" method="post" enctype="multipart/form-data">
		  <fieldset>		
			  <input id="file" type="file" name="fileToUpload" onchange="loadFile(this)">
			<p>
			 <button type="submit" name="btn-upload">Upload</button>
			
		  </fieldset>
		</form>
		
			<center><img id="picture" src="" alt= "Cover of Song (if available)" height = "150px" width ="150px"/><br>
			<p>Title:</b> <span id="title"></span></p>
			<p>Artist:</b> <span id="artist"></span></p>
			<p>Album:</b> <span id="album"></span></p>
			</center>
			</p>
		</div>
	</div>
</div>
  </main>

  <div id="audio_player">
    <div id="audio_controls">
	<button id="prevbtn"></button>
      <button id="playpausebtn"></button>
	  <button id="skipbtn"></button>
      <input id="seekslider" type="range" min="0" max="100" value="0" step="1">
      <div id="timebox">
        <span id="curtimetext">00:00</span> / <span id="durtimetext">00:00</span>
      </div>
      <button id="mutebtn"></button>
      <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
	  <button id="replaybtn"></button>
	  <button id="shufflebtn"></button>
    </div>
  </div>

</body>
</html>
