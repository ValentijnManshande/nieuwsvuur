<?php

namespace App\NewsRetrievalBundle\Models;

use App\NewsRetrievalBundle\Models\Interfaces\NewsArticleModelInterface;

class BaseNewsArticleModel implements NewsArticleModelInterface
{
    private string $title;

    private string $author;

    private string $newsAgent;

    private string $articleUrl;

    public function __construct(string $title, string $author, string $newsAgent, string $articlUrl)
    {
        $this->title = $title;
        $this->author = $author;
        $this->newsAgent = $newsAgent;
        $this->articleUrl = $articleUrl;
    }

    public function getTitle() : string
    {

        return $this->title;
    }
    
    public function getAuthor() : string
    {

        return $this->author;
    }

    public function getNewsAgent() : string
    {

        return $this->newsAgent;
    }

    public function getArticleUrl() : string
    {

        return $this->articuleUrl; 
    }
}