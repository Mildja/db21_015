<?php
    class Color{

        public $P_ID;
        public $P_name;
        public $Color_name;
        public $Color_ID;

        public function __construct($P_ID,$P_name,$Color_name,$Color_ID){
            $this->P_ID = $P_ID ;
            $this->P_name = $P_name;
            $this->Color_name = $Color_name;
            $this->Color_ID = $Color_ID;
        }

        public static function getAll(){
            $ColorList = [];
            require("connection_connect.php");
            $sql = "SELECT P_ID,P_name ,Color.Color_name,Detail_Product.Color_ID FROM Detail_Product JOIN Color ON Color.Color_ID=Detail_Product.Color_ID JOIN Product USING(P_ID)";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $P_ID = $my_row["P_ID"];
                $P_name = $my_row["P_name"];
                $Color_name = $my_row["Color_name"];
                 $Color_ID = $my_row["Color_ID"];
                $ColorList[] = new Color($P_ID,$P_name,$Color_name,$Color_ID);
            }
            require("connection_close.php");
            return $ColorList;
        }

    }
