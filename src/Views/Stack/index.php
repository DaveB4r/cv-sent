<h1 class="ubuntu-bold">Stacks</h1>
<?php if ($stacks->rowCount() > 0) : ?>
  <table class="table table-stripped table-bordered w-100">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($stacks->fetchAll(PDO::FETCH_ASSOC) as $stack): ?>
        <tr>
          <td><?= $stack["id"] ?></td>
          <td><?= $stack["name"] ?></td>
          <td>
            <button type="button" class="btn btn-outline-info">Edit</button>
            <button type="button" class="btn btn-outline-danger">Delete</button>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php else : ?>
  <h5 class="ubuntu-light">No data</h5>
<?php endif ?>