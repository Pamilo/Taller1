<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
                /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['title'] - string - contains the review's title
     * $this->attributes['body'] - string - contains the review's body
     * $this->attributes['rating'] - int - contains the review's rating
    */

    protected $fillable = ['title','body','rating'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id) : void
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle(): string
    {
        return $this->attributes['title'];
    }

    public function setTitle($title) : void
    {
        $this->attributes['title'] = $title;
    }
    public function getBody(): string
    {
        return $this->attributes['body'];
    }

    public function setBody($body) : void
    {
        $this->attributes['body'] = $body;
    }

    public function getRating(): int
    {
        return $this->attributes['rating'];
    }

    public function setRating($rating) : void
    {
        $this->attributes['rating'] = $rating;
    }
}
