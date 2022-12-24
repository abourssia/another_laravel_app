@extends ('layouts.master')

@section('title', 'Demandes Restructuration')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Demandes Restructuration</h1>
            @if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      @endif
            @if (session('message')) 
                <div class="alert alert-success"> {{(session('message'))}} </div>
            
            @endif
            @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Demandes de Restructurations 
                
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-6">
                <h3 class="card-title"> Demandes de Restructurations </h3>
                </div>
                <div class="col-6">

                </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              {{ csrf_field() }}  

                <table id="exeditable" class="table table-bordered  table-sm table-striped">
                  <thead>
                  <tr>
                  <th> ID </th>

                  <th>Code Laboratoire</th>
                    <th>Intitulé</th>
                    <th>Directeur</th>
                    <th>pvCL</th>
                    <th>pvCSF</th>
                    <th>Etat Effectif V.Papier </th>
                    <th>Etat Effectif CD </th>
                    <th>Changement</th>
                    <th> Conforme </th>


                  </tr>
                  </thead>
                  <tbody>
                 @foreach ($rlabo as $rlabo)

                 <tr>
                 <td> {{ $rlabo -> id}} </td>

                    <td> {{ $rlabo -> code_labo}} </td>
                    <td> {{ $rlabo -> intitule_labo}} </td>
                    <td> {{ $rlabo -> dir_labo}} </td>
                    <td> {{ $rlabo -> pvCL}} </td>
                    <td> {{ $rlabo -> pvCSF}} </td>
                    <td> {{ $rlabo -> etat}} </td>
                    <td> {{ $rlabo -> CDetat}} </td>
                    <td> {!! $rlabo -> changement !!} </td>
                    <td> {{ $rlabo -> validated}} </td>

</tr>
                 @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
@endsection