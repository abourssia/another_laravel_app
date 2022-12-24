<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expert;
use App\Models\restructuration;
use Illuminate\Support\Facades\Auth;

use PDF;
use import;
class ExpRintXontroller extends Controller
{



    public function index(){

        return view('admin.print.contratexpert');
    
        }

        public function index2(){

            return view('admin.print.contratexpertpnr');
        
            }

        public function aucomplete(Request $request)
        {
    
            $q2 = $request->get('q2');
            $filterResult = Expert::where('name_expert', 'LIKE', '%'. $q2. '%' )->get();
            $arrayNew = [];
            foreach ($filterResult as $food) {
                error_log($food);
                array_push($arrayNew, $food['name_expert']);
            }
            error_log('finished');
            return response()->json($arrayNew);
        
        }
    
    
    
    public function EXpertByCodeLabo(Request $request)
        {
    
            $q2 = $request->get('q2');
            error_log($q2);
            $filterResult = Expert::where("name_expert",$q2)->get();        
            return response()->json($filterResult[0]);
        
        }
        public function generatePDF(Request $request)
        {
    
           // $request->all;
           $name_expert = $request->expert; 
           $diplome_expert = $request->diplome_expert; 
           $adressprof = $request->adressprof; 
           $grade_expert = $request->grade_expert; 
           $tel_expert = $request->tel_expert; 
           $fax = $request->fax; 
           $mail_expert = $request->compteccp; 
           $compteccp = $request->compteccp; 
           $cleccp = $request->cleccp; 
           $agencebank = $request->agencebank; 
           $cbank = $request->agencebank; 
           $hours = (real)$request->hours; 
           $renumgrade =(real)$request->renumgrade; 
           $sthhours =(real)$request->sthhours;
           $projet = $request->projets; 
           $projet = implode(', ', $projet);
           $Mois = $request->mois; 
           $Mois = implode(' et ', $Mois);
           $dateex = $request->dateex; 
           $montantglob =  math_eval(''.$sthhours.'*'.$renumgrade. '*'.$hours.'');

    
            $data = [
              'name_expert' => $name_expert,
              'diplome_expert' =>$diplome_expert ,
              'adressprof' => $adressprof ,
              'tel_expert' => $tel_expert,
              'fax' => $fax ,
              'mail_expert' => $mail_expert ,
              'compteccp' => $compteccp ,
              'cleccp' => $cleccp ,
              'agencebank' => $agencebank,
              'cbank' => $cbank,
              'montantglob' => $montantglob,
              'grade_expert' => $grade_expert,
              'dateex' => $dateex,
              'projet' => $projet,
              'Mois' => $Mois,

                ];
            
            $pdf = PDF::loadView('admin/print/generate-contrat', $data);
        
            return $pdf->download($name_expert.'.pdf');
          }


          public function generatePDFPNR(Request $request)
          {
      
             // $request->all;
             $name_expert = $request->expert; 
             $diplome_expert = $request->diplome_expert; 
             $adressprof = $request->adressprof; 
             $grade_expert = $request->grade_expert; 
             $tel_expert = $request->tel_expert; 
             $fax = $request->fax; 
             $mail_expert = $request->compteccp; 
             $compteccp = $request->compteccp; 
             $cleccp = $request->cleccp; 
             $agencebank = $request->agencebank; 
             $cbank = $request->agencebank; 
             $hours = (real)$request->hours; 
             $renumgrade =(real)$request->renumgrade; 
             $sthhours =(real)$request->sthhours;
             $projet = $request->projets; 
             $Mois = $request->mois; 

             $Mois = implode(' et ', $Mois);
             $dateex = $request->dateex; 
             $montantglob =  math_eval(''.$sthhours.'*'.$renumgrade. '*'.$hours.'');
  
      
              $data = [
                'name_expert' => $name_expert,
                'diplome_expert' =>$diplome_expert ,
                'adressprof' => $adressprof ,
                'tel_expert' => $tel_expert,
                'fax' => $fax ,
                'mail_expert' => $mail_expert ,
                'compteccp' => $compteccp ,
                'cleccp' => $cleccp ,
                'agencebank' => $agencebank,
                'cbank' => $cbank,
                'montantglob' => $montantglob,
                'grade_expert' => $grade_expert,
                'dateex' => $dateex,
                'Mois' => $Mois,
  
                  ];
              
              $pdf = PDF::loadView('admin/print/generate-contrat-pnr', $data);
          
              return $pdf->download($name_expert.'.pdf');
            }
}


