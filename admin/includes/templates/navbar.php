<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><?php echo lang('Home_ADMIN')?></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang('CATEGORIES')?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang('ITEMS')?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang('MEMBERS')?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang('STATISTICS')?></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><?php echo lang('LOGS')?></a></li>
        
        <li class="nav-item">
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blaze
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="members.php?do=Edit&userid=<?php echo $_SESSION['ID']?>">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Signout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>