<?php 

class EmployeeModel extends Db {

    public function getAllEmp()
    {
        $sql = "SELECT * FROM employee ORDER BY emp_id desc";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getEmp($get)
    {
        $sql = "SELECT * FROM employee WHERE emp_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$get['edit']]);

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        return $results;
    }

    public function setEmp($post)
    {
        $sql = "INSERT INTO employee (last_name, first_name) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$post['last_name'], $post['first_name']]);

        return $result;
        
    }

    public function searchEmp($get)
    {
        $sql = "SELECT * FROM employee WHERE first_name=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$get['search']]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function updateEmp($post)
    {
        $sql = "UPDATE employee set last_name = ? , first_name = ? WHERE emp_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$post['last_name'], $post['first_name'] , $post['emp_id']]);

        return $result;

    }
}

?>