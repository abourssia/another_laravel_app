@extends ('layouts.homemaster')

@section('title', 'HOME')

@section('content')

<div class="counter-up">

<div class="cont">
<div class="box">

<div class="icon"><i class="fa-solid fa-flask-vial"></i></div>
<div class="counter"> {{$count_labo}}  </div>
<div class="text"> LABORATOIRES </div>
</div>
<div class="box">

<div class="icon"><i class="fa-solid fa-users"></i></div>
<div class="counter"> {{$count_expert}} </div>
<div class="text"> EXPERTS </div>
</div>

<div class="box">

<div class="icon"><i class="fa-solid fa-building-columns"></i> </div>
<div class="counter"> {{$count_etab}}  </div>
<div class="text"> ETABLISSEMENTS </div>
</div>




</div>

</div>
</div>

@endsection