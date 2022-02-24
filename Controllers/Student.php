<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function show_input()
    {
        return view('v_show_input');
    }
    public function show_value()
    {
        $data['prefix'] = $this->request->getPost('prefix');
        $data['student_id'] = $this->request->getPost('student_id');
        $data['fname'] = $this->request->getPost('fname');
        $data['sname'] = $this->request->getPost('sname');
        $data['birthday'] = $this->request->getPost('birthday');
        $data['email'] = $this->request->getPost('email');
        $data['year'] = $this->request->getPost('year');
        $data['cluster'] = $this->request->getPost('cluster');
        $data['code'] = $this->request->getPost('code');
       
        $file = $this->request->getFile('image');
        if($file->isValid()){
            $image_name = $file->getRandomName();
            $file->move('./picture', $image_name);
        }
        $data['image'] = $image_name;
        
        $file = $this->request->getFile('file');
        if($file->isValid()){
            $upload_file = $file->getRandomName();
            $file->move('./pdf',$upload_file);
        }
        $data['file']=$upload_file;
        return view('v_show_value', $data);
    }
}
