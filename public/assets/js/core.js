// scrolled();
// function scrolled(){
//     if(window.scrollY > 0){
//         document.querySelector('.main_menue').classList.add('scrolled');
//         document.querySelector('.menue').classList.remove('bb-1px-gray');
//     }else{
//         document.querySelector('.main_menue').classList.remove('scrolled');
//         document.querySelector('.menue').classList.add('bb-1px-gray');
//     }
//     console.log(window.scrollY); // Value of scroll Y in px
// }

window.addEventListener('wheel', function(e){
    // e.preventDefault();
    if(e.deltaY  == 100){
        // document.getElementById('page_content1').scrollIntoView();
    }else{
        // window.scrollTo(0, 0);
    }
    // console.info(e.deltaY);
},{ passive:false })

window.onscroll = function (e) {
    if(window.scrollY > 0){
        document.querySelector('.main_menue').classList.add('scrolled');
        document.querySelector('.menue').classList.remove('bb-1px-gray');
    }else{
        document.querySelector('.main_menue').classList.remove('scrolled');
        document.querySelector('.menue').classList.add('bb-1px-gray');
    }
    // console.log(window.scrollY); // Value of scroll Y in px
};


// document.getElementById('vid').play();


// const v = document.querySelector("video");

// let c = document.querySelector("#canvas0");

// setInterval(setActive, 1000)

// function setActive(){
//     let SC1 = document.querySelector(".part1");
//     let SC2 = document.querySelector(".part2");
//     SC1.classList.add('active');
//     SC2.classList.add('active');
// }


// let ctx = c.getContext("2d");
// let i;
// function draw() {
//     let times = v.videoWidth/1000;
//     let vHeight = v.videoHeight/times;
//     let videoWidth = window.innerWidth;
//     c.width = videoWidth;
//     c.height = window.innerHeight/2; 

//     i = window.requestAnimationFrame(draw)
//     ctx.drawImage(v, 0, 0, window.innerWidth, window.innerHeight)
// }
// draw()

let c1 = document.querySelector("#canvas1");


// let ctx1 = c1.getContext("2d");
// let k;
// function draw1() {
//     let times1 = v.videoWidth/1000;
//     let vHeight1 = v.videoHeight/times1;
//     c1.width = window.innerWidth;
//     c1.height = window.innerHeight/2; 

//     k = window.requestAnimationFrame(draw1)
//     ctx1.drawImage(v, 0, -652, window.innerWidth, window.innerHeight)
// }
// draw1()










$(document).ready(function (){
	setTimeout(() => {
		document.querySelector('.preloader1').classList.add('done');
		// document.querySelector('.process_card').classList.add('active');
		document.querySelector('.preloader_under_layer').classList.add('done');
	}, "2000");
});



//menue click
$(document).ready(function (){
	var menue_active = document.querySelector('.open_menue');
	document.querySelector('.header_section3').addEventListener('click', function(){
		this.classList.toggle('active');
		menue_active.classList.toggle('active');
	});
});

var links = document.querySelectorAll('.nav_item');
var rightContainer = document.querySelector('.silde_right_menue');
var img_for_right_container =  rightContainer.querySelectorAll('img');
let currentIndexfor_right = 0;
let scroll_index_for_right_bar = 0;
let right_image_top_offset;
let right_next_image;

var leftContainer = document.querySelector('.side_left_menue');
var img_for_left_container =  leftContainer.querySelectorAll('img');
let currentIndexfor_left = 0;
let scroll_index_for_left_bar = 0;
let left_image_top_offset;
let left_next_image;
let max_index = img_for_left_container.length -1;

$(document).ready(function(){
	

	links.forEach(links =>{
		links.addEventListener("mouseover", function(){
			
			
			currentIndexfor_right++;
			if(currentIndexfor_right > max_index){
				currentIndexfor_right = 0;
			}
			console.log(currentIndexfor_right);
			right_next_image = img_for_right_container[currentIndexfor_right];
			right_image_top_offset = right_next_image.offsetTop;
			scroll_index_for_right_bar = right_image_top_offset - (rightContainer.clientHeight / 2) + (right_next_image.clientHeight / 2);
			rightContainer.scrollTo({
				top: scroll_index_for_right_bar,
				behavior: 'smooth'
			});
			scroll_index_for_right_bar


			currentIndexfor_left++;
			if(currentIndexfor_left > max_index){
				currentIndexfor_left = 0;
			}
			left_next_image = img_for_left_container[currentIndexfor_left];

			left_image_top_offset = left_next_image.offsetTop;

			scroll_index_for_left_bar = left_image_top_offset - (leftContainer.clientHeight / 2) + (left_next_image.clientHeight / 2);
			leftContainer.scrollTo({
				top: scroll_index_for_left_bar,
				behavior: 'smooth'
			});


			scroll_index_for_right_bar;

			// nextContainer.scrollTo({
			// 	top: scroll_index_for_right_bar,
			// 	behavior: 'smooth'
			// });

			var lines = links.querySelectorAll('.transperent_line');
			lines.forEach(lines => {
				lines.classList.add('active');
			});
			

			// console.log(currentIndex);

			// currentIndex = (currentIndex + 1) % images.length;

			
		
			// Calculate the position to center the image
			// console.log(containerHeight);


		
			// Scroll to the calculated position
			
		});
		links.addEventListener("mouseout", function(){
			var lines = links.querySelectorAll('.transperent_line');
			lines.forEach(lines => {
				lines.classList.remove('active');
			});
		});
	});
});




var deactivated = document.querySelectorAll('.deactivated');

$(document).ready(function (){
	// deactivated.forEach(deactivated =>{
		document.addEventListener("click", function(event){
			if (event.target.classList.contains('deactivated')) {
				var activated = document.querySelector('.activated');
				if (activated) {
					activated.classList.remove('activated');
					activated.classList.add('deactivated');
				}
	
				event.target.classList.remove('deactivated');
				event.target.classList.add('activated');
			}
		});
});


var color_change = document.querySelector('.other');
window.onscroll = function (e) {
    // console.log(window.scrollY);
};