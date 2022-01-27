<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<br>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="?page=main-menu" class="nav-link <?php if($page_url_for_tab=='main-menu'):?> <?php echo 'active';?> <?php endif; ?>">Management</a>
  </li>
  <li class="nav-item">
    <a href="?page=first-submenu" class="nav-link <?php if($page_url_for_tab=="first-submenu"):?> <?php echo 'active';?> <?php endif; ?>">Bad User</a>
  </li>
</ul>
