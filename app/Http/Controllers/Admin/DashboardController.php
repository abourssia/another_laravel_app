<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laboratoire;
use App\Models\User;
use App\Models\Expert;
use App\Models\restructuration;


class DashboardController extends Controller
{
    public function index() {
        
        $labo = Laboratoire::all();
        $count_labo = $labo -> count();
        $data = $labo->unique('etab');
        $count_etab = $data->count();
        

        $user = User::all();
        $count_user = $user -> count();

        $experts = Expert::all();
        $count_expert = $experts -> count();

        $restruc = restructuration::all();
        $count_restruc = $restruc -> count();

    return view('admin.dashboard', compact(['count_labo','count_etab','count_user', 'count_expert', 'count_restruc']));

    }
    

 
}
