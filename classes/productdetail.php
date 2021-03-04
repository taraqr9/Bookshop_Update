<?php
class productdetail
{
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
            $this->name = $query->name;
            $this->author = $query->author;
            $this->publisher = $query->publisher;
            $this->price = $query->price;
            $this->description = $query->description;
            $this->category = $query->category;
            $this->image = $query->image;
        }
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
}
