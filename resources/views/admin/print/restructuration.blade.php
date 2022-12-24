@extends ('layouts.master')


@section('title', 'Validation Restructuration')
 
@section('content')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"> To fill </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="{{url('admin/print/restructuration/generate-pdf')}}" method="GET">
          @csrf
            

<div class="card-body">

<div class="row">
<div class="col-md-7">


<div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="date_cs" data-target="#reservationdate"/>
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
          <label>Code Laboratoire</label>
          <input class="form-control" name="bycode" id="bycode" placeholder="Code du Laboratoire" aria-label="bycode">
        </div> 
    </div>
<div class="col-md-6">

        <div class="form-group">
          <label>Intitulé Laboratoire</label>
          <input class="form-control form-control-navbar" id="intitule_labo" readonly="readonly" name="intitule_labo"  placeholder="Intitulé" aria-label="Search">
        </div>
        </div>
  </div>

            <div class="row">
<div class="col-md-4">
<div class="form-group">
          <label>Directeur Laboratoire</label>
          <input class="form-control form-control-navbar" id="dir_labo" readonly="readonly" name="dir_labo" placeholder="Directeur" aria-label="Search">
        </div>

        </div>
<div class="col-md-6">

         <div class="form-group">
          <label>Etablissement Laboratoire</label>
          <input class="form-control form-control-navbar" id="etab" readonly="readonly" name="etab" placeholder="Etablissement" aria-label="Search">
        </div>
        </div>
  </div>
  </div>

  <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Changements :
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

          

              <textarea name='changement' class="form-control" row="5" readonly="readonly"  id="changement">

              
              </textarea>
            </div>
            
          </div>
        </div>
        <!-- /.col-->
      </div>








    <div class="card-footer">
  
    <button type="submit" class="btn btn-default">Annuler</button>
    <button type="submit" class="btn btn-info float-right"> Générer Validation </button>
    </div>

    </div>
    </form>

    </div>
   

</section>




@endsection