<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expert;
use DB;

class ExpertController extends Controller
{
    function index(){

        $data = DB::table('experts')->get();
        return view('admin.experts.index', compact('data'));
    
    }

    function create() {

        return view('admin.experts.addexpert');

    }

     function store(Request $request) {

        $add = new Expert();

            $add -> code_expert = $request['code_expert_add'];
            
            if (Expert::where('code_expert', '=', $request['code_expert_add'])->count() == 0) {
                
            $add -> name_expert = $request['name_expert'];
            $add -> code_expert = $request['code_expert_add'];

            $add -> mail_expert = $request['mail_expert_add'];
            $add -> tel_expert = $request['tel_expert_add'];
            $add -> etab_expert = $request['etab_expert_add'];
            $add -> spec_expert = $request['spec_expert_add'];
            $add -> grade_expert = $request['grade_expert_add'];
            $add -> adressprof = $request['adressprof_add'];
            $add -> fax = $request['fax_add'];
            $add -> compteccp = $request['compteccp_add'];
            $add -> cleccp = $request['cleccp_add'];
            $add -> cbank = $request['cbank_add'];
            $add -> agencebank = $request['agencebank_add'];
            $add -> diplome_expert = $request['diplome_expert_add'];
            $add -> save();

            return redirect('admin/experts/add-expert') -> with('txt','Done !');
            }
            else 
            {

                return redirect('admin/experts/add-expert') -> with('txt',' already exists !');

            }
    
    }
}
