<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lollibond - Page Layout</title>
	<link type="icon/png" rel="icon" href="../favicon.ico">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="css/font-awesome-min.css">
	<link type="text/css" rel="stylesheet" href="../stylesheets/styles.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../javascripts/bootstrap.min.js"></script>
</head>
<body class="all-components">
	<nav class="navbar navbar-default navbar-fixed-top text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="block-padding">Individuals</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="block-padding">Corporate</div>
				</div>
				<div class="col-md-3 academic">
					<div class="block-padding">Academic</div>
				</div>
				<div class="col-md-3 ">
					<div class="block-padding">Normal</div>
				</div>
			</div>
		</div>
	</nav>
	<hr><hr><hr>
	<div class="container">
		<div class="component-block">
			<h1>Line Input Fields</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 academic">
					<label class="input-ln fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
				<div class="col-md-3 corporate">
					<label class="input-ln fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
				<div class="col-md-3 individual">
					<label class="input-ln fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
				<div class="col-md-3">
					<label class="input-ln fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
			</div>
			<hr>
			<div class="row" style="background: #333;">
				<div class="col-md-3 academic">
					<label class="input-ln il-white fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
				<div class="col-md-3 corporate">
					<label class="input-ln il-white fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
				<div class="col-md-3 individual">
					<label class="input-ln il-white fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
				<div class="col-md-3">
					<label class="input-ln il-white fa fa-graduation-cap" title="Default Text">
						<input type="text">
					</label>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Ratings</h1>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<div class="rating-box">

						<input type="radio" name="ratingStars" id="4_stars" value="4">
						<label for="4_stars"><i class="fa fa-star"></i></label>

						<input type="radio" name="ratingStars" id="3_stars" value="3">
						<label for="3_stars"><i class="fa fa-star"></i></label>

	                    <input type="radio" name="ratingStars" id="2_stars" value="2">
	                    <label for="2_stars"><i class="fa fa-star"></i></label>

	                    <input type="radio" name="ratingStars" id="1_stars" value="1">
	                    <label for="1_stars"><i class="fa fa-star"></i></label>

	                    <input type="radio" name="ratingStars" id="0_stars" value="0" required>
	                    <label for="0_stars"><i class="fa fa-star"></i></label>

	                </div>
	            </div>
	        </div>
	    </div>
		<div class="component-block">
			<h1>Buttons - <small>New</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button-rainbow">follow <i class="fa fa-plus"></i></a>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Buttons</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-xsmall">X Small</a>
					<a href="javascript:;" class="button-border button-xsmall">X Small</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-xsmall">X Small</a>
					<a href="javascript:;" class="button-border button-xsmall">X Small</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-xsmall">X Small</a>
					<a href="javascript:;" class="button-border button-xsmall">X Small</a>
				</div>
				<div class="col-md-3 ">
					<a href="javascript:;" class="button button-disabled button-xsmall">X Small</a>
					<a href="javascript:;" class="button-border button-xsmall button-disabled">X Small</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-small">Small</a>
					<a href="javascript:;" class="button-border button-small">Small</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-small">Small</a>
					<a href="javascript:;" class="button-border button-small">Small</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-small">Small</a>
					<a href="javascript:;" class="button-border button-small">Small</a>
				</div>
				<div class="col-md-3 ">
					<a href="javascript:;" class="button button-disabled button-small">Small</a>
					<a href="javascript:;" class="button-border button-small button-disabled">Small</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button">Normal</a>
					<a href="javascript:;" class="button-border">Normal</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button">Normal</a>
					<a href="javascript:;" class="button-border">Normal</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button">Normal</a>
					<a href="javascript:;" class="button-border">Normal</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-disabled">Normal</a>
					<a href="javascript:;" class="button-border button-disabled">Normal</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-large">Large</a>
					<a href="javascript:;" class="button-border button-large">Large</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-large">Large</a>
					<a href="javascript:;" class="button-border button-large">Large</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-large">Large</a>
					<a href="javascript:;" class="button-border button-large">Large</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-disabled button-large">Large</a>
					<a href="javascript:;" class="button-border button-large button-disabled">Large</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-xlarge">X Large</a>
					<a href="javascript:;" class="button-border button-xlarge">X Large</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-xlarge">X Large</a>
					<a href="javascript:;" class="button-border button-xlarge">X Large</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-xlarge">X Large</a>
					<a href="javascript:;" class="button-border button-xlarge">X Large</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-disabled button-xlarge">X Large</a>
					<a href="javascript:;" class="button-border button-xlarge button-disabled">X Large</a>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Buttons - <small>with Icons</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-icon button-xsmall"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
					<a href="javascript:;" class="button-border button-icon button-xsmall"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-icon button-xsmall"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
					<a href="javascript:;" class="button-border button-icon button-xsmall"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-icon button-xsmall"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
					<a href="javascript:;" class="button-border button-icon button-xsmall"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-icon button-red button-xsmall"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
					<a href="javascript:;" class="button-border button-icon button-xsmall button-red"><i class="fa fa-bookmark">&nbsp;</i>X Small</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-icon button-small"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
					<a href="javascript:;" class="button-border button-icon button-small"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-icon button-small"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
					<a href="javascript:;" class="button-border button-icon button-small"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-icon button-small"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
					<a href="javascript:;" class="button-border button-icon button-small"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-icon button-red button-small"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
					<a href="javascript:;" class="button-border button-icon button-small button-red"><i class="fa fa-bookmark">&nbsp;</i> Small</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-icon"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
					<a href="javascript:;" class="button-border button-icon"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-icon"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
					<a href="javascript:;" class="button-border button-icon"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-icon"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
					<a href="javascript:;" class="button-border button-icon"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-icon button-red"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
					<a href="javascript:;" class="button-border button-icon button-red"><i class="fa fa-bookmark">&nbsp;</i> Normal</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-icon button-large"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
					<a href="javascript:;" class="button-border button-icon button-large"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-icon button-large"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
					<a href="javascript:;" class="button-border button-icon button-large"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-icon button-large"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
					<a href="javascript:;" class="button-border button-icon button-large"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-icon button-red button-large"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
					<a href="javascript:;" class="button-border button-icon button-large button-red"><i class="fa fa-bookmark">&nbsp;</i> Large</a>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-icon button-xlarge"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
					<a href="javascript:;" class="button-border button-icon button-xlarge"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-icon button-xlarge"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
					<a href="javascript:;" class="button-border button-icon button-xlarge"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-icon button-xlarge"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
					<a href="javascript:;" class="button-border button-icon button-xlarge"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-icon button-red button-xlarge"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
					<a href="javascript:;" class="button-border button-icon button-xlarge button-red"><i class="fa fa-bookmark">&nbsp;</i>X Large</a>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Input Fields</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<input type="text" class="input-text input-small" placeholder="Enter Your Text Here">
				</div>
				<div class="col-md-3 corporate">
					<input type="text" class="input-text input-small" placeholder="Enter Your Text Here">
				</div>
				<div class="col-md-3 academic">
					<input type="text" class="input-text input-small" placeholder="Enter Your Text Here">
				</div>
				<div class="col-md-3">
					<input type="text" class="input-text input-small" placeholder="Enter Your Text Here">
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<input type="text" class="input-text" placeholder="Enter Your Text Here">
				</div>
				<div class="col-md-3 corporate">
					<input type="text" class="input-text" placeholder="Enter Your Text Here">
				</div>
				<div class="col-md-3 academic">
					<input type="text" class="input-text" placeholder="Enter Your Text Here">
				</div>
				<div class="col-md-3">
					<input type="text" class="input-text" placeholder="Enter Your Text Here">
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<textarea class="input-text" placeholder="Enter Your Text Here"></textarea>
				</div>
				<div class="col-md-3 corporate">
					<textarea class="input-text" placeholder="Enter Your Text Here"></textarea>
				</div>
				<div class="col-md-3 academic">
					<textarea class="input-text" placeholder="Enter Your Text Here"></textarea>
				</div>
				<div class="col-md-3">
					<textarea class="input-text" placeholder="Enter Your Text Here"></textarea>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Popup</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<button type="button" class="button" data-toggle="modal" data-target="#myindividual">Individuals Modal</button>
				</div>
				<div class="col-md-3 corporate">
					<button type="button" class="button" data-toggle="modal" data-target="#myCorporate">Corporate Modal</button>
				</div>
				<div class="col-md-3 academic">
					<button type="button" class="button" data-toggle="modal" data-target="#myAcademic">Academic Modal</button>
				</div>
				<div class="col-md-3">
					<button type="button" class="button" data-toggle="modal" data-target="#myDisabled">Disabled Modal</button>
				</div>
			</div>
			<div class="modal-box">
				<div class="individual">
					<div id="myindividual" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
									<p>Some text in the modal.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="corporate">
					<div id="myCorporate" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
									<p>Some text in the modal.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="academic">
					<div id="myAcademic" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
									<p>Some text in the modal.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myDisabled" class="modal normal-modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Modal Header</h4>
							</div>
							<div class="modal-body">
								<p>Some text in the modal.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Checkbox Buttons</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<label class="custom-checkbox-button">
						<input type="checkbox" class="hide check-all">
						<span>&nbsp;</span>
						Checkbox
					</label>
					<hr>
					<ul class="check-all-box">
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								CheckBox
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
					</ul>
				</div>
				<div class="col-md-3 corporate">
					<label class="custom-checkbox-button">
						<input type="checkbox" class="hide check-all">
						<span>&nbsp;</span>
						Checkbox
					</label>
					<hr>
					<ul class="check-all-box">
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Check All
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
					</ul>
				</div>
				<div class="col-md-3 academic">
					<label class="custom-checkbox-button">
						<input type="checkbox" class="hide check-all">
						<span>&nbsp;</span>
						Checkbox
					</label>
					<hr>
					<ul class="check-all-box">
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Check All
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
						<li>
							<label class="custom-checkbox-button">
								<input type="checkbox" class="hide">
								<span>&nbsp;</span>
								Checkbox
							</label>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					&nbsp;
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Radio Buttons</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<label class="custom-radio-button">
						<input type="radio" class="hide">
						<span>&nbsp;</span>
						Checkbox
					</label>
				</div>
				<div class="col-md-3 corporate">
					<label class="custom-radio-button">
						<input type="radio" class="hide">
						<span>&nbsp;</span>
						Checkbox
					</label>
				</div>
				<div class="col-md-3 academic">
					<label class="custom-radio-button">
						<input type="radio" class="hide">
						<span>&nbsp;</span>
						Checkbox
					</label>
				</div>
				<div class="col-md-3">
					&nbsp;
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 individual">
					<label class="custom-radio-button">
						<input type="radio" class="hide">
						<span>&nbsp;</span>
						Checkbox
					</label>
				</div>
				<div class="col-md-3 corporate">
					<label class="custom-radio-button">
						<input type="radio" class="hide">
						<span>&nbsp;</span>
						Checkbox
					</label>
				</div>
				<div class="col-md-3 academic">
					<label class="custom-radio-button">
						<input type="radio" class="hide">
						<span>&nbsp;</span>
						Checkbox
					</label>
				</div>
				<div class="col-md-3">
					&nbsp;
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Select Options</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<select class="select-option">
						<option>Select Region</option>
						<option>Region 1</option>
						<option>Region 2</option>
						<option>Region 3</option>
						<option>Region 4</option>
						<option>Region 5</option>
					</select>
				</div>
				<div class="col-md-3 corporate">
					<select class="select-option">
						<option>Select Region</option>
						<option>Region 1</option>
						<option>Region 2</option>
						<option>Region 3</option>
						<option>Region 4</option>
						<option>Region 5</option>
					</select>
				</div>
				<div class="col-md-3 academic">
					<select class="select-option">
						<option>Select Region</option>
						<option>Region 1</option>
						<option>Region 2</option>
						<option>Region 3</option>
						<option>Region 4</option>
						<option>Region 5</option>
					</select>
				</div>
				<div class="col-md-3">
					<select class="select-option">
						<option>Select Region</option>
						<option>Region 1</option>
						<option>Region 2</option>
						<option>Region 3</option>
						<option>Region 4</option>
						<option>Region 5</option>
					</select>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Dropdown</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<div class="dropdown">
						<a href="javascript:;" class="button button-icon-right dropdown-toggle" data-toggle="dropdown">Dropdown <i class="fa fa-chevron-down">&nbsp;</i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="dropdown">
						<a href="javascript:;" class="button button-icon-right dropdown-toggle" data-toggle="dropdown">Dropdown <i class="fa fa-chevron-down">&nbsp;</i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="dropdown">
						<a href="javascript:;" class="button button-icon-right dropdown-toggle" data-toggle="dropdown">Dropdown <i class="fa fa-chevron-down">&nbsp;</i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="dropdown">
						<a href="javascript:;" class="button button-icon-right dropdown-toggle" data-toggle="dropdown">Dropdown <i class="fa fa-chevron-down">&nbsp;</i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Ace / Bond</h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<a href="javascript:;" class="button button-ace"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
					<a href="javascript:;" class="button-border button-icon button-bond"><i class="fa fa-plus">&nbsp;</i> Bond</a>
				</div>
				<div class="col-md-3 corporate">
					<a href="javascript:;" class="button button-ace"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
					<a href="javascript:;" class="button-border button-icon button-bond"><i class="fa fa-plus">&nbsp;</i> Bond</a>
				</div>
				<div class="col-md-3 academic">
					<a href="javascript:;" class="button button-ace"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
					<a href="javascript:;" class="button-border button-icon button-bond"><i class="fa fa-plus">&nbsp;</i> Bond</a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" class="button button-red button-ace"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
					<a href="javascript:;" class="button-border button-icon button-red button-bond"><i class="fa fa-plus">&nbsp;</i> Bond</a>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Tags Edit - <small>Skill, Competency, Profile</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-xsmall dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-xsmall dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-xsmall dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-xsmall dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-small dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-small dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-small dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-small dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-large dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-large dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-large dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-large dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-xlarge dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-xlarge dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-xlarge dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-xlarge dropdown">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<span class="tag-caret">
									16+ <span class="fa fa-angle-down">&nbsp;</span>
								</span>
							</a>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="javascript:;">View People</a></li>
								<li><a href="javascript:;">Enhace this Skill</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Tags Public - <small>Skill, Competency, Profile</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
						<div class="tag-text tag-red tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
						<div class="tag-text tag-darkred tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
						<div class="tag-text tag-green tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
						<div class="tag-text tag-darkgreen tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-xsmall">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-small">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-small">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-small">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-small">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-large">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-large">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-large">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-large">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-xlarge">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-xlarge">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-xlarge">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-xlarge">
							<i class="fa fa-times remove-tag">&nbsp;</i>HTML
							<a href="javascript:;" class="button-ace tag-caret"><i class="fa fa-check display-none">&nbsp;</i> Ace</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Tags - <small>Contact</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Family</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Friend</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Colleague</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Classmate</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Instructor</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Sponsor</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Client</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Supplier</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Partner</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Employee</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Previous Employee</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Staff</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Faculty</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Department</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Student - Graduate</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Student - Doctorate</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Alumni</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Instructor</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Student - Undergraduate</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Lorem Ipsum</div>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Tags - <small>Country</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/AFGHanistan.png" alt="">
							</div>
							Afghanistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALBAnia.png" alt="">
							</div>
							Albania
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALGERIA.png" alt="">
							</div>
							Algeria
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ANDORA.png" alt="">
							</div>
							Andora
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/PAKISTAN.png" alt="">
							</div>
							Pakistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/Palestine.png" alt="">
							</div>
							Palestine
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/AFGHanistan.png" alt="">
							</div>
							Afghanistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALBAnia.png" alt="">
							</div>
							Albania
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALGERIA.png" alt="">
							</div>
							Algeria
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ANDORA.png" alt="">
							</div>
							Andora
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/PAKISTAN.png" alt="">
							</div>
							Pakistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/Palestine.png" alt="">
							</div>
							Palestine
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/AFGHanistan.png" alt="">
							</div>
							Afghanistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALBAnia.png" alt="">
							</div>
							Albania
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALGERIA.png" alt="">
							</div>
							Algeria
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ANDORA.png" alt="">
							</div>
							Andora
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/PAKISTAN.png" alt="">
							</div>
							Pakistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/Palestine.png" alt="">
							</div>
							Palestine
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/AFGHanistan.png" alt="">
							</div>
							Afghanistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALBAnia.png" alt="">
							</div>
							Albania
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ALGERIA.png" alt="">
							</div>
							Algeria
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/ANDORA.png" alt="">
							</div>
							Andora
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/PAKISTAN.png" alt="">
							</div>
							Pakistan
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
						<div class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/countries/Palestine.png" alt="">
							</div>
							Palestine
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Tags - <small>Nationality</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Afghans</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Afghans</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Albanians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Algerians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Americans</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Andorrans</div>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Angolans</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Argentines</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Armenians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Aromanians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Arubans</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Australians</div>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Austrians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Azeris</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Bahamians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Bahrainis</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Bangladeshis</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Barbadians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Belarusians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Belgians</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Belizeans</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Bermudians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Boers</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Bosniaks</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Brazilians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Bretons</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>British</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>British Virgin Islanders</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Bulgarians</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Burmeses</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Burkinabès</div>
						<div class="tag-text tag-border"><i class="fa fa-times remove-tag">&nbsp;</i>Burundians</div>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Tags - <small>People, Company</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-small">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company">
							<div class="user-rounded-thumb user-rounded-20px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-large">
							<div class="user-rounded-thumb user-rounded-26px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
			</div>
			<hr class="minimize-hr-margin">
			<div class="row">
				<div class="col-md-3 individual">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 corporate">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3 academic">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tags-box">
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
						<a href="javascript:;" class="tag-company tag-xlarge">
							<div class="user-rounded-thumb user-rounded-30px pull-left">
								<img src="../images/people_search.jpg" alt="">
							</div>
							Company
							<i class="fa fa-times remove-tag">&nbsp;</i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Tags - <small>Communities</small></h1>
			<hr>
			<div class="row">
				<div class="col-md-3 individual">
					<ul class="list-buffer">
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy text.</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Typesetting industry</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
					</ul>
				</div>
				<div class="col-md-3 corporate">
					<ul class="list-buffer">
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Printing and typesetting industry.</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy.</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Dummy text of the printing.</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
					</ul>
				</div>
				<div class="col-md-3 academic">
					<ul class="list-buffer">
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Typesetting industry.</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy text</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="list-buffer">
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy text.</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
						<li>
							<label class="tag-select invite-checkbox">
								<input type="checkbox" class="hide">
								<div class="user-rounded-thumb user-rounded-44px pull-left right-buffer">
									<img alt="" src="../images/people_search.jpg">
								</div>
								<div class="overflow-hidden">
									<div class="tag-select-title base-font">Ahmad Awais</div>
									<div class="tag-select-subtitle small-font">Lorem Ipsum is simply dummy printing.</div>
								</div>
								<div class="overlay-box">
									<span class="position-center">Selected Now</span>
								</div>
								<i class="fa fa-check tag-selected-icon">&nbsp;</i>
							</label>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="component-block">
			<h1>Pagination</h1>
			<hr>
			<div class="row bottom-buffer">
				<div class="col-md-3 individual">
		            <div class="pagination-box">
		                <a href="javascript:;" class="prev-result active-page"><i class="fa fa-angle-left"></i></a>
		                <a href="javascript:;" class="next-result"><i class="fa fa-angle-right"></i></a>
		                <a href="javascript:;">1</a>
		                <a href="javascript:;">2</a>
		                <a href="javascript:;" class="active-page">3</a>
		            </div>
				</div>
				<div class="col-md-3 corporate">
		            <div class="pagination-box">
		                <a href="javascript:;" class="prev-result active-page"><i class="fa fa-angle-left"></i></a>
		                <a href="javascript:;" class="next-result"><i class="fa fa-angle-right"></i></a>
		                <a href="javascript:;">1</a>
		                <a href="javascript:;">2</a>
		                <a href="javascript:;" class="active-page">3</a>
		            </div>
				</div>
				<div class="col-md-3 academic">
		            <div class="pagination-box">
		                <a href="javascript:;" class="prev-result active-page"><i class="fa fa-angle-left"></i></a>
		                <a href="javascript:;" class="next-result"><i class="fa fa-angle-right"></i></a>
		                <a href="javascript:;">1</a>
		                <a href="javascript:;">2</a>
		                <a href="javascript:;" class="active-page">3</a>
		            </div>
				</div>
				<div class="col-md-3">
		            <div class="pagination-box">
		                <a href="javascript:;" class="prev-result active-page"><i class="fa fa-angle-left"></i></a>
		                <a href="javascript:;" class="next-result"><i class="fa fa-angle-right"></i></a>
		                <a href="javascript:;">1</a>
		                <a href="javascript:;">2</a>
		                <a href="javascript:;" class="active-page">3</a>
		            </div>
				</div>
			</div>
		</div>
		<div class="component-block">
			<div class="row">
				<div class="col-md-6">
					<h1>Thumbs</h1>
					<hr>
					<div class="row">
						<div class="col-md-12 individual">
							<div class="user-rounded-thumb user-rounded-130px pull-left right-buffer">
								<img src="../images/people_search.jpg" alt="">
							</div>
							<div class="user-rounded-thumb user-rounded-80px pull-left right-buffer">
								<img src="../images/people_search.jpg" alt="">
							</div>
							<div class="user-rounded-thumb user-rounded-50px pull-left right-buffer">
								<img src="../images/people_search.jpg" alt="">
							</div>
							<div class="user-rounded-thumb user-rounded-36px pull-left right-buffer">
								<img src="../images/people_search.jpg" alt="">
							</div>
							<div class="user-rounded-thumb user-rounded-30px pull-left right-buffer">
								<img src="../images/people_search.jpg" alt="">
							</div>
							<div class="user-rounded-thumb user-rounded-26px pull-left right-buffer">
								<img src="../images/people_search.jpg" alt="">
							</div>
							<div class="user-rounded-thumb user-rounded-20px pull-left right-buffer">
								<img src="../images/people_search.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h1>Thumbs - <small>with upload image</small></h1>
					<hr>
					<div class="row">
						<div class="col-md-12 individual">
							<label class="user-rounded-thumb user-rounded-130px pull-left right-buffer">
								<input type="file" class="hide">
								<img src="../images/people_search.jpg" alt="">
								<div class="overlay-box">
									<div class="position-center">
										<i class="fa fa-plus">&nbsp;</i>
									</div>
								</div>
							</label>
							<label class="user-rounded-thumb user-rounded-80px pull-left right-buffer">
								<input type="file" class="hide">
								<img src="../images/people_search.jpg" alt="">
								<div class="overlay-box">
									<div class="position-center">
										<i class="fa fa-plus">&nbsp;</i>
									</div>
								</div>
							</label>
							<label class="user-rounded-thumb user-rounded-50px pull-left right-buffer">
								<input type="file" class="hide">
								<img src="../images/people_search.jpg" alt="">
								<div class="overlay-box">
									<div class="position-center">
										<i class="fa fa-plus">&nbsp;</i>
									</div>
								</div>
							</label>
							<label class="user-rounded-thumb user-rounded-36px pull-left right-buffer">
								<input type="file" class="hide">
								<img src="../images/people_search.jpg" alt="">
								<div class="overlay-box">
									<div class="position-center">
										<i class="fa fa-plus">&nbsp;</i>
									</div>
								</div>
							</label>
							<label class="user-rounded-thumb user-rounded-30px pull-left right-buffer">
								<input type="file" class="hide">
								<img src="../images/people_search.jpg" alt="">
								<div class="overlay-box">
									<div class="position-center">
										<i class="fa fa-plus">&nbsp;</i>
									</div>
								</div>
							</label>
							<label class="user-rounded-thumb user-rounded-26px pull-left right-buffer">
								<input type="file" class="hide">
								<img src="../images/people_search.jpg" alt="">
								<div class="overlay-box">
									<div class="position-center">
										<i class="fa fa-plus">&nbsp;</i>
									</div>
								</div>
							</label>
							<label class="user-rounded-thumb user-rounded-20px pull-left right-buffer">
								<input type="file" class="hide">
								<img src="../images/people_search.jpg" alt="">
								<div class="overlay-box">
									<div class="position-center">
										<i class="fa fa-plus">&nbsp;</i>
									</div>
								</div>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).on('change keyup click', '.input-ln input, .input-ln select', function() {
			if ($(this).val() == "" || $(this).val() == null) {
				$(this).closest('.input-ln').removeClass('il-active');
			} else {
				$(this).closest('.input-ln').addClass('il-active');
			}
		});
	</script>
	<script type="text/javascript">
		$(document).on('change', '.user-rounded-thumb input', function (){
			var tmppath = URL.createObjectURL(event.target.files[0]);
			$(this).siblings('img').hide().attr('src',tmppath).fadeIn(1000);

		});
	</script>
</body>
</html>
