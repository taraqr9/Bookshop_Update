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
    public function productComment($bid): array
    {
        $source = new source();
        $source->Query("SELECT * FROM review where bid = ?", [$bid]);
        $review = $source->FetchAll();
        return $review;
    }

    public function productRating($bid): float
    {
        $source = new source();
        $source->Query("SELECT SUM(score) as rate FROM review where bid = ?", [$bid]);
        $rate = $source->SingleRow();

        $source->Query("SELECT * FROM review where bid = ?", [$bid]);
        $source->FetchAll();
        $row = $source->CountRows();
        if ($row > 0) {
            return floatval($rate->rate / $row);
        } else {
            return 0;
        }
    }

    public function relatedProduct($category)
    {
        $source = new source();

        $query = $source->Query("SELECT max(id) FROM books where category = $category");
        $query = $source->SingleRow();
        $maxId = $query->id;

        $query = $source->Query("SELECT min(id) FROM books where category = $category");
        $query = $source->SingleRow();
        $minId = $query->id;


        $randomValue = rand($minId, $maxId);

        $query = $source->Query("SELECT * FROM books where id = $randomValue");
        $query = $source->SingleRow();
        $this->id = $query->id;
        $this->name = $query->name;
        $this->author = $query->author;
        $this->publisher = $query->publisher;
        $this->price = $query->price;
        $this->description = $query->description;
        $this->category = $query->category;
        $this->image = $query->image;
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
