<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>WriterMate</title>
        <!-- <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'> -->
		<link rel="stylesheet" href="css/style.css">
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
		
		
		<script src="js/script.js"></script> 
        <style type="text/css">
            
        </style>
		<script type="text/javascript">
		$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });
	
				// Tabs
				$('#tabs').tabs();
	

				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() { 
							$(this).dialog("close"); 
						}, 
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
				
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});
				
				// Progressbar
				$("#progressbar").progressbar({
					value: 20 
				});
				
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});
		</script>
    </head>

    <body>