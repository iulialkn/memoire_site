<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/note.css">
    <link rel="stylesheet" href="css/vinietes.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/glossaire.css">
    <link rel="stylesheet" href="css/mobile-mode.css">
    <link rel="stylesheet" href="css/mobile-menu.css">

    <title>Libre</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        function goToByScroll(id, myoffset) {
            //alert('loaded');
            jQuery('html,body').animate({scrollTop: jQuery("#" + id).offset().top - myoffset}, '100');
        }
    </script>
</head>
<body>
<!--- mobile shit --->

<div id="burger-menu">
    <img src="https://img.icons8.com/ios-filled/50/000000/menu.png">
</div>

<!--- end mobile shit --->
    <!---<button id="nightMode">Mode nuit</button>--->

    <div class="navbar">
        <a href="#ImprimerPDF" class="active" onclick="window.print()">Imprimer PDF</a>
        <a href="https://github.com/iulialkn/memoire">Git Hub</a>
        <a href="#" id="nightMode">Mode nuit</a>
    </div>


<h1 class="titre">
    <span style="font-weight: normal; padding-left: -30px;">L'outil libre,</span><br/><em style="padding-left: 50px">pour
        de nouvelles</em> <br/><em style="padding-left: 20px;"> pratiques éditoriales</em></h1>
<div class="cover">
    Iuliia Lukina<br/>
    DNSEP option Design Graphique et Nimérique<br/>
    ESAD de Reims
</div>
<div class="direction">sous la direction de Rozenn Canavet</div>



<div id="content">

    <div class="table-of-content container-item">
        <h1 style="text-transform: uppercase;">Table des matières</h1>
        <div id="toc"></div>
        <!---<div id="definition-text"></div>--->
    </div>

    <div id="text">
        <?php
        include_once "text.php";
        echo MainText::$Text;

        echo MainText::$Bibliographie;

        // echo MainText::$Glossaire;
        ?>
    </div>

    <div id="glossaire">
        <h1 style="text-transform: uppercase;padding-left: 20px;">Glossaire</h1>
        <div id="glossaire-content">
            <?php

            include_once "convert.php";

            ?>
        </div>
    </div>

</div>

</div>


</body>
<script src="js/reposition.js"></script>
<script src="js/change-structure.js"></script>
<script src="js/create-gallery.js"></script>
<script src="js/image-list.js"></script>
<script src="js/mobile.js"></script>


<script>


    /*
            Bindery.makeBook({
                content: {
                    selector: '#book',
                    url: "book.html",
                },
                pageSetup: {
                    size: { width: '21cm', height: '27cm' },
                    margin: { top: '12pt', inner: '12pt', outer: '16pt', bottom: '20pt' },
                },
            });
    */

</script>
</html>
