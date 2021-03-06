<?php
$titre = "Page d'accueil";
require 'functions.php';
require 'php/connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="bootstrap/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="fontawesome-free-5.15.3-web/js/all.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <style>
        *, ::before, ::after{
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: serif;
            background: #eee;
        }

        .head{
            margin-left: 12%;
            margin-right: 12%;
            padding: 73px;
            background: url("images/frec.PNG");
            background-size: cover;
        }
        .rows {
            margin-left: 11.56%;
            margin-right: 11.56%;
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
        }

        .side {
            -ms-flex: 60%; /* IE10 */
            flex: 60%;
            background: #eee;
            padding: 5px;
        }

        /* Main column */
        .main {
            -ms-flex: 30%; /* IE10 */
            flex: 30%;
            background: #eee;
            padding: 5px;
        }

        /* Fake image, just for this example */
        .fakeimg {
            background: #fff;
            width: 100%;
            padding: 10px;
            color: #000;
        }
        .parallax {
            background-image: url('images/mac.jpg');
            color: white;
            width: 100%;
            height: 35%;
            padding: 10px;

            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .top-left {
            position: absolute;
            top: 8%;
            left: 12%;
        }
        .top-right {
            position: absolute;
            position: fixed;
            top: 10%;
            right: 13%;
        }
        .any{
            display: flex;
            color: #fff;
            font-weight: bold;
            flex-direction: column;
            background: #333;
        }
        #flip{
            text-align: center;
            height: 20px;
            overflow: hidden;
        }
        #flip > div >div {
            height: 20px;
            padding: 0px 5px;
            margin-bottom: 50px;
            display: inline-block;
        }
        #flip div:first-child{
            animation: Show 5s linear infinite;
        }
        #flip div div {
            background: #dc143c;
        }
        #flip div:first-child div{
            background: #3eb249;
        }
        #flip div:last-child div{
            background: #0033cc;
        }
        @keyframes Show {
            0%{margin-top: -50px}
            5%{margin-top: -35px}
            33%{margin-top: -35px}
            66%{margin-top: -20px}
            71%{margin-top: 0px}
            99.99%{margin-top: 0px}
            100%{margin-top: -50px}
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-xs, col-sm, col-md, col-lg, col-xl">
        <?php require 'data/header.php';?>
        <div class="head">
            <div class="top-left">
                <img src="images/LOGO.png" title="Logo frecotem" style="120px;height: 120px">
            </div>
            <div class="top-right">
                <h6 class="any">Formation se deroule
                    <div id="flip">
                        <div><div>08h00 ?? 11h30</div></div>
                        <div><div>le dimanche</div></div>
                        <div><div> toujours</div></div>
                    </div>
                    <span style="text-align: center">Ampefoloha</span>
                </h6>
            </div>
        </div>
        <div class="rows">
            <div class="side">
                <div class="fakeimg" style="height: 350px">
                    <h5 style="color:#0d6efd;margin-left: 2%"><b>ASSOCIATION <i class="fa fa-globe-africa"></i> FRECOTEM</b></h5>
                    <p style="margin:15px;">a ??t?? cr????e ?? Antananarivo le 20 mai 2004, une association des ??tudiants comoriens des technologies ?? Madagascar
                        dont son objectif est le d??veloppement des Etudiants  comoriens des fili??res technologiques  ainsi qu???aux ressortissants
                        comoriens issue des autres fili??res et aussi ?? tout(e) membre de l???association.
                        L???Association r??unit les ??tudiants  sans distinction de leur causalit?? du sexe, sociale, id??ologique, politique comme religieuse.
                        Elle est donc apolitique  et est sans but lucratif, seulement elle d??fend et cherche les int??r??ts  pour le d??veloppement  de l???association.
                        Il est ?? noter que cette association cherche ?? ramener les ??tudiants  en vers l???unit??, la solidarit?? et la fraternit??. En effet,
                        la politique primordiale de la Fraternit?? des Etudiants Comoriens des Technologies ?? Madagascar (FRECOTEM) est de privil??gier
                        la connaissance des ??tudiantes Comoriennes et des autres nationalit??s  mais aussi avec une bonne r??ussite dans la vie estudiantine et professionnel.
                </div>
                <div class="parallax">
                    <p>Les articles suivants d??finissent les conditions <br>particuli??res du pr??sent statut, d???o?? le r??glement int??rieur (RI).<br>
                    Il s???applique obligatoirement ?? l???ensemble des membres<br> ainsi qu????? chaque nouvelle adh??rent. <br> Il est disponible au si??ge de l???association
                    <br>et une copie doit ??tre remise ?? chaque adh??rent qui en fait la demande .En cas d???ambig??it?? ou de contradiction, le statut s???applique par
                        priorit?? sur le r??glement int??rieur.</p>

                </div>
                <div class="fakeimg" style="height: 650px">
                    <p>  La FRECOTEM se fixe d???une fa??on permanence les objectifs ci-dessous :<br>
                        ???	Rehausser le niveau th??orique et pratique des ??tudiants membres <br>
                        ???	Instituer un syst??me d???assistance mutuelle, de solidarit?? et d???entre aide ?? la r??ussite des ??tudiants membres
                    </p>
                    <h2>L'association FRECOTEM</h2>
                    <p> regroupe les ??tudiants des Fili??res Technologiques et Toute Etudiants passionn?? par la technologie pour
                        aboutir ?? la r??ussite de la vie etudiante ainsi que professionnelle & r??sidents ?? Madagascar <br>
                    </p>
                    <h3> Devoir et Droit </h3>
                    <p> A.	??tre membre actif, toute personne int??ress??e et qui remplit  les conditions d???adh??sion de l???association.<br>
                        B.	??tre membre bienfaisance, toute personne par son soutien moral, mat??riel ou financier contribue ?? l?????panouissement de l???association.<br>
                        C.	Les ??tudiants sont consid??r??s comme des membres actifs d???offre de l???Association.<br>
                        D.	Tout  membre de l???association doit faire une cotisation annuelle de 10 000 Ar fix??e par l???AG lorsqu???une op??ration de lever de fons financier n???est pas pr??vu.<br>
                        E.	Pour avoir le droit et le devoir d?????lire et d?????tre  ??lu, tout membre doit r??gulariser sa cotisation annuelle et avoir sa carte d???adh??sion.<br>
                        F.	Tout membre est pri?? de respecter les participations non pr??vues dans ce r??glement mais qui m??neront ?? bien pour le bon fonctionnement de l???association.<br>
                    </p>
                    <p>NB : Pour plus de d??taille referez-vous aupr??s du statut de l???association.</p>
                </div>
            </div>
            <div class="main">
                <div class="fakeimg" style="height:255px;padding: 2px">
                    <section>
                        <img class="mySlides" src="images/m.JPG"
                             style="width:100%;height: 250px">
                        <img class="mySlides" src="images/tsembehou.jpeg"
                             style="width:100%;height: 250px">
                        <img class="mySlides" src="images/imz.jfif"
                             style="width:100%;height: 250px">
                        <img class="mySlides" src="images/re.jfif"
                             style="width:100%;height: 250px">
                        <img class="mySlides" src="images/conseiller.PNG"
                             style="width:100%;height: 250px">
                        <img class="mySlides" src="images/frecotem.PNG"
                             style="width:100%;height: 250px">
                        <img class="mySlides" src="images/ima.jpeg"
                             style="width:100%;height: 250px">
                    </section>
                </div>
                <div class="fakeimg" style="height:1050px;">
                    <h2 style=""><b>Activit??s</b></h2>
                    <p>Les activit??s se d??roulent conform??ment au r??glement int??rieur et ses  sections.
                        Ce r??glement est obligatoire ; il s???impose aux usagers de l???association.
                        Conform??ment aux objectifs de l???association, une op??ration teeshirt est maintenue ?? chaque mandat.
                        Toutefois, En cas d???une insuffisance financi??re, le bureau ex??cutif  peut d??cider de la cr??ation d???une nouvelle section.
                        La cr??ation d???une section doit ??tre ratifi??e par  le conseille de sage est par la suite valid??e par l???assembl??e g??n??rale des adh??rents.<br>
                    </p>
                    <h3><b>Premi??re Semestre</b></h3>
                    <h5>Janvier--Fevrier--Mars--Avril--Mai--Juin</h5>
                    <h6>Formation:</h6>
                    <ol>
                        <li>Initiation de PC </li>
                        <li>Bureautique</li>
                        <li>Astuces</li>
                        <li>Multimedia</li>
                        <li>Comment faire des recherches sur Internet</li>
                    </ol>
                    <p> &reg;  Operation Tee-shirt <br>
                        &reg;  Carte d'adhesion <br>
                        &reg;  Creation de notre propre site web <br>
                        &reg;  Preparation de formateurs <br>
                        &reg;  Bilan de 6 mois et d??liberation des attestations
                    </p>
                    <h3><b>Deuxi??me Semestre</b></h3>
                    <p>Juillet_Ao??t_Septembre_Octobre_Novembre_Decembre</p>
                    <h5>Formation:</h5>
                    <ul>
                        <li>Reseaux informatique</li>
                        <li>Microsoft Projet </li>
                        <li>Leader ship</li>
                        <li>Creation de site web</li>
                        <li>Creation des applications Androide </li>
                    </ul>
                    <p> &reg;  Publication de notre site web en ligne <br>
                        &reg;  Operation <br>
                        &reg;  Mise au point des formateurs <br>
                        &reg;  D??liberation des attestations<br>
                        &reg;  Mise au point de la base de donn??e</p>
                </div>

            </div>
        </div><br><br><br><br><br><br>
        <?php require 'data/footer.php';?>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 3000);
            }
        </script>
    </div>
</div>
</body>
</html>