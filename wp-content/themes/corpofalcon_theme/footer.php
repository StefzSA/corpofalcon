		<div class="footer">

		</div>

		</div>

		<?php wp_footer(); ?>
		<script type="text/javascript">
			function parallaxPan(el, parent) {

				parent.onmousemove = e => {
					const mouseX = e.clientX,
						mouseY = e.clientY;

					const decimalX = mouseX / parent.offsetWidth,
						decimalY = mouseY / parent.offsetHeight;
					
					const maxX = el.offsetWidth - $(parent).innerWidth(),
					maxY = el.offsetHeight - $(parent).innerHeight();

					const panX = maxX * decimalX * -1,
						panY = maxY * decimalY * -1;
					
					console.log('limits: '+maxX*-1+' and '+ maxY*-1);
					console.log('parent: '+window.innerWidth+' and '+ window.innerHeight);
					console.log('offsets: '+el.offsetWidth+' and '+ el.offsetHeight);
					console.log(panX+' and '+ panY);
					

					el.animate( { transform: `translate(${panX}px, ${panY}px)` }, {
						duration: 4000,
						fill: 'forwards',
					})

				}
			}
			parallaxPan(document.getElementById('hero-bg'), document.getElementById('hero-section'));
		</script>
		</body>

		</html>