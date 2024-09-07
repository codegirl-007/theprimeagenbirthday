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
<script>
  window.onload = function() {
    var context = new AudioContext();
  }
  </script>
	</head>
<body>
	<h1 class="title">Happy Birthday Prime!</h1>
	<div id="balloon-container">
	</div>
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
	<div class="audio">
    <audio controls>
      <source src="boomer.mp3">
    </audio>
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

const balloonContainer = document.getElementById("balloon-container");

function random(num) {
  return Math.floor(Math.random() * num);
}

function getRandomStyles() {
  var r = random(255);
  var g = random(255);
  var b = random(255);
  var mt = random(200);
  var ml = random(50);
  var dur = random(5) + 5;
  return `
  background-color: rgba(${r},${g},${b},0.7);
  color: rgba(${r},${g},${b},0.7); 
  box-shadow: inset -7px -3px 10px rgba(${r - 10},${g - 10},${b - 10},0.7);
  margin: ${mt}px 0 0 ${ml}px;
  animation: float ${dur}s ease-in infinite
  `;
}

function createBalloons(num) {
  for (var i = num; i > 0; i--) {
    var balloon = document.createElement("div");
    balloon.className = "balloon";
    balloon.style.cssText = getRandomStyles();
    balloonContainer.append(balloon);
  }
}

function removeBalloons() {
  balloonContainer.style.opacity = 0;
  setTimeout(() => {
    balloonContainer.remove()
  }, 500)
}

window.addEventListener("load", () => {
  createBalloons(30)
});

window.addEventListener("click", () => {
  removeBalloons();
});

	</script>
	</body>
	</html>

