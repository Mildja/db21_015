<?php
class Quotation{
    public $ID;
    public $date;
    public $empID;
    public $cusID;
    public $payment;
    public $percent;

    public function__construct($ID,$date,$empid,$cusid,$payment,$percent)
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
        $sql = "select * from Quotation";
        $result = conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $ID = $row[Q_ID];
            $date = $row[Q_date];
            $empID = $row[Emp_ID];
            $cusID = $row[Cus_ID];
            $payment = $row[Q_payment];
            $percent = $row[Q_percent];
            $QuatationList[] = new Quotation($ID,$date,$empid,$cusid,$payment,$percent);
        }
        require("connection_close.php")

        return $QuotationList;
    }
}?>