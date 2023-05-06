<!doctype html>
<html lang="en-US">
    <head>
        <title>Here is your Character</title>
        <meta name="description" content="This is the character you have submitted.">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Character, Creation, Fictional, Making, Writing, Creating, Info, Inspiration">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="charstyle.css">
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
    <div class="chargrid">
        <div class="imagry">
            <img src="imagePlaceholder.png" alt="Hero" class="emblem">
            <p><?php echo $_POST["looksdesc"]; ?></p>
        </div>
        <div class="chname">
            <h2><?php echo $_POST["cname"]; ?></h2>
        </div>
        <div class="goods">
            <h3>Quirks</h3>
            <ul>
                <li><?php echo $_POST["quirk1"]; ?></li>
                <li><?php echo $_POST["quirk2"]; ?></li>
                <li><?php echo $_POST["quirk3"]; ?></li>
            </ul>
        </div>
        <div class="bads">
            <h3>Flaws</h3>
            <ul>
                <li><?php echo $_POST["flaw1"]; ?></li>
                <li><?php echo $_POST["flaw2"]; ?></li>
                <li><?php echo $_POST["flaw3"]; ?></li>
            </ul>
        </div>
        <div class="chdets">
            <h4>Age:</h4> <p><?php echo $_POST["age"]; ?></p><br>
            <h4>Gender: </h4><p><?php echo $_POST["gender"]; ?></p><br>
            <h4>Species/Race: </h4><p><?php echo $_POST["species"]; ?></p><br>
            <h4>Hair Color:</h4><p><?php echo $_POST["haircolor"]; ?></p><br>
            <h4>Eye Color: </h4><p><?php echo $_POST["eyecolor1"]; ?></p><br>
            <h4>Skin Color: </h4><p><?php echo $_POST["skincolor"]; ?></p><br>
            <h4>Signature Color(s): </h4>
                <ol>
                    <li><?php echo $_POST["primarycolor"]; ?></li>
                    <li><?php echo $_POST["secondarycolor"]; ?></li>
                    <li><?php echo $_POST["triatarycolor"]; ?></li>
                </ol>
        </div>
        <div class="chsum">
            <p><?php echo $_POST["prsn"]; ?></p>
            <p><?php echo $_POST["backstory"]; ?></p>
        </div>
        <div class="chemblms">
            <h3>Archetype(s)</h3>
            
        </div>
        <div class="choiceopt">
            <a href="make.html"><button>Back To Making</button></a>
        </div>
    </div>
<footer>
        <p  class="contbtn">Craft-A-Character. Daysy Gutierrez. 2023</p>
        </footer>
    </body>