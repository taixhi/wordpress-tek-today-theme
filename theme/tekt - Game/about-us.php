<!doctype html>
<html>
<?php get_header()?>
<?php get_sidebar()?>

<style>
/* entire container, keeps perspective */
.flip-container {
	perspective: 1000;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 320px;
	height: 480px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
</style>


<body>

<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
uyjdfgwjkfhgasdfjhkasgd
		</div>
		<div class="back">
hola		</div>
	</div>
</div>

</body>
<?php get_footer()?>
</html>
