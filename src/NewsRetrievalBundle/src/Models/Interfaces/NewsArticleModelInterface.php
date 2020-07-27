<?php

namespace App\NewsRetrievalBundle\Models\Interfaces;

interface NewsArticleModel
{
    function getTitle();

    function getAuthor();

    function getNewsAgent();

    function getArticleUrl();
}