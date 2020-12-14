new fullpage('#fullPage', {
        navigation: true,
        anchors: ['Home', 'anotherHome', 'Info'],
        scrollingSpeed: 700
    })
    // fullpage function


const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.4 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");
// // intro animation