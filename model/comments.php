<?php
class comment
{
    //khai bao thuoc tinh
    var $commentId = null;
    var $productId = null;
    var $userId = null;
    var $content = null;
    var $status = null;
    var $reply = null;
    


    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT  * FROM comments ";
        $result = $db->pdo_query($sql);
        return $result;
    }



    public function get_list_client($productId)
    {
        $db = new connect();
        $sql = "SELECT  * FROM comments CM 
        INNER JOIN commentdetails CMD ON CMD.DcommentId = CM.commentId
        INNER JOIN users US ON US.userId = CM.fk_userId
        INNER JOIN products PD ON PD.productId = CMD.DproductId WHERE PD.productId = ". $productId;
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($commentId)
    {
        $db = new connect();
        $sql = "SELECT * FROM comments WHERE commentId = $commentId ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function getById_forEdit($commentId,$userId)
    {
        $db = new connect();
        $sql = "SELECT commentId FROM comments WHERE commentId = $commentId and userId = $userId ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }
    public function getById_commentId_first()
    {
        $db = new connect();
        $sql = "SELECT commentId FROM `comments` ORDER BY commentId DESC ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function add_comment($content,$userId)
    {
        $db = new connect();
        $sql = "INSERT INTO comments (content,fk_userId) VALUES ('$content','$userId') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function add_comment_Detail_client($commentId,$productId)
    {
        $db = new connect();
        $sql = "INSERT INTO commentdetails (DcommentId ,DproductId) VALUES ('$commentId','$productId') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }



    

    public function update_comment($commentId, $content)
    {
        $db = new connect();
        $sql = "UPDATE comments SET content='$content' where commentId = $commentId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($commentId)
    {
        $db = new connect();
        $sql = "DELETE FROM comments  WHERE commentId = $commentId ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    

    
}
