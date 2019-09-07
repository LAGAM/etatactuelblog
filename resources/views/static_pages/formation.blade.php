@extends('template')
@section('head')
<title>Formation | Blog</title>
@endsection
<style>
    h1{
        font-weight:bold;
        
    }
    hr{
        width:200px;
        text-align:center;
        color:#12A650;
        height:3px;
        background-color:#12A650;
        float:left;
    }
    .main{
        padding: 10px 50px 10px 50px;
        margin:0px 200px 0px 200px;
        background-color:#f4f4f4;  
        border-radius:20px; 
    }
    p{
        font-size:1.1em;
        color:black;
    }
    li{
        color:black;
    }
    button:hover{
        height:50px;
        border-radius:10px;
        background:#ddd;
    }
</style>
@section('contenu')
<br/><br/>
<div class="main">
    <h1 style="color:#91278E;">L'UVCI A L'OEUVRE</h1>
    <hr/><br/><br/>
    <h3 style="color:#91278E;">L'UVCI a reçu les bibliothécaires de l'AUA(Association des Universités Africaines)</h3>
    <p>L’Université Virtuelle de Côte d’Ivoire fait un bond en avant dans le développement de la Recherche Scientifique. Elle abrite du  3  au 5 juillet 2018, un atelier de l’Association des Universités Africaines (AUA), rassemblant les bibliothécaires et informaticiens de bibliothèques issues des universités membres de l’AUA.<br/>Pendant dans cette formation qui s'est étendu sur trois jours l'UVCI à formés quatorze (14) bibliothécaires</p>
    <center><img src="template/images/atelier1.jpg" alt="atelier"></center><br/>
    <br/>
    <button style="height:50px; border-radius:10px;"><a href="http://www.uvci.edu.ci/fr/index.php/presentation/104-media/actualites/187-l-uvci-recoit-en-son-sein-les-bibliothecaires-des-universites-africaines-pour-le-compte-d-une-formation-de-l-aua">Lire l'aritcle en entier</a></button>
    <br/><br/>
    <hr style="float:none;" /><br/>
    <h3 style="color:#91278E;">Pendant les journées Open Access Week</h3>
    <p>Ne laissant aucune occasion passé quand il s'agit de formation, l'UVCI à tenue les activitées suivantes pendant les journées de l'Open Access Week :</p>
    <center><img src="template/images/OAW_2018.png" alt="atelier"></center><br/>
    <ol>
        <li>Atelier de formation des Enseignants de l’UVCI à l’utilisation des ressources électroniques</li>
        <li>Atelier de formation des Bibliothécaires sur les Enjeux de l’Open Access Week</li>
        <li>Atelier formation de Doctorants en SHS à l’utilisation du logiciel libre LATEX</li>
    </ol>
    <p>A la fin de ces différents atéliers, l'UVCI obtient comme resultat : 22 enseignants chercheurs, 26 Bibliothécaires et 67 Doctorants</p>
    <br/>
    <button style="height:50px; border-radius:10px;"><a href="http://openaccessweek2018.uvci.edu.ci/main/programme">Plus de details</a></button>
    <br/>
</div>
<br/><br/>
@endsection