<!doctype html>
<html lang="en-US">
    <head>
        <title>Post Log</title>
        <meta name="description" content="All feedback provided can be found here.">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Feedback, Comment, Critic, Feedlog">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="logstyle.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300;700&family=Lato&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="logo">
            <h1>Craft-A-Character</h1>
        </div>
        <nav class="navi">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="make.html">Make</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </nav>
        <div class="commentgrid">
            <div class="choicesig">
                <?php
                    if(isset($_POST['type-of-comment'])){
                    $commentType = $_POST['type-of-comment'];

                    echo $commentType;
                    }
                ?>
            </div>
            <div class="namecomment">
                <h2 class="darkhead"><?php echo $_POST["Cmntname"]; ?></h2>
                <p class="darktxt"><?php echo $_POST["comment"]; ?></p>
            </div>
        </div>
        <footer>
        <p>Daysy Gutierrez. 2023</p>
    </footer>
    </body>