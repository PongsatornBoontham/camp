<?php

namespace App\Controllers;

class Midterm extends BaseController
{
    public function midterm_input()
    {
        return view('midterm_input');
    }
    public function midterm_output()
    {
        $data['prefix'] = $this->request->getPost('prefix');
        $data['mf'] = $this->request->getPost('mf');
        $data['fname'] = $this->request->getPost('fname');
        $data['sname'] = $this->request->getPost('sname');
        $data['birthday'] = $this->request->getPost('birthday');
        $data['date'] = $this->request->getPost('date');
        $data['num'] = $this->request->getPost('num');
        $data['email'] = $this->request->getPost('email');
        $data['provine'] = $this->request->getPost('provine');
        $data['district'] = $this->request->getPost('district');
        $data['address'] = $this->request->getPost('address');
        $data['sym'] = $this->request->getPost('sym');
               
        $file = $this->request->getFile('image');
        if($file->isValid()){
            $image_name = $file->getRandomName();
            $file->move('./picture', $image_name);
        }
        $data['image'] = $image_name;
        
        return view('midterm_output', $data);
    }
}
