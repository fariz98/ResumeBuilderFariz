<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use SnappyImage;
class ResumeController extends Controller
{
    public function preview()
    {
        $user = auth()->user();

        return view('resume')->with(compact('user'));

    }

    public function generatePDF()
    {
        $user = auth()->user();

        // $pdf= \PDF::loadview('resume', compact('user'));
        // return $pdf->download('resume.pdf');

        $pdf = \PDF::loadView('resume', compact('user'));
        PDF::setOptions(['enable-javascript' => true]);
        PDF::setOptions(['javascript-delay' => 5000]);
        PDF::setOptions(['enable-smart-shrinking' =>true]);
        PDF::setOptions(['no-stop-slow-scripts' => true]);

        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 5000);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->download('resume.pdf');
    }
}
