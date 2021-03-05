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
}
