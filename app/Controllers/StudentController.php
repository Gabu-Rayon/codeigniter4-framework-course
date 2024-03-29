<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function createData()
    {
        return view("site/create");
    }
    public function postData()
    {
        $students = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course')
        ];
        $students->save($data);
        return redirect("students")->with('status', 'Student Inserted Successfully');
    }
    public function fetchData()
    {
        $student = new StudentModel();
        $data['students'] = $student->findAll();
        return view("site/students", $data);
    }
    public function editData($id = null)
    { 
        $student = new StudentModel();
        $data['student'] = $student->find($id);
        return view("site/edit", $data);
    }
    public function updateData($id = null)
    {
        $student = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course')
        ];
        $student->update($id, $data);
        session()->setFlashData('status_text', 'Your Student  Data has been Updated');
        return redirect()->to(base_url('students'))
            ->with('status_icon', 'success')
            ->with('status', 'Student Updated Successfully');
    }

    public function deleteData($id = null)
    {
        $student = new StudentModel();
        $student->delete($id);
        return redirect()->back()->with('status', 'Student Data Deleted');
    }


    public function delete($id = null)
    {
        $student = new StudentModel();
        $student->delete($id);
        return redirect()->back()->with('status', 'Student Data Deleted');
    }

    public function confirmDelete($id = null)
    {
        $student = new StudentModel();
        $student->delete($id);
        $data = [
            'status'=> 'Deleted Successfully',
            'status_text'=> 'You Student Data has been deleted successfully',
            'status_icon'=> 'success'
        ];
        return $this->response->setJSON($data);        
    }
}