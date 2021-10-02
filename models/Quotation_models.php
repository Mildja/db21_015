<?php
class Quotation{
    public $ID;
    public $date;
    public $empID;
    public $cusID;
    public $payment;
    public $percent;

    public function __construct($ID,$date,$empID,$cusID,$payment,$percent)
    {
        $this->ID = $ID;
        $this->date = $date;
        $this->empID = $empID;
        $this->cusID = $cusID;
        $this->payment = $payment;
        $this->percent = $percent;
    }

    public static function getAll()
    {
        $QuotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * from Quotation Natural JOIN customer Natural JOIN Employee ";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $ID = $row[Q_ID];
            $date = $row[Q_date];
            $empID = $row[Emp_ID];
            $cusID = $row[Cus_ID];
            $payment = $row[Q_payment];
            $percent = $row[Q_percent];
            $QuotationList[] = new Quotation($ID,$date,$empID,$cusID,$payment,$percent);
        }
        require("connection_close.php");

        return $QuotationList;
    }

    public static function get($ID)
    {
        require("connection_connect.php");
        $sql = "SELECT * from Quotation Natural JOIN customer Natural JOIN Employee where Q_ID='$ID' and Quotation.Cus_ID=customer.Cus_ID and Employee.Emp_ID=Quotation.Emp_ID";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $ID = $row[Q_ID];
        $date = $row[Q_date];
        $empID = $row[Emp_ID];
        $cusID = $row[Cus_ID];
        $payment = $row[Q_payment];
        $percent = $row[Q_percent];
        require("connection_close.php");
        return new Quotation($ID,$date,$empID,$cusID,$payment,$percent);
    }

    public static function search($key)
    {
        $QuotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * from Quotation Natural JOIN customer Natural JOIN Employee 
        where (Q_ID like'%$key%' or Emp_ID like'%$key%' or Cus_ID like'%$key%') 
        and Quotation.Cus_ID=customer.Cus_ID and Employee.Emp_ID=Quotation.Emp_ID";

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $ID = $row[Q_ID];
            $date = $row[Q_date];
            $empID = $row[Emp_ID];
            $cusID = $row[Cus_ID];
            $payment = $row[Q_payment];
            $percent = $row[Q_percent];
            $QuotationList[] = new Quotation($ID,$date,$empID,$cusID,$payment,$percent);
        }
        require("connection_close.php");

        return $QuotationList;
    }

    public static function add($ID,$date,$empID,$cusID,$payment,$percent)
    {
        require("connection_connect.php");
        $sql = "INSERT into `Quotation`(`Q_ID`,`Q_date`,`Emp_ID`,`Cus_ID`,`Q_payment`,`Q_percent`) values ('$ID','$date','$empID','$cusID','$payment','$percent')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

    public static function update($ID,$date,$empID,$cusID,$payment)
    {
        require("connection_connect.php");
        $sql = "UPDATE into Quotation SET Q_date='$date',Emp_ID='$empID',Cus_ID='$cusID',Q_payment='$payment',Q_percent='$percent' WHERE Q_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "update success $result row";
    }

    public static function delete($ID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE from Quotation WHERE Q_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "delete success $result row";
    }

}?>