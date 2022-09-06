<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        return view('templates/header') .
            view('templates/navbar') .
            view('Pages/home') . view('templates/footer');
    }
    public function about(){
        return view('templates/header') .
            view('templates/navbar') .
            view('Pages/about') . view('templates/footer');
    }
    
    public function contact(){
        return view('templates/header') .
            view('templates/navbar') .
            view('Pages/contact') 
            . view('templates/footer');
    }
    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
