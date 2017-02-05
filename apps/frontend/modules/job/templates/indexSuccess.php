<!-- apps/frontend/modules/job/templates/indexSuccess.php -->
<?php use_stylesheet('jobs.css') ?>

<div id="jobs">
    <table class="jobs">
        <?php foreach ($jobeet_jobs as $i => $job): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <td class="location"><?php echo $job->getLocation() ?></td>
                <td class="position">
                    <?php echo link_to($job->getPosition(), 'job_show_user', $job) ?>
                </td>
                <td class="company"><?php echo $job->getCompany() ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <div style="padding: 30px 15px">
        <a href="<?php echo url_for('job/new') ?>">New</a>
    </div>
</div>