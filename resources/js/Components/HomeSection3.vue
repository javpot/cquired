<script>

import {gsap} from 'gsap'
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);
export default {
    data() {
        return {};
    },
    methods:{
        test(){
            let tl = gsap.timeline()
            let tl2 = gsap.timeline()
            tl.from(".section-3-about>p",{
                duration:0.5,
                opacity:0.2
            })
            tl.to('.h1-title-span',{
                duration:1,
                stagger:0.2,
                color:'white'
            })
            tl.to('.animated-button',{
                duration:0.2,
                opacity:1
            })

            tl2.to('.section-3-benef>h3',{
                duration:0.5,
                opacity:1,
                stagger:0.5
            })
            ScrollTrigger.create({
    trigger:'.section-3-about',
    start:"top 30%",
    end:'38% 30%',
    scrub:true,
    toggleActions:" play reverse none none",
   
    animation:tl,
    
   

})
ScrollTrigger.create({
    trigger:'.section-3-about',
    start:"35% 30%",
    end:'150% 30%',
    toggleActions:" play none none none",
    //markers:true,
    pin:true,
    scrub:'.section-3-benef',
   
    animation:tl2,
    
   

})
        },
        
        
    },
    mounted(){
        this.test()
    }
}
</script>
<template>
    <div class="section-3">
        <div class="section-3-content">
        <div class="section-3-about">
            <p>Cquired is the communication bridge between individuals and businesses. We actively promote business growth by providing precisely tailored services that address the unique needs of people. </p>

            <h1 class="h1-title"><span class="h1-title-span">Why</span> <span class="h1-title-span">choose</span> <span class="h1-title-span">Cquired</span> <span class="h1-title-span">for</span> <span class="h1-title-span">your</span> <span class="h1-title-span">freelance</span> <span class="h1-title-span">demandes</span></h1>

            <!-- btn-->
            <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
                <span class="text">Get started</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
              </button>
              

        </div>
        <div class="section-3-benef">
            <h3>1 - Aucun frais d'inscription</h3>
            <h3>2 - Poster une offre et engager</h3>

            <h3>3 - Travailler avec les meilleurs, tout en respectant votre
                bugdet</h3>


        </div>

    </div>

    </div>
</template>
<style scoped>
/*btn*/
.animated-button {
    opacity: 0;
    position: relative;
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 16px 36px;
    border: 4px solid;
    border-color: transparent;
    font-size: 16px;
    background-color: inherit;
    border-radius: 100px;
    font-weight: 600;
    color: white;
    box-shadow: 0 0 0 2px white;
    cursor: pointer;
    overflow: hidden;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }
  
  .animated-button svg {
    position: absolute;
    width: 24px;
    fill: white;
    z-index: 9;
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  }
  
  .animated-button .arr-1 {
    right: 16px;
  }
  
  .animated-button .arr-2 {
    left: -25%;
  }
  
  .animated-button .circle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    background-color: #6EC3E7;
    border-radius: 50%;
    opacity: 0;
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  }
  
  .animated-button .text {
    position: relative;
    z-index: 1;
    transform: translateX(-12px);
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  }
  
  .animated-button:hover {
    box-shadow: 0 0 0 12px transparent;
    color: #212121;
    border-radius: 12px;
  }
  
  .animated-button:hover .arr-1 {
    right: -25%;
  }
  
  .animated-button:hover .arr-2 {
    left: 16px;
  }
  
  .animated-button:hover .text {
    transform: translateX(12px);
  }
  
  .animated-button:hover svg {
    fill: #212121;
  }
  
  .animated-button:active {
    scale: 0.95;
    box-shadow: 0 0 0 4px greenyellow;
  }
  
  .animated-button:hover .circle {
    width: 220px;
    height: 220px;
    opacity: 1;
  }
  
.section-3{
    height: 100vh;
    width: 100vw;
    background-color: black;
    color: aliceblue;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}
.section-3-content{
    height: 90%;
    width: 100%;
    display: flex;
    justify-content:space-evenly;
    align-items: center;
}
.section-3-about{
    height: 90%;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
   
}
p{
    opacity: 1;
    color: #989896;

}
.h1-title{
    color: #1f1f1e;
}
h1{
    font-size: 3.5em;
    color: #CFCFC8;
}
h3{
    opacity: 0;
    border: 3px solid white;
   
    font-size: 1.5em;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    
    
}
.section-3-benef{
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 200vh;
    width: 40%;
    position: relative;
    top:50%;
    gap:200px;
}
</style>
