@extends ('layouts.master')
@section('title', 'Ajouter un Expert')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ajouter un Expert</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ajouter un Expert</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container-fluid">
    <div class="card card-default">
   

          @if (session('txt')) 
                <div class="alert alert-warning"> {{(session('txt'))}} </div>
            
            @endif
    <form action="" method="POST">
          @csrf
          <div class="card-body">


          <div class="row">

          <div class="col-md-2">
<div class="form-group">
          <label>Code Expert</label>
          <input class="form-control" name="code_expert_add" id="code_expert_add" placeholder="Code expert" aria-label="Expert">
        </div> 

        </div>
        <div class="col-md-2">
<div class="form-group">
          <label>Grade Expert</label>
          <input class="form-control" name="grade_expert_add" id="grade_expert_add" placeholder="Grade expert" aria-label="Expert">
        </div> 

        </div>

        </div>
<div class="row">
<div class="col-md-4">

        <div class="form-group">
          <label>Nom Expert</label>
          <input class="form-control" name="name_expert" id="name_expert" placeholder="Nom Expert" aria-label="Expert">
        </div> 
    </div>


        <div class="col-md-3">
<div class="form-group">
          <label>Diplome Expert</label>
          <input class="form-control" name="diplome_expert_add" id="diplome_expert_add" placeholder="Diplome Expert" aria-label="Expert">
        </div> 

        </div>

        <div class="col-md-3">
<div class="form-group">
          <label>Specialté Expert</label>
          <input class="form-control" name="spec_expert_add" id="spec_expert_add" placeholder="Specialté Expert" aria-label="Expert">
        </div> 

        </div>
  </div>
<div class="row">

<div class="col-md-6">
<div class="form-group">
          <label>Etab</label>
          <input class="form-control" name="etab_expert_add" id="etab_expert_add" placeholder="Etablissement " aria-label="Expert">
        </div> 


</div>
<div class="col-md-6">
<div class="form-group">
          <label>Adresse professionnelle </label>
          <input class="form-control" name="adressprof_add" id="adressprof_add" placeholder="Adresse professionnelle  " aria-label="Expert">
        </div> 


</div>
</div>
<div class="row">

<div class="col-md-3">

<div class="form-group">
          <label>Tél/Mob </label>
          <input class="form-control" name="tel_expert_add" id="tel_expert_add" placeholder="Tél/Mob" aria-label="Expert">
        </div> 
</div>
<div class="col-md-3">

<div class="form-group">
          <label>Fax </label>
          <input class="form-control" name="fax_add" id="fax_add" placeholder="Fax" aria-label="Expert">
        </div> 
</div>
<div class="col-md-3">
<div class="form-group">
          <label>	E-mail </label>
          <input class="form-control" name="mail_expert_add" id="mail_expert_add" placeholder="E-mail" aria-label="Expert">
        </div> 
</div>


</div>

<div class="row">

<div class="col-md-4">
<div class="form-group">
          <label>		Compte CCP N°  </label>
          <input class="form-control" name="compteccp_add" id="compteccp_add"  value="//" placeholder="	Compte CCP N° " aria-label="Expert">
        </div> 

</div>
<div class="col-md-4">

<div class="form-group">
          <label>		Clé N°   </label>
          <input class="form-control" name="cleccp_add" id="cleccp_add"  value="//" placeholder="Clé N° " aria-label="Expert">
        </div> 
</div>
</div>

<div class="row">

<div class="col-md-4">
<div class="form-group">
          <label>		Compte Bancaire N°   </label>
          <input class="form-control" name="cbank_add" id="cbank_add"  value="//" placeholder="	Compte Bancaire N°  " aria-label="Expert">
        </div> 

</div>
<div class="col-md-4">

<div class="form-group">
          <label>		Agence    </label>
          <input class="form-control" name="agencebank_add" id="agencebank_add" value="//" placeholder=" Agence " aria-label="Expert">
        </div> 
</div>
</div>


</div>


<div class="card-footer">
  
  <button type="submit" class="btn btn-default">Annuler</button>
  <button type="submit" class="btn btn-info float-right"> Ajouter </button>
  </div>

  </div>

</form>
@endsection