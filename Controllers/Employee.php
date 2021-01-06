<?php 

class Employee extends Controller
{
    public function __construct() {
        $this->empModel = $this->model('EmployeeModel');
    }


    public function index()
    {

        $data = $this->empModel->getAllEmp();

        $this->view('Employee/index', $data);
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            # code...
            $data['info'] = "Successful";
            
            $this->view('Employee/add', $data);
        }

        $this->view('Employee/add');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}


?>