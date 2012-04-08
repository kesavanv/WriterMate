<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div id="content">
		
		<?php
		$oB = "&lt;b&gt;";
		$cB = "&lt;/b&gt;";
		$oP = "&lt;p&gt;";
		$cP = "&lt;/p&gt;";
		$oUl = "&lt;ul&gt;";
		$cUl = "&lt;/ul&gt;";
		$oLi = "&lt;li&gt;";
		$cLi = "&lt;/li&gt;";
		$br = "&lt;br/&gt;";
		
		$featureCounter = $_POST["featureCounterValue"]; 
		$includeCounter = $_POST["includeCounterValue"]; 
		$addnlFeatureCounter = $_POST["addnlFeatureCounterValue"]; 
		$careCounter = $_POST["careCounterValue"]; 

		$prodName = $oB.$_POST["prodName"].$cB.$br;
		$desc = $oP.$_POST["desc"].$cP.$br;
		$loveIt = $oB."Why You'll Love It: ".$cB.$_POST["loveIt"].$br.$br;
		$age =   $oB."Age: ".$cB.$_POST["age"].$br.$br;
		$fabric =   $oB."Fabric: ".$cB.$_POST["fabric"].$br.$br;
		$ageLimit = $oB."Age/Height/Weight Limits: ".$cB.$_POST["ageLimit"].$br.$br;
		$compatibility =   $oB."Compatibility: ".$cB.$_POST["compatibility"].$br.$br;
		$batteries =   $oB."Required Batteries: ".$cB.$_POST["batteries"].$br.$br;
		$author =   $oB."Author: ".$cB.$_POST["author"].$br.$br;
		$illustrator =   $oB."Illustrator: ".$cB.$_POST["illustrator"].$br.$br;
		$rlevel =   $oB."Reading Level: ".$cB.$_POST["rlevel"].$br.$br;
		$pagenos =   $oB."Number of Pages: ".$cB.$_POST["pagenos"].$br.$br;
		$format =   $oB."Format: ".$cB.$_POST["format"].$br.$br;
		$note = $oB."NOTE: ".$cB.$_POST["note"].$br;
		
		$directions = $oB."Directions: ".$cB.$_POST["directions"].$br;
		$awards = $oB."Awards: ".$cB.$_POST["awards"].$br;
		$certification = $oB."Certification: ".$cB.$_POST["certification"].$br;
		$aboutCompany = $oB."From the Company: ".$cB."<br/>".$oP.$_POST["aboutCompany"].$cP.$br;
				
		echo "<p>DESCRIPTION TAB</p>";
		
		if(!empty($_POST["prodName"])){
			echo "<br/>".$prodName. "<br/>";
		}
		if(!empty($_POST["desc"])){
			echo "<br/>".$desc. "<br/>";
		}
		if(!empty($_POST["loveIt"])){
			echo "<br/>".$loveIt. "<br/>";
		}
		if(!empty($_POST["age"])){
			echo "<br/>".$age. "<br/>";
		}
		if(!empty($_POST["fabric"])){
			echo "<br/>".$fabric. "<br/>";
		}
		if(!empty($_POST["feature1"])){
			if($featureCounter>1){
				echo "<br/>".$oB."Features ".$cB."<br/>".$oUl;
				for($i=1; $i<$featureCounter; $i++){
					if(!empty($_POST["feature".$i])){
						echo "<br/>".$oLi.$_POST["feature".$i].$cLi;
					}
				}
				echo "<br/>".$cUl."<br/>";
			}
			else{
				echo "<br/>".$oB."Features: ".$cB.$_POST["feature1"].$br."<br/>";
			}
		}
		if(!empty($_POST["ageLimit"])){
			echo "<br/>".$ageLimit. "<br/>";
		}
		if(!empty($_POST["include1"])){
			echo "<br/>".$oB."Includes: ".$cB."<br/>".$oUl;
			for($i=1; $i<$includeCounter; $i++){
				if(!empty($_POST["include".$i])){
					echo "<br/>".$oLi.$_POST["include".$i].$cLi;
				}
			}
			echo "<br/>".$cUl."<br/>";
		}
		if(!empty($_POST["compatibility"])){
			echo "<br/>".$compatibility. "<br/>";
		}
		if(!empty($_POST["batteries"])){
			echo "<br/>".$batteries. "<br/>";
		}
		if(!empty($_POST["author"])){
			echo "<br/>".$author. "<br/>";
		}
		if(!empty($_POST["illustrator"])){
			echo "<br/>".$illustrator. "<br/>";
		}
		if(!empty($_POST["rlevel"])){
			echo "<br/>".$rlevel. "<br/>";
		}
		if(!empty($_POST["pagenos"])){
			echo "<br/>".$pagenos. "<br/>";
		}
		if(!empty($_POST["format"])){
			echo "<br/>".$format. "<br/>";
		}
		if(!empty($_POST["note"])){
			echo "<br/>".$note."<br/>";
		}
		
		if((!empty($_POST["addnlFeature1"])) || (!empty($_POST["care1"])) || (!empty($_POST["directions"])) || (!empty($_POST["awards"])) || (!empty($_POST["certification"])) || (!empty($_POST["aboutCompany"]))){				
			echo "<br/>"."<p>MORE INFO TAB</p>";
		}
		
		if(!empty($_POST["addnlFeature1"])){
			echo "<br/>".$oB."Additional Features: ".$cB."<br/>".$oUl;
			for($i=1; $i<$addnlFeatureCounter; $i++){
				if(!empty($_POST["addnlFeature".$i])){
					echo "<br/>".$oLi.$_POST["addnlFeature".$i].$cLi;
				}
			}
			echo "<br/>".$cUl."<br/>";
		}
		if(!empty($_POST["care1"])){
			echo "<br/>".$oB."Care: ".$cB."<br/>".$oUl;
			for($i=1; $i<$careCounter; $i++){
				if(!empty($_POST["care".$i])){
					echo "<br/>".$oLi.$_POST["care".$i].$cLi;
				}
			}
			echo "<br/>".$cUl."<br/>";
		}
		if(!empty($_POST["directions"])){
			echo "<br/>".$directions. "<br/>";
		}
		if(!empty($_POST["awards"])){
			echo "<br/>".$awards. "<br/>";
		}
		if(!empty($_POST["certification"])){
			echo "<br/>".$certification. "<br/>";
		}
		if(!empty($_POST["aboutCompany"])){
			echo "<br/>".$aboutCompany. "<br/>";
		}
	?>
	</div>
</body>
</html>