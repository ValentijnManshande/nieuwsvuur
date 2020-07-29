<?php

namespace App\NewsRetrievalBundle\Models\Interfaces;

/**
* Interface defining the contract for the Model representing a news article.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

interface NewsArticleModel
{
    function getTitle();

    function getAuthor();

    function getNewsAgent();

    function getArticleUrl();
}