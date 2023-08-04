<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ProductExport;
use App\Http\Controllers\Controller;
use App\Import\ProductImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importData(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'file'=>'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }
        try {
            $regionType = $request->region;
            $regionFile = $request->file('file');

            switch ($regionType) {
                case 'user':
                    Excel::import(new UsersImport, $regionFile, \Maatwebsite\Excel\Excel::XLSX);
                    break;
            }

            Session::flash('success','Import data successfully');
            return redirect()->back();
        } catch (\Exception $ex) {
            Session::flash('error', $ex->getMessage());
            return redirect()->back();
        }
    }
}