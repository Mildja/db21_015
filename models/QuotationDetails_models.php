<?php
    class QuotationDetails{
        public  $ID;
        public  $Q_ID;
        public  $P_ID;
        public  $Color_ID;
        public  $NumOfProduct;
        public  $NumColorScreen;

    public function __constuct($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen){
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
            echo"ลาก่อน";
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

    public static function add($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen){
        require("connection_connect.php");
        $sql ="INSERT INTO Product_list (PL_ID,Q_ID,P_ID,Color_ID,NumOfProduct,NumColorScreen)
        VALUES('$ID','$Q_ID','$P_ID','$Color_ID','$NumOfProduct','$NumColorScreen')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";

    }
    public static function update($ID,$Q_ID,$P_ID,$Color_ID,$NumOfProduct,$NumColorScreen){
        require("connection_connect.php");
        $sql="UPDATE Product_list SET PL_ID='$ID',Q_ID=$Q_ID,P_ID='$P_ID',Color_ID='$Color_ID',NumOfProduct='$NumOfProduct',NumColorScreen='$NumColorScreen')";
        require("connection_close.php");
        return "Update success $result rows";
    }

    public static function delete($ID){
        require("connection_connect.php");
        $sql = "DELETE * FROM Product_list WHERE PL_ID='$ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Delete success $result rows";
    }
    }
?>