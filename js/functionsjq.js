function resetValues() {
    $('#sub').empty();
    $('#sub').append(new Option('Please select', '', true, true));	
    $('#sub').attr("disabled", "disabled");	
	$('#sub').empty();
    $('#sub').append(new Option('Please select', '', true, true));	
    $('#sub').attr("disabled", "disabled");	
}

function populateType(xmlindata) {
alert("khan");
var mySelect = $('#sub');
$('#sub').removeAttr('disabled');    
$(xmlindata).find("sub").each(function()
  {
  optionValue=$(this).find("id").text();
  optionText =$(this).find("name").text();
   mySelect.append($('<option></option>').val(optionValue).html(optionText));	
  });
}