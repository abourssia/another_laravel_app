<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laboratoire;
use App\Models\restructuration;

use DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LaboFormRequest;


class LaboController extends Controller
{
    public function index() {
        
        $labo = Laboratoire::all();
        $count_labo = $labo -> count();
        return view('admin.laboratoires.index', compact('labo'));
    
        }


        public function create() {
        
            $result = DB::table('laboratoires')
            ->select('etab')
            ->distinct()
            ->get();
            $gdomaine_labo= DB::table('laboratoires')
            ->select('gdomaine_labo')
            ->distinct()
            ->get();

            $domaine_labo = DB::table('laboratoires')
            ->select('domaine_labo')
            ->distinct()
            ->get();



            return view('admin.laboratoires.create', compact('result','domaine_labo','gdomaine_labo'));
        
            }

            public function restructuration() {
        

                return view('admin.laboratoires.restructuration');
            
                }
     

             public function restructurationstore(Request $request) {

                   // $input = $request->all();


                  //  restructuration::create($input);
                  //  return redirect('admin/laboratoires/restructuration') -> with('success','Done !');

                  $rlabo = new restructuration;

                  $rlabo -> code_labo = $request['search'];

                  $rlabo -> intitule_labo = $request['intitule_labo'];
                  $rlabo -> etab = $request['etab'];
                  $rlabo -> dir_labo = $request['dir_labo'];
         

                  $rlabo -> pvcl = $request->has('pvcl')?'Oui':'Non';
                  $rlabo -> pvcsf = $request->has('pvcsf')?'Oui':'Non';
                  $rlabo -> etat = $request->has('eteff')?'Oui':'Non';
                  $rlabo -> CDetat = $request->has('cdeteff')?'Oui':'Non';
                            if (  $request->has('cdeteff') && $request->has('eteff') && 
                            $request->has('pvcsf') && $request->has('pvcl'))
                            {
                                $rlabo -> validated  = 'Oui' ;

                            } else {

                                $rlabo -> validated  = 'Non' ;

                            }
                   
                  //$rlabo -> changements = $request['changements'];
                 // $changements = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $changements);

                 $changements = explode(PHP_EOL, $rlabo -> changement = $request['changements']);

                  $rlabo -> save();

                return redirect('admin/laboratoires/restructuration') -> with('success','Done !');

            }

            public function restructurationList() {
        
                $rlabo = restructuration::all();
                return view('admin.laboratoires.listrestructuration', compact('rlabo'));
            
                }

            public function store(LaboFormRequest $request) {

                    $data= $request -> validated();

                    $labo = new Laboratoire;

                    $labo -> code_labo = $data['code_labo'];

                    if (Laboratoire::where('code_labo', '=', $data['code_labo'])->count() == 0) {
                        $labo -> code_labo = $data['code_labo'];

                    $labo -> intitule_labo = $data['intitule_labo'];
                    $labo -> etab = $data['etab'];
                    $labo -> dir_labo = $data['dir_labo'];
                    $labo -> email_dir = $data['email_dir'];
                    $labo -> num_dir = $data['num_dir'];
                    $labo -> gdomaine_labo = $data['gdomaine_labo'];
                    $labo -> domaine_labo = $data['domaine_labo'];
                    $labo -> acronyme = $data['acronyme'];
                    $labo -> created_by = Auth::user()->id;
                    $labo -> save();

                    return redirect('admin/laboratoires') -> with('message','Done !');

            } else 
            {

                return redirect('admin/laboratoires/add-labo') -> with('msg',' already exists !');

            }
        }

        
        public function acomplete(Request $request)
    {

        $query = $request->get('query');
        $filterResult = Laboratoire::where('code_labo', 'LIKE', '%'. $query. '%')->get();
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

        $query = $request->get('query');
        error_log($query);
        $filterResult = Laboratoire::where("code_labo",$query)->get();        
        return response()->json($filterResult[0]);
    
    }
}
