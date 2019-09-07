@extends('template')
@section('head')
<title>Open Access Week | Blog</title>
@endsection
@section('contenu')
<style>
    h1{
        text-align:center;
        font-weight:bold;
        color:#91278E;
    }
    hr{
        width:200px;
        text-align:center;
        color:#12A650;
        height:3px;
        background-color:#12A650
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
    button{
        height:50px;
        border-radius:10px;
    }
    button:hover{
        height:50px;
        border-radius:10px;
        background:#ddd;
    }
</style><br/><br/>
<div class="main">
    <h1>QU'EST CE QUE L'OPEN ACCESS WEEK ?</h1>
    <hr><br/>
    <img src="template/images/oaw3.png" alt="ojectifs de l'open access week"><br/><hr/><br/>
    <p>L'Open Access Week ou la semaine du libre accès est un événement annuel du monde scientifique marqué par l'organisation de multiples conférences, séminaires ou annonces sur le thème du libre accès à l'information scientifique et technique et sur le futur de la recherche académique dans de nombreux pays. Coordonnée par la Scholarly Publishing and Academic Ressources Coalition (SPARC), une coalition mondiale engagée à promouvoir le libre accès dans le domaine de la recherche et l'éducation, le thème internationale proposé cette est le suivant : « Concevoir des fondements équitables pour l'accès ouvert à la connaissance » .<br/>Avec le basculement intégral dans la réforme de l'enseignement supérieur en Côte d'Ivoire par la mise en œuvre du système LMD en 2012, le Président de la République a engagé le Gouvernement dans la réforme de l'Enseignement Supérieur. Le déploiement de cette réforme a conduit à plusieurs initiatives dont la création de l'Université Virtuelle de Côte d'Ivoire (UVCI). L'existence de l'UVCI répond à la volonté politique de l'Etat pour être un appui aux universités et grandes écoles publiques en matière de développement de la culture numérique. l'UVCI travaille à développer l'accès à l'information scientifique et technique, qui constitue une clé de réussite et d'excellence pour le développement. Saisissant donc l'opportunité de l'International Open Access Week 2018, l'UVCI organise, en collaboration avec le Comité National Ivoirien du Programme Information Pour Tous (CNIPIPT) de l'UNESCO, une session dénommée « Open Access Week 2018 Côte d'Ivoire » sur le thème « Accès équitable à l'information et connaissance ouverte ».</p>
    <button><a href="http://www.openaccessweek2018.uvci.edu.ci" target="_blank">Accéder à la page officiel de l'Open Access Week</a></button>
    <br/><br/>
</div>
<br/><br/>
@endsection