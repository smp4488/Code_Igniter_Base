<!DOCTYPE html>
<html>

<head>
	<title>Site Name</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- Reset CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/reset.css');?>" type="text/css" media="screen" />
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url('css/ie.css');?>" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="<?php echo base_url('css/1140.css');?>" type="text/css" media="screen" />
	
	<!-- Your styles -->
	<link rel="stylesheet" href="<?php echo base_url('css/styles.css');?>" type="text/css" media="screen" />
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="<?php echo base_url('js/css3-mediaqueries.js');?>"></script>
	
	<!-- MooTools -->
	<script type="text/javascript" src="<?php echo base_url('js/mootools-core-1.4.3-full-compat.js');?>"></script>
</head>
<body>
  <div id="header">
	 <?php $this->load->view('layout/header');?>
  </div><!-- /header -->
  
  <div id="content" class="container">
      	<?php $this->load->view($mainView);?>
  </div><!-- /content -->

  <div id="footer">
  	<?php $this->load->view('layout/footer');?>
  </div><!-- /footer -->

</body>
</html>

