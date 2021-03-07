<?php 
class rating{
    function RatingOnly($score,$uid,$bid){
        $source = new source();
        return $source->Query("INSERT INTO review(bid,uid,score) VALUES (?,?,?)",[$bid,$uid,$score]);

    }
    function RatingWithComment($score,$comment,$bid,$uid){
        $source = new source();
        return $source->Query("INSERT INTO review(bid,uid,score,comment) VALUES (?,?,?,?)",[$bid,$uid,$score,$comment]);

    }
    function updateRate($score,$comment,$bid,$uid){
        $source = new source();
        return $source->Query("UPDATE review SET score=?,comment=? where bid like ? and uid like ?",[$score,$comment,$bid,$uid]);
        
    }
    function checkComment($bid,$uid){
        $source = new source();
        $source->Query("SELECT * FROM review where bid like ? and uid like ?",[$bid,$uid]);
        $source->SingleRow();
        return $source->CountRows();
    }
    function ratingCalculate($bid){
        $source = new source();
        
    }
}

?>