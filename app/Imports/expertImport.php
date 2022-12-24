<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Expert;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
class expertImport implements ToModel
{
 
    public function model(array $row)
    {
        $exists = Expert::where('code_expert' , $row[1])->get();

        if ($exists->count() > 0) {
             Expert::where('code_expert' , $row[1])-> update(array(
                'name_expert' => $row[0],
                'mail_expert' => $row[2],
                'tel_expert' => $row[3],
                'etab_expert' => $row[4],
                'spec_expert' => $row[5],
                'grade_expert' => $row[6],  
                'adressprof'=> $row[7], 
                'fax'=> $row[8], 
                'compteccp'=> $row[9], 
                'cleccp'=> $row[10], 
                'cbank'=> $row[11], 
                'agencebank' => $row[12], 
            ));
            return null;
            
        } else  {
            return new Expert([
                'name_expert' => $row[0],
                'code_expert'    => $row[1],
                'mail_expert' => $row[2],
                'tel_expert' => $row[3],
                'etab_expert' => $row[4],
                'spec_expert' => $row[5],
                'grade_expert' => $row[6],  
                'adressprof'=> $row[7], 
                'fax'=> $row[8], 
                'compteccp'=> $row[9], 
                'cleccp'=> $row[10], 
                'cbank'=> $row[11], 
                'agencebank' => $row[12], 
         
            ]);
        }
        }
    }
    
  