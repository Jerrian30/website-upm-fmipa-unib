<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SurveiImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Survei;

class SurveiController extends Controller
{
    public function index()
    {
        $surveis = Survei::all();
        return view('laporan.survei', compact('surveis'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,csv',
        ]);

        $file = $request->file('excel_file');

        Excel::import(new SurveiImport, $file);

        return redirect()->route('surveis.index')->with('success', 'Data survei berhasil diimpor.');
    }
}
