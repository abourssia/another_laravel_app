<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Laboratoire;
use Illuminate\Support\Facades\Auth;


class laboImport implements ToModel
{
   /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)

    
    {

    $exists = Laboratoire::where('code_labo' , $row[0])->get();

    if ($exists->count() > 0) {
         Laboratoire::where('code_labo' , $row[0])-> update(array(
            'intitule_labo'    => $row[1],
            'etab' => $row[2],
            'dir_labo' => $row[3],
            'email_dir' => $row[4],
            'num_dir' => $row[5],
            'gdomaine_labo' => $row[6],  
            'domaine_labo' => $row[7],  
            'acronyme' => $row[8],
        ));
        return null;
        
    } else  {
        $row[10]=  Auth::user()->name;
        return new Laboratoire([
            'code_labo' => $row[0],
            'intitule_labo'    => $row[1],
            'etab' => $row[2],
            'dir_labo' => $row[3],
            'email_dir' => $row[4],
            'num_dir' => $row[5],
            'gdomaine_labo' => $row[6],  
            'domaine_labo' => $row[7],  
            'acronyme' => $row[8],
            'created_by' =>$row[10]
        ]);
    }
    }
}
