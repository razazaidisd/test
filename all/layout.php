<!doctype html>
<?php error_reporting(0); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>lollibond - Page Layout</title>
	<link type="icon/png" rel="icon" href="../favicon.ico">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="css/font-awesome-min.css">
	<link type="text/css" rel="stylesheet" href="../stylesheets/styles.css">
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body class="all-components individual">
	<header class="site-header">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<h4><a href="header.php">Header</a></h4>
			</div>
		</nav>
	</header>
	<hr><hr>
	<div class="container">
		<div class="row bottom-buffer">
			<div class="col-md-12">
				<div class="profile-header">
					<div class="profile-cover">
						<img src="../images/corporate-header.jpg" alt="">
						<div class="cover-info">
							<div class="row minimize-gutter">
								<div class="col-xs-3">&nbsp;</div>
								<div class="col-xs-6">
									<div class="profile-title hide">Jonathan Ive</div>
									<form class="profile-title">
										<input type="text" value="Jonathan Ive" onblur="if (this.value=='') this.value=this.defaultValue">
										<div class="profile-title-action">
											<button type="submit" class="button button-icon button-xsmall"><i class="fa fa-floppy-o"></i>Save</button>
										</div>
									</form>
									<div class="row">
										<div class="col-xs-6">
											<div class="profile-subtitle hide">Chief Design Officer, Apple Inc</div>
											<form class="profile-subtitle">
												<input type="text" value="Chief Design Officer, Apple Inc" onblur="if (this.value=='') this.value=this.defaultValue">
												<div class="profile-title-action">
													<button type="submit" class="button button-icon button-xsmall"><i class="fa fa-floppy-o"></i>Save</button>
												</div>
											</form>
										</div>
										<div class="col-xs-6 text-right">
											<div class="profile-subtitle">2,832,548</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<div class="profile-subtitle hide">1000+ Employees</div>
											<form class="profile-subtitle">
												<input type="text" value="1000+ Employees" onblur="if (this.value=='') this.value=this.defaultValue">
												<div class="profile-title-action">
													<button type="submit" class="button button-icon button-xsmall"><i class="fa fa-floppy-o"></i>Save</button>
												</div>
											</form>
										</div>
										<div class="col-xs-6 text-right">
											<div class="profile-subtitle">Followers</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">&nbsp;</div>
							</div>
						</div>
						<div class="cover-buttons">
							<ul>
								<li><a href="javascript:;" class="upload-cover-button"><i class="fa fa-upload">&nbsp;</i> <span>Upload Cover</span></a></li>
								<li><a href="javascript:;"><i class="fa fa-arrows">&nbsp;</i> <span>Adjust Cover</span></a></li>
								<li><a href="javascript:;"><i class="fa fa-trash">&nbsp;</i> <span>Delete Cover</span></a></li>
							</ul>
						</div>
					</div>
					<div class="profile-bottom">
						<div class="row minimize-gutter">
							<div class="col-xs-3">
								<div class="profile-picture">
									<img src="images/jonathan_ive.jpg" alt="">
									<div class="overlay-box profile-icons">
										<div class="position-bottom">
											<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Change"><i class="fa fa-upload">&nbsp;</i></a>
											<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-trash">&nbsp;</i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="pull-left">
									<select class="select-option pull-left right-buffer">
										<option>Select Region</option>
										<option>Region 1</option>
										<option>Region 2</option>
										<option>Region 3</option>
										<option>Region 4</option>
										<option>Region 5</option>
									</select>
									<div class="dropdown pull-left">
										<a href="javascript:;" class="button button-icon-right dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Dropdown <i class="fa fa-chevron-down">&nbsp;</i></a>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
								<div class="pull-right">
									<a href="javascript:;" class="button button-ace pull-left right-buffer"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
									<a href="javascript:;" class="button-border button-bond button-icon pull-left"><i class="fa fa-plus">&nbsp;</i> Bond</a>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="profile-video">
									<img src="images/user-image-2.jpg" alt="">
									<div class="overlay-box profile-icons">
										<div class="position-bottom">
											<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil">&nbsp;</i></a>
											<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Change"><i class="fa fa-upload">&nbsp;</i></a>
											<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-trash">&nbsp;</i></a>
										</div>
									</div>
									<div class="position-center">
										<a href="javascript:;" data-toggle="tooltip" data-placement="top" title="Play Video"><i class="fa fa-play">&nbsp;</i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="profile-nav tab-nav bottom-buffer">
			<ul>
				<li><a href="#tab-posts" class="active-nav">Posts</a></li>
				<li><a href="#tab-listing">Listings</a></li>
				<li><a href="#tab-cards">Cards</a></li>
				<li><a href="#tab-tables">Tables</a></li>
				<li><a href="#tab-popups">Popups</a></li>
				<li><a href="#tab-add-remove">Add/Remove row</a></li>
			</ul>
		</div>
		<div class="row minimize-gutter bottom-buffer">
			<div class="col-md-3 main-content">
				<div class="block-main default-sidebar sticky">
					<ul class="tab-nav list-rel">
						<li>
							<div class="dropdown pull-right">
								<button type="button" class="dropdown-toggle display-block top-buffer right-buffer" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu dd-arrow-top-right pull-right">
									<li><a href="javascript:;">Delete</a></li>
								</ul>
							</div>
							<a href="#ds-tab-1" class="active-nav">Link 1</a>
						</li>
						<li>
							<div class="dropdown pull-right">
								<button type="button" class="dropdown-toggle display-block top-buffer right-buffer" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu dd-arrow-top-right pull-right">
									<li><a href="javascript:;">Delete</a></li>
								</ul>
							</div>
							<a href="#ds-tab-2">Link 2</a>
						</li>
						<li>
							<div class="dropdown pull-right">
								<button type="button" class="dropdown-toggle display-block top-buffer right-buffer" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu dd-arrow-top-right pull-right">
									<li><a href="javascript:;">Delete</a></li>
								</ul>
							</div>
							<a href="#ds-tab-3">Link 3</a>
						</li>
						<li>
							<div class="dropdown pull-right">
								<button type="button" class="dropdown-toggle display-block top-buffer right-buffer" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu dd-arrow-top-right pull-right">
									<li><a href="javascript:;">Delete</a></li>
								</ul>
							</div>
							<a href="#ds-tab-4">Link 4</a>
						</li>
						<li>
							<div class="dropdown pull-right">
								<button type="button" class="dropdown-toggle display-block top-buffer right-buffer" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu dd-arrow-top-right pull-right">
									<li><a href="javascript:;">Delete</a></li>
								</ul>
							</div>
							<a href="#ds-tab-5">Link 5</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 main-content">
				<div class="tab-block">
					<div class="tab-main" id="tab-posts">
						<div class="block-main">
							<div class="block-heading" id="link-1">
								<div class="block-title"><i class="fa fa-ticket">&nbsp;</i> Tabbing Style 2</div>
							</div>
							<div class="block-padding">
								<div class="block-options text-center">
									<ul class="list-center tab-nav vertical-top block-main">
										<li><a href="#block-tab-1">Tab 1</a></li>
										<li><a href="#block-tab-2">Tab 2</a></li>
										<li><a href="#all"><i class="fa fa-angle-double-left right-buffer"></i>All<i class="fa fa-angle-double-right left-buffer"></i></a></li>
										<li><a href="#block-tab-3">Tab 3</a></li>
										<li><a href="#block-tab-4">Tab 4</a></li>
									</ul>
								</div>
								<div class="tab-block">
									<div class="tab-main" id="block-tab-1">Tab 1</div>
									<div class="tab-main" id="block-tab-2">Tab 2</div>
									<div class="tab-main" id="block-tab-3">Tab 3</div>
									<div class="tab-main" id="block-tab-4">Tab 4</div>
								</div>
							</div>
						</div>
						<div class="block-main">
							<div class="block-heading" id="link-2">
								<div class="block-title"><i class="fa fa-ticket">&nbsp;</i> Thumbs - <small>(Pictures/Videos)</small></div>
							</div>
							<div class="block-padding">
								<div class="row minimize-gutter">
									<div class="col-md-3">
										<div class="thumb-box">
											<div class="thumb-image">
												<a href="javascript:;"><img src="../images/people_search.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumb-box ">
											<div class="thumb-image">
												<a href="javascript:;"><img src="images/jonathan_ive.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumb-box">
											<div class="thumb-image">
												<a href="javascript:;"><img src="../images/user-image-1.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumb-box">
											<div class="thumb-image">
												<a href="javascript:;"><img src="../images/default-video.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="block-main">
							<div class="block-heading" id="link-3">
								<div class="block-title"><i class="fa fa-ticket">&nbsp;</i> Thumbs - <small>(Documents)</small></div>
							</div>
							<div class="block-padding">
								<div class="row minimize-gutter">
									<div class="col-md-3">
										<div class="thumb-box thumb-red">
											<div class="thumb-image">
												<a href="javascript:;"><img src="../images/pdf-icon.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumb-box thumb-blue">
											<div class="thumb-image">
												<a href="javascript:;"><img src="../images/doc-icon.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumb-box thumb-red">
											<div class="thumb-image">
												<a href="javascript:;"><img src="../images/ppt-icon.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="thumb-box thumb-blue">
											<div class="thumb-image">
												<a href="javascript:;"><img src="../images/doc-icon.jpg" alt=""></a>
											</div>
											<div class="position-bottom-left full-width">
												<div class="thumb-text">Lorem Ipsum</div>
											</div>
											<div class="position-top-right">
												<a href="javascript:;" class="thumb-action"><i class="fa fa-download"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="block-main">
							<div class="block-heading" id="link-4">
								<div class="block-title"><i class="fa fa-ticket">&nbsp;</i> Link 4</div>
							</div>
							<div class="block-padding">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lobortis tortor, vel dictum ante. Vestibulum molestie urna urna, a aliquet quam laoreet in. Sed eu dui id ligula rhoncus viverra at ultrices nisi. Vestibulum sit amet dolor varius felis fringilla ullamcorper et sed ipsum. Nunc interdum tellus vitae arcu efficitur porta. Etiam pulvinar dignissim lacinia. Sed vitae accumsan mi. Curabitur dignissim augue et lobortis sodales. Sed eu diam a justo interdum tristique. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer non sollicitudin mi. In aliquam, dui in varius rhoncus, ex ex elementum purus, eu egestas nibh nibh vitae odio. Phasellus consectetur velit vitae convallis ultricies. Quisque et dapibus lectus, at porta nisl. Maecenas feugiat quam mi, et auctor odio auctor at.</p>
								<p>Maecenas ac ultricies diam, nec pellentesque tellus. Sed rutrum interdum metus id bibendum. Aenean nec condimentum lectus, eu dictum sem. Curabitur malesuada augue et odio volutpat elementum. Donec aliquet, nulla a ornare tincidunt, nulla lorem imperdiet tellus, eu hendrerit tellus nisi a augue. Sed finibus leo vitae dictum semper. Cras congue, ex in elementum sagittis, orci leo blandit purus, ac dignissim sapien ex vitae ex.</p>
							</div>
						</div>
					</div>
					<div class="tab-main" id="tab-add-remove">
						<div class="block-main">
							<div class="block-heading">
								<div class="block-title">ul</div>
							</div>
							<div class="block-padding">
								<ul class="bottom-buffer list-buffer">
									<li>
										<div class="col-xs-6">
											<input type="text" class="input-text required">
										</div>
										<a href="javascript:;" class="button-border button-blue add-row">Add Row</a>
										<a href="javascript:;" class="button-border button-red remove-row">Delete Row</a>
									</li>
									<li>
										<a href="javascript:;" class="button-border button-blue add-row">Add Row</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="block-main">
							<div class="block-heading">
								<div class="block-title">table</div>
							</div>
							<div class="block-padding">
								<div class="table-responsive">
									<table class="table table-bordered">
										<tr>
											<td><input type="text" class="input-text required"></td>
											<td><a href="javascript:;" class="button-border button-blue add-row">Add Row</a></td>
											<td><a href="javascript:;" class="button-border button-red remove-row">Delete Row</a></td>
										</tr>
										<tr>
											<td colspan="3"><a href="javascript:;" class="button-border button-blue add-row">Add Row</a></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-main" id="tab-listing">
						<div class="block-main">
							<div class="block-heading">
								<div class="block-title">Listings Here</div>
							</div>
							<div class="block-padding">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lobortis tortor, vel dictum ante. Vestibulum molestie urna urna, a aliquet quam laoreet in. Sed eu dui id ligula rhoncus viverra at ultrices nisi. Vestibulum sit amet dolor varius felis fringilla ullamcorper et sed ipsum. Nunc interdum tellus vitae arcu efficitur porta. Etiam pulvinar dignissim lacinia. Sed vitae accumsan mi. Curabitur dignissim augue et lobortis sodales. Sed eu diam a justo interdum tristique. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer non sollicitudin mi. In aliquam, dui in varius rhoncus, ex ex elementum purus, eu egestas nibh nibh vitae odio. Phasellus consectetur velit vitae convallis ultricies. Quisque et dapibus lectus, at porta nisl. Maecenas feugiat quam mi, et auctor odio auctor at.</p>
								<p>Maecenas ac ultricies diam, nec pellentesque tellus. Sed rutrum interdum metus id bibendum. Aenean nec condimentum lectus, eu dictum sem. Curabitur malesuada augue et odio volutpat elementum. Donec aliquet, nulla a ornare tincidunt, nulla lorem imperdiet tellus, eu hendrerit tellus nisi a augue. Sed finibus leo vitae dictum semper. Cras congue, ex in elementum sagittis, orci leo blandit purus, ac dignissim sapien ex vitae ex.</p>
							</div>
						</div>
					</div>
					<div class="tab-main" id="tab-cards">
						<div class="block-main">
							<div class="block-heading">
								<div class="block-title">Recommendation</div>
							</div>
							<ul class="list-user list-border-ver block-padding">
								<li>
									<div class="lu-box">
										<a href="javascript:;" class="user-rounded-thumb user-rounded-80px pull-left right-buffer">
											<img src="../images/profile-photo.jpg" alt="">
										</a>
										<div class="lu-content overflow-hidden">
											<div class="lu-action-top small-font pull-right">
												<a href="javascript:;" class="fa fa-pencil edit-row right-buffer"></a>
												<a href="javascript:;" class="fa fa-trash-o remove-row"></a>
											</div>
											<a href="javascript:;" class="lu-title txt-elp">FedEx Express</a>
											<div class="lu-txt bottom-buffer txt-elp">Transportation - Package Transport</div>
											<div class="lu-txt bottom-buffer txt-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
											<div class="tags-box">
												<div class="tag-text tag-border tag-small tag-green"><i class="fa fa-times remove-tag">&nbsp;</i>Classmates</div>
												<div class="tag-text tag-border tag-small tag-blue"><i class="fa fa-times remove-tag">&nbsp;</i>Friends</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lu-box">
										<a href="javascript:;" class="user-rounded-thumb user-rounded-80px pull-left right-buffer">
											<img src="../images/profile-photo.jpg" alt="">
										</a>
										<div class="lu-content overflow-hidden">
											<div class="lu-action-top small-font pull-right">
												<a href="javascript:;" class="fa fa-pencil edit-row right-buffer"></a>
												<a href="javascript:;" class="fa fa-trash-o remove-row"></a>
											</div>
											<a href="javascript:;" class="lu-title txt-elp">FedEx Express</a>
											<div class="lu-txt bottom-buffer txt-elp">Transportation - Package Transport</div>
											<div class="lu-txt bottom-buffer txt-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
											<div class="tags-box">
												<div class="tag-text tag-border tag-small tag-green"><i class="fa fa-times remove-tag">&nbsp;</i>Classmates</div>
												<div class="tag-text tag-border tag-small tag-blue"><i class="fa fa-times remove-tag">&nbsp;</i>Friends</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lu-box">
										<a href="javascript:;" class="user-rounded-thumb user-rounded-80px pull-left right-buffer">
											<img src="../images/profile-photo.jpg" alt="">
										</a>
										<div class="lu-content overflow-hidden">
											<div class="lu-action-top small-font pull-right">
												<a href="javascript:;" class="fa fa-pencil edit-row right-buffer"></a>
												<a href="javascript:;" class="fa fa-trash-o remove-row"></a>
											</div>
											<a href="javascript:;" class="lu-title txt-elp">FedEx Express</a>
											<div class="lu-txt bottom-buffer txt-elp">Transportation - Package Transport</div>
											<div class="lu-txt bottom-buffer txt-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
											<div class="tags-box">
												<div class="tag-text tag-border tag-small tag-green"><i class="fa fa-times remove-tag">&nbsp;</i>Classmates</div>
												<div class="tag-text tag-border tag-small tag-blue"><i class="fa fa-times remove-tag">&nbsp;</i>Friends</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="lu-box">
										<a href="javascript:;" class="user-rounded-thumb user-rounded-80px pull-left right-buffer">
											<img src="../images/profile-photo.jpg" alt="">
										</a>
										<div class="lu-content overflow-hidden">
											<div class="lu-action-top small-font pull-right">
												<a href="javascript:;" class="fa fa-pencil edit-row right-buffer"></a>
												<a href="javascript:;" class="fa fa-trash-o remove-row"></a>
											</div>
											<a href="javascript:;" class="lu-title txt-elp">FedEx Express</a>
											<div class="lu-txt bottom-buffer txt-elp">Transportation - Package Transport</div>
											<div class="lu-txt bottom-buffer txt-quote">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
											<div class="tags-box">
												<div class="tag-text tag-border tag-small tag-green"><i class="fa fa-times remove-tag">&nbsp;</i>Classmates</div>
												<div class="tag-text tag-border tag-small tag-blue"><i class="fa fa-times remove-tag">&nbsp;</i>Friends</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-main" id="tab-tables">
						<div class="block-main">
							<div class="block-heading">
								<div class="block-title">Tables Here</div>
							</div>
							<div class="block-padding">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lobortis tortor, vel dictum ante. Vestibulum molestie urna urna, a aliquet quam laoreet in. Sed eu dui id ligula rhoncus viverra at ultrices nisi. Vestibulum sit amet dolor varius felis fringilla ullamcorper et sed ipsum. Nunc interdum tellus vitae arcu efficitur porta. Etiam pulvinar dignissim lacinia. Sed vitae accumsan mi. Curabitur dignissim augue et lobortis sodales. Sed eu diam a justo interdum tristique. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer non sollicitudin mi. In aliquam, dui in varius rhoncus, ex ex elementum purus, eu egestas nibh nibh vitae odio. Phasellus consectetur velit vitae convallis ultricies. Quisque et dapibus lectus, at porta nisl. Maecenas feugiat quam mi, et auctor odio auctor at.</p>
								<p>Maecenas ac ultricies diam, nec pellentesque tellus. Sed rutrum interdum metus id bibendum. Aenean nec condimentum lectus, eu dictum sem. Curabitur malesuada augue et odio volutpat elementum. Donec aliquet, nulla a ornare tincidunt, nulla lorem imperdiet tellus, eu hendrerit tellus nisi a augue. Sed finibus leo vitae dictum semper. Cras congue, ex in elementum sagittis, orci leo blandit purus, ac dignissim sapien ex vitae ex.</p>
							</div>
						</div>
					</div>
					<div class="tab-main" id="tab-popups">
						<div class="block-main">
							<div class="block-heading">
								<div class="block-title">All popups</div>
							</div>
							<div class="block-padding text-center">
								<ul class="list-buffer">
									<li>
										<a href="javascript:;"data-toggle="modal" data-target="#signInModal" class="button-border button-small right-buffer">Login</a>
										<a href="javascript:;" class="button-border button-small right-buffer">Create New Account</a>
										<a href="javascript:;" class="button-border button-small right-buffer">Message</a>
										<a href="javascript:;" class="button-border button-small right-buffer">Share</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
									</li>
									<li>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
									</li>
									<li>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
									</li>
									<li>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
										<a href="javascript:;" class="button-border button-small right-buffer">popupName</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 main-content">
				<div class="block-main">
					<div class="block-heading">
						<div class="block-title">List Style 1</div>
					</div>
					<div class="block-padding">
						<ul class="list-buffer">
							<li>
								<div class="similar-listing-box">
									<div class="sl-image pull-left">
										<a href="javascript:;" class="user-rounded-thumb user-rounded-50px">
											<img src="../images/people_search.jpg" alt="">
										</a>
									</div>
									<div class="sl-info pull-left">
										<div class="sl-title"><a href="javasctipt:;">Craft Camp for kids</a></div>
										<div class="sl-location">Business Bay, Dubai</div>
										<div class="sl-guest">2,568 Guests</div>
										<div class="sl-action">
											<a href="javascript:;">Follow</a> | <a href="javascript:;">Join</a>
										</div>
									</div>
									<a href="javascript:;" class="sl-link pull-right"><i class="fa fa-angle-right">&nbsp;</i></a>
								</div>
							</li>
							<li>
								<div class="similar-listing-box">
									<div class="sl-image pull-left">
										<a href="javascript:;" class="user-rounded-thumb user-rounded-50px">
											<img src="../images/people_search.jpg" alt="">
										</a>
									</div>
									<div class="sl-info pull-left">
										<div class="sl-title"><a href="javasctipt:;">Craft Camp for kids</a></div>
										<div class="sl-location">Business Bay, Dubai</div>
										<div class="sl-guest">2,568 Guests</div>
										<div class="sl-action">
											<a href="javascript:;">Follow</a> | <a href="javascript:;">Join</a>
										</div>
									</div>
									<a href="javascript:;" class="sl-link pull-right"><i class="fa fa-angle-right">&nbsp;</i></a>
								</div>
							</li>
							<li>
								<div class="similar-listing-box">
									<div class="sl-image pull-left">
										<a href="javascript:;" class="user-rounded-thumb user-rounded-50px">
											<img src="../images/people_search.jpg" alt="">
										</a>
									</div>
									<div class="sl-info pull-left">
										<div class="sl-title"><a href="javasctipt:;">Craft Camp for kids</a></div>
										<div class="sl-location">Business Bay, Dubai</div>
										<div class="sl-guest">2,568 Guests</div>
										<div class="sl-action">
											<a href="javascript:;">Follow</a> | <a href="javascript:;">Join</a>
										</div>
									</div>
									<a href="javascript:;" class="sl-link pull-right"><i class="fa fa-angle-right">&nbsp;</i></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="block-main">
					<div class="block-heading">
						<div class="block-title">List Style 2 - <small class="red-text-color">deprecated</small></div>
					</div>
					<div class="block-padding">
						<ul class="list-buffer">
							<li>
								<div class="similar-listing-box block-minipadding">
									<a class="user-rounded-thumb user-rounded-36px pull-left" href="javascript:;">
										<img src="../images/profile-photo.jpg" alt="">
									</a>
									<div class="member-text-box pull-left">
										<div class="base-font"><a href="javascript:;">Adnan Saeed</a></div>
										<div class="small-font">IT Business Analyst</div>
									</div>
									<div class="member-action">
										<a href="javascript:;" class="button-border button-bond button-xsmall"><i class="fa fa-plus">&nbsp;</i> Bond</a>
									</div>
								</div>
							</li>
							<li>
								<div class="similar-listing-box block-minipadding">
									<a class="user-rounded-thumb user-rounded-36px pull-left" href="javascript:;">
										<img src="../images/profile-photo.jpg" alt="">
									</a>
									<div class="member-text-box pull-left">
										<div class="base-font"><a href="javascript:;">Adnan Saeed</a></div>
										<div class="small-font">IT Business Analyst</div>
									</div>
									<div class="member-action">
										<a href="javascript:;" class="button-border button-bond button-xsmall"><i class="fa fa-plus">&nbsp;</i> Bond</a>
									</div>
								</div>
							</li>
							<li>
								<div class="similar-listing-box block-minipadding">
									<a class="user-rounded-thumb user-rounded-36px pull-left" href="javascript:;">
										<img src="../images/profile-photo.jpg" alt="">
									</a>
									<div class="member-text-box pull-left">
										<div class="base-font"><a href="javascript:;">Adnan Saeed</a></div>
										<div class="small-font">IT Business Analyst</div>
									</div>
									<div class="member-action">
										<a href="javascript:;" class="button-border button-bond button-xsmall"><i class="fa fa-plus">&nbsp;</i> Bond</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="block-main">
					<div class="block-heading">
						<div class="block-title">List Style 3</div>
					</div>
					<ul class="list-user list-border-hor">
						<li>
							<a href="javascript:;" class="lu-box">
								<div class="user-rounded-thumb user-rounded-36px pull-left right-buffer">
									<img src="../images/profile-photo.jpg" alt="">
								</div>
								<div class="lu-content overflow-hidden">
									<div class="lu-title txt-elp">Adnan Saeed</div>
									<div class="lu-txt txt-elp">IT Business Analyst</div>
								</div>
							</a>
							<div class="lu-action lu-action-active">
								<a href="javascript:;" class="button button-xsmall dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu dd-arrow-top-right pull-right">
									<li><a href="javascript:;">Link 1</a></li>
									<li><a href="javascript:;">Link 2</a></li>
									<li><a href="javascript:;">Link 3</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="javascript:;" class="lu-box">
								<div class="user-rounded-thumb user-rounded-36px pull-left right-buffer">
									<img src="../images/aca_admin.jpg" alt="">
								</div>
								<div class="lu-content overflow-hidden">
									<div class="lu-action-top xsmall-font pull-right">5m</div>
									<div class="lu-title txt-elp">Tom Cruise</div>
									<div class="lu-txt txt-elp">Actove/Director</div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:;" class="lu-box">
								<div class="user-rounded-thumb user-rounded-36px pull-left right-buffer">
									<img src="../images/aca_employee.jpg" alt="">
								</div>
								<div class="lu-content overflow-hidden">
									<div class="lu-title txt-elp">Sara Jane</div>
									<div class="lu-txt txt-elp"><i class="fa fa-area-chart"></i> Actress</div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:;" class="lu-box">
								<div class="user-rounded-thumb user-rounded-36px pull-left right-buffer">
									<img src="../images/jonathan_ive.jpg" alt="">
								</div>
								<div class="lu-content overflow-hidden">
									<div class="lu-title txt-elp">Jonathan Ive</div>
									<div class="lu-txt txt-elp">Apple's Chief Design Officer</div>
								</div>
							</a>
							<a href="javascript:;" class="lu-action lu-action-active button button-bond button-xsmall"><i class="fa fa-plus">&nbsp;</i> Bond</a>
						</li>
						<li>
							<a href="javascript:;" class="lu-box">
								<div class="user-rounded-thumb user-rounded-36px pull-left right-buffer">
									<img src="../images/3.jpg" alt="">
								</div>
								<div class="lu-content overflow-hidden">
									<div class="lu-title txt-elp">Syed Noman Nisar</div>
									<div class="lu-txt txt-elp">Developer</div>
								</div>
							</a>
							<a href="javascript:;" class="lu-action button button-bond button-xsmall"><i class="fa fa-plus">&nbsp;</i> Bond</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include '../common_elements/footer/footer.php'; ?>
</body>
</html>
