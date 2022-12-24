@extends ('layouts.master')

@section('title', ' Restructuration')


@section('content')



<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Restructuration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Restructuration</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
             

<section class="content">
    <div class="container-fluid">
    @if (session('success')) 
                <div class="alert alert-warning"> {{(session('success'))}} </div>
            
            @endif       
  <form action="{{url('admin/laboratoires/restructuration/addnew')}}" method="POST">
          @csrf
    <div class="card card-default">
      


          <div class="card-body">
<div class="row">
<div class="card card-outline card-info">
     <div class="card-header">
       <h3 class="card-title"> Sur Le Laboratoire : </h3>

       <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
         </button>
       </div>
       </div>
       <div class="card-body">

<div class="row">

   <div class="col-md-4">

   <div class="form-group">
     <label>Code Laboratoire</label>
     <input class="form-control" name="search" id="search" placeholder="Code du Laboratoire" aria-label="Search">
   </div> 
  </div>


  <div class="col-md-6">

   <div class="form-group">
     <label>Intitulé Laboratoire</label>
     <input class="form-control form-control-navbar" id="intitule_labo" readonly="readonly" name="intitule_labo"  placeholder="Intitulé" aria-label="Search">
   </div>
   </div>
</div>
    </div>
    </div>

    </div>

    <div class="row">



    
<div class="card card-outline card-info">
<div class="card-header">
   <h3 class="card-title">Dossier </h3>

   <div class="card-tools">
     <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
     </button>
   </div>
   <!-- /.card-tools -->
 </div>
 <div class="card-body">

<div class="row">

<div class="col-md-3">
       <div class="form-check clearfix">
       <div class="icheck-primary d-inline">

         <input type="checkbox" class="form-check-input" value="Oui" id="pvcl" name="pvcl" >
         <label class="form-check-label" for="pvcl">PV CL</label>
         </div>
         </div>
         </div>
<div class="col-md-3">
<div class="form-check clearfix">
<div class="icheck-primary d-inline">
<input type="checkbox" class="form-check-input" value="Oui" id="pvcsf" name="pvcsf">
<label class="form-check-label" for="pvcsf">PV CSF</label>
</div>
</div>
</div>


<div class="col-md-3">
<div class="form-check clearfix">
<div class="icheck-primary d-inline">
<input type="checkbox" class="form-check-input" value="Oui" id="eteff" name="eteff">
<label class="form-check-label" for="eteff"> Etat Effectif </label>
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-check clearfix"><div class="icheck-primary d-inline">

<input type="checkbox" class="form-check-input" value="Oui" name ="cdeteff" id="cdeteff">
<label class="form-check-label" for="cdeteff"> CD Etat Effectif </label>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

<div class="row">

<div class="card card-outline card-info">
           
           <div class="card-header">
           <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
         </button>
       </div>
             <h3 class="card-title">
               Changements :
             </h3>
           </div>
           <div class="card-body">
             <textarea name='changements' id="changements">
               Place <em>some</em> <u>text</u> <strong>here</strong>
             </textarea>
      </div>
</div>
</div>


</div>

    <div class="card-footer">
  
    <button type="submit" class="btn btn-default">Annuler</button>
  <button type="submit" class="btn btn-info float-right"> Ajouter </button>
    </div>

    </div>
    </div>

    </form>
    </div>
    </div>
</section>
</div>
</div>

@endsection