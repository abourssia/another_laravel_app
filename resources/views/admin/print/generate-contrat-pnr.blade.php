

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

p {
  text-indent: 30px;
  text-align: justify;
  letter-spacing: 0.5px;
  line-height: 2.0;

}
@media print {
  p {page-break-after: always;}
}
@page {
  size: A4;
}
table, th, td {
  text-align: center;
  margin: auto;
}
th.timg {

    padding-top:50px;
    padding-bottom:50px;

}
.center {
  margin: auto;

}
.article1 {

    margin-left:100px;
    list-style-type: square;
    font-weight: bold;

}

.lois {

margin-left:50px;
list-style-type: square;

}
.lois li {
    padding-top:10px;
}
.left{
    text-align:left;
    }
    .right{
    text-align:right;
    }
    .algerle {
  margin-left:400px;
  padding:20px;

}
.center {
    text-align:center;

}
</style>
</head>
<body>

    <table>
  <tr>
    <th class="tcenter" >République Algérienne Démocratique et Populaire <br> 
    Ministère de l'Enseignement Supérieur et de la Recherche Scientifique
    <br> Agence Thématique de Recherche en Sciences et Technologie</th>

  </tr>
</table> 

<table>
  <tr>
    <th class="timg">   
          <img src="{{ public_path('images/logoatrst.jpg') }}" width="400" height="400">
 </th>

  </tr>
</table> 
<table>
  <tr>
    <h1> Contrat d’Expert(e) <br>
    Programme Nationaux de Recherche (P.N.R) </h1>


  </tr>
  <tr>

 <div class="center"><b>  Entre   </b> </div> 

  <p>
	L'Agence Thématique de Recherche en Sciences et Technologie (ATRST), 
    représentée par sa   <b> Directrice</b>, ayant tous pouvoirs à cet effet, d’une part,
<br>
<b> Et</b>

<br>

Mr/Mme. : <b> {{$name_expert}}</b> <br>
Dénommé(e) ci-après, le/la Contractant(e), …………………………… d 'autre part.
<br>

Il a été convenu ce qui suit :
<br>

</p>

  
  </tr>

</table> 

<div style="page-break-before:always">

<p>
    <b>     Article 1 :
 </b>
    <ul class="article1">
    <li>
        <li>Mme/Mr: {{$name_expert}}
        <li>	Titulaire du Diplôme : {{$diplome_expert}}</li>
        <li>Grade actuel :{{$grade_expert}}</li>
        <li> Adresse professionnelle  : {{$adressprof}}</li>
        <li>	 Tél/Mob : {{$tel_expert}}    Fax : {{$fax}} </li>
        <li>	E-mail: {{$mail_expert}}</li>
        <li>	Compte CCP N° : {{$compteccp}}.  Clé N° : {{$cleccp}}</li>
        <li>	Compte Bancaire N° : {{$cbank}}. Agence : {{$agencebank}} </li>
        <br>

</ul>
<b> Est recruté(e) en qualité d’expert(e), dans le grade de : {{$grade_expert}} </b>

</p>
    <p>
Conformément aux dispositions de :
<ul class="lois">
<li>	Loi n°15-21 du 18 Rabie El Aouel 1437 correspondant au 30 décembre 2015 portant loi d’orientation sur la recherche scientifique et le développement technologique ; </li>
<li>	Décret exécutif n° 12-19 du 9 janvier 2012 portant transformation de l’Agence Nationale pour le Développement de la Recherche Universitaire en Agence Thématique de Recherche en Sciences et Technologie ;</li>
<li>	Décret exécutif n° 19-232 du 13 aout 2019 fixant les missions, l’organisation et le fonctionnement des Agences thématiques de recherche ;</li>
<li>	Décret exécutif n°21-206 du 8 Chaoual 1442 correspondant au 20 Mai 2021 portant réorganisation de l’agence thématique de recherche en sciences et technologie ;</li>
<li>	Décret exécutif n° 08-129 du 27 Rabie Ethani 1429 correspondant au 3 mai 2008 portant statut particulier de l’enseignant- chercheur hospitalo-universitaire ;</li>
<li> Décret exécutif n° 08-130 du 27 Rabie Ethani 1429 correspondant au 3 mai 2008 portant statut particulier de l’enseignant- chercheur,  </li>
<li>	Décret exécutif n°08-131 du 27 Rabie Ethani 1429 correspondant au 3 mai 2008 portant statut particulier du chercheur permanent ; </li>
<li>	Décret n° 84-296 du 13 octobre 1984, modifié et complété par le décret 01-293 du 1er octobre 2001, relatif aux tâches d’enseignement et de formation assuré à titre d’occupation accessoire par les enseignants de l’enseignement et de la formation supérieur, des personnels chercheurs et autres agents publics notamment dans son article 5; </li>
<li>	Arrêté Interministériel n°68 du 03 Septembre 1995 déterminant les modalités de rémunérations des membres et experts des commissions intersectorielles de promotion de programmation et d’évaluation de la recherche scientifique et technique. </li>

</ul>
<b> Article 2 :</b> Le présent contrat est conclu entre les deux parties en vue de la rémunération de l’expert(e) 
<br> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; nommé(e) à l’article 1, ayant participé à
 l’évaluation et l’expertise des projets de recherche <br>
 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; soumis dans le cadre  
 <b>  des programmes nationaux des recherches (PNR) </b>  <br>
 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; soumis dans le cadre des programmes de recherche pris en charge par l’ATRST.
 <br>
 <br>
<b> Article 3 :</b> la rémunération de l’expertise sera prise en charge en volume horaire en se référant au nombre 
<br> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; d’heures de travail durant le (les) mois <b> {{$Mois}} </b> 
<br> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; de l’année 2022 conformément à la réglementation en vigueur.

    </p>
 

    </div> 
    <div style="page-break-before:always">

<b> Article 4 :</b> Le/la contractant(e) est tenu(e) par le secret professionnel en matière de divulgation du 
 contenu du 
 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; contrat et des rapports d’évaluation établis.
 <br>
<b> Article 5 :</b> En application de l’arrêté interministériel n° 68 du 03 septembre 1995 déterminant les modalités
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  de rémunération des experts et du décret exécutif n°01-293 du 01 octobre 2001 modifiant
<br> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  et complétant le décret n° 98-46 du 08 janvier 1998 : 



    <p>

<br>
Mr: <b> {{$name_expert}} </b> <br>
Percevra une indemnité de : <b> {{ $montantglob }} DZ </b><br>
Correspondant à son grade de : <b> {{$grade_expert}} </b><br>

<div class="algerle"> Alger Le : {{$dateex}} </div>

        <table style="width:100%;  margin-top:15px; margin-bottom:15px;">
        <tr>
 <th  class="left"> Le/La contractant(e) 
   </th>                     
 <th  class="right">  La Directrice de l’ATRST 		</th>


</tr>
<tr>

<td  class="left">
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Signature</td>
<td></td>
</tr>
</table>

<br>
<br>
<br>
<br><br>
<br>
<br>



<table style="border:1px solid; width:80%; padding:15px; margin-top:25px;">

<tr>
<td>
<div class="left">
<br>
<b> IMPORTANT : </b> 
<br>

Veuillez joindre à ce contrat, après signature, les pièces suivantes :
<br>

<ol>
<li>Copie de l’Arrêté de nomination justifiant le grade professionnel ou attestation de travail.</li>	

<li>	Un chèque barré. </li>	


</ol>
</div>
<div class="center">
Vous pouvez déposer votre dossier comptable au niveau de l’Agence ou l’envoyer par poste à l’adresse suivante :
<br>
<br>

<b>  Agence Thématique de Recherche en Sciences et Technologie (ATRST)</b>
<br>

<b> Avenue Pasteur Hacène Badi (ENSA) BP 62 – 16200 El Harrach – Alger</b>
</div>
</td>
</tr>
</table>

</p>
</div> 
</body>
</html>