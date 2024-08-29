<?php if ($jobs->rowCount() > 0) : ?>
  <?php $stage = ["Rejected", "Application sent", "First interview", "Second interview", "RH interview", "Technical interview", "Final interview", "Job obtained"] ?>
  <table class="table table-stripped table-bordered">
    <tbody>
      <?php foreach ($jobs->fetchAll(PDO::FETCH_ASSOC) as $job): ?>
        <tr>
          <td class="td-job"><?= $job['company'] ?></td>
          <td class="td-job"><?= $job['platform_name'] ?></td>
          <td class="td-job"><?= $stage[$job['stage']] ?></td>
          <td class="td-job"><?= $job['day_applied'] ?></td>
          <td class="td-job"><?= $job['stacks'] ?></td>
          <td class="td-job">delete|edit</td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php else : ?>
  <h5 class="ubuntu-bold">No Jobs applied</h5>
<?php endif ?>