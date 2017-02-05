<?php

// apps/frontend/modules/category/templates/showSuccess.php
<?php use_stylesheet('jobs.css') ?>

<?php slot('title', sprintf('Jobs in the %s category', $category->getName())) ?>

<div class="category">
    <div class="feed">
        <a href="">Feed</a>
    </div>
    <h1><?php echo $category ?></h1>
</div>

<?php include_partial('job/list', array('jobs' => $category->getActiveJobs())) ?>