
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Mentoris - <?=  ucfirst(str_replace("_"," " ,$this->request->params['controller']))?></title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->
                <?= $this->Html->css("bootstrap.min"); ?>
                <?= $this->Html->css("font-awesome.min"); ?>

		<!--[if IE 7]>
                  <?= $this->Html->css("font-awesome-ie7.min"); ?>
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->
                <?= $this->Html->css("ace-fonts.css"); ?>

		<!-- ace styles -->
                <?= $this->Html->css("ace.min"); ?>
                <?= $this->Html->css("ace-rtl.min"); ?>
                <?= $this->Html->css("ace-skins.min"); ?>

		<!--[if lte IE 8]>
                  <?= $this->Html->css("ace-ie.min"); ?>
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
                <?= $this->Html->script("ace-extra.min.js"); ?>
                
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
                <?= $this->Html->script("html5shiv.js"); ?>
                <?= $this->Html->script("respond.min.js"); ?>
		<![endif]-->
                
                <?= $this->Html->css("style_mentoris"); ?>
                
                
	</head>

	<body>
            <style type="text/css">
                .edit-sidebar-css{
                    position: relative !important;
                    z-index: 10 !important;
                    top: 0 !important;
                }
                .border-top-fcfcfc{
                    border-top: 1px solid #e5e5e5 !important;
                }
                .mentoris-nav-bar{
                    height: 145px !important;
                    background-color: #F9F9FA !important; 
                }
                .bar-purple-navbar{
                    height:5px;
                    background-color: #AA4671;
                    width: 100%;
                }
                .mentoris-image-log{
                    padding-left: 10%;
                    padding-top: 3%;
                }
            </style> 
            
		<div class="navbar navbar-default mentoris-nav-bar" id="navbar">
			
                    <div class="bar-purple-navbar">
                        
                    </div>
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
                                    
						<?= $this->Html->image('icon_mentoris.png',array('class'=>'mentoris-image-log'));?>
					
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
                                                                                <?= $this->Html->image("avatars/avatar4.png",array('class'=>'msg-photo','alt'=>"Bobs Avatar"));?>
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                                                <span class="user-info">
									<small>Bem vindo(a),</small>
									Vladimir
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar edit-sidebar-css" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					

					<ul class="nav nav-list">
						<li class="border-top-fcfcfc <?= ($thisController == 'home')? 'active':'' ?>">
                                                    <a  href="<?=$HOST?>home"> 
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Home </span>
							</a>
						</li>

						<li class=""> 
							<a href="#" class="dropdown-toggle">
								<i class="icon-barcode"></i>
								<span class="menu-text"> Contas </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" style="<?= (($thisController == 'contas_a_pagar') || ($thisController == 'contas_a_receber'))? 'display : block':'' ?>">
								<li class="<?= ($thisController == 'contas_a_pagar')? 'active':'' ?>">
									<a href="<?=$HOST?>contas_a_pagar">
										<i class="icon-double-angle-right"></i>
										Contas a pagar
									</a>
								</li>
                                                                
                                                                <li class="<?= ($thisController == 'contas_a_receber')? 'active':'' ?>">
									<a href="<?=$HOST?>contas_a_receber">
										<i class="icon-double-angle-right"></i>
										Contas a receber
									</a>
								</li>
								
							</ul>
						</li>

						<li class="<?= ($thisController == 'fluxo_de_caixa')? 'active':'' ?>">
							<a href="<?=$HOST?>fluxo_de_caixa" class="dropdown-toggle">
								<i class="icon-money"></i>
								<span class="menu-text"> Fluxo De Caixa </span>
                                                                <span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
                                                                        <i class="icon-warning-sign red bigger-130"></i>
                                                                </span>
							</a>

						</li>

						<li class="<?= ($thisController == 'dre')? 'active':'' ?>">
							<a href="<?=$HOST?>dre" class="dropdown-toggle">
								<i class="icon-book"></i>
								<span class="menu-text"> DRE </span>

							</a>

						</li>

						<li class="<?= ($thisController == 'custo_producao')? 'active':'' ?>">
							<a href="<?=$HOST?>custo_producao">
								<i class="icon-money"></i>
								<span class="menu-text"> Custo De Produção </span>
							</a>
						</li>

						<li class="<?= ($thisController == 'relatorios')? 'active':'' ?>">
							<a href="<?=$HOST?>relatorios">
								<i class="icon-table"></i>

								<span class="menu-text">
									Relatorios
									
								</span>
							</a>
						</li>

						<li class="<?= ($thisController == 'simulador')? 'active':'' ?>">
							<a href="<?=$HOST?>simulador">
								<i class="icon-signal"></i>
								<span class="menu-text"> Simulador </span>
							</a>
						</li>

						<li class="<?= ($thisController == 'cliente')? 'active':'' ?>">
							<a href="<?=$HOST?>cliente" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> Cadastros </span>

							</a>

						</li>

                                                
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					

					<div class="page-content">
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                                                
                                                                <?php echo $this->fetch('content'); ?>
                                                                
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

                            
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

                <script type="text/javascript">
			window.jQuery || document.write("<script src='<?=$localScripts?>jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?=$localScripts?>/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?=$localScripts?>/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?=$localScripts?>/bootstrap.min.js"></script>
		<script src="<?=$localScripts?>/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="<?=$localScripts?>/ace-elements.min.js"></script>
		<script src="<?=$localScripts?>/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
<div class="col-xs-12" style="position: relative;
z-index: 10000;
background: white;"> 
	<?php //echo $this->element('sql_dump'); ?>

</div>