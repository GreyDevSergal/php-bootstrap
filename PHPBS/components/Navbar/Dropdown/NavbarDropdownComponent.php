<li class="nav-item dropdown <?= ($params['active']) ? 'active' : '' ?>">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?= $params['content'] ?>
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
  <?php foreach($children as $child): ?>
    <?= $child ?>
  <?php endforeach; ?>
  </div>
</li>