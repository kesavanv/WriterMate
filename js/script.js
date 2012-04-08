/******Functions**********/
var featureCounter = 2; 
var includeCounter = 2; 
var addnlFeatureCounter = 2; 
var careCounter=2;

function addFeature(){
	var item="feature";
	if(featureCounter>10){
			alert("Only 10 instances of " + item +" allowed");
			return false;
	}   	 
	var itemP = item +"p"; 
	var itemWrap = $(document.createElement('p')).attr("id", item + featureCounter);
	itemCount=item+featureCounter;
	itemWrap.html('<label>'+ item +' #'+ featureCounter + ' : </label>' + '<input type="text" name="'+ item + featureCounter + '" id="'+ item + featureCounter + '" value="" ><input type="button" onClick="addFeature()"; value="Add" class="ui-button ui-widget ui-state-default ui-corner-all"/><input type="button" value="remove" onClick="featureCounter--; $(this).parent().remove();  return false;" class="ui-button ui-widget ui-state-default ui-corner-all">');
	var group=  "#" + item +"Group";
	itemWrap.appendTo(group);	 	 
	featureCounter++;
	$('#featureCounterValue').val(featureCounter);	
}
function addInclude(){
	var item="include";
	if(includeCounter>10){
			alert("Only 10 instances of " + item +" allowed");
			return false;
	}   	 
	var itemP = item +"p"; 
	var itemWrap = $(document.createElement('p')).attr("id", item + includeCounter);
	itemCount=item+includeCounter;
	itemWrap.html('<label> Point #'+ includeCounter + ' : </label>' + '<input type="text" name="'+ item + includeCounter + '" id="'+ item + includeCounter + '" value="" ><input type="button" onClick="addInclude()"; value="Add"/><input type="button" value="remove" onClick="includeCounter--; $(this).parent().remove();  return false;">');
	var group=  "#" + item +"Group";
	itemWrap.appendTo(group);	 	 
	includeCounter++;
	$('#includeCounterValue').val(includeCounter);	
}
function addAddnlFeature(){
	var item="addnlFeature";
	if(addnlFeatureCounter>10){
			alert("Only 10 instances of " + item +" allowed");
			return false;
	}   	 
	var itemP = item +"p"; 
	var itemWrap = $(document.createElement('p')).attr("id", item + addnlFeatureCounter);
	itemCount=item+addnlFeatureCounter;
	itemWrap.html('<label>Feature #'+ addnlFeatureCounter + ' : </label>' + '<input type="text" name="'+ item + addnlFeatureCounter + '" id="'+ item + addnlFeatureCounter + '" value="" ><input type="button" onClick="addAddnlFeature()"; value="Add"/><input type="button" value="remove" onClick="addnlFeatureCounter--; $(this).parent().remove();  return false;">');
	var group=  "#" + item +"Group";
	itemWrap.appendTo(group);	 	 
	addnlFeatureCounter++;
	$('#addnlFeatureCounterValue').val(addnlFeatureCounter);	
}
function addCare(){
	var item="care";
	if(careCounter>10){
			alert("Only 10 instances of " + item +" allowed");
			return false;
	}   	 
	var itemP = item +"p"; 
	var itemWrap = $(document.createElement('p')).attr("id", item + careCounter);
	itemCount=item+careCounter;
	itemWrap.html('<label> Point #'+ careCounter + ' : </label>' + '<input type="text" name="'+ item + careCounter + '" id="'+ item + careCounter + '" value="" ><input type="button" onClick="addCare()"; value="Add"/><input type="button" value="remove" onClick="careCounter--; $(this).parent().remove();  return false;">');
	var group=  "#" + item +"Group";
	itemWrap.appendTo(group);	 	 
	careCounter++;
	$('#careCounterValue').val(careCounter);	
}

$('#featureCounterValue').val(featureCounter);
$('#includeCounterValue').val(includeCounter);	
$('#addnlFeatureCounterValue').val(addnlFeatureCounter);
$('#careCounterValue').val(careCounter);