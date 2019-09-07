@extends('template')
@section('head')
<title>Espace membre | Blog</title>
@endsection
<style>
    h1{
        font-weight:bold;
    }
    hr{
        width:100px;
        color:#12A650;
        height:3px;
        background-color:#12A650;
        float:left;
    }
    p{
        font-size:1.1em;
        color:black;
    }
    .main{
        padding: 10px 50px 10px 50px;
        margin:0px 200px 0px 200px;
        background-color:#f4f4f4;  
        border-radius:20px; 
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
    <h1 style="color:#91278E;">A PROPOS DE L'ESPACE MEMBRE</h1>
    <hr/><br/><br/>
    <p>L'espace membre est une plateforme en ligne qui permet à un quelqu'on utilisateur de pouvoire se connecte. Cette plateforme est d'autant plus importante en ce sens qu'elle permet à l'utilisateur d'avoir dans un premier temps un contenu exclusif mais aussi mais aussi certain droit qu'un ultilisateur <em>lamda</em> ne possède pas. Elle dispose d'un outil de recherche rapide et simplifier avec une interface conviviale et une facilitée de compréhension !</p><br/><br/>
    <img src="template/images/espace_membre.png" alt="capture de la page d'accueil de l'espace membre" /><br/><br/>
    <img src="template/images/espace_membre1.png" alt="deuxième capture de la page d'accueil de l'espace membre" /><br/><br/>
    <button style="height:50px; border-radius:10px;"><a href="http://www.espacemembre.uvci.edu.ci" target="_blank">Accéder à l'espace membre</a></button>
    <br/><br/>
</div>
<br/><br/>
@endsection