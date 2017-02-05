<?php

class jobActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->jobeet_jobs = Doctrine_Core::getTable('JobeetJob')->getActiveJobs();
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->job = $this->getRoute()->getObject();
    }
}