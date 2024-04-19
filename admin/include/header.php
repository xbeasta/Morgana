<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Morgana's</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="index.php?administrator"><i class="fa fa-user fa-fw"></i>  Accounts</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a></li>
                <li>
                    <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Post<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index.php?watercolor">Watercolor</a></li>
                        <li><a href="index.php?graphicsdesign">Graphics Design</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>