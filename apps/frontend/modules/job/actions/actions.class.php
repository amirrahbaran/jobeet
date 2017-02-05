<?php

class jobActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $q = Doctrine_Query::create()
            ->from('JobeetJob j')
            ->where('j.created_at > ?', date('Y-m-d H:i:s', time() - 86400 * 30));

        $this->jobeet_jobs = $q->execute();
    }
    public function executeShow(sfWebRequest $request)
    {
        $this->job = $this->getRoute()->getObject();
    }
}