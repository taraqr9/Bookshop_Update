<?php
class checkout
{

    public function finalCheckOut($name, $email, $phone, $address, $qty, $bid)
    {
        $source = new source();
        $pd = new productdetail();
        $status = 'Pending' ;
        $pd->productDetails($bid);
        return $source->Query("INSERT INTO `order` (bid,uid,bname,qty,category,price,name,email,phone,address,status) VALUES (?,?,?,?,?,?,?,?,?,?,?)", [$pd->getId(), $_SESSION['logId'], $pd->getName(), $qty, $pd->getCategory(), (int)$pd->getPrice() * (int)$qty, $name, $email, $phone, $address,$status]);
    }

    public function cartCheckOut($name, $email, $phone, $address,$uid){
        $source = new source();
        $pd = new productdetail();
        $status = 'Pending' ;
        $source->Query("SELECT * FROM `cart` where uid = ?",[$uid]);
        $query = $source->FetchAll();
        $cRow = $source->CountRows();
        if($cRow>0){
            foreach($query as $row):
                $pd->productDetails($row->bid);
                $source->Query("INSERT INTO `order` (bid,uid,bname,qty,category,price,name,email,phone,address,status) VALUES (?,?,?,?,?,?,?,?,?,?,?)", [$pd->getId(), $_SESSION['logId'], $pd->getName(), '1', $pd->getCategory(), $pd->getPrice(), $name, $email, $phone, $address,$status]);
                $source->Query("DELETE FROM `cart` where bid=? and uid=?",[$row->bid,$_SESSION['logId']]);
                header('location:cart.php?doneCart=1');
            endforeach;
        }else{
            header('location:cart.php?Error=1');
        }
    }
}
