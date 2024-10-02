import { ScrollTrigger } from './ScrollTrigger.js'


let scroll_permited = false;
window.addEventListener('wheel', function(e){
  if(scale  == 1){
    scroll_permited = true;
    console.log(scroll_permited);
  }
})
gsap.to('.frontSecond', {
  
  scrollTrigger: {
    trigger: '.frontSecond',
    pin: true,
    start: 'top top',
    // No end specified  
    endTrigger: scroll_permited,
  }
});


const flip = document.getElementById('flip-page');
let open  = 0;
let index  = 0;
flip.addEventListener('click', () => {
  const cover = document.getElementById('cover');
  const coverback = document.getElementById('coverback');
  
  const tl = gsap.timeline();
  
  if(open == 0){
    tl.to(cover, {
      duration: 2.6,
      rotateY: 90,
      transformOrigin: "left",
      ease: "none"
    })
    tl.to(coverback, {
      duration: 2.6,
      rotateY: 90,
      transformOrigin: "left",
      ease: "none"
    }, "<");
    tl.to(coverback, {
      duration: 2.6,
      rotateY: 180,
      transformOrigin: "left",
      ease: "none"
    }, );
    open++;
  }else{
    const pages = document.querySelectorAll('.page_book');
    let page = pages[index]; 
    let page_back = pages[index+1]; 
    gsap.to(page, {
      duration: 2.6,
      rotateY: 180,
      transformOrigin: "left",
      ease: "none",
      zIndex: 99
    })
    gsap.to(page_back, {
      duration: 2.6,
      rotateY: 180,
      transformOrigin: "left",
      ease: "none",
      zIndex: 99
    })
    index++;
  }
  
});

// gsap.to('.projects', {
//   scrollTrigger: {
//     trigger: '.projects',
//     pin: true,
//     start: 'top top',
//     end: '+=2400',
//     scrub: 1
//   }
// });



