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
const flipback = document.getElementById('flip-page-back');
let open  = 0;
let index  = 0;
flip.addEventListener('click', () => {
  console.log('stop');
  const cover = document.getElementById('cover');
  const coverback = document.getElementById('coverback');
  
  const tl = gsap.timeline();
  
  if(open == 0){
    tl.to(cover, {
      duration: .6,
      rotateY: 90,
      transformOrigin: "left",
      ease: "none"
    })
    tl.to(coverback, {
      duration: .6,
      rotateY: 90,
      transformOrigin: "left",
      ease: "none"
    }, "<");
    tl.to(coverback, {
      duration: .6,
      rotateY: 180,
      transformOrigin: "left",
      ease: "none"
    }, );
    open++;
  }else{
    const pages = document.querySelectorAll('.page_book');
    let page;
    let page_back;
    if(index == 0){
      page = pages[index]; 
      page_back = pages[index+1];
      const tl_page = gsap.timeline();
    
      tl_page.to(page, {
        zIndex: 99,
        duration: .6,
        rotateY: 90,
        transformOrigin: "left",
        ease: "none"

      })
      tl_page.to(page_back, {
        zIndex: 99,
        duration: .6,
        rotateY: 90,
        transformOrigin: "left",
        ease: "none"

      })
      tl_page.to(page_back, {
        zIndex: 99,
        duration: .6,
        rotateY: 180,
        transformOrigin: "left",
        ease: "none"

      }, ) 
      }else{
        page = pages[index+1]; 
        page_back = pages[index+2]; 
        const tl_page = gsap.timeline();
      
        tl_page.to(page, {
          zIndex: 99,
          duration: .6,
          rotateY: 90,
          transformOrigin: "left",
          ease: "none"
        })

        tl_page.to(page_back, {
          zIndex: 99,
          duration: .6,
          rotateY: 180,
          transformOrigin: "left",
          ease: "none"
        })
        index++;
    }
    index++;
  }
  
});





flipback.addEventListener('click', () => {

  console.log('stopback');

  const tl = gsap.timeline();
  {
    if(open == 1 && index == 0){
      const cover = document.getElementById('cover');
      const coverback = document.getElementById('coverback');
      const tl = gsap.timeline();
      tl.to(coverback, {
        duration: .6,
        rotateY: 90,
        transformOrigin: "left",
        ease: "none"
      })
      tl.to(cover, {
        duration: .6,
        rotateY: 0,
        transformOrigin: "left",
        ease: "none"
      }, );
      open--;
    }else if(index != 0){
      // index--;
      const pages = document.querySelectorAll('.page_book');
      let page = pages[index-1]; 
      let page_back = pages[index]; 
      console.log(page);
      console.log(page_back);
      const tlback = gsap.timeline();
      tlback.to(page, {
        
        duration: .6,
        rotateY: 0,
        transformOrigin: "left",
        ease: "none"
      })
      
      tlback.to(page_back, {
        duration: .6,
        rotateY: 90,
        transformOrigin: "left",
        ease: "none"
      })
      
      index-=2;
      // page.style.zIndex = "10"; 
      // page_back.style.zIndex = "11"; 
    }   
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



