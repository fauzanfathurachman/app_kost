<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Admin Kost' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/app_kost/public/assets/css/admin.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <?php include __DIR__.'/admin/sidebar.php'; ?>
    <div class="flex-grow-1" style="margin-left:220px;min-height:100vh;">
        <div class="container-fluid py-3">
            <?php include __DIR__.'/admin/breadcrumb.php'; ?>
            <div id="spinnerContainer"></div>
            <?= $content ?? '' ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/app_kost/public/assets/js/admin.js"></script>
<script src="/app_kost/public/assets/js/form-validation.js"></script>
</body>
</html> 