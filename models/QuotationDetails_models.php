<?php
    class QuotationDetails{
        public $ID;
        public $Q_ID;
        public $P_ID;
        public $Color_ID;
        public $NumOfProduct;
        public $NumColorScreen;

    public function __construct($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen){
            $this->ID=$ID;
            $this->Q_ID=$Q_ID;
            $this->P_ID=$P_ID;
            $this->Color_ID=$Color_ID;
            $this->NumOfProduct=$NumOfProduct;
            $this->NumColorScreen=$NumColorScreen;
    }
    public static function get($ID){
        require("connection_connect.php");
        $sql="SELECT * FROM Product_list WHERE PL_ID='$ID' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $ID = $my_row["PL_ID"];
        $Q_ID = $my_row["Q_ID"];
        $P_ID = $my_row["P_ID"];
        $Color_ID = $my_row["Color_ID"];
        $NumOfProduct = $my_row["NumOfProduct"];
        $NumColorScreen = $my_row["NumColorScreen"];
        require("connection_close.php");
        return new QuotationDetails($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen);
    }

    public static function getAll(){
       
        $QuotationDetailslist = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Product_list";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $ID = $my_row["PL_ID"];
            $Q_ID = $my_row["Q_ID"];
            $P_ID = $my_row["P_ID"];
            $Color_ID = $my_row["Color_ID"];
            $NumOfProduct = $my_row["NumOfProduct"];
            $NumColorScreen = $my_row["NumColorScreen"];
            $QuotationDetailslist[] = new QuotationDetails($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen);
        }
        require("connection_close.php");
        return $QuotationDetailslist;
    }
    public static function add($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Product_list`(`PL_ID`,`Q_ID`,`P_ID`,`Color_ID`,`NumOfProduct`,`NumColorScreen`) VALUES ('$ID','$Q_ID','$P_ID','$Color_ID','$NumOfProduct','$NumColorScreen')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;

    }
    public static function update($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen){
        require("connection_connect.php");
        $sql="UPDATE Product_list SET Q_ID='$Q_ID',P_ID='$P_ID',Color_ID='$Color_ID',NumOfProduct='$NumOfProduct',NumColorScreen='$NumColorScreen' WHERE PL_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Update success $result rows";
    }

    public static function delete($ID){
        require_once("connection_connect.php");
        $sql = "DELETE FROM Product_list WHERE PL_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Delete success $result rows";
    }
    public static function search($key)
    {
        echo"2";
        $QuotationDetailslist = [];
        require("connection_connect.php");
        $sql = "SELECT PL_ID,Q_ID,P_ID,Product_list.Color_ID,Product_list.NumOfProduct
        ,Product_list.NumColorScreen
        P_name,
        Product.C_name,
        Product.P_manage,
        Color.Color_name,
        Quotation.Emp_ID
        
        FROM Color JOIN Detail_Product USING (Color_ID)
        JOIN Product USING(P_ID) JOIN Product_list USING(P_ID)JOIN Quotation USING(Q_ID)
        WHERE (PL_ID LIKE '%$key%' OR Q_ID LIKE '%$key%' OR P_ID LIKE '%$key%' OR Product_list.Color_ID LIKE '%$key%'OR Product_list.NumOfProduct LIKE '%$key%' OR Product_list.NumColorScreen LIKE '%$key%' OR P_name LIKE '%$key%' OR Product.C_name LIKE '%$key%' OR Product.P_manage LIKE '%$key%' OR Product_list.Color_ID LIKE '%$key%'OR Product_list.NumOfProduct LIKE '%$key%' OR Color.Color_name LIKE '%$key%' OR Quotation.Emp_ID LIKE '%$key%')";
       
       $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $ID = $my_row["PL_ID"];
            $Q_ID = $my_row["Q_ID"];
            $P_ID = $my_row["P_ID"];
            $Color_ID = $my_row["Color_ID"];
            $NumOfProduct = $my_row["NumOfProduct"];
            $NumColorScreen = $my_row["NumColorScreen"];
            $QuotationDetailslist[] = new QuotationDetails($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen);
        }
        require("connection_close.php");
        return $QuotationDetailslist;
    }


    }
?>