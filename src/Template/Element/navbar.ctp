<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->Url->build(APP_DEFAULT_HOME); ?>"><?= APP_NAME ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $this->Url->build('/lms/lms-user'); ?>">Utenti</a></li>
                    <li><a href="<?php echo $this->Url->build('/lms/lms-enrollment'); ?>">Iscrizioni</a></li>
                    <li><a href="<?php echo $this->Url->build('/lms/lms-course'); ?>">Corsi</a></li>
                    <li><a href="<?php echo $this->Url->build('/lms/lms-product'); ?>">Prodotti</a></li>
                    <li><a href="<?php echo $this->Url->build('/content'); ?>">CMS</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-cog"></i> Sistema <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $this->Url->build('/'); ?>">System</a></li>
                            <li><a href="<?php echo $this->Url->build('/'); ?>">Content</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Builder plugins</li>
                            <li><a href="<?php echo $this->Url->build('/'); ?>">System</a></li>
                            <li><a href="<?php echo $this->Url->build('/'); ?>">Content</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <?= APP_USER_LABEL ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $this->Url->build('/system'); ?>">System</a></li>
                            <li><a href="<?php echo $this->Url->build('/content'); ?>">Content</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Builder plugins</li>
                            <li><a href="<?php echo $this->Url->build('/system'); ?>">System</a></li>
                            <li><a href="<?php echo $this->Url->build('/content'); ?>">Content</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $this->Url->build('/system/system/logout') ?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>