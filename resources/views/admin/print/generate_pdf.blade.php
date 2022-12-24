
<!DOCTYPE html>
<html lang="ar">

<head>
    <title>Generate Pdf</title>
    <META HTTP-EQUIV="Content-Type"  CONTENT="text/html; CHARSET=iso-8859-6">    <style>
@media print {
  p {page-break-after: always;}
}
@page {
  size: A4;
}
body {
  margin-top: 0pt;
  margin: auto;

}
table, th, td {
  text-align: center;
  margin: auto;
}
.allpage {
  padding: 8px;
  margin-top:100px;
}

h2 {
  text-align: center;
  text-transform: uppercase;
  color: black;
  font-size: 16px;
}

p {
  text-indent: 30px;
  text-align: justify;
  letter-spacing: 0.5px;
  line-height: 2.0;

}

.textuel {
  margin-right:45px;
  margin-left:45px;
}
.algerle {
  margin-left:500px;

}

.directrice {
  margin-left:500px ;
  margin-top:50px;


}

table td.tdLL {
    text-align: center;

    padding-top:30px;
    padding-bottom:30px;
    padding-right:15px;
    padding-left:15px;

    width:40%
}

table td.tdC {
    text-align: center;
    padding-top:30px;
    padding-bottom:30px;
    padding-right:15px;
    padding-left:15px;
    direction: rtl;
    width:40%
}
.tdL {
  text-align: center;
  padding:10px;


}
.footer {
  font-size: 11px;
}
</style>
</head>
<body>

<table>
  <tr>
    <th class="tcenter" >République Algérienne Démocratique et Populaire <br> 
    Ministère de l'Enseignement Supérieur et de la Recherche Scientifique</th>

  </tr>
</table> 
<br>
<table>
<tr>
    <td class="tdLL">Agence Thématique de Recherche en Science et Technologie</td>
    <td class="tdL"> 
    <img src="{{ public_path('images/logoatrst.jpg') }}" width="100" height="100">
  
  </td>
  <td class="tdC" >  الوكالة الموضوعاتية للبحث في العلوم والتكنولوجيا</td>
  </tr>
</table> 

<div class="algerle"> Alger Le : {{$today}}</div>
<div class="allpage">
  <h2>VALIDATION DE RESTRUCTURATION DU LABORATOIRE
  <br>  DE RECHERCHE
</h2>
<div class="textuel">
  <p>Je soussignée, <b> Mme KOUADRI MOUSTEFAI Soumia</b>, Directrice Générale de l’Agence Thématique de Recherche en Sciences et Technologie (ATRST); atteste par la présente que la nouvelle restructuration du laboratoire de recherche :
<b> '{{$intitule}}' </b>
<br>

Code : <b> {{$code_labo}} </b>
<br>
Etablissement de rattachement : <b> {{$etab}} </b>
<br>
Directeur du laboratoire : <b> {{$dir_labo}} </b>
<br>
Est validée par le Conseil Scientifique de l’ATRST {{$date_cs}} .
<br>
La restructuration a porté sur :
<br>
 {!!$changements!!}
</p>

<br>
La présente attestation est délivrée pour servir et valoir ce que de droit.
<br>
<div class="directrice"> La directrice</div>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>