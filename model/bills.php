<?php
class bill
{
    var $billId = null;
    var $paymentType = null;
    var $username  = null;
    var $dateCreated = null;
    var $priceReduced = null;
    var $totalBill = null;
    var $address = null;
    var $fk_userId = null;
    var $fk_promotionId  = null;
    var $phone = null;
    
   

    public function add($username, $phone, $address, $priceReduced, $totalBill, $paymentType, $fk_userId, $fk_promotionId  )
    {
        
        $db = new connect();
        $sql = "INSERT INTO bills(username, phone, address, priceReduced, totalBill, paymentType, fk_userId, fk_promotionId) VALUES ('$username', '$phone','$address', '$priceReduced', '$totalBill', '$paymentType', '$fk_userId', '$fk_promotionId') ";
        $result = $db->pdo_get_connection();
        $result->exec($sql);
        $billId = $result->lastInsertId();
        return $billId;
    }

    public function add_billDetail($billId,$productId,$quantity,$price,$note  )
    {
        
        $db = new connect();
        $sql = "INSERT INTO billdetails(DbillId , DproductId , quantity, price, note) VALUES ('".$billId."','".$productId."','".$quantity."','".$price."','".$note."') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }



    
}