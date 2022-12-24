<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Imports\laboImport;
use App\Imports\expertImport;

use Maatwebsite\Excel\Facades\Excel;

class importExcelController extends Controller
{
    public function laboimport() {
        

        return view('admin.laboratoires.import');
    
        }
        public function fileImport(Request $request) 
        {
            Excel::import(new laboImport, $request->file('file')->store('temp'));
            return redirect('admin/laboratoires/import')->with('success', 'All good!');
        }


        public function expertimport(Request $request) 
        {
            return view('admin.experts.importexcel');

        }
     public function fileexpertImport(Request $request) 
        {
            Excel::import(new expertImport, $request->file('file')->store('temp'));
            return redirect('admin/experts/import')->with('success', 'All good!');
        }


}
