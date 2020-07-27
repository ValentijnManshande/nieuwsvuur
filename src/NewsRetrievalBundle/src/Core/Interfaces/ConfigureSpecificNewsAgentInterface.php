<?php

namespace App\NewsRetrievalBundle\Core\Interfaces;

/**
* Method to determine the new agent to be loaded and or processed for specific further cron configuration.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

interface ConfigureSpecificNewsAgent
{
    /**
    * Method to determine which news agent should be scraped and how many articles should be returned
    *
    */
    function configureParameters(string $newsAgent, int $articleAmount, int $max = null);

    /**
    * Method to return all set parameters for further use
    *
    */
    function returnSetParameters() : array;
}