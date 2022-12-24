<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;
use App\Models\User;
use App\Models\Expert;

class welcomecontroller extends Controller
{

    function index()
    {

        $labo = Laboratoire::all();
        $count_labo = $labo -> count();
        $data = $labo->unique('etab');
        $count_etab = $data->count();
        

        $user = User::all();
        $count_user = $user -> count();

        $experts = Expert::all();
        $count_expert = $experts -> count();



    return view('welcome', compact(['count_labo','count_etab','count_user', 'count_expert']));
    }
}
