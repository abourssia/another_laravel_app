@extends ('layouts.master')

@section('title', 'Listes des Experts')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Expert</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Experts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
  
 <div class="container-fluid">
 <div class="card card-default">
  
           <div class="card-body">
              <div class="table-responsive-sm">
@csrf
          <table id="example1" class="table table-bordered table-sm table-striped">
                  <thead>
                  <tr>
                  <th> ID </th>

                    <th>Code<br>  d'expert</th>
                    <th>Nom <br> d'expert</th>
                    <th>Grade</th>
                    <th>Specialité</th>
                    <th>Etabissement</th>
                    <th>Adresse <br> Professionnelle</th>
                    <th>Telephone</th>
                    <th>Fax</th>
</TR>
                  </thead>
                  <tbody>
                  @foreach($data as $row)

                  <tr>
                  <td>{{ $row->id}}</td>

                    <td>{{ $row->code_expert}}</td>
                    <td>{{ $row->name_expert}}</td>
                    <td>{{ $row->grade_expert}}</td>
                    <td>{{ $row->spec_expert}}</td>
                    <td>{{ $row->etab_expert }}</td>
                    <td>{{ $row->adressprof}}</td>
                    <td>{{ $row->tel_expert}}</td>
                    <td>{{ $row->fax}}</td>


                  </tr>
                  @endforeach

                </table>



 
</div>
  </div></div> 
</div>




 
</div>
  </div>
</div> 
</div>
</section>

@endsection