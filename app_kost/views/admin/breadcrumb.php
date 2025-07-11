<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?page=admin&menu=dashboard">Dashboard</a></li>
    <?php if (!empty($breadcrumb)) foreach ($breadcrumb as $item): ?>
      <li class="breadcrumb-item<?= $item['active'] ? ' active' : '' ?>">
        <?php if (!$item['active']): ?><a href="<?= $item['url'] ?>"><?= $item['label'] ?></a>
        <?php else: ?><?= $item['label'] ?><?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav> 