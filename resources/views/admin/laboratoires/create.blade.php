@extends ('layouts.master')
@section('title', 'Ajouter un Laboratories')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laboratoires</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        
    <div class="card m-0">
        <div class="card-header">
        <h4>Ajouter un Laboratoire</h4>

        </div>
        <div class="card-body">
        @if (session('msg')) 
                <div class="alert alert-warning"> {{(session('msg'))}} </div>
            
            @endif
        <form action="" method="POST">
        @csrf
        <div class="form-group">

        <div class="row">
                  <div class="col-3">
                  <label for="exampleInputBorder"> Code Laboratoire </label>
                  <input type="text" class="form-control form-control-border" name="code_labo" id="exampleInputBorder" placeholder="Code Laboratoire">
                </div>
               
                <div class="col-6">
                  <label for="exampleInputBorder"> Intitulé du Laboratoire </label>
                  <input type="text" class="form-control form-control-border" name="intitule_labo" id="exampleInputBorder" placeholder="Intitulé du Laboratoire">
                </div>
                <div class="col-3">
                  <label for="exampleInputBorder"> Acronyme Laboratoire </label>
                  <input type="text" class="form-control form-control-border" name="acronyme" id="exampleInputBorder" placeholder="Acronyme Laboratoire">
                </div>
                </div>
                </div>
                <div class="form-group">

                <div class="row">
                  <div class="col-3">
                  <label for="exampleInputBorder"> Directeur du laboratoire </label>

                    <input type="text" class="form-control form-control-border" name="dir_labo" placeholder="Directeur du laboratoire">
                  </div>
                  <div class="col-4">
                  <label for="exampleInputBorder"> Email du directeur </label>

                    <input type="text" class="form-control form-control-border" name="email_dir" placeholder="Email du directeur">
                  </div>
                  <div class="col-5">
                  <label for="exampleInputBorder"> Num Telephone du laboratorie </label>

                    <input type="text" class="form-control form-control-border" name="num_dir" placeholder="Num Telephone du laboratorie">
                  </div>
                </div>
                </div>
                <div class="form-group">
                    
                <div class="row">
                <label>Etablissement</label>
                        <select name="etab" class="form-control">
                        <option value="" readonly> Choisir un Etablissement </option>

                        @foreach ($result as $result)
                        <option value="{{$result->etab}}">{{ $result-> etab }}</option>
                         @endforeach


                        </select>
                  </div>
             
                
                </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-5">
                  <label>Grand domaine</label>
                        <select  name="gdomaine_labo" id="gdomaine_labo" class="form-control">
                        <option value="" readonly> Choisir un Grand Domaine </option>
                        @foreach ($gdomaine_labo as $gdomaine_labo)
                        <option value="{{$gdomaine_labo->gdomaine_labo}}">{{ $gdomaine_labo-> gdomaine_labo }}</option>
                         @endforeach
                        </select>
                  </div>

                  <div class="col-5">
                  <label>Domaine</label>
                        <select name="domaine_labo" class="form-control">
                        <option value="" readonly> Choisir un Domaine </option>
                        @foreach ($domaine_labo as $domaine_labo)
                        <option value="{{$domaine_labo->domaine_labo}}">{{ $domaine_labo-> domaine_labo }}</option>
                         @endforeach
                        </select>
                  </div>
                </div>
                </div>   </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-info">Ajouter</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
            </div>

        </form>

        </div>

    </div>
        
    </div>
</section>
@endsection