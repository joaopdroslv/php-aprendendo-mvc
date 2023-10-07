<nav class="navbar navbar navbar-expand-lg navbar-inverse navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="https://fatecpp.edu.br" target="_blank">| <b>FATEC PP</b> |</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://<?php echo APP_HOST; ?>" >
                        <span class="glyphicon glyphicon-home"></span> Home</a>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://<?php echo APP_HOST; ?>/produto/produtos">
                        <span class="glyphicon glyphicon-th-list"></span> Produtos
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="nav-link" href="http://<?= APP_HOST.'/login' ?>">
                        <span class="glyphicon glyphicon-log-out"></span> Login</a>
                    </li>
                <?php } else { ?>
                    <div class="btn-group">
                        <li class="nav-item dropdown">
                            <button type="button" class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown">
                                 <span class="glyphicon glyphicon-user"></span>  
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">                               
                                <li><a class="dropdown-item" href="http://<?= APP_HOST.'/login/dashboard' ?>">Dashboard</a></li>
                                <li><a class="dropdown-item" href="http://<?= APP_HOST ?>/usuario">Usuários</a></li>                
                                <li><a class="dropdown-item" href="http://<?= APP_HOST ?>/produto">Produtos</a></li>
                                <li><a class="dropdown-item" href="http://<?= APP_HOST ?>/fornecedor">Fornecedores</a></li>               
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="http://<?= APP_HOST.'/login/logout' ?>">
                                    <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>