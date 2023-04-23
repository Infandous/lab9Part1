const testimonials = document.querySelectorAll('.testimonial'); //select all items of class testimonial
let index=0; //var to store index
const interval=5000; //milliseconds between scrolling

//function to scroll the testimonials
function scroll(){
	testimonials[index].classList.remove('on'); //remove 'on' class from the testimonial at index
	index = (index+1)%testimonials.length; //increment index
	
	testimonials[index].classList.add('on'); //add class 'on' to testimonial at index
	
	//create scrolling effect
	const transformVal = `translateX(-${index*100}%)`;
	testimonials.forEach(testimonial => {
		testimonial.style.transform = transformVal;
	});
}

//set interval
setInterval(scroll,interval);
