<html>
	<head>
		<title>HAPPY BIRTHDAY PRIME!</title>
		<link rel="stylesheet" href="index.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	</head>
<body>
	<h1 class="title">Happy Birthday Prime!</h1>
	<div class="cake">
		<div class="plate"></div>
		<div class="layer layer-bottom"></div>
		<div class="layer layer-middle"></div>
		<div class="layer layer-top"></div>
		<div class="icing"></div>
		<div class="drip drip1"></div>
		<div class="drip drip2"></div>
		<div class="drip drip3"></div>
		<div class="candle">
				<div class="flame"></div>
		</div>
	</div>
	

<div class="wishes">
	<script crossorigin src="https://unpkg.com/@memorista/client-ui@2/dist/index.bundle.js"></script>
<x-memorista api-key="26b70af0-dd40-4280-b3c4-f2ade553a59a"></x-memorista>
</div>


	<script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
	<script type="text/javascript">
		const duration = 1000 * 1000,
  animationEnd = Date.now() + duration;

let skew = 1;

function randomInRange(min, max) {
  return Math.random() * (max - min) + min;
}

(function frame() {
  const timeLeft = animationEnd - Date.now(),
    ticks = Math.max(200, 500 * (timeLeft / duration));

  skew = Math.max(0.8, skew - 0.001);

  confetti({
    particleCount: 1,
    startVelocity: 0,
    ticks: ticks,
    origin: {
      x: Math.random(),
      // since particles fall down, skew start toward the top
      y: Math.random() * skew - 0.2,
    },
    colors: ["#f1cf23", "#df0101"],
    shapes: ["triangle"],
    gravity: randomInRange(0.4, 0.6),
    scalar: randomInRange(0.4, 1),
    drift: randomInRange(-0.4, 0.4),
  });

  if (timeLeft > 0) {
    requestAnimationFrame(frame);
  }
})();
	</script>
	</body>
	</html>

