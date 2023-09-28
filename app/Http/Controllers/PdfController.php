<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class PdfController extends Controller
{
    public function print()
    {
        $employee = Auth()->user()->name;
        $appointments = Auth()->user()->appointments()->orderBy('startTime', 'asc')->get();
        $time = now();
        $pdf = PDF::loadView('pdf.index', compact('employee','appointments','time'));
        return $pdf->setPaper('A4')->stream('invoice.pdf');
    }
}