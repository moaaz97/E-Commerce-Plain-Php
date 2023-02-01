<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="app-nav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><?php echo lang('CATEGORIES');?></a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><?php echo lang('ITEMS');?></a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><?php echo lang('MEMBERS');?></a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><?php echo lang('STATISTICS');?></a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><?php echo lang('LOGS');?></a></li>
            </ul>
            <div class="d-flex">
                <ul class="nav d-flex navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Moaaz</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>