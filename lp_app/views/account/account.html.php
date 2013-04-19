<?php 
$user = $this->ion_auth->user()->row();
if (!$this->ion_auth->logged_in()){ die('Please login');}
$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $user->email ) ) ) . "?s=80";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <!-- Use title if it's in the page YAML frontmatter -->
  <title>PageN[X] Account management</title>

  <link href="<?php echo base_url();?>css/account.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,800">
  <script src="<?php echo base_url();?>js/account.js" type="text/javascript"></script>
  <link href="http://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!-- there's an IE separated stylesheet with the following resets for IE -->
  <!--[if lte IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="<?php echo base_url();?>js/html5shiv.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>js/excanvas.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>js/ie_fix.js" type="text/javascript"></script>
        <link href="<?php echo base_url();?>css/ie_fix.css" media="screen" rel="stylesheet" type="text/css" />
  <![endif]-->
</head>

<body>
<nav id="primary" class="main-nav collapsible-nav">
  <!-- Brand -->
  <a id="sidebar-brand" href="#">
    PageN<span style="color:#D62E2E; font-size:29px">[</span>X<span style="color:#D62E2E; font-size:29px">]</span><span style="font-size:11px;">BETA</span>
  </a>
  <button type="button" class="btn btn-navbar btn-inverse" data-toggle="collapse" data-target=".nav-collapse">
    <i class="icon-reorder"></i>
  </button>

  <ul class="nav-collapse collapse">

  <!-- Profile -->
    <li class="profile">
      <a href="#profile-opts" class="accordion-toggle" data-toggle="collapse">
         <img class="avatar" src="<?php echo $grav_url;?>">
          <span class="text" id="profile-text">
            <?php echo $user->username;?> <b class="caret"></b>
          </span>
      </a>

      <ul id="profile-opts" class="collapse secondary">
        <li class="">
          <a href="Settings">
            Settings
          </a>
        </li>
        <li class="">
          <a href="change_password">
            Change password
          </a>
        </li>
        <li class="">
          <a href="auth/logout">
            Logout
          </a>
        </li>
      </ul>
    </li>

    <!-- Dashboard -->
    <li class="">
      <a href="account">
          <span class="icon">
            <i class="iconx-dashboard"></i>
          </span>
          <span class="text">
            Dashboard
          </span>
      </a>
    </li>

    <!-- Components -->
    <li class="">
      <a href="#components-list" class="accordion-toggle" data-toggle="collapse">
          <span class="icon">
            <i class="iconx-pages"></i>
          </span>
          <span class="text">
            Landing Pages
          </span>
      </a>

      <!--<ul id="components-list" class="collapse secondary">
        <li class="">
          <a href="pages/components/buttons.html">
              Buttons
          </a>
        </li>
        <li class="">
          <a href="pages/components/forms.html">
              Forms
          </a>
        </li>
        <li class="">
          <a href="pages/components/elements.html">
              Elements
          </a>
        </li>
        <li class="">
          <a href="pages/components/widgets.html">
              Widgets
          </a>
        </li>
        <li class="">
          <a href="pages/components/charts.html">
              Charts
          </a>
        </li>
        <li class="">
          <a href="pages/components/tables.html">
              Tables
          </a>
        </li>
        <li class="">
          <a href="pages/components/grid.html">
              Grid
          </a>
        </li>
      </ul>-->
    </li>

    <!-- Sample pages -->
    <li class="">
      <a href="#sample-pages" class="accordion-toggle" data-toggle="collapse">
          <span class="icon">
            <i class="iconx-mail"></i>
          </span>
          <span class="text">
            Messages
          </span>
       </a>
    </li>
    <li class="">
      <a href="#extras" class="accordion-toggle" data-toggle="collapse">
          <span class="icon">
            <i class="iconx-globe"></i>
          </span>
          <span class="text" style="line-height:14px; margin-top:6px;">
            Campaign Optimizers <b class="caret" style="margin-top:1px; margin-left:7px;"></b>
          </span>
      </a>

      <ul id="extras" class="collapse secondary">
        <li class="">
          <a href="pages/extras/fullcalendar.html">
              Fullcalendar
          </a>
        </li>
        <li class="">
          <a href="pages/extras/icons.html">
              Icons
          </a>
        </li>
        <li class="">
          <a href="pages/extras/world-map.html">
              World map
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav><div class="top-bar">
	<a id="topbar-brand" class="brand" href="#">PageN<span style="color:#D62E2E; font-size:29px">[</span>X<span style="color:#D62E2E; font-size:29px">]</span><span style="font-size:11px;">BETA</span></a>
  <ul class="top-notifications">
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        Messages  <span class="badge dark-blue">3</span>
      </a>
      <ul id="messages" class="dropdown-menu top-bar-list">
        <li><a>New message</a></li>
        <li><a>Inbox <span class="count">(8)</span></a></li>
        <li><a>Sent</a></li>
        <li><a>Drafts</a></li>
      </ul>

    </li>

    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        Orders  <span class="badge dark-plum">45</span>
      </a>
      <ul id="orders" class="dropdown-menu top-bar-list">
        <li><a>New orders <span class="count">(6)</span></a></li>
        <li><a>Refunds</a></li>
        <li><a>History</a></li>
      </ul>
    </li>
  </ul>
</div>
<section id="main">
  <div class="row-fluid">
  <div class="span12">

    <hr class="main">
    <ul class="breadcrumbs">
      <li>
        <a class="crumb" href="#">Dashboard</a>
      </li>
    </ul>
    <hr class="main">
  </div>
</div>

  <div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">

      <div class="box bordered">
        <div class="box inner light-gray">
          <div class="row-fluid padded10">

  <div class="span2 center">
    <div class="stat-box medium-blue">
      <i class="icon-group icon-large"></i>
      <span class="count">134</span>
      <span class="stat-text">Users</span>
    </div>
  </div>

  <div class="span2 center">
    <div class="stat-box dark-blue">
      <i class="icon-bell icon-large"></i>
      <span class="count">23</span>
      <span class="stat-text">Events</span>
    </div>
  </div>

  <div class="span2 center">
    <div class="stat-box border-blue">
      <i class="icon-umbrella icon-large"></i>
      <span class="count">220</span>
      <span class="stat-text">Requests</span>
    </div>
  </div>

  <div class="span2 center">
    <div class="stat-box text-blue">
      <i class="icon-hand-right icon-large"></i>
      <span class="count">204</span>
      <span class="stat-text">Orders</span>
    </div>
  </div>

  <div class="span2 center">
    <div class="stat-box dark-blue">
      <i class="icon-envelope icon-large"></i>
      <span class="count">32</span>
      <span class="stat-text">Messages</span>
    </div>
  </div>

  <div class="span2 center">
    <div class="stat-box medium-blue">
      <i class="icon-comments-alt icon-large"></i>
      <span class="count">65</span>
      <span class="stat-text">Comments</span>
    </div>
  </div>

</div>
        </div>

        <div class="row-fluid">
          <div class="span7">
            <div class="padded">
              <div class="section-title">Audience overview</div>
              <div class="chart" id="site-visits" style="width: 100%; height: 330px;"></div>
            </div>
          </div>

          <div class="span5">
            <div class="padded">
              <div class="section-title">Traffic type</div>
              <div class="chart" id="traffic-type-chart" style="width: 100%; height: 300px;"></div>
            </div>
          </div>
        </div>

        <div class="row-fluid">
          <div class="span6">
            <div class="padded">
              <div class="section-title">Visits</div>
                  <ul class="audience-alt">
                      <li>
                        <div class="icon">
                          <div class="big-label medium-blue text-inverse">
                            <i class="icon-lightbulb"></i>
                          </div>
                        </div>
                    
                        <div class="value">504</div>
                        <div class="stat-name">Visitors</div>
                    
                        <div class="percent">(+30%)</div>
                        <div class="progress-bar audience-progress">
                          <div class="progress progress-medium-blue">
                            <div class="bar" style="width: 30%"></div>
                          </div>
                        </div>
                      </li>
                    
                      <li>
                        <div class="icon">
                          <div class="big-label dark-blue text-inverse">
                            <i class="icon-star"></i>
                          </div>
                        </div>
                        <div class="value">439</div>
                        <div class="stat-name">Visits</div>
                    
                        <div class="percent">(+61%)</div>
                        <div class="progress-bar audience-progress">
                          <div class="progress progress-dark-blue">
                            <div class="bar" style="width: 61%"></div>
                          </div>
                        </div>
                      </li>
                    
                      <li>
                        <div class="icon">
                          <div class="big-label light-blue">
                            <i class="icon-eye-open"></i>
                          </div>
                        </div>
                        <div class="value">988</div>
                        <div class="stat-name">Page views</div>
                    
                        <div class="percent">(+44%)</div>
                        <div class="progress-bar audience-progress">
                          <div class="progress progress-light-blue">
                            <div class="bar" style="width: 44%"></div>
                          </div>
                        </div>
                      </li>
                    
                      <li>
                        <div class="icon">
                          <div class="big-label dark-plum text-inverse">
                            <i class="icon-heart"></i>
                          </div>
                        </div>
                        <div class="value">39</div>
                        <div class="stat-name">Likes</div>
                    
                        <div class="percent">(+12%)</div>
                        <div class="progress-bar audience-progress">
                          <div class="progress progress-dark-plum">
                            <div class="bar" style="width: 12%"></div>
                          </div>
                        </div>
                      </li>
                    
                      <li>
                        <div class="icon">
                          <div class="big-label text-blue text-inverse">
                            <i class="icon-comment"></i>
                          </div>
                        </div>
                        <div class="value">18</div>
                        <div class="stat-name">Comments</div>
                    
                        <div class="percent">(+78%)</div>
                        <div class="progress-bar audience-progress">
                          <div class="progress progress-text-blue">
                            <div class="bar" style="width: 78%"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
            </div>
          </div>

          <div class="span6">
            <div class="padded">
              <div class="section-title">Countries</div>
              <table class="table">
                  <thead>
                  <tr>
                    <th>(check)</th>
                    <th>Country</th>
                    <th>Visits</th>
                    <th>Pageviews</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <label class="checkbox">
                        <input type="checkbox" value="">
                      </label>
                    </td>
                    <td style="line-height: 24px;">
                      <span class="flag">
                        <img src="images/flags/Sweden.png" />
                      </span>
                      Sweden
                    </td>
                    <td>3845</td>
                    <td>5.55</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox">
                        <input type="checkbox" value="">
                      </label>
                    </td>
                    <td style="line-height: 24px;">
                      <span class="flag">
                        <img src="images/flags/Romania.png" />
                      </span>
                      Romania
                    </td>
                    <td>2887</td>
                    <td>4.29</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox">
                        <input type="checkbox" value="">
                      </label>
                    </td>
                    <td style="line-height: 24px;">
                      <span class="flag">
                        <img src="images/flags/Italy.png" />
                      </span>
                      Italy
                    </td>
                    <td>2411</td>
                    <td>4.11</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox">
                        <input type="checkbox" value="">
                      </label>
                    </td>
                    <td style="line-height: 24px;">
                      <span class="flag">
                        <img src="images/flags/Germany.png" />
                      </span>
                      Germany
                    </td>
                    <td>1996</td>
                    <td>3.69</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox">
                        <input type="checkbox" value="">
                      </label>
                    </td>
                    <td style="line-height: 24px;">
                      <span class="flag">
                        <img src="images/flags/Spain.png" />
                      </span>
                      Spain
                    </td>
                    <td>1685</td>
                    <td>3.08</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox">
                        <input type="checkbox" value="">
                      </label>
                    </td>
                    <td style="line-height: 24px;">
                      <span class="flag">
                        <img src="images/flags/Finland.png" />
                      </span>
                      Finland
                    </td>
                    <td>1054</td>
                    <td>2.88</td>
                  </tr>
                  </tbody>
                
                  <tfoot>
                  <tr>
                    <td colspan="6">
                      <div class="pagination blue-pag light-theme blue-theme pull-right">
                        <ul>
                          <li><a href="#">«</a></li>
                          <li><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li class="disabled"><a href="#">...</a></li>
                          <li><a href="#">9</a></li>
                          <li><a href="#">»</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  </tfoot>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">

      <div class="box footer">
        <div class="copyright text-transparent center">
          <div>2013 &copy; PageN[X]</div>
          <div>All rights reserved</div>
        </div>
      </div>
    </div>
  </div>
</div>

</section>

</body>
</html>