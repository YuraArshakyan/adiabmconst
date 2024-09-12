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

// window.addEventListener('wheel', function(e){
//     // e.preventDefault();
//     if(e.deltaY  == 100){
//         // document.getElementById('page_content1').scrollIntoView();
//     }else{
//         // window.scrollTo(0, 0);
//     }
//     // console.info(e.deltaY);
// },{ passive:false })
 
// window.onscroll = function (e) {
//     if(window.scrollY > 0){
//         document.querySelector('.main_menue').classList.add('scrolled');
//         document.querySelector('.menue').classList.remove('bb-1px-gray');
//     }else{
//         document.querySelector('.main_menue').classList.remove('scrolled');
//         document.querySelector('.menue').classList.add('bb-1px-gray');
//     }
//     console.log(window.scrollY); // Value of scroll Y in px
// };


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

// let c1 = document.querySelector("#canvas1");


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









//Projects 
// 3D Scroll

let zSpacing = -1000,
	lastPos = zSpacing / 5,
	$frames = document.getElementsByClassName('frame'),
	frames = Array.from($frames),
	zVals = []

window.onscroll = function() {

	let top = document.documentElement.scrollTop,
			delta = lastPos - top

	lastPos = top

	frames.forEach(function(n, i) {
		zVals.push((i * zSpacing) + zSpacing)
		zVals[i] += delta * -5.5
		let frame = frames[i],
				transform = `translateZ(${zVals[i]}px)`,
				opacity = zVals[i] < Math.abs(zSpacing) / 1.8 ? 1 : 0
		frame.setAttribute('style', `transform: ${transform}; opacity: ${opacity}`)
	})

}

window.scrollTo(0, 1)

let soundbutton = document.querySelector('.soundbutton'),
	audio =document.querySelector('.audio')

// soundbutton.addEventListener('click', e => {
// 	soundbutton.classList.toggle('paused')
// 	audio.paused ? audio.play() : audio.pause()
// })

window.onfocus = function() {
	soundbutton.classList.contains('paused') ? audio.pause() : audio.play()
}
window.onblur = function() {
	audio.pause()
}

window.onload = function() {
	// document.querySelector('.preloader1').classList.add('done');
}

$(document).ready(function (){
	setTimeout(() => {
		document.querySelector('.preloader1').classList.add('done');
		document.querySelector('.process_card').classList.add('active');
		document.querySelector('.preloader_under_layer').classList.add('done');
	}, "2000");
});











// process
$(document).ready(function (){
	setTimeout(() => {
		document.querySelector('.process_card').classList.add('active');
	}, "100");
});

addEventListener("wheel", (event) => {
	let $card = document.getElementsByClassName('process_card')
		cards = Array.from($card)
	let current_index;

	for(let i = 0; i <= cards.length-1; i++){
		if(cards[i].classList.contains('active')){
			current_index = i;
			break;
		}
	}

	console.log(current_index);
	var card_active = cards[current_index];
	if(current_index != cards.length-1){
		card_active.classList.remove('active');
		card_active.classList.add('deactive')
		var card_for_active = cards[current_index+1];
		card_for_active.classList.add('active');
	}else{
		for(let i = 0; i <= cards.length-1; i++){
			if(cards[i].classList.contains('deactive')){
				cards[i].classList.remove('deactive');
				// current_index = i;
				// break;
			}else if(cards[i].classList.contains('active')){
				cards[i].classList.remove('active');
			}

		}
		cards[0].classList.add('active');
		current_index = 0;
	}
});
// processEnd

//menue click
$(document).ready(function (){
	document.querySelector('.header_section3').addEventListener('click', function(){
		this.classList.toggle('active');
	});
});
