<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">SIIT</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Word Segmentation (THAI)</a>
    <a href="eng_ver.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Word Segmentation (ENG)</a>

  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Member</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">1.) Thanapon Arch-int 5822791802</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">2.) Chayaphat Nicrothanon 5822791828</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">3.) Pannathorn Naksung 5822793899</a>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
<div class="w3-padding-32">
  
</div>
  <div class="w3-row">
    <div class=" w3-container">
      <h1 class="w3-text-teal w3-center">ABOUT THIS PROGRAM</h1>  
      
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-test">Introduction</h2>
       <p>This program is a part of CSS432 Information Retrieval subject</p>
        <h2 class="w3-test">Member</h2>
       <p>1.) Thanapon Arch-int 5822791802<br>
          2.) Chayaphat Nicrothanon 5822791828<br>
          3.) Pannathorn Naksung 5822793899<br></p>
      <h2 class="w3-text">How to use the Program</h2>
      <p>Our program is a word segmentation tool.It can be use in both Thai and Engish. Simply press tab Word Segmentation(THAI) to use thai language segmentator and tab Word Segmentation(ENG) to use english language segmentator.<br> Input the sentences you want to segment into insert box then press submit the segmented word will be shown on the output box.</p>
      <h2 class="w3-text">How to does this work</h2>
      <p>In english we simply use space between words to segment the word.</br>In thai it's a little bit more complicated we load dictionary that contain words then we use longest matching algorithm to determine what word is it.In longest matching algorithms will detect string of words then it will try to find longest word possible that appear in the dictionary that it will determine that it is a word and move on to the next.The possible weaknest of this is for example the word "ตากลม" will always determined to be the word ตากลม never the word ตาขกลม regarding the context. </p>
    </div>

  </div>




  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>CSS432 Information Retrieval.</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="#" target="_blank">SIIT CPE 24</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
