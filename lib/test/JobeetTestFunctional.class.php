<?php
// lib/test/JobeetTestFunctional.class.php
class JobeetTestFunctional extends sfTestFunctional
{
    public function loadData()
    {
        Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');

        return $this;
    }
}
