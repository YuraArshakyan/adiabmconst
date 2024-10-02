import { ScrollTrigger } from './ScrollTrigger.js'



const flip = document.getElementById('flip-page');

flip.addEventListener('click', () => {
  const cover = document.getElementById('cover');
  const coverback = document.getElementById('coverback');
  
  const tl = gsap.timeline();
  
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



