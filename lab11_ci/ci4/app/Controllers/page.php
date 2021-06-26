<?php 

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home',[
            'title' => 'Halaman Home', 
            'content' => 'Ini adalah halaman Home yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    
    // public function artikel()
    // {
    //     // return view('artikel',[
    //     //     'title' => 'Halaman Artikel',
    //     //     'content' => 'Ini adalah halaman Artikel yang menjelaskan tentang isi halaman ini.'
    //     // ]);

    //     return view('artikel',[
    //         'title','content'
    //     ]);
    // }
    
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

