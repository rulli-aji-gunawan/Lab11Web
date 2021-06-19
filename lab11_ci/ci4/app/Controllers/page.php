<?php 

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about',[
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        // echo "Ini adalah halaman Contact";
        return view('contact',[
            'title' => 'Halaman Kontak',
            'content' => 'Ini adalah halaman kontak yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function faqs()
    {
        echo "Ini adalah halaman FAQ";
    }
    
    public function tos()
    {
        echo "Ini halaman Term of Service";
    }

}


?>

