<!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin/dashboard"><?php echo $website; ?> Admin</a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $username; ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="" target="_blank"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="admin/dashboard"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span> Products</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="admin/addproduct"><i class="glyphicon glyphicon-pencil"></i><span> Add Product</span></a></li>
                                <li><a href="admin/manageproduct"><i class="glyphicon glyphicon-edit"></i><span> Manage Products</span></a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="admin/categories"><i class="glyphicon glyphicon-pushpin"></i><span> Categories</span></a>
                        </li>
                        <li><a class="ajax-link" href="admin/orders"><i
                                    class="glyphicon glyphicon-list"></i><span> Orders</span></a></li>
                                    <li><a class="ajax-link" href="admin/customers"><i
                                    class="glyphicon glyphicon-user"></i><span> Customers</span></a></li>
                                    <li><a class="ajax-link" href="admin/payment_credentials"><i
                                    class="glyphicon glyphicon-book"></i><span> Payment Credentials</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-leaf"></i><span> Pages</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="admin/about"><i class="glyphicon glyphicon-pencil"></i><span> About</span></a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="admin/messages"><i
                                    class="glyphicon glyphicon-envelope"></i><span> Messages</span></a></li>
                        <li><a class="ajax-link" href="admin/subscribers"><i
                                    class="glyphicon glyphicon-user"></i><span> Subscriber List</span></a></li>
                        <li><a class="ajax-link" href="admin/seo"><i
                                    class="glyphicon glyphicon-magnet"></i><span> SEO</span></a></li>
                        <li><a class="ajax-link" href="admin/siteconf"><i class="glyphicon glyphicon-cog"></i><span> Site Configurations</span></a>
                        </li>
                        <li><a class="ajax-link" href="admin/changepassword"><i class="glyphicon glyphicon-asterisk"></i><span> Change Password</span></a>
                        </li>
                        </ul>
               
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->