 	
var selectedState = document.getElementById('stateSelection'); //Select the State from the HTML input.

selectedState.onchange = function(){
	processState(selectedState.value);
};


function processState(state)
{
	$.post('process.php',
	{
		sendState: state
	},
	function(data,err)
	{
		 var stateResult = JSON.parse(data); 
		 stateResult.forEach(element=> console.log(element));
	});
}
