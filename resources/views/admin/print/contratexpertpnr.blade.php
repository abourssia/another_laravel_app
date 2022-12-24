@extends ('layouts.master')

@section('title', 'Contrat Expert PNR')

@section('content')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contrat PNR</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contrat PNR</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
    <div class="card card-default">

          <form action="{{url('admin/print/Contratexpert/generate-pdf-pnr')}}" method="GET">
          @csrf
            

<div class="card-body">

<div class="row">
<div class="col-md-7">


<div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="dateex" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
</div>
</div>

<div class="row">

<div class="col-md-4">

        <div class="form-group">
          <label>Nom Expert</label>
          <input class="form-control" name="expert" id="expert" placeholder="Nom Expert" aria-label="Expert">
        </div> 
    </div>
<div class="col-md-2">
<div class="form-group">
          <label>Code Expert</label>
          <input class="form-control" name="grade_expert" id="grade_expert" placeholder="grade_expert" aria-label="Expert">
        </div> 

        </div>

        <div class="col-md-3">
<div class="form-group">
          <label>Diplome Expert</label>
          <input class="form-control" name="diplome_expert" id="diplome_expert" placeholder="Diplome Expert" aria-label="Expert">
        </div> 

        </div>
  </div>
<div class="row">

<div class="col-md-9">
<div class="form-group">
          <label>Adresse professionnelle </label>
          <input class="form-control" name="adressprof" id="adressprof" placeholder="Adresse professionnelle  " aria-label="Expert">
        </div> 


</div>
</div>
<div class="row">

<div class="col-md-3">

<div class="form-group">
          <label>Tél/Mob </label>
          <input class="form-control" name="tel_expert" id="tel_expert" placeholder="Tél/Mob" aria-label="Expert">
        </div> 
</div>
<div class="col-md-3">

<div class="form-group">
          <label>Fax </label>
          <input class="form-control" name="fax" id="fax" placeholder="Fax" aria-label="Expert">
        </div> 
</div>
<div class="col-md-3">
<div class="form-group">
          <label>	E-mail </label>
          <input class="form-control" name="mail_expert" id="mail_expert" placeholder="E-mail" aria-label="Expert">
        </div> 
</div>


</div>

<div class="row">

<div class="col-md-4">
<div class="form-group">
          <label>		Compte CCP N°  </label>
          <input class="form-control" name="compteccp" id="compteccp" placeholder="	Compte CCP N° " aria-label="Expert">
        </div> 

</div>
<div class="col-md-4">

<div class="form-group">
          <label>		Clé N°   </label>
          <input class="form-control" name="cleccp" id="cleccp" placeholder="Clé N° " aria-label="Expert">
        </div> 
</div>
</div>

<div class="row">

<div class="col-md-4">
<div class="form-group">
          <label>		Compte Bancaire N°   </label>
          <input class="form-control" name="cbank" id="cbank" placeholder="	Compte Bancaire N°  " aria-label="Expert">
        </div> 

</div>
<div class="col-md-4">

<div class="form-group">
          <label>		Agence    </label>
          <input class="form-control" name="agencebank" id="agencebank" placeholder=" Agence " aria-label="Expert">
        </div> 
</div>
</div>
  <div class="row">
    
        <div class="col-md-3">
        <div class="form-group">
        <label>		Nombre Projets Expertisé    </label>

        <input type="number" class="form-control form-control-navbar" id="hours" name="hours"  placeholder="Nombre Projets Expertisé" aria-label="Search">
        </div>     

        </div>
        
        <div class="col-md-3">
        <div class="form-group">
        <label>		Nombre d’Heure/Projet    </label>

        <input type="number" class="form-control form-control-navbar" id="sthhours"  name="sthhours"  placeholder="Nombre d’Heure/Projet" aria-label="Search">
        </div>     

        </div>     

        <div class="col-md-3">
        <div class="form-group">
        <label>		Rémunération/ Grade    </label>

        <input type="number" class="form-control form-control-navbar" id="renumgrade" name="renumgrade"  placeholder="Rémunération/ Grade" aria-label="Search">
        </div>     

        </div>

        </div>

        <div class="row">

       

        <div class="col-md-5">
        <div class="form-group">
<label for="Mois"> Mois </label>
<select multiple name="mois[]" id="mois" class="form-control"> 
<option value="Janvier"> Janvier </option>
<option value="Fevrier"> Fevrier </option>
<option value="Mars">Mars</option>
<option value="Avril">Avril</option>
<option value="Mai">Mai</option>
<option value="Juin">Juin</option>
<option value="Juillet">Juillet</option>
<option value="Aout">Aout</option>
<option value="Septembre">Septembre</option>
<option value="Octobre">Octobre</option>
<option value="Novembre">Novembre</option>
<option value="Décembre">Décembre</option>

        </select>
        </div>
        </div>
        </div>
        </div>






    <div class="card-footer">
  
    <button type="submit" class="btn btn-default">Annuler</button>
    <button type="submit" class="btn btn-info float-right"> Générer Contrat </button>
    </div>

    </div>
    </form>

    </div>
   

</section>




@endsection