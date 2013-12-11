var anzahl;
var pi = "";
var num = 0;

self.addEventListener("message", function(e){
	if(e.data <= 360000){
		anzahl = e.data*2;
	}
	else{
		pi = e.data;
	}
	for(var i=0;i<=anzahl;i++){
		self.postMessage(pi.charAt(i));
	}
},false);