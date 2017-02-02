<?php

class jobActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->jobeet_jobs = Doctrine::getTable('JobeetJob')
            ->createQuery('a')
            ->execute();
    }
    public function executeShow(sfWebRequest $request)
    {
        $this->job = $this->getRoute()->getObject();
    }
}