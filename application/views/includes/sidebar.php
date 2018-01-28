<html>
<head>
<style>
    /*
 * Base structure
 */

    /* Move down content because we have a fixed navbar that is 50px tall */
    body {
        padding-top: 50px;
    }


    /*
     * Global add-ons
     */

    .sub-header {
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    /*
     * Top navigation
     * Hide default border to remove 1px line.
     */
    .navbar-fixed-top {
        border: 0;
    }

    /*
     * Sidebar
     */

    /* Hide for mobile, show later */
    .sidebar {
        display: none;
    }
    @media (min-width: 768px) {
        .sidebar {
            position: fixed;
            top: 51px;
            bottom: 0;
            left: 0;
            z-index: 1000;
            display: block;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
            background-color: #f5f5f5;
            border-right: 1px solid #eee;
            font-size: 16px;
        }
    }

    /* Sidebar navigation */
    .nav-sidebar {
        margin-right: -21px; /* 20px padding + 1px border */
        margin-bottom: 20px;
        margin-left: -20px;
    }
    .nav-sidebar > li > a {
        padding-right: 20px;
        padding-left: 20px;
    }
    .nav-sidebar > .active > a,
    .nav-sidebar > .active > a:hover,
    .nav-sidebar > .active > a:focus {
        color: #fff;
        background-color: #428bca;
    }


    /*
     * Main content
     */

    .main {
        padding: 20px;
    }
    @media (min-width: 768px) {
        .main {
            padding-right: 40px;
            padding-left: 40px;
        }
    }
    .main .page-header {
        margin-top: 0;
    }


    /*
     * Placeholder dashboard ideas
     */

    .placeholders {
        margin-bottom: 30px;
        text-align: center;
    }
    .placeholders h4 {
        margin-bottom: 0;
    }
    .placeholder {
        margin-bottom: 20px;
    }
    .placeholder img {
        display: inline-block;
        border-radius: 50%;
    }
    .sidebar-nav li:first-child a {
        color: #fff;
        background-color: #1a1a1a;
    }
    .sidebar-nav li:nth-child(2):before {
        background-color: #ec1b5a;
    }
    .sidebar-nav li:nth-child(3):before {
        background-color: #79aefe;
    }
    .sidebar-nav li:nth-child(4):before {
        background-color: #314190;
    }
    .sidebar-nav li:nth-child(5):before {
        background-color: #279636;
    }
    .sidebar-nav li:nth-child(6):before {
        background-color: #7d5d81;
    }
    .sidebar-nav li:nth-child(7):before {
        background-color: #ead24c;
    }
    .sidebar-nav li:nth-child(8):before {
        background-color: #2d2366;
    }
    .sidebar-nav li:nth-child(9):before {
        background-color: #35acdf;
    }
</style>
</head>
<body>
<div class="container-fluid">


    <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar" style="background-color: white">
                <li><a href="<?php echo base_url('index.php/Admin/itemtype')?>">Add New Item Type</a></li>
<!--                <li><a href="#">Add New Item </a></li>-->
            </ul>



            <ul class="nav nav-sidebar">
                <li class="active"><a href="<?php echo base_url('index.php/Admin')?>">All<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url('index.php/Admin/ViewCement')?>">Cement</a></li>
                <li><a href="#">PVC Items</a></li>
                <li><a href="#">Nails</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hardware Items <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Concrete Nails</a></li>
                        <li><a href="">Nut and Bolts</a></li>
                        <li><a href="#">Door Lock/Hingers/Pad Locks</a></li>
                        <li><a href="">Nut and Bolts</a></li>
                    </ul>
                </li>

                <li><a href="">Paint Items</a></li>
                <li><a href="">Electric Items</a></li>
                <li><a href="<?php echo base_url('index.php/Admin/Viewhousehold')?>">Household Items</a></li>
                <li><a href="">Carpenter Items</a></li>
                <li><a href="">Other Items</a></li>
            </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        </div>

        <?php
        include 'footer.php'
        ?>
