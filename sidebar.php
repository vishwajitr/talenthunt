<header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">☰</button>
            <a class="navbar-brand" href="#"></a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">☰</a>
                </li>

                <li class="nav-item px-1">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
            <ul class="nav navbar-nav float-xs-right hidden-md-down">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="hidden-md-down">admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <div class="dropdown-header text-xs-center">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    
                </li>

            </ul>
        </div>
    </header>

    <div class="sidebar">

        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>/dashboard.php"><i class="icon-speedometer"></i> Dashboard</a>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Hr Panel</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL;?>/edit_candidate.php" target="_top"><i class="icon-star"></i> Add Candidate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL;?>/candidate_data.php" target="_top"><i class="icon-star"></i> Candidate Data</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Manager's Panel</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL;?>/interview_schedule.php" target="_top"><i class="icon-star"></i> Candidate Data</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i>CTO Panel</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL;?>/candidate_data.php" target="_top"><i class="icon-star"></i> Candidate Data</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>


   
