<script>
import NavView from "../Components/NavView.vue";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Typed from "typed.js";
import { Link } from "@inertiajs/vue3";
gsap.registerPlugin(ScrollTrigger);
export default {
    data() {
        return {};
    },
    components: {
        NavView,
        Link,
    },
    methods: {
        loadingAnimation() {
            let tl = gsap.timeline();
            let imgLoading = document.querySelector(".img-loading");
            let h2Cquired = document.querySelectorAll(".h2-cquired");

            var video = document.getElementById("vid");
            video.muted = true;

            video.play();
            video.muted = false;

            setTimeout(() => {
                tl.to("#vid", {
                    duration: 0.5,
                    opacity: 0,
                });
                tl.to(".loading", {
                    duration: 2.5,
                    transformOrigin: "right right",
                    ease: "power4.out",
                    scaleX: 0,
                    func: () => {
                        this.titleAnimation();
                        this.HomeAnimation();
                    },
                });
            }, 6000);

            /*
        tl.from(imgLoading,{
            duration:1,
            opacity:0,
        })
            tl.from(h2Cquired , {
                duration: 1,
                ease: "power4.out",
               y:500,
                opacity: 0,
                stagger:0.1,})
            tl.to('.loading>div',{
                duration:1,
                opacity: 0,
                scale:0.5,
                ease: "power4.out"
            })
            tl.to('.loading',{
                duration:2.5,
                transformOrigin:'right right',
                ease: "power4.out",
                scaleX:0,
                func : ()=>{
                    this.titleAnimation()
                    this.HomeAnimation()
                }

            })
            */
        },
        titleAnimation() {
            var typed = new Typed("#title", {
                strings: [
                    "Website Developement",
                    "Video Editing",
                    "Brand Design",
                    "Artificial Intelligence",
                    "Photography",
                    "Blog Writing",
                ],
                typeSpeed: 50,
                backSpeed: 50,
                loop: true,
                showCursor: false,
            });
        },
        HomeAnimation() {
            let tl = gsap.timeline();
            tl.from(".slogan>h1", {
                duration: 1,
                y: 70,

                opacity: 0,
                stagger: 0.1,
            });
            tl.from(".slogan-info", {
                duration: 1,
                opacity: 0,
            });
            tl.from(".slogan-inscription", {
                duration: 1,
                opacity: 0,
            });
        },
        ScrollS1ToS2() {
            let tl = gsap.timeline();
            let tl2 = gsap.timeline();
            let tl3 = gsap.timeline();
            let main = document.querySelector("main");

            /* ecran expend change couleur
            tl.to('.transition',{
                duration:1,
                scale:100

            })
            
            */
            tl.to(main, {
                duration: 0.2,
                backgroundColor: "black",
            });
            tl.from(".section-2-title", {
                duration: 0.7,

                x: -100,
                opacity: 0,
                ease: "po",
            });

            tl2.from(".project-container", {
                duration: 2,
                y: 150,
                opacity: 0,
            });
            tl2.from(".project-container-2", {
                duration: 2,
                y: -150,
                opacity: 0,
            });
            tl2.from(".project-container-3", {
                duration: 2,
                y: 150,
                opacity: 0,
            });
            tl2.from(".project-container-4", {
                duration: 2,
                y: -150,
                opacity: 0,
            });
            /*
           tl3.to('.transition',{
                duration:1.5,
                scale:120,
                ease:'power2.inOut'
                

            })
            */

            ScrollTrigger.create({
                trigger: ".section-2",
                start: "20% 95%",
                end: "20% 80%",

                toggleActions: " play reverse none none",

                animation: tl,

                //markers:true
            });
            ScrollTrigger.create({
                trigger: ".project-container",
                start: "40% 90%",
                end: "top 5%",
                toggleActions: " play reverse none none",
                scrub: true,
                pin: ".section-2",
                animation: tl2,

                // markers:true
            });

            /*ScrollTrigger.create({
    trigger:'.project-container',
    start:"40% 90%",
    end: "top 6%",
    toggleActions:" play reverse none none",
  
 
    animation:tl3,
    
   markers:true
})*/
        },
        section3Animation() {
            let tl = gsap.timeline();
            let tl2 = gsap.timeline();
            let tl3 = gsap.timeline();
            tl3.add("start");
            tl.from(".section-3-about>p", {
                duration: 0.5,
                opacity: 0.2,
            });
            tl.to(".h1-title-span", {
                duration: 1,
                stagger: 0.2,
                color: "white",
            });
            tl.to(".animated-button", {
                duration: 0.2,
                opacity: 1,
            });

            tl2.to(".section-3-benef>h3", {
                duration: 0.5,
                opacity: 1,
                stagger: 0.5,
            });
            tl3.to(
                ".section-3",
                {
                    duration: 1,
                    backgroundColor: "white",
                },
                "start"
            );
            tl3.to(
                ".section-s3-to-s4",
                {
                    duration: 1,
                    backgroundColor: "white",
                },
                "start"
            );
            ScrollTrigger.create({
                trigger: ".section-3-about",
                start: "top 30%",
                end: "38% 30%",
                scrub: true,
                toggleActions: " play reverse none none",

                animation: tl,
            });
            ScrollTrigger.create({
                trigger: ".section-3-about",
                start: "35% 30%",
                end: "150% 30%",
                toggleActions: " play none none none",
                //markers:true,
                pin: true,
                scrub: ".section-3-benef",

                animation: tl2,
            });
            ScrollTrigger.create({
                trigger: ".section-3-about",
                start: "35% 30%",
                end: "160% 30%",
                toggleActions: " play reverse none none",
                //markers:true,

                animation: tl3,
            });
        },
        section4Animation() {
            let tl = gsap.timeline();
            let tl2 = gsap.timeline();

            let tl3 = gsap.timeline();

            tl2.to(".section-4-title", {
                duration: 1,
                stagger: 0.2,
                color: "black",
            });
            tl.to("li>span", {
                duration: 1,
                stagger: 0.2,
                color: "black",
            });

            ScrollTrigger.create({
                trigger: ".section-4-content",
                start: "top 30%",
                end: "90% 30%",
                scrub: true,
                toggleActions: " play reverse none none",
                //markers:true,
                animation: tl,
            });
            ScrollTrigger.create({
                trigger: ".section-4-content",
                start: "top 30%",
                end: "top 80%",

                toggleActions: " play reverse none none",

                animation: tl2,
            });
        },
        section5Animation() {
            let tl = gsap.timeline();

            tl.from(".section-5-title", {
                duration: 1,
                y: 150,
                opacity: 0,
            });

            ScrollTrigger.create({
                trigger: ".section-5",
                start: "-25% 30%",
                end: "top 80%",
                toggleActions: " play reverse none none",
                //markers:true,
                animation: tl,
            });
        },
    },
    mounted() {
        this.titleAnimation();
        this.HomeAnimation();
        // this.loadingAnimation();
        this.ScrollS1ToS2();
        this.section3Animation();
        this.section4Animation();
        this.section5Animation();
    },
};
</script>
<template>
    <!-- <div class="loading"> -->
    <!-- <div> -->
    <!-- <video width="1000" height="1000" id="vid"> -->
    <!-- <source src="../../assets/introCquired.mp4" type="video/mp4" /> -->
    <!-- </video> -->
    <!-- </div> -->
    <!-- <div>
            <img src="../../assets/logow-cquired-single.png" alt="" srcset="" class="img-loading">
              <h2 class="cquired-loading">
                <div class="h2-cquired">C</div>
                <div class="h2-cquired">q</div>
                <div class="h2-cquired">u</div>
                <div class="h2-cquired">i</div>
                <div class="h2-cquired">r</div>
                <div class="h2-cquired">e</div>
                <div class="h2-cquired">d</div>
              </h2>
        </div>
        -->
    <!-- </div> -->
    <NavView></NavView>
    <main>
        <div class="section-1">
            <div class="slogan-container">
                <div class="slogan">
                    <h1>Need help with</h1>
                    <h1 id="title"></h1>
                    <h1>Don’t search anymore</h1>
                </div>
                <div class="slogan-info">
                    <p>
                        We help people find the perfect person or entreprise to
                        solve their problems
                    </p>
                </div>
                <div class="slogan-inscription">
                    <a href="" class="href-early-access">
                        <!-- <button class="early-access">Inscription</button> -->

                        <!--<button class="cta">
                <span class="span">Get started</span>
                <span class="second">
                  <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                      <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                      <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                    </g>
                  </svg>
                </span> 
            </button>-->
                        <Link :href="route('register')">
                            <button class="animated-button-2">
                                <svg
                                    viewBox="0 0 24 24"
                                    class="arr-2"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                    ></path>
                                </svg>
                                <span class="text">Get started</span>
                                <span class="circle"></span>
                                <svg
                                    viewBox="0 0 24 24"
                                    class="arr-1"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                    ></path>
                                </svg>
                            </button>
                        </Link>
                    </a>
                </div>
            </div>

            <!-- <div class="home-img-container"> -->
            <!-- <img src="../../assets/HomeImg.png" alt="" srcset=""> -->
            <!-- </div> -->
        </div>
        <div class="section-2">
            <div class="section-2-title-container">
                <h1 class="section-2-title">
                    Browse talent for popular projects like
                    <div></div>
                </h1>
            </div>
            <!-- <div class="transition"></div> -->
            <div class="section-2-projects-container">
                <div class="project-container">
                    <h3 class="h3-project">Brand Design</h3>
                    <img
                        src="../../assets/HomeProjectImg.png"
                        alt=""
                        srcset=""
                    />
                </div>
                <div class="project-container-2">
                    <h3 class="h3-project">Web Development</h3>

                    <img
                        src="../../assets/HomeProjectImg2.webp"
                        alt=""
                        srcset=""
                    />
                </div>
                <div class="project-container-3">
                    <h3 class="h3-project">Video Editing</h3>
                    <img
                        src="../../assets/HomeProjectImg3.webp"
                        alt=""
                        srcset=""
                    />
                </div>
                <div class="project-container-4">
                    <h3 class="h3-project">Blog Writing</h3>
                    <img
                        src="../../assets/HomeProjectImg4.webp"
                        alt=""
                        srcset=""
                    />
                </div>
            </div>
        </div>
        <div class="section-s2-to-s3"></div>

        <div class="section-3">
            <div class="section-3-content">
                <div class="section-3-about">
                    <p style="font-size: large">
                        Cquired is the communication bridge between individuals
                        and businesses. We actively promote business growth by
                        providing precisely tailored services that address the
                        unique needs of people.
                    </p>

                    <h1 class="h1-title">
                        <span class="h1-title-span">Why </span>
                        <span class="h1-title-span">choose <br /></span>
                        <span class="h1-title-span">Cquired </span>
                        <span class="h1-title-span">for </span>
                        <span class="h1-title-span">your <br /></span>
                        <span class="h1-title-span">freelance<br /></span>
                        <span class="h1-title-span">demandes<br /></span>
                    </h1>

                    <!-- btn-->
                    <Link :href="route('register')">
                        <button class="animated-button">
                            <svg
                                viewBox="0 0 24 24"
                                class="arr-2"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                ></path>
                            </svg>
                            <span class="text">Get started</span>
                            <span class="circle"></span>
                            <svg
                                viewBox="0 0 24 24"
                                class="arr-1"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                ></path>
                            </svg>
                        </button>
                    </Link>
                </div>
                <div class="section-3-benef">
                    <h3>1 - No registration fees</h3>
                    <h3>2 - Post an offer and hire</h3>
                    <h3>
                        3 - Work with the best, while staying within your budget
                    </h3>
                </div>
            </div>
        </div>
        <div class="section-s3-to-s4"></div>
        <div class="section-4">
            <div class="section-4-content">
                <div class="section-4-title-content">
                    <h1 class="section-4-title">
                        What are the advantage that you get with Cquired
                    </h1>
                </div>
                <div class="section-4-business-content">
                    <h2>Business</h2>
                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>
                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>

                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>

                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>
                </div>
                <div class="section-4-freelancer-content">
                    <h2>Freelancer</h2>
                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>
                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>

                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>

                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>
                </div>
                <div class="section-4-client-content">
                    <h2>Client</h2>
                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>
                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>

                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>

                    <li>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span>
                        <span>Lorem</span> <span>Lorem</span> <span>Lorem</span>
                    </li>
                </div>
            </div>
        </div>
        <div class="section-s4-to-s5"></div>
        <div class="section-5">
            <div class="section-5-content">
                <div class="section-5-title-content">
                    <h1 class="section-5-title">Interested ?</h1>
                    <p>
                        So do not waste time and come live an unforgettable
                        experience.
                    </p>
                    <Link :href="route('register')">
                        <button class="animated-button-2">
                            <svg
                                viewBox="0 0 24 24"
                                class="arr-2"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                ></path>
                            </svg>
                            <span class="text">Get started</span>
                            <span class="circle"></span>
                            <svg
                                viewBox="0 0 24 24"
                                class="arr-1"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                ></path>
                            </svg>
                        </button>
                    </Link>
                </div>
            </div>
        </div>
    </main>
</template>
<style scoped>
.animated-button {
    position: relative;
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 14px 60px;
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
    background-color: #6ec3e7;
    border-radius: 50%;
    opacity: 0;
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
}

.animated-button .text {
    position: relative;
    z-index: 1;
    transform: translateX(-12px);
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    font-size: 1em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
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

/*
loading
*/
#vid {
    opacity: 1;
}
.loading {
    position: absolute;
    background-color: black;
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 100;
}
.img-loading {
    height: 100px;
    width: 100px;
    opacity: 1;
}
.loading > div {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    position: relative;
    z-index: 120;
}

.cquired-loading {
    height: 200px;
    margin: 10px;
    overflow: hidden;
}

.h2-cquired {
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;

    color: white;
    display: inline-block;
    font-size: 5em;
    opacity: 1;
}
/*home*/
main {
    min-height: 90vh;
    width: 100vw;
}
.section-1 {
    height: 80vh;
    width: 100%;
    display: flex;

    justify-content: center;
    align-items: center;
    text-align: center;
}
.slogan-container {
    height: 70vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.home-img-container {
    width: 40%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.home-img-container > img {
    height: 350px;
    width: 450px;
    margin-bottom: 10px;
}
h1 {
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
    opacity: 1;
    font-size: 4em;
}
#title {
    color: #6ec3e7;
    height: 70px;
}
.slogan {
    height: 70%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    /* margin-left: 100px;*/
}
.slogan-info {
    height: 20%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    /*margin-left: 100px;*/

    opacity: 1;
}
.slogan-info > p {
    width: 50%;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
}
.slogan-inscription {
    height: 20%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 100px;

    opacity: 1;
}
.href-early-access {
    text-decoration: none;
    height: 10%;
    width: auto;
    margin-right: 100px;
}
.early-access {
    width: 18.5em;
    background-color: #6ec3e7;
    border: none;
    padding: 6px;
    border-radius: 5px;
    margin-bottom: 5vh;
    cursor: pointer;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
}
.cta {
    display: flex;
    padding: 5px 50px;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    font-size: 25px;
    color: white;
    background: #6ec3e7;
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
    border: none;
}

.cta:focus {
    outline: none;
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #6225e6;
}

.cta .second {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover .second {
    transition: 0.5s;
    margin-right: 45px;
}

.span {
    transform: skewX(15deg);
}

.second {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 9px;
}

.one {
    transition: 0.4s;
    transform: translateX(-60%);
}

.two {
    transition: 0.5s;
    transform: translateX(-30%);
}

.cta:hover .three {
    animation: color_anim 1s infinite 0.2s;
}

.cta:hover .one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
}

.cta:hover .two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
}

@keyframes color_anim {
    0% {
        fill: white;
    }

    50% {
        fill: #6225e6;
    }

    100% {
        fill: white;
    }
}

/*section2*/
.section-2 {
    margin-top: 200px;
    height: 90vh;
    width: 100vw;
}
.section-2-title-container {
    width: 100%;
    height: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-2-title {
    color: #cfcfc8;
    width: 70%;
    text-align: center;
    display: inline-block;
    opacity: 1;
    font-size: 4em;
}
.section-2-projects-container {
    width: 100%;
    height: 70%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    overflow-y: hidden;
}
.project-container,
.project-container-2,
.project-container-3,
.project-container-4 {
    height: 300px;
    width: 200px;
    background-color: #3a44a3;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 30px;
    overflow: hidden;
    opacity: 1;
}
.project-container-2 {
    background-color: #953d3d;
}
.project-container-3 {
    background-color: #bd6d0f;
}
.project-container-4 {
    background-color: #bda00f;
}

.h3-project {
    margin-top: 10px;
    margin-left: 10px;
    font-weight: 700;
}
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
    background-color: #6ec3e7;
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

.section-3 {
    height: 100vh;
    width: 100vw;
    background-color: black;
    color: aliceblue;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.section-3-content {
    height: 90%;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.section-3-about {
    height: 90%;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
}
.section-3-about > p {
    opacity: 1;
    color: #989896;
}
.h1-title {
    font-size: 3.5em;
    color: #cfcfc8;
    height: 50%;
}

.section-3-benef > h3 {
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
.section-3-benef {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 200vh;
    width: 40%;
    position: relative;
    top: 50%;
    gap: 200px;
}

.section-4 {
    background-color: white;
    min-height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-4-content {
    height: 100%;
    width: 90%;
}
.section-4-title-content {
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.section-4-title-content > h1 {
    text-align: right;
    width: 50%;
    font-size: 3.5em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
    color: rgb(244, 244, 244);
}
.section-4-business-content {
    height: 100vh;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    line-height: 1.6;
}
.section-4-business-content > h2 {
    font-size: 3.5em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
}
.section-4-business-content > li {
    color: white;
}
.section-4-freelancer-content {
    height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-end;
    line-height: 1.6;
}
.section-4-freelancer-content > h2 {
    text-align: center;
    font-size: 3.5em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
}

.section-4-freelancer-content > li {
    width: 50%;
    color: white;
}

.section-4-client-content {
    height: 100vh;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    line-height: 1.6;
}
.section-4-client-content > h2 {
    font-size: 3.5em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
}
.section-4-client-content > li {
    color: white;
}

.animated-button-2 {
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

.animated-button-2 svg {
    position: absolute;
    width: 24px;
    fill: black;
    z-index: 9;
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
}

.animated-button-2 .arr-1 {
    right: 16px;
}

.animated-button-2 .arr-2 {
    left: -25%;
}

.animated-button-2 .circle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    background-color: #6ec3e7;
    border-radius: 50%;
    opacity: 0;
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
}

.animated-button-2 .text {
    position: relative;
    z-index: 1;
    transform: translateX(-12px);
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
}

.animated-button-2:hover {
    box-shadow: 0 0 0 12px transparent;
    color: #212121;
    border-radius: 12px;
}

.animated-button-2:hover .arr-1 {
    right: -25%;
}

.animated-button-2:hover .arr-2 {
    left: 16px;
}

.animated-button-2:hover .text {
    transform: translateX(12px);
}

.animated-button-2:hover svg {
    fill: #212121;
}

.animated-button-2:active {
    scale: 0.95;
    box-shadow: 0 0 0 4px greenyellow;
}

.animated-button-2:hover .circle {
    width: 220px;
    height: 220px;
    opacity: 1;
}
.section-5 {
    background-color: white;
    min-height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-5-content {
    height: 100%;
    width: 90%;
}
.section-5-title-content {
    height: 40vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
.section-5-title-content > h1 {
    text-align: center;
    width: 100%;
    font-size: 3.5em;
    font-family: "Onest", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
    opacity: 1;
}

.transition {
    height: 1vh;
    width: 1vw;
    background-color: #e15b1b;
    position: relative;
    left: 49%;
    z-index: 130;
}

.section-s2-to-s3 {
    height: 30vh;
    width: 100vw;
    background-color: black;
}
.section-s3-to-s4 {
    height: 100vh;
    width: 100vw;
    background-color: black;
}
.section-s4-to-s5 {
    height: 10vh;
    width: 100vw;
    background-color: white;
}
</style>
