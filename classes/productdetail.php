<?php
class productdetail
{
    private $id;
    private $name;
    private $author;
    private $publisher;
    private $price;
    private $description;
    private $category;
    private $image;

    public function productDetails($bid)
    {
        $source = new source();
        if ($source->Query("SELECT * FROM books WHERE id = ?", [$bid])) {
            $query = $source->SingleRow();
            $this->id = $bid;
            $this->name = $query->name;
            $this->author = $query->author;
            $this->publisher = $query->publisher;
            $this->price = $query->price;
            $this->description = $query->description;
            $this->category = $query->category;
            $this->image = $query->image;
        }
    }
    public function productComment($bid): array{
        $source = new source();
        $source->Query("SELECT * FROM review where bid = ?",[$bid]);
        $review = $source->FetchAll();
        return $review;
    }

    public function productRating($bid) : float{
        $source = new source();
        $source->Query("SELECT SUM(score) as rate FROM review where bid = ?",[$bid]);
        $rate = $source->SingleRow();

        $source->Query("SELECT * FROM review where bid = ?",[$bid]);
        $source->FetchAll();
        $row = $source->CountRows();
        if($row>0){
            $avg = $rate->rate / $row;
        }else{
            $avg = 3;
        }
        
        return $avg;
    }




    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the value of publisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


}
