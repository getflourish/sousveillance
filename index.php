<?php
    $id = $_GET["id"];
    if (!isset($id)) $id = 1;

    $titel = array("1" => "Abstract",
                   "2" => "Überwachung",
                   "3" => "Die Beschleunigung der Fotografie",
                   "4" => "Photosharing im digitalen Zeitalter",
                   "5" => "Fotografie von Menschen im öffentlichen Raum",
                   "6" => "Tragbare Kameras",
                   "7" => "Authentizität der Masse",
                   "8" => "Erinnern und Vergessen");
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sousveillance - Im Fokus der Träger und Sammler</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css" media="all">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="js/outline.js"></script>
    <script type="text/javascript" src="js/p5.js"></script>
    <script type="text/javascript" src="js/trail.js"></script>
    <script type="text/javascript" src="//use.typekit.net/dyv0ikf.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
    <!--
        <canvas data-processing-sources="js/tracker.pde"></canvas>
    -->
    <script type="text/javascript">
        $(document).ready(function () {
            var toc = $(".table-of-contents");
            var tocwrap = $(".table-of-contents-wrap");
            var initialX;

            tocwrap.on("click", function () {
                $(this).toggleClass("table-of-contents-hidden");
            })

            toc.on("mouseenter", function (event) {
                initialX = event.pageX;
            })
            toc.on("mousemove", function (event) {
                var scrollLeft = ($(this)[0].scrollWidth / $(window).width()) * event.pageX - $(window).width() / 2;
                $(this).scrollLeft(scrollLeft);
            });

            var myClickHandler = function (element) {
                console.log('Clicked element:', element);
                $(element).remove();
                myDomOutline.start();
            }
            var myDomOutline = DomOutline({ onClick: myClickHandler });
            $(document).keyup(function (event) {
                if (event.which == 32) myDomOutline.start();
            });

        })
    </script>
    <div class="table-of-contents-wrap animated slideInDown table-of-contents-hidden">
        <ol class="table-of-contents">
            <li class="table-of-contents-item"><a href="">Einleitung</a>
                <ul>
                    <li>Vorgeschichte</li>
                    <li>Über diese Arbeit</li>
                    <li>Überwachungsgesellschaft</li>
                </ul>
            </li>
            <li class="table-of-contents-item">Abstract</li>
            <li class="table-of-contents-item">Überwachung
                 <ul>
                     <li>Voir, pouvoir, savoir</li>
                     <li>Das Panopticon von Bentham</li>
                     <li>Überwachungsgesellschaft</li>
                 </ul>
            </li>
            <li class="table-of-contents-item">Die Beschleunigung der Fotografie
                <ul>
                    <li>Starre Fotografie</li>
                    <li>Lebendige Fotografie</li>
                    <li>Sofortbildfotografie</li>
                    <li>Echtzeitfotografie</li>
                </ul>
            </li>
            <li class="table-of-contents-item">Photosharing im digitalen Zeitalter
                <ul>
                    <li>Fotos pro Sekunde</li>
                    <li>Snapchat</li>
                    <li>Instagram</li>
                    <li>Flickr</li>
                    <li>Flock</li>
                    <li>Splendor</li>
                    <li>Kritik an der Schnelllebigkeit der Bilder</li>
                </ul>
            </li>
            <li class="table-of-contents-item">Fotografie von Menschen im öffentlichen Raum
                <ul>
                    <li>Rechte und Gesetze</li>
                    <li>Das Urheberrecht</li>
                    <li>Das Nutzungsrecht</li>
                    <li>Das Recht am eigenen Bild</li>
                </ul>
            </li>
            <li class="table-of-contents-item">Tragbare Kameras
                <ul>
                    <li>Kartografie des Lebens</li>
                    <li>Wearcam</li>
                    <li>Memoto</li>
                    <li>GoPro</li>
                    <li>Google Glass</li>
                    <li>Kritik an Glass</li>
                    <li>Eine Frage des Kontextes</li>
                </ul>
            </li>
            <li class="table-of-contents-item">Authentizität der Masse
                <ul>
                    <li>Metadaten</li>
                    <li>Mehrere Perspektiven</li>
                </ul>
            </li>
            <li class="table-of-contents-item">Erinnern und Vergessen
                <ul>
                    <li>Sammeln, Speichern, Organisieren</li>
                    <li>Digitales Verfallsdatum</li>
                </ul>
            </li>
            <li class="table-of-contents-item">Ausblick auf die praktische Arbeit
                <ul>
                    <li>Fütterung der Überwachungsmaschinen</li>
                    <li>Aggregation</li>
                    <li>Modifikation</li>
                    <li>Generation</li>
                </ul>
            </li>
        </ol>
        <span class="table-of-contents-title"><span class="icon">&#xf0a9; </span><strong> Table of Contents</strong></span>
    </div>


    <header>
        <a href="index.php?id=<?php echo $id - 1 ?>" class="icon icon-interactive">&#xf14a;</a>
        <a href="index.php?id=<?php echo $id + 1 ?>" class="icon icon-interactive">&#xf14b;</a>
        <br>
        <br>
        <h4 class="article-author">Kapitel <?php echo $id ?></h4>
        <h2><?php echo $titel[$id] ?></h2>
    </header>
    <!--<div id="quick-nav"></div>-->
    <!--
	    <div id="social">
	        <div class="wrap">
         	   <span class="tweet"><a>Sousveillance: Im Fokus der Träger und Sammler.<span class="twitter-date"> Bachelorarbeit von Florian Schulz. FH Potsdam 2012.</span></a>
            </div>
        </div>
    	   	<nav>
    	       	<div class="wrap">
        	       	<ul>
                       	<li><a class="active" href="index.html">1. Einleitung</a></li>
                       	<li><a href="">2</a></li>
                       	<li><a href="">3</a></li>
                       	<li><a href="">4</a></li>
                       	<li><a href="">5</a></li>
                       	<li><a href="">6</a></li>
                        <li><a href="">7</a></li>
                        <li><a href="">8</a></li>
                       	<li><a href="">9</a></li>
                   	</ul>
    	       	</div>
    	   	</nav>
	</div>
    -->
    <div class="articles">
        <?php
            include("kapitel/" . $id . "/article.html");
        ?>
    </div>

    <!--
    <div class="caption">
        <div class="bigwrap">
            <h3><a class="scrollPage" id="teasers-start" href="#teasers-start">More Inspire</a></h3>
        </div>
    </div>
	<section id="teasers">
	    <div class="bigwrap">
            <div class="teaser">
    		    <a href="#">
    		    <div class="teaser-headline">
    	            <h2>Interview with Photographer Mary Bowlus</h2>
    				<hr>
    	 			<p>Kate Loftus-O'Brien</p>
    	        </div>
    		   <img src="images/photo.png" alt="" />
    		   	</a>
    		</div>
    		<div class="teaser">
    		    <a href="#">
    		    <div class="teaser-headline">
    	            <h2>Food in Berlin: Malin Elmlid’s Bread Exchange</h2>
    				<hr>
    	 			<p>Kate Loftus-O'Brien</p>
    	        </div>
    		   <img src="images/photo2.png" alt="" />
    		   	</a>
    		</div>
    		<div class="teaser">
    		    <a href="#">
    		    <div class="teaser-headline">
    	            <h2>Awesome Illustrations</h2>
    				<hr>
    	 			<p>Kate Loftus-O'Brien</p>
    	        </div>
    		   <img src="images/photo3.png" alt="" />
    		   	</a>
    		</div>
        </div>
	</section>
    -->

    <footer>
        <div class="wrap">
            <a href="">Über diese Arbeit</a>
            <span class="bullet">•</span>
            <a href="">Kontakt</a>
            <span class="bullet">•</span>
            <a href="">Twitter</a>
            <br>
            <br>
            <span class="copyright">Florian Schulz</span>
        </div>
    </footer>


    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>