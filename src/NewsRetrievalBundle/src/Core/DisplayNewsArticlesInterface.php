<?php

namespace App\NewsRetrievalBundle\Core\Interfaces;

/**
* Methods to diplay either a single news article from a specified news agent or 
* display a multiple set of news articles from specified news agent according to a template.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

interface DisplayNewsArticle
{
    function displaySingleArticle(string $newsAgent, array $article, string $template);

    function displayMultipleArticles(string $newsAgent, array $articles, string $template);
}