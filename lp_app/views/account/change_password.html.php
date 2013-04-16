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

      <ul id="profile-opts" class=" secondary">
        <li class="">
          <a href="Settings">
            Settings
          </a>
        </li>
        <li class="">
          <a href="#" class="active">
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
  <div class="row-fluid box">
    <div class="span6">
        <div class="padded">
          <div class="section-title">
            Password Reset
          </div>
          <div class="vpadded">
            <form action="http://127.0.0.1/landingpage/landingpage.git/index.php/auth/change_password" method="post" accept-charset="utf-8">
                <div class="input full-width">
                  <label for="old">Old Password:</label>
                  <input type="password" name="old" value="" id="old">
                </div>
                <div class="input full-width">
                  <label for="new">New Password (at least 8 characters long):</label>
                  <input type="password" name="new" value="" id="new" pattern="^.{8}.*$">
                </div>
                <div class="input full-width">
                  <label for="new_confirm">Confirm New Password:</label>
                  <input type="password" name="new_confirm" value="" id="new_confirm" pattern="^.{8}.*$">
                </div>
                <div class="input full-width">
                  <input type="submit" name="submit" value="Change">
                </div>
                  <input type="hidden" name="user_id" value="24" id="user_id">  
            
            </form>              
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