import { ScrollTrigger } from './ScrollTrigger.js'

import "./ScrollToPlugin.js";



let contacts = document.getElementById('Contacts');
let about = document.getElementById('AboutUs');
let menue = document.querySelector('.open_menue');
let menue_buttton = document.querySelector('.header_section3');

$(document).ready(function(){
  $(contacts).on('click', function(){
    console.log('stop');
    menue.classList.remove('active');
    menue_buttton.classList.remove('active');
    gsap.to(window, { duration: 6, scrollTo: "#ContactsScrollTo" });
  });
  $(about).on('click', function(){
    console.log('stop');
    menue.classList.remove('active');
    menue_buttton.classList.remove('active');
    gsap.to(window, { duration: 6, scrollTo: "#aboutUsScrollId" });
  });
})
function contactUs(){
  // gsap.to(window, { duration: 2, scrollTo: "#someID" });
}
 



let scroll_permited = false;
let myDiv = document.getElementById('.frontTirth');
let x;
const other = document.querySelector('.other');
if(window.screen.width >= 1024){
  window.addEventListener('wheel', function(e){
    if(clip  == 0){
      scroll_permited = true;
    }
    // console.log($(window).scrollTop());
  
    x = (($(window).scrollTop()) - ($('.frontTirth').offset().top));
    if(x > 720){
      other.classList.add('linergradbg');
    }else{
      other.classList.remove('linergradbg');
    }
  })
}else{
  window.addEventListener('touchmove', function(e) {
    

    if(top_position == 0 && clip == 0){
      scroll_permited = true;
      console.log(scroll_permited);
    }


    var scrollY = window.pageYOffset;
    if(scrollY >= 4700){
      other.classList.add('linergradbg');
    }else{
      other.classList.remove('linergradbg');
    }
  });
}

gsap.to('.frontSecond', {
  scrollTrigger: {
    trigger: '.frontSecond',
    pin: true,
    start: 'top top',
    endTrigger: scroll_permited ? '+=900' : 'top top',
    id: "myScrollTriggerId",
    onUpdate: (self) => {
      if (scroll_permited) {
        // $('.frontSecond').scrollTop(0);
        // myDiv.scrollTop = 0;
        ScrollTrigger.getById("myScrollTriggerId").kill(); // Replace with actual ID
      }
    }
  }
});


const flip = document.getElementById('flip-page');
const flipback = document.getElementById('flip-page-back');
let open  = 0;
let index  = 0;

if (window.screen.width >= 1024){
  flip.addEventListener('click', () => {
    const cover = document.getElementById('cover');
    const coverback = document.getElementById('coverback');
    const deleteZindex = document.querySelector('.first');
    

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
        ease: "none",
        onComplete: () => {
          deleteZindex.classList.add('z-index-auto');
        }

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
          duration: .6,
          rotateY: 90,
          transformOrigin: "left",
          ease: "none"

        }, "<")
        tl_page.to(page_back, {
          duration: .6,
          rotateY: 90,
          transformOrigin: "left",
          ease: "none"

        }, "<")
        tl_page.to(page_back, {
          duration: .6,
          rotateY: 180,
          transformOrigin: "left",
          ease: "none",
          onComplete: () => {
            page_back.classList.add('z-index-auto');
          }

        }, ) 
        }else{
          page = pages[index+1]; 
          page_back = pages[index+2]; 
          const tl_page = gsap.timeline();
        
          tl_page.to(page, {
            duration: .6,
            rotateY: 90,
            transformOrigin: "left",
            ease: "none"
          }, "<")
          tl_page.to(page_back, {
            duration: .6,
            rotateY: 90,
            transformOrigin: "left",
            ease: "none"
          }, "<")
          tl_page.to(page_back, {
            duration: .6,
            rotateY: 180,
            transformOrigin: "left",
            ease: "none",
            onComplete: () => {
              page_back.classList.add('z-index-auto');
            }
          }, )
          index++;
      }
      index++;
    }
    
  });





  flipback.addEventListener('click', () => {


    const tl = gsap.timeline();
    {
      if(open == 1 && index <= 0){

        const cover = document.getElementById('cover');
        const coverback = document.getElementById('coverback');
        const tl = gsap.timeline();
        const deleteZindex = document.querySelector('.first');
        deleteZindex.classList.remove('z-index-auto');
        
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

        const tlback = gsap.timeline();
        tlback.to(page_back, {
          duration: .6,
          rotateY: 0,
          transformOrigin: "left",
          ease: "none"
          
        }, "<")
        tlback.to(page, {
          duration: .6,
          rotateY: 0,
          transformOrigin: "left",
          ease: "none"
        })
        
        index-=2;
        // page.style.zIndex = "10"; 
        // page_back.style.zIndex = "11"; 
      }   
    }
  });
}else{

  flip.addEventListener('click', () => {
    const cover = document.getElementById('cover');
    const deleteZindex = document.querySelector('.first');
    

    const tl = gsap.timeline();
    
    if(open == 0){
      tl.to(cover, {
        duration: .6,
        rotateY: 90,
        transformOrigin: "left",
        ease: "none"
      })
      open++;
      
    }else{
      const pages = document.querySelectorAll('.page_book');
      let page;
      let page_back;
      if(index == 0){
        const coverback = document.getElementById('coverback');
        const tl_page = gsap.timeline();
        tl_page.to(coverback, {
          duration: .6,
          rotateY: 90,
          transformOrigin: "left",
          ease: "none"
          
        }, "<")

      }else{
        page = pages[index-1]; 

        console.log(index);
        const tl_page = gsap.timeline();
      
        tl_page.to(page, {
          duration: .6,
          rotateY: 90,
          transformOrigin: "left",
          ease: "none"
        }, "<")
      }
      index++;
    }
  });



  flipback.addEventListener('click', () => {
    if(index != 0){
      const pagesflip_back = document.querySelectorAll('.page_book');
      let pageback = pagesflip_back[index-1]; 
  
      const tl = gsap.timeline();
  
      tl.to(pageback, {
        duration: .6,
        rotateY: 0,
        transformOrigin: "left",
        ease: "none"
      }, "<")
      index--;
    }else{
      console.log('min value for index');
    }
    
  });


}

// // gsap.to('.projects', {
// //   scrollTrigger: {
// //     trigger: '.projects',
// //     pin: true,
// //     start: 'top top',
// //     end: '+=2400',
// //     scrub: 1
// //   }
// // });



