<?php if ($jobs->rowCount() > 0) : ?>
  <?php $stage = ["Rejected","Application sent", "First interview", "Second interview", "RH interview", "Technical interview", "Final interview", "Job obtained"] ?>
  <table class="table table-stripped table-bordered">
    <thead>
      <tr>
        <th>Company</th>
        <th>Platform</th>
        <th>Stage</th>
        <th>Day</th>
        <th>Stack</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($jobs->fetchAll(PDO::FETCH_ASSOC) as $job): ?>
        <tr>
          <td><?= $job['company'] ?></td>
          <td><?= $job['platform_name'] ?></td>
          <td><?= $stage[$job['stage']] ?></td>
          <td><?= $job['day_applied'] ?></td>
          <td><?= $job['stacks'] ?></td>
          <td>delete|edit</td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php else : ?>
  <h5 class="ubuntu-bold">No Jobs applied</h5>
<?php endif ?>