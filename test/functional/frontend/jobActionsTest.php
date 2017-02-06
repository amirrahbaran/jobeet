<?php
// test/functional/frontend/jobActionsTest.php
include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new JobeetTestFunctional(new sfBrowser());
$browser->loadData();

$browser->info('1 - The homepage')->
    get('/job')->
        with('request')->begin()->
        isParameter('module', 'job')->
        isParameter('action', 'index')->
    end()->
    with('response')->begin()->
        info('  1.1 - Expired jobs are not listed')->
        checkElement('.jobs td.position:contains("expired")', false)->
    end()
;