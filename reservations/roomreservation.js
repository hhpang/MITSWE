var submitted = false;
function validateFields() {
	var numInvalid = 0;
	var toCheck = [].concat(Array.prototype.slice.call(document.getElementsByClassName('textfield-short-req')), 
							Array.prototype.slice.call(document.getElementsByClassName('textarea-req')),
							Array.prototype.slice.call(document.getElementsByClassName('textfield-req'))
							);
	for (var i = 0; i < toCheck.length; i++) {
		console.log('hello ' + toCheck[i].value);
		elt = toCheck[i];
		if (elt.value == "") {
			console.log(elt);
			numInvalid++;
			showInvalidBorder(elt);
		}
		else {
			hideInvalidBorder(elt);
		}
	}
	var cbLists = document.getElementsByClassName('twocol-list-req');
	for (var i = 0; i < cbLists.length; i++) {
		checkboxes = cbLists[i].getElementsByTagName('input');
		var checkedBoxes = 0;
		for (var j = 0; j < checkboxes.length; j++) {
			if (checkboxes[j].checked) 
				checkedBoxes++;
		}
		if (checkedBoxes == 0) {
			showInvalidBorder(cbLists[i]);
			numInvalid++;
		}
		else {
			hideInvalidBorder(cbLists[i]);
		}
	}
	if (numInvalid != 0) 
		showErrorMessage();
	else
		submitted=true;
	return numInvalid == 0;
}

function showErrorMessage() {
	var error = document.getElementsByName("invalidErrorMsg")[0];
	error.style.display = "inline-block";
}
function showInvalidBorder(elt) { // Add magenta glow
	elt.style['backgroundColor'] = "rgba(204,0,102,.5)";
}
function hideInvalidBorder(elt) {
	elt.style['backgroundColor'] = "white";
}
