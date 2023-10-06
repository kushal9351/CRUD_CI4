<?php
namespace App\Controllers;

use App\Models\StudentModel;
// use CodeIgniter\HTTP\RequestInterface;


class StudentController extends BaseController
{

    public function index(): string
    {
        $student = new StudentModel();
        // print_r($student);
        $data['students'] = $student->findAll();
        // print_r($data);
        return view('students/index.php', $data);
    }

    public function create(){
        // echo "<h1>create page</h1>";
        return view('students/create.php');
    }

    public function add(){
        // echo "<h1>Add page</h1>";
        $student = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' =>$this->request->getPost('email'),
            'phone' =>$this->request->getPost('phone'),
            'course' =>$this->request->getPost('course'),
        ];
        print_r($data);
        $student->save($data);
        // $student->insert($data);
        echo "data added successfully";
        return redirect()->to(base_url('students'));
        // return redirect(base_url('students'));
        // header("Location:".base_url("/students"));
    }

    public function edit($id){
        // echo "hello ".$id;
        $student = new StudentModel();
        $data['row'] = $student->find($id);
        // print_r($data);
        return view('students/edit.php', $data);
    }

    public function update($id){
        $student = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course'),
        ];
        $student->update($id, $data);
        return redirect()->to(base_url('students'));

        // echo "update";
    }
    public function delete($id){
        $student = new StudentModel();
        $student->delete($id);
        return redirect()->to(base_url('students'));
    }
}