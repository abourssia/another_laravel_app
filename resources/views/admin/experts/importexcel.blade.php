@extends ('layouts.master')
@section('title', 'Importer Experts')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
@if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form action=" {{ route ('fileexpertImport') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" ><label>Select File for Upload</label></td>
       <td width="30">
       <input type="file" name="file" id="customFile">
       </td>
       <td width="30%">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%"></td>
      </tr>
     </table>
    </div>
                </form>
                </div>
                </div>
                </div>
   

@endsection('content')