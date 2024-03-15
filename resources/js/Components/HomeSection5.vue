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

        tl.from('.section-5-title',{
          duration:1,
          y:150,
          opacity: 0,
        })

        ScrollTrigger.create({
    trigger:'.section-5',
    start:"-25% 30%",
    end:'top 80%',
    toggleActions:" play reverse none none",
   //markers:true,
    animation:tl,
    
    
   

})

      }
        
        
    },
    mounted(){
      this.test()
       
    }
}
</script>
<template>
    <div class="section-5">
        <div class="section-5-content">
          <div class="section-5-title-content">
            <h1 class="section-5-title">Interested ?</h1>
            <p>So do not waste time and come live an unforgettable experience.</p>
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
         

    </div>

    </div>
</template>
<style scoped>
.animated-button {
  opacity: 1;
  position: relative;
  display: flex;
  align-items: center;
  gap: 4px;
  padding: 13px 36px;
  border: 4px solid;
  border-color: transparent;
  font-size: 16px;
  background-color: inherit;
  border-radius: 100px;
  font-weight: 600;
  color: black;
  box-shadow: 0 0 0 2px black;
  cursor: pointer;
  overflow: hidden;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}

.animated-button svg {
  position: absolute;
  width: 24px;
  fill: black;
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
.section-5{
 background-color: white;
  min-height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}
.section-5-content{
  height: 100%;
  width: 90%;
}
.section-5-title-content{
  height: 40vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  

}
.section-5-title-content>h1{
  text-align: center;
  width:100%;
  font-size: 3.5em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
    opacity: 1;
}


</style>
