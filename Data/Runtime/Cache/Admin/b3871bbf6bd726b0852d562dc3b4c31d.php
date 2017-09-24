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
<script type="text/javascript">
	$(document).ready(function () {
		$('#nav_tabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show');
			});
	});
</script>       
    <div class="col-md-12 graphs">
	    <div class="xs">
	       <div class="bs-example4" data-example-id="contextual-table">
	       		<form action="<?php echo U('Setting/site_post');?>" method="post"  class="form-horizontal">	       		
	  	       <ul class="nav nav-tabs" role="tablist" id="nav_tabs">
					<li role="presentation" class="active"><a href="#A" aria-controls="A" role="tab" id="A-tab" data-toggle="tab" aria-expanded="true">网站信息</a></li>
					<li role="presentation"><a href="#B" aria-controls="B" role="tab" id="B-tab" data-toggle="tab" aria-expanded="false">SEO设置</a></li>
					<li role="presentation"><a href="#C" aria-controls="C" role="tab" id="C-tab" data-toggle="tab" aria-expanded="false">URL设置</a></li>
					<li role="presentation"><a href="#D" aria-controls="D" role="tab" id="D-tab" data-toggle="tab" aria-expanded="false">UCenter</a></li>
	  	       </ul>
	  	       <div id="tabContent" class="tab-content" >

	  	       		<div role="tabpanel" class="tab-pane fade in active" id="A" aria-labelledby="A-tab">

	  	       			<div class="form-group">
	  	       			 <input type="hidden" name="<?php echo ($oparr["web_site_title"]["name"]); ?>[id]" value="<?php echo ($oparr["web_site_title"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label "><?php echo ($oparr["web_site_title"]["title"]); ?></label>
						    <div class="col-sm-10">
						    	
						    	<input type="text" class="form-control1" id="exampleInputEmail1" name="<?php echo ($oparr["web_site_title"]["name"]); ?>[data]" placeholder="tpcms" value="<?php echo ($oparr["web_site_title"]["option_value"]); ?>">
						    </div>
						</div>

						<div class="form-group">
							<input type="hidden" name="<?php echo ($oparr["web_site_host"]["name"]); ?>[id]" value="<?php echo ($oparr["web_site_host"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label" > <?php echo ($oparr["web_site_host"]["title"]); ?> </label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control1" id="exampleInputEmail1" placeholder="http://www.tpcms.cms" name="<?php echo ($oparr["web_site_host"]["name"]); ?>[data]" value="<?php echo ($oparr["web_site_host"]["option_value"]); ?>">
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_mobile_tpl"]["name"]); ?>[id]" value="<?php echo ($oparr["web_mobile_tpl"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"> <?php echo ($oparr["web_mobile_tpl"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <input type="hidden" name="<?php echo ($oparr["web_mobile_tpl"]["name"]); ?>[data]" value="0" />
						    <input type="checkbox" name="<?php echo ($oparr["web_mobile_tpl"]["name"]); ?>[data]" <?php if(($oparr["web_mobile_tpl"]["option_value"]) == "1"): ?>checked<?php endif; ?> value="1">
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_muban"]["name"]); ?>[id]" value="<?php echo ($oparr["web_muban"]["id"]); ?>"> 
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"> <?php echo ($oparr["web_muban"]["title"]); ?></label>
						    <div class="col-sm-10 controls">
						    	<select class="form-control" name="<?php echo ($oparr["web_muban"]["name"]); ?>[data]">
						    		<?php if(is_array($oparr["web_muban"]["extra"])): $i = 0; $__LIST__ = $oparr["web_muban"]["extra"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$muban_ul): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if(($oparr["web_muban"]["option_value"]) == $key): ?>selected<?php endif; ?> ><?php echo ($muban_ul); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							        
							    </select>
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_site_icp"]["name"]); ?>[id]" value="<?php echo ($oparr["web_site_icp"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"><?php echo ($oparr["web_site_icp"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control1" id="exampleInputEmail1" placeholder="鄂12-4663215" name="<?php echo ($oparr["web_site_icp"]["name"]); ?>[data]" value="<?php echo ($oparr["web_site_icp"]["option_value"]); ?>">
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_site_email"]["name"]); ?>[id]" value="<?php echo ($oparr["web_site_email"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"><?php echo ($oparr["web_site_email"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control1" id="exampleInputEmail1" placeholder="鄂12-4663215" name="<?php echo ($oparr["web_site_email"]["name"]); ?>[data]" value="<?php echo ($oparr["web_site_email"]["option_value"]); ?>">
						    </div>
						</div>
						
						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_site_tongji"]["name"]); ?>[id]" value="<?php echo ($oparr["web_site_tongji"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"><?php echo ($oparr["web_site_tongji"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <textarea class="form-control1" rows="3" name="<?php echo ($oparr["web_site_tongji"]["name"]); ?>[data]"><?php echo ($oparr["web_site_tongji"]["option_value"]); ?></textarea>
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_site_close"]["name"]); ?>[id]" value="<?php echo ($oparr["web_site_close"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"><?php echo ($oparr["web_site_close"]["title"]); ?></label>
						    <div class="col-sm-10">
						    	<input  type="hidden" name="<?php echo ($oparr["web_site_close"]["name"]); ?>[data]" value="0"/>
						    	<input  type="checkbox" name="<?php echo ($oparr["web_site_close"]["name"]); ?>[data]" <?php if(($oparr["web_site_close"]["option_value"]) == "1"): ?>checked<?php endif; ?> value="1">
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_allow_register"]["name"]); ?>[id]" value="<?php echo ($oparr["web_allow_register"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"><?php echo ($oparr["web_allow_register"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <input type="hidden" name="<?php echo ($oparr["web_allow_register"]["name"]); ?>[data]" value="0" />
						    	<input type="checkbox" name="<?php echo ($oparr["web_allow_register"]["name"]); ?>[data]" <?php if(($oparr["web_allow_register"]["option_value"]) == "1"): ?>checked<?php endif; ?> value="1">
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_site_copyright"]["name"]); ?>[id]" value="<?php echo ($oparr["web_site_copyright"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"> <?php echo ($oparr["web_site_copyright"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <textarea class="form-control1" rows="3" name="<?php echo ($oparr["web_site_copyright"]["name"]); ?>[data]">  <?php echo ($oparr["web_site_copyright"]["option_value"]); ?></textarea>
						    </div>
						</div>					
	  	       		</div>


	  	       		<div role="tabpanel" class="tab-pane fade" id="B"  aria-labelledby="B-tab">
	  	       			<div class="form-group">
	  	       			<input type="hidden" name="<?php echo ($oparr["web_seo_title"]["name"]); ?>[id]" value="<?php echo ($oparr["web_seo_title"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"> <?php echo ($oparr["web_seo_title"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control1" id="exampleInputEmail1" placeholder="tpcms" name="<?php echo ($oparr["web_seo_title"]["name"]); ?>[data]" value="<?php echo ($oparr["web_seo_title"]["option_value"]); ?>">
						    </div>
						</div>

						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_seo_keyword"]["name"]); ?>[id]" value="<?php echo ($oparr["web_seo_keyword"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label" ><?php echo ($oparr["web_seo_keyword"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control1" id="exampleInputEmail1" placeholder="http://www.tpcms.cms" name="<?php echo ($oparr["web_seo_keyword"]["name"]); ?>[data]" value="<?php echo ($oparr["web_seo_keyword"]["option_value"]); ?>">
						    </div>
						</div>
						<div class="form-group">
						<input type="hidden" name="<?php echo ($oparr["web_seo_description"]["name"]); ?>[id]" value="<?php echo ($oparr["web_seo_description"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"> <?php echo ($oparr["web_seo_description"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <textarea class="form-control1" rows="3" name="<?php echo ($oparr["web_seo_description"]["name"]); ?>[data]"><?php echo ($oparr["web_seo_description"]["option_value"]); ?></textarea>
						    </div>
						</div>
	  	       		</div>
	  	       		<div role="tabpanel" class="tab-pane fade" id="C"  aria-labelledby="C-tab">
	  	       			<div class="form-group">
	  	       			<input type="hidden" name="<?php echo ($oparr["web_url_mode"]["name"]); ?>[id]" value="<?php echo ($oparr["web_url_mode"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"><?php echo ($oparr["web_url_mode"]["title"]); ?></label>
						    <div class="col-sm-10">
						    	<select id="disabledSelect" class="form-control" name="<?php echo ($oparr["web_url_mode"]["name"]); ?>[data]">
						    		<?php if(is_array($oparr["web_url_mode"]["extra"])): $i = 0; $__LIST__ = $oparr["web_url_mode"]["extra"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$url_mode): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if(($oparr["web_url_mode"]["option_value"]) == $key): ?>selected<?php endif; ?> > <?php echo ($url_mode); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							        <!-- <option>普通模式</option>
							        <option>PATHINFO模式</option>
							        <option>REWRITE模式</option> -->
							    </select>
						    </div>
						</div>
	  	       			<div class="form-group">
	  	       			<input type="hidden" name="<?php echo ($oparr["web_html_suffix"]["name"]); ?>[id]" value="<?php echo ($oparr["web_html_suffix"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label" ><?php echo ($oparr["web_html_suffix"]["title"]); ?></label>
						    <div class="col-sm-10">
						    <input type="text" class="form-control1" id="exampleInputEmail1" placeholder="http://www.tpcms.cms" name="<?php echo ($oparr["web_html_suffix"]["name"]); ?>[data]" value="<?php echo ($oparr["web_html_suffix"]["option_value"]); ?>">
						    </div>
						</div>
						
	  	       		</div>
	  	       		<div role="tabpanel" class="tab-pane fade" id="D"  aria-labelledby="D-tab">
	  	       			<div class="form-group">
	  	       			<input type="hidden" name="<?php echo ($oparr["web_ucenter"]["name"]); ?>[id]" value="<?php echo ($oparr["web_ucenter"]["id"]); ?>">
						    <label for="exampleInputEmail1" class="col-sm-2 control-label"><?php echo ($oparr["web_ucenter"]["title"]); ?></label>
						    <div class="col-sm-10">
						    	<input type="hidden" name="<?php echo ($oparr["web_ucenter"]["name"]); ?>[data]" value="0" />
						    	<input type="checkbox" name="<?php echo ($oparr["web_ucenter"]["name"]); ?>[data]" <?php if(($oparr["web_ucenter"]["option_value"]) == "1"): ?>checked<?php endif; ?> value="1" >
						    </div>
						</div>
	  	       		</div>
	  	       </div>
			   
			   <div class="col-md-12">
			   		<button type="submit" class="btn btn-primary">提交</button>
			   		<button type="submit" class="btn btn-primary">返回</button>
			   </div>
	  	       </form>
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