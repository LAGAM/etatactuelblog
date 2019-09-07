@extends('template')
@section('head')
<title>Bibliothèque Educative | Blog</title>
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
    <h1 style="color:#91278E;">LA BIBLIOTHEQUE EDUCATIVE </h1>
    <hr/><br/><br/>
    <p>La bibliotheque educative vient en renformecement des connaissances des étudiants. En effet elle sert de tremplaint pour ceux qui voudrait un peu plus loin leur connaissance dans certains domaines. grâce à sa diversité de contenu et de programme la bibliotheque virtuelle est à meme de pouvoir satisfaire la curiosité tant pour les étudiant de première année de licence que pour les doctorants.</p>
    <img src="template/images/opera.png"><br/><br/>
    <button style="height:50px; border-radius:10px;"><a href="http://www.bibliotheque_educative.uvci.edu.ci" target="_blank">Accéder à la bibliothèque educative</a></button>
</div>
<br/><br/>
@endsection