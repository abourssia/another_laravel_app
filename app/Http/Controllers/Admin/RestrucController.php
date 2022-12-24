<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\restructuration;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\RestrucFormRqst;
use DB;
use PDF;
use import;
class RestrucController extends Controller
{



    public function index(){

        $d = DB::table('restructuration')->get();
    	return view('admin.print.restructuration', compact('d'));

    
        }

        function action(Request $req)
        {
            if($req->ajax())
            {
                if($req->action == 'edit')
                {
                    $d = array(
                        'pvCL'	=>	$req->pvCL,
                        'pvCSF'		=>	$req->pvCSF,
                        'CDetat'		=>	$req->CDetat,
                        'etat'		=>	$req->etat,
                        'validated'		=>	$req->validated,
                        'changement'		=>	$req->changement,
   
                    );
                    DB::table('restructuration')
                        ->where('id', $req->id)
                        ->update($d);
                }
                if($req->action == 'delete')
                {
                    DB::table('restructuration')
                        ->where('id', $req->id)
                        ->delete();
                }
                return response()->json($req);
            }
        }

        public function autocomplete(Request $request)
    {

        $q1 = $request->get('q1');
        $filterResult = restructuration::where('validated', '=' ,'Oui') ->where 
        ('code_labo', 'LIKE', '%'. $q1. '%' )->get();
        $arrayNew = [];
        foreach ($filterResult as $food) {
            error_log($food);
            array_push($arrayNew, $food['code_labo']);
        }
        error_log('finished');
        return response()->json($arrayNew);
    
    }



public function RestruByCodeLabo(Request $request)
    {

        $q1 = $request->get('q1');
        error_log($q1);
        $filterResult = restructuration::where("code_labo",$q1)-> latest('created_at')->get();        
        return response()->json($filterResult[0]);
    
    }
        
   
    public function generatePDF(Request $request)
    {

       // $request->all;
       $code_labo = $request->bycode; 
       $intitule = $request->intitule_labo;      
       $dir_labo = $request->dir_labo;
       $date_cs = $request->date_cs;
       $etab = $request->etab;
       $changement = $request->changement;
       $ldate = date('d/m/Y');

        $data = [
          'code_labo' => $code_labo,
          'intitule' => $intitule,
          'dir_labo' => $dir_labo,
          'etab' => $etab,
            'date_cs' => $date_cs,
            'today' => $ldate,
            'changements' => $changement
            ];
        
        $pdf = PDF::loadView('admin/print/generate_pdf', $data);
    
        return $pdf->download($code_labo.'.pdf');
      }
     

}


