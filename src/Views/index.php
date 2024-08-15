<h1>Welcome</h1>
<ul>
  <?php foreach($journals as $journal): ?>
    <li><?= $journal->name ?>(<?= $journal->publishedYear ?>)</li>
  <?php endforeach ?>
  <a href="/logout">logout</a>
</ul>