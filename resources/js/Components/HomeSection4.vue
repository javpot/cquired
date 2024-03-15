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
        
        let tl3 = gsap.timeline()
        
      
        tl2.to('.section-4-title',{
                duration:1,
                stagger:0.2,
                color:'black'
            })
        tl.to('li>span',{
                duration:1,
                stagger:0.2,
                color:'black'
            })



          
        
            ScrollTrigger.create({
    trigger:'.section-4-content',
    start:"top 30%",
    end:'90% 30%',
    scrub:true,
    toggleActions:" play reverse none none",
  //markers:true,
    animation:tl,
    
    
   

})
ScrollTrigger.create({
    trigger:'.section-4-content',
    start:"top 30%",
    end:'top 80%',
    
    toggleActions:" play reverse none none",
   
    animation:tl2,
    
    
   

})

      }
      
        
        
    },
    mounted(){
      this.test()
       
    }
}
</script>
<template>
    <div class="section-4">
        <div class="section-4-content">
          <div class="section-4-title-content">
            <h1 class="section-4-title">What are the advantage that you get with Cquired</h1>
          </div>
          <div class="section-4-business-content">
            <h2>Business</h2>
            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>
            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

          </div>
          <div class="section-4-freelancer-content">
            <h2>Freelancer</h2>
            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>
            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

          </div>
          <div class="section-4-client-content">
            <h2>Client</h2>
            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>
            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

            <li> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span> <span>Lorem</span></li>

          </div>
          
          
        

    </div>

    </div>
</template>
<style scoped>
.section-4{
 background-color: white;
  min-height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}
.section-4-content{
  height: 100%;
  width: 90%;
}
.section-4-title-content{
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
 

}

.section-4-title-content>h1{
  text-align: right;
  width: 50%;
  font-size: 3.5em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
    color: rgb(244, 244, 244);
}
.section-4-business-content{
  height: 100vh;
  width: 50%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  line-height: 1.6;

  

  
}
.section-4-business-content>h2{
  font-size: 3.5em;
  font-family: "Onest", sans-serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
}.section-4-business-content>li{
  color: white;
}
.section-4-freelancer-content{
  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-end;
  line-height: 1.6;

  

  
}
.section-4-freelancer-content>h2{
  text-align: center;
  font-size: 3.5em;
  font-family: "Onest", sans-serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;

}

.section-4-freelancer-content>li{
  width: 50%;
  color: white;
}

.section-4-client-content{
  height: 100vh;
  width: 50%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  line-height: 1.6;

  

  
}
.section-4-client-content>h2{
  font-size: 3.5em;
  font-family: "Onest", sans-serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
}
.section-4-client-content>li{

  color: white;
}


</style>
