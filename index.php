<?php require("header.php"); ?>

<script type="text/javascript">
	$(function(){

			// Accordion
			$("#accordion").accordion({ header: "h3" });

			// Tabs
			$('#tabs').tabs();
			$( "a#yoyo" ).click(function() { window.location.href="yoyo.php"; });
			
			$( "input:submit#submit, input:button").button();
			
			


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

			//hover states on the static widgets
			$('#dialog_link, ul#icons li').hover(
				function() { $(this).addClass('ui-state-hover'); }, 
				function() { $(this).removeClass('ui-state-hover'); }
			);
			
		});
	</script>
		
<div id="content">
<header><h2>Writer Mate</h2></header>

<section>

<form action="diaper_form.php" method="post">
	<input type="hidden" name="featureCounterValue" id="featureCounterValue"/>
	<input type="hidden" name="includeCounterValue" id="includeCounterValue"/>
	<input type="hidden" name="addnlFeatureCounterValue" id="addnlFeatureCounterValue"/>
	<input type="hidden" name="careCounterValue" id="careCounterValue"/>

	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Diapers</a></li>
			<li><a href="diaphers.php" id="yoyo">YoYo</a></li>
		</ul>
		<div id="tabs-1">
			<!-- Accordion -->
			<div id="accordion">
				<div>
					<h3><a href="#">Description Tab</a></h3>
					<div>
						<p>
							<label for="prodName">Product Name in Title Case</label>
							<input type="text" id="prodName" name="prodName" />
						</p>
						<p>
							<label for="desc">Description</label>
							<textarea rows="4" cols="75" id="desc" name="desc"></textarea>
						</p>
						<p>
							<label for="loveIt">Why You'll Love It:</label>
							<textarea rows="4" cols="75" id="loveit" name="loveIt"></textarea>
						</p>
						<p>
							<label for="age">Age <span>(mainly use for toys, though you could include it for other products where it makes sense)</span></label>
							<input type="text" id="age" name="age" />
						</p>
						<div id='featureGroup'>		
							<h4>Features: <span> (Max 10 Bullet Points)</span></h4>
							<p id="featureP1">
								<label>Feature #1 : </label><input type='textbox' id='feature1' name='feature1' > <input type="button" onClick="addFeature();" value="Add"/>
							</p>		
						</div>					
						<p>
							<label for="ageLimit">Age/Height/Weight Limits: <span>(used mainly for gear | text and/or bullets)</span></label>
							<input type="text" id="ageLimit" name="ageLimit" />
						</p>
						<div id='includeGroup'>	
							<h4>Includes: <span>(used when product contains multiple elements |text and/or bullets)<br/>[This heading mostly gets used for Gear and Nursery descriptions, though it&apos;s acceptable to use it for other products whenever it makes sense. If the Includes heading will be a bulleted list, then you can omit the colon in the heading (in the same way that Features is styled).]</span></h4>
							<p id="includeP1">
								<label>Point #1 : </label><input type='textbox' id='include1' name='include1' > <input type="button" onClick="addInclude();" value="Add"/>
							</p>		
						</div>
						<p>
							<label for="note">Note</label>
							<input type="text" id="note" name="note" />
						</p>
					</div>
				</div>
				<div>
					<h3><a href="#">More Info</a></h3>
					<div>
						<div id='addnlFeatureGroup'>	
							<h4>Additional Features: <span>(used mainly for gear or products with lots of specs that can’t be communicated in the 10 bullet limit on the Description tab)</span></h4>
							<p id="addnlFeatureP1">
								<label>Feature #1 : </label><input type='textbox' id='addnlFeature1' name='addnlFeature1' > <input type="button" onClick="addAddnlFeature();" value="Add"/>
							</p>		
						</div>
						<div id='careGroup'>	
							<h4>Care: <span>(used mainly for clothing, bedding)</span></h4>
							<p id="careP1">
								<label>Point #1 : </label><input type='textbox' id='care1' name='care1' > <input type="button" onClick="addCare();" value="Add"/>
							</p>		
						</div>
						<p>
							<label for="directions">Directions: <span>(used rarely – only if it&apos;s included in the existing description)</span></label>
							<input type="text" id="directions" name="directions" />
						</p>
						<p>
							<label for="awards">Awards <span>(used mainly for gear, toys)</span></label>
							<input type="text" id="awards" name="awards" />
						</p>
						<p>
							<label for="certification">Certification <span>(used mainly for gear, nursery)</span></label>
							<input type="text" id="certification" name="certification" />
						</p>
						<p>
							<label for="aboutCompany">From the Company <span>(used rarely – only if there&apos;s some interesting “about the company” copy in the vendor provided description that we want to retain)</span></label>
							<textarea rows="4" cols="75" id="aboutCompany" name="aboutCompany"></textarea>
						</p>
						<p>
							<input type="submit" id="submit" value="submit"/>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id="tabs-2"> Worth Waiting ! ... </div>
	</div>
	</form>
</section>
</div>
<?php include("footer.php"); ?>