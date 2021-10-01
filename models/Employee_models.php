<?php
class Employee{
    
    public $ID,$name,$position;

    public function __construct($ID,$name,$position)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->position = $position;
    }

    public static function getAll()
    {
        $EmployeeList = [];
        require("connection_connect.php");
        $sql = "SELECT * from Employee";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $ID = $row[Emp_ID];
            $name = $row[Emp_name];
            $position = $row[Emp_position];
            $EmployeeList[] = new Employee($ID,$name,$position);
        }
        require("connection_close.php");
        
        return $EmployeeList;
    }
}?>