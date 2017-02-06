<?php

// test/unit/JobeetTest.php
require_once dirname(__FILE__).'/../bootstrap/unit.php';

$t = new lime_test(6);
$t->is(Jobeet::slugify('Sensio'), 'sensio');
$t->is(Jobeet::slugify('sensio labs'), 'sensio-labs');
$t->is(Jobeet::slugify('sensio   labs'), 'sensio-labs');
$t->is(Jobeet::slugify('paris,france'), 'paris-france');
$t->is(Jobeet::slugify('  sensio'), 'sensio');
$t->is(Jobeet::slugify('sensio  '), 'sensio');
