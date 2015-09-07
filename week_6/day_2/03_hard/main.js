window.onload = function() {
        
        var element = document.getElementById("red-ventures-numbers");
        
        for(var i = 1; i <= 100; i++) {
            if (i % 15 === 0 ) {
                element.innerHTML = element.innerHTML +  "</br> Red Ventures";
            }
            if (i % 3 === 0) {
				element.innerHTML = element.innerHTML + "<br /> Red";
            }
		    if (i % 5 === 0) {
				element.innerHTML = element.innerHTML + "<br /> Ventures";
			}
      }  
    };