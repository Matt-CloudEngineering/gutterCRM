<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title><?php echo $title." -- GutterCleanouts.com" ?></title>

<?=link_tag('css/bootstrap.min.css')?>
<?=link_tag('css/logo-nav.css')?>
<?=link_tag('css/gutter2.css')?>

<?=link_tag('assets/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.css')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="<? base_url() ?>assets/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.js" type="text/javascdript"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
<?=link_tag('css/ie10-viewport-bug-workaround.css')?> -->


<!-- Custom styles for this template -->
<?=link_tag('css/sticky-footer.css')?> 

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="author" content="Matt Smith" >
<meta name="keywords" content="gutter+cleaning,cleaning,gutters,cleanouts,clogs,debris,leaves,roofs,houses">
<meta name="description" content="A local upstate NY company that provides gutter cleaning and repair services">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41964828-1', 'guttercleanouts.com');
  ga('send', 'pageview');



</script>
<meta name="geo.region" content="US-NY" />
<meta name="geo.position" content="42.877488;-73.778606" />
<meta name="ICBM" content="42.877488, -73.778606" />

</head>
	<body>
		<!-- Page Content -->
		<div class="container">
		    <div class="row">
		        <div class="col-sm-4">
        	        <h3>|| <?php echo $title; ?> ||</h3>
      	    </div>
            <div class="col-sm-4">
            <?php 

            if(isset($message) && isset($status))
              {
                echo "<div class='alert ".$status."'>".$message."</div>";
              };

  	        ?>
          </div>
            <div class="col-sm-8">
  		        <strong><?php echo "Customer Count:".$summary."&nbsp;"; ?></strong>
  		        <strong><?php echo "Jobs Count:".$jobs_summ."<br/>"; ?></strong>
    		    </div>
		        
		    </div>
		</div>
		<!-- /.container -->

