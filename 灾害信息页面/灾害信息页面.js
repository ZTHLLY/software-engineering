var images = document.getElementsByClassName("image-slide");
var text = document.getElementsByClassName("blank");

var index = 0;


function nextOne(){
	index++;
	if (index >= images.length) index=0
	for(var i=0;i<images.length;i++){
	    images[i].style.display='none';
		text[i].style.display=" none";
		
	}
	images[index].style.display='block';
	text[index].style.display=" block";
	
}
//效果
function lastOne() {
    index--;
    if(index<0) index=images.length-1;
	for(var i=0;i<images.length;i++){
	    images[i].style.display='none';
		text[i].style.display=" none";
		
	}
	images[index].style.display='block';
	text[index].style.display=" block";
	
}
function alert(class_name){
	choosed = class_name;
	for(var i=0;i<branch.length;i++){
		branch[i].style.background = "rgb(56, 182, 255)";
	}
	branch[choosed].style.background = "#0094cb"
}

setInterval(nextOne,3000);