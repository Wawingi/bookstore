            <!-- ========== Inicio Menu Lateral ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Home</li>

                            <li>
                                <a href="../dashboard/index.php" class="waves-effect waves-primary"><i class="ti-home"></i><span> Home Page </span></a>
                            </li>
                            
                            
                                <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="fa fa-cogs"></i> <span> Administration </span>
                                            <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled">
                                                <li><a href="../books/">Add Book</a></li>
                                                <li><a href="../import/">Import Books</a></li>                                                               
                                            </ul>
                                </li>
                           
                                <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="fa fa-bar-chart-o"></i>
                                    <span> Statistic </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="../static?operation=<?php echo base64_encode('static') ?>">General</a></li>
                                    <li><a href="../books/consulta.php">Consultar </a></li>                                
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Fim menu lateral -->