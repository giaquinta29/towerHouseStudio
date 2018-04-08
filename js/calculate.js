/*
	

*/
function funcCalculate(x, y, operation){
        
        $.ajax({
				type:  'GET',
				url:   'calculate.php',
				contentType: "application/json; charset=utf-8", 
                data:  {"x" : x,
						"y" : y,
						"operation" : operation},
                success:  function (response) {
					
						$("#results").html(response);
					
                        
                }
				
        });
}