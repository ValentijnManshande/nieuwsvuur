<?php

namespace App\NewsRetrievalBundle;

/**
* Methods to diplay either a single news article from a specified news agent or 
* display a multiple set of news articles from specified news agent according to a template.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

interface DisplayNewsArticle
{
    function displaySingleArticle($mediaAgent, $article, $template);

    function displayMultipleArticles($mediaAgent, $articles, $template);
}