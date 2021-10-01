<?php
class Customer{
    
    public $ID,$name,$addr,$tel;

    public function __construct($ID,$name,$addr,$tel)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->addr = $addr;
        $this->tel = $tel;
    }

    public static function getAll()
    {
        $CustomerList = [];
        require("connection_connect.php");
        $sql = "SELECT * from Customer";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $ID = $row[Cus_ID];
            $name = $row[Cus_name];
            $addr = $row[Cus_Addr];
            $tel = $row[Cus_Tel];
            $CustomerList[] = new Customer($ID,$name,$addr,$tel);
        }
        require("connection_close.php");
        
        return $CustomerList;
    }
}?>