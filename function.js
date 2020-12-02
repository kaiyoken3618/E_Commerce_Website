var effect = document.getElementById("effect"); 
effect.style.maxHeight = "0px"; 
function menutoggle() 
{ 
	if(effect.style.maxHeight == "0px") 
		{ 
			effect.style.maxHeight = "200px";
		}  
	else 
		{ 
			effect.style.maxHeight = "0px";
		}
}