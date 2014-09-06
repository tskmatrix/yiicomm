<?php
/* @var $this yii\web\View */

use backend\assets\IndexAsset;
use yii\helpers\Html;

$this->title = 'Yiicomm Admministration';

IndexAsset::register($this);
?>
<!-- Main content starts -->

<div class="content">


<div class="sidebar">
<!-- Sidebar
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidebar-inner">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#sidebar1" data-toggle="tab"><i class="fa fa-file"></i></a></li>
            <li><a href="#sidebar2" data-toggle="tab"><i class="fa fa-beaker"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="sidebar1">
                
                <ul class="navi">
                    <li class="divider">Main menu</li>

                    
                    <li class="current"><a href="index.html"><i class="fa fa-desktop"></i> Dashboard<span
                            class="label label-inverse">10</span></a></li>

                    
                    <li class="has_submenu">
                        <a href="#">
                            
                            <i class="fa fa-th"></i> Widgets
                            
                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
                        </a>

                        <ul>
                            <li><a href="widgets1.html">Widgets #1</a></li>
                            <li><a href="widgets2.html">Widgets #2</a></li>
                        </ul>
                    </li>

                    <li><a href="charts.html"><i class="fa fa-bar-chart"></i> Charts</a></li>

                    <li><a href="ui.html"><i class="fa fa-sitemap"></i> UI Elements</a></li>

                    <li class="has_submenu">
                        <a href="#">
                            <i class="fa fa-file-alt"></i> Pages #1
                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
                        </a>

                        <ul>
                            <li><a href="calendar.html">Calendar<span class="label label-inverse">6</span></a></li>
                            <li><a href="post.html">Make Post</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="statement.html">Statement</a></li>
                            <li><a href="error-log.html">Error Log</a></li>
                            <li><a href="support.html">Support</a></li>
                        </ul>
                    </li>

                    <li class="has_submenu">
                        <a href="#">
                            <i class="fa fa-file-alt"></i> Pages #2
                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
                        </a>

                        <ul>
                            <li><a href="error.html">Error</a></li>
                            <li><a href="gallery.html">Gallery<span class="label label-inverse">18</span></a></li>
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="profile.html">Profile</a></li>
                        </ul>
                    </li>

                    <li><a href="forms.html"><i class="fa fa-list"></i> Forms</a></li>

                    <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>

                    <li class="divider">More links here</li>
                </ul>
            </div>
            <div class="tab-pane" id="sidebar2">
                <div class="divider">Account Status</div>
                <ul class="today-datas">
                    
                    <li>
                        
                        <div class="pull-left"><span id="todayspark1s" class="spark"></span></div>
                        
                        <div class="datas-text text-stats pull-left">
                            <small>Visitors/Day</small>
                            12,000
                        </div>

                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        
                        <div class="pull-left"><span id="todayspark2s" class="spark"></span></div>
                        
                        <div class="datas-text text-stats pull-left">
                            <small>Impressions</small>
                            +98k
                        </div>

                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        
                        <div class="pull-left"><span id="todayspark3s" class="spark"></span></div>
                        
                        <div class="datas-text text-stats pull-left">
                            <small>Subscribers</small>
                            3,356
                        </div>

                        <div class="clearfix"></div>
                    </li>
                </ul>
                <div class="divider">Other stuff</div>
                <ul class="today-datas">
                    <li>
                        <div class="datas-icon circle red pull-left"><i class="fa fa-cog"></i></div>
                        
                        <div class="datas-text pull-left">+3,399
                            <small>Spam blocked</small>
                        </div>
                        <div class="up">
                            <i class="fa fa-caret-up"></i>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="datas-icon circle green pull-left"><i class="fa fa-envelope"></i></div>
                        
                        <div class="datas-text pull-left">-50
                            <small>Email sent</small>
                        </div>
                        <div class="down">
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="datas-icon circle teal pull-left"><i class="icon-group"></i></div>
                        
                        <div class="datas-text pull-left">30,000
                            <small>Members</small>
                        </div>

                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>

    </div> -->

</div> 

<!-- Sidebar ends -->

<!-- Main bar -->
<div class="mainbar">

<!-- Page heading -->
<div class="page-head">
    <!-- Page heading -->

    <!-- Breadcrumb -->
    <div class="bread-crumb">
        <a href="index.html">Home</a>
        <!-- Divider -->
        <i class="fa fa-angle-right"></i>
        <a href="#" class="bread-current">Dashboard</a>

        <div id="reportrange" class="pull-right hidden-xs">
            <span class="icon fa fa-calendar"></span>
            <span id="rangedate"><?= date('F j, Y', strtotime('-30 days')) . ' - ' . date('F j, Y'); ?></span><span class="caret"></span>
        </div>
    </div>

    <div class="head-text">
        <h2>Yiicomm Administration
            <!-- page meta -->
            <span class="page-meta">Make some money!</span>
        </h2>
    </div>
    <div class="clearfix"></div>

</div>
<!-- Page heading ends -->


<!-- Matter -->

<div class="matter">
<div class="container">

<!-- Today status. jQuery Sparkline plugin used. -->

<div class="row">
    <div class="col-md-12">
        <!-- List starts -->
        <ul class="today-datas text-center">

            <!-- List #1 -->
            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Visitors/Day</small>
                    120
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <!-- <div class="datas-icon circle red pull-left"><i class="icon-group"></i></div> -->
                <div class="datas-icon pull-left"><i class="fa fa-users"></i></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                	 <small>Customers</small>
                    <?= $custCount ?>
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark2" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Abandoned Cart<br/>Rate</small>
                    15.66%
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark3" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Total Profit/YTD</small>
                    <?php echo '22,000' //print_r($profitytd) ?>
                </div>

                <div class="clearfix"></div>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- List starts -->
        <ul class="today-datas text-center">

            <!-- List #1 -->
            <li class="stacked">
                <!-- Graph -->
                <!-- <div class="datas-icon circle red pull-left"><i class="icon-group"></i></div> -->
                <div class="datas-icon pull-left"><i class="fa fa-users"></i></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Visitors Online</small>
                    12
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <!-- <div class="datas-icon circle red pull-left"><i class="icon-group"></i></div> -->
                <div class="datas-icon pull-left"><i class="fa fa-cubes"></i></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Active Campaigns</small>
                    <?= $campaigncount ?>
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <!-- <div class="datas-icon circle red pull-left"><i class="icon-group"></i></div> -->
                <div class="datas-icon pull-left"><i class="fa fa-envelope-o"></i></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Queued Emails</small>
                    <?= $countQueued ?>
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <!-- <div class="datas-icon circle red pull-left"><i class="icon-group"></i></div> -->
                <div class="datas-icon pull-left"><i class="fa fa-bar-chart-o"></i></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Today's Profit</small>
                    <?php echo '2,000' //print_r($todayprofit) ?>
                </div>

                <div class="clearfix"></div>
            </li>
        </ul>
    </div>
</div>

<!-- Today status ends -->

<!-- jobs and chat -->
<!-- 
<div class="row">
<div class="col-md-6">
    <div class="widget wlightblue stacked">
        
        <div class="widget-head">
            <div class="pull-left">Jobs list</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-remove"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">
            
            
            <table class="table table-striped task">
                <tr>
                    <th class="task-check"></th>
                    <th class="task-name">Job Name</th>
                    <th class="task-status">Status</th>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Download some action movies
                    </td>
                    <td>
                        
                        <span class="label label-important">Delete</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Read Harry Potter VII Book
                    </td>
                    <td>
                        
                        <span class="label label-success">Completed</span>
                    </td>
                </tr>
                <tr>
                    <td>
                       
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Collect cash from friends for camp
                    </td>
                    <td>
                        
                        <span class="label label-success ">Completed</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Sleep till tomorrow everning
                    </td>
                    <td>
                        
                        <span class="label label-warning ">In progress</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Read Harry Potter VII Book
                    </td>
                    <td>
                        
                        <span class="label label-default ">Draft</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Collect cash from friends for camp
                    </td>
                    <td>
                        
                        <span class="label label-success ">Completed</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Sleep till tomorrow everning
                    </td>
                    <td>
                        
                        <span class="label label-warning ">In progress</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Collect cash from friends for camp
                    </td>
                    <td>
                        
                        <span class="label label-success ">Completed</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Sleep till tomorrow everning
                    </td>
                    <td>
                        
                        <span class="label label-warning ">In progress</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <input value="check1" type="checkbox">
                    </td>
                    <td>
                        
                        Read Harry Potter VII Book
                    </td>
                    <td>
                        
                        <span class="label label-default ">Draft</span>
                    </td>
                </tr>
            </table>

            <div class="clearfix"></div>


        </div>
    </div>
</div>
<div class="col-md-6">

    
    <div class="widget stacked">
        
        <div class="widget-head">
            <div class="pull-left">Chats</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-remove"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">
            
            <div class="padd">

                <ul class="chats">

                    
                    <li class="by-me">
                        
                        <div class="avatar pull-left">
                            <img src="img/user-55-1.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                            
                            <div class="chat-meta">Ashok <span class="pull-right">3 hours ago</span></div>
                            Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>

                   
                    <li class="by-other">
                        
                        <div class="avatar pull-right">
                            <img src="img/user-55.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                            
                            <div class="chat-meta">3 hours ago <span class="pull-right">Ravi</span></div>
                            Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>

                    <li class="by-me">
                        <div class="avatar pull-left">
                            <img src="img/user-55-1.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                            <div class="chat-meta">Ashok <span class="pull-right">4 hours ago</span></div>
                            Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus
                            adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>

                    <li class="by-other">
                        
                        <div class="avatar pull-right">
                            <img src="img/user-55.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                            
                            <div class="chat-meta">3 hours ago <span class="pull-right">Ravi</span></div>
                            Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus
                            adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li class="by-me">
                        
                        <div class="avatar pull-left">
                            <img src="img/user-55-1.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                            
                            <div class="chat-meta">Ashok <span class="pull-right">3 hours ago</span></div>
                            Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                            <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>


        
        <div class="widget-foot">

            
            <form class="form-inline no-margin">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type your message">
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>

        </div>

    </div>

</div>

</div> -->


<!--  

<div class="row">
    <div class="col-md-6">
        <div class="widget wlight shadowed borderless">
            <div class="widget-head">
                <div class="pull-left">Curve Chart</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-remove"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <div class="padd">

                    

                    <div id="curve-chart"></div>

                    <hr/>
                    
                    <div id="hoverdata">Mouse hovers at
                        (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></div>

                    

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">

        
        <div class="widget wlight shadowed borderless">
            
            <div class="widget-head">
                <div class="pull-left">Dashboard</div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-remove"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            
            <div class="widget-content">
                <div class="padd">

                    <!-- Bar chart (Blue color). jQuery Flot plugin used. -->
                    <div id="bar-chart"></div>


                </div>
            </div>
            

        </div>
    </div>

</div>
 -->

</div>
</div>

<!-- Matter ends -->

</div>

</div>
<!-- Content ends -->
