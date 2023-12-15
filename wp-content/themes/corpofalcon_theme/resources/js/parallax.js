

    function parallaxPan(el){ 
        const parallax = el;
        
        el.onmousemove = e =>{
            const mouseX = e.clientX, mouseY = e.clientY;
            
            const decimalX = mouseX/el.innerWidth, decimalY = mouseY/el.innerHeight;

            const panX  = el.offsetWidth * decimalX, panY  = el.offsetHeight * decimalY;

            el.animate({
                transform: `translate( ${panX}px, ${panY}px)`
            },
            {
                duration: 3000,
                fill: forwards,
                easing: ease,
            });
        }
    }
