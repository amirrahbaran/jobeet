<?php

class jobActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $q = Doctrine_Query::create()
            ->from('JobeetJob j')
            ->where('j.expires_at > ?', date('Y-m-d H:i:s', time()));

        $this->jobeet_jobs = $q->execute();
    }
    public function executeShow(sfWebRequest $request)
    {
        $this->job = $this->getRoute()->getObject();
    }
}