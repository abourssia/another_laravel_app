@extends ('layouts.master')

@section('title', 'Laboratories')

@section('content')
<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">

      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laboratoires</h1>


            @if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach

</ul>
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
   </div>
   <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laboratoires</li>
            </ol>
          </div><!-- /.col -->


         
      </div>
      </div>
      <section class="content">
  
  <div class="container-fluid">
  <div class="card card-default ">
   
            <div class="card-body">
               <div class="table-responsive-sm">

      <table id="example1" class="table table-bordered table-sm table-striped">

      <thead>
                  <tr>
                    <th>Code Laboratoire</th>
                    <th>Intitulé</th>
                    <th>Acronyme</th>
                    <th>Region</th>
                    <th>Wilaya</th>

                    <th>Directeur</th>
                    <th>Etablissement</th>
                  </tr>
                  </thead>

                  <tbody>

                  @foreach ($labo as $labo)

<tr>

   <td> {{ $labo -> code_labo}} </td>
   <td> {{ $labo -> intitule_labo}} </td>
   <td> {{ $labo -> acronyme}} </td>
   <td> {{ $labo -> region}} </td>
   <td> {{ $labo -> wilaya}} </td>
   <td> {{ $labo -> dir_labo}} </td>
   <td> {{ $labo -> etab}} </td>
</tr>
@endforeach

</tbody>


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