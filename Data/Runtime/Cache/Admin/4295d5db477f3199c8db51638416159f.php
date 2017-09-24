<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/Public/Admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/Public/Admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- jQuery -->
<script src="/Public/Admin/js/jquery.min.js"></script>



</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
      <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">后台管理中心</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/Public/Admin/images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/Public/Admin/images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/Public/Admin/images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/Public/Admin/images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/Public/Admin/images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/Public/Admin/images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/Public/Admin/images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="<?php echo U('Public/layout');?>"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
    <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a href="<?php echo ($vo["url"]); ?>"><i class="fa <?php echo ($vo["icon"]); ?> nav_icon  "></i><?php echo ($vo["name"]); ?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U($vos['url']);?>"><?php echo ($vos['name']); ?> <span class="fa arrow"></span></a>
                    <?php if(!empty($vos['child'])): ?><ul class="nav nav-third-level">
                        <?php if(is_array($vos['child'])): $i = 0; $__LIST__ = $vos['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voc): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($voc['url']);?>"><?php echo ($voc["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul><?php endif; ?>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>            
            </ul>
            <!-- /.nav-second-level -->
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    
  
</ul>
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
	<div id="page-wrapper">
        
        	
<link href="/Public/Admin/css/font-awesome.css" rel="stylesheet"> 
<div class="col-md-12 graphs">
	 <div class="xs">
  	 <h3>Basic Tables</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
      <ul class="nav nav-tabs" role="tablist" id="nav_tabs">
          <li class="active"><a href="" >管理员</a></li>
          <li><a href="<?php echo U('User/add');?>">添加管理员</a></li>
      </ul>
    <div class="tab-content">      
        <table class="table table-striped">
          <thead>
            <tr>
              <th>全选</th>
              <th scope="row">#</th>
              <th>用户名</th>          
              <th>最后登录IP</th>
              <th>最后登录时间</th> 
              <th>邮箱</th>
              <th>状态</th>          
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php if(is_array($members)): $ids = 0; $__LIST__ = $members;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($ids % 2 );++$ids;?><tr>
              <th scope="row"><input type="checkbox" id="checkboxSuccess" value="<?php echo ($vo["id"]); ?>"></th>
              <th scope="row"><?php echo ($ids); ?></th>
              <th><?php echo ($vo["username"]); ?></th>
              <td><?php echo ($vo["last_login_ip"]); ?></td>
              <td><?php echo ($vo["last_login_time"]); ?></td>
              <td><?php echo ($vo["user_email"]); ?></td>          
              <td><?php if(($vo["status"]) == "1"): ?><font color="red">√</font><?php else: ?><font color="red">╳</font><?php endif; ?></td>
              <td>
                <a href="<?php echo U('User/edit',array('id'=>$vo['id']));?>" role="button" class="btn btn-warning btn-xs" <?php if(($vo['id']) == "1"): ?>disabled<?php endif; ?> >编辑</a>
                <a href="<?php echo U('User/del_user?id='.$vo['id']);?>" role="button" class="btn btn-success btn-xs" <?php if(($vo['id']) == "1"): ?>disabled<?php endif; ?> >删除</a>
                <a href="<?php echo U('User/ban?id='.$vo['id']);?>" role="button" class="btn btn-success btn-xs" <?php if(($vo['id']) == "1"): ?>disabled<?php endif; ?> >禁用</a>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
          </tbody>
        </table>
        
    </div>
    
   </div>
  
  </div>
  </div>
 <div class="copy">
            <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.lingshiwl.com/" target="_blank" title="凌石">凌石</a> - Collect from <a href="http://www.lingshiwl.com/" title="凌石" target="_blank">凌石</a></p>
	    </div>
       
</div>


        	
    </div>
</div>
    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <!-- Nav CSS -->
    <link href="/Public/Admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/Admin/js/metisMenu.min.js"></script>
    <script src="/Public/Admin/js/custom.js"></script>
</body>
</html>