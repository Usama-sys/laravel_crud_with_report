<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PdfController extends Controller
{
    public function generate(){
        $data = Post::get();
       
        $fileName = 'Posts_report.pdf';
        $mpdf = new \Mpdf\Mpdf([
            'margin-left' => 10,
            'margin-right' => 10,
            'margin-top' => 15,
            'margin-bottom' => 20,
            'margin-header' => 10,
            'margin-footer' => 10,
        ]);

        $html = \View::make('pdf')->with('data',$data);
        $html = $html->render();

        $mpdf->SetHeader('Company A.B.C | Posts Details | {PAGENO}');
        $mpdf->SetFooter('By Usama Ahmad');

        // $stylesheet = file_get_contents(url('/css/pdf.css'));
        // $mpdf->WriteHTML($stylesheet,1);


        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName,'I');


    }
    
}
