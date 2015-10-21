var w = c.width = window.innerWidth,
		h = c.height = window.innerHeight,
		ctx = c.getContext( '2d' ),

		opts = {
			circDivisor: 13,
			radius: 100,
			depth: 160,
			rotVel: {
				x: .0012,
				y: .002,
				z: 0
			},
			radiusVariation: 5,
			radiusVariationBaseSpeed: .03,
			radiusVariationAddedSpeed: .003,
			vanishPoint: {
				x: w / 2,
				y: h / 2,
			},
			fl: 250
		},

		rot = {
			x: 0,
			y: 0,
			z: 0,
			cos: {
				x: 1,
				y: 1,
				z: 1
			},
			sin: {
				x: 0,
				y: 0,
				z: 0
			}
		},

		points = [];

function Point( a, b ){

	this.angA = a / opts.circDivisor * Math.PI * 2;
	this.angB = b / opts.circDivisor * Math.PI * 2;
	this.cosA = Math.cos( this.angA );
	this.sinA = Math.sin( this.angA );
	this.cosB = Math.cos( this.angB );
	this.sinB = Math.sin( this.angB );

	this.tick = Math.sin( this.angA + this.angB ) * Math.PI * 2;
	this.len = opts.radius;

	this.neighbours = [
		points[ a * opts.circDivisor + ( b - 1 ) ],
		points[ ( a - 1 ) * opts.circDivisor + b ]
	];

	this.screen = {};
}
Point.prototype.update = function(){

	this.tick += opts.radiusVariationBaseSpeed + opts.radiusVariationAddedSpeed * Math.random();
	this.len = opts.radius + opts.radiusVariation * Math.sin( this.tick );
}
Point.prototype.render = function(){

	var x = 0,
			y = this.len,
			z = 0;

	//rotate to make a sphere

	// rotate around Z, or B
	// x1 = 0, so I just put 0
	x = -y * this.sinB; //x * this.cosA - y * this.sinA, but x = 0
	y = y * this.cosB; // y * this.cosA + x1 * this.sinA, but x1 = 0

	//rotate around X, or A
	var y1 = <span class="hiddenGrammarError" pre=""><span class="hiddenGrammarError" pre=""><span class="hiddenGrammarError" pre="">y;
	y</span></span></span> = y * this.cosA; //y * this.cosB - z * this.sinB, but z = 0
	z = z * this.cosA + y1 * this.sinA;


	//rotate according to world rotation

	//rotate around z
	var x1 = <span class="hiddenGrammarError" pre=""><span class="hiddenGrammarError" pre="">x;
	x</span></span> = x * rot.cos.z - y * rot.sin.z;
	y = y * rot.cos.z + x1 * rot.sin.z;

	//rotate around y
	var z1 = <span class="hiddenGrammarError" pre=""><span class="hiddenGrammarError" pre="">z;
	z</span></span> = z * rot.cos.y - x * rot.sin.y;
	x = x * rot.cos.y + z1 * rot.sin.y;

	//rotate around x
	var y1 = y;
	y = y * rot.cos.x - z * rot.sin.x;
	z = z * rot.cos.x + y1 * rot.sin.x;

	// so that we don't have to remove opts.depth later
	ctx.strokeStyle = 'hsla(hue,80%,50%,alp)'.replace( 'alp', 1 - ( ( z / ( opts.radius + opts.radiusVariation ) ) / 2 + .5 ) ).replace( 'hue', ( this.angA + this.angB ) / Math.PI / 4 * 360 );

	// translate on the world translation
	z += opts.depth;

	// transfer to screen coordinates
	this.screen.scale = opts.fl / z;
	this.screen.x = opts.vanishPoint.x + x * this.screen.scale;
	this.screen.y = opts.vanishPoint.y + y * this.screen.scale;

	for( var i = 0; i < this.neighbours.length; ++i ){

		var neig = this.neighbours[ i ];
		if( neig ){

			ctx.beginPath();
			ctx.moveTo( neig.screen.x, neig.screen.y );
			ctx.lineTo( this.screen.x, this.screen.y );
			ctx.stroke();
		}
	}
}
function setup(){

	for( var i = 0; i < opts.circDivisor; ++i )
		for( var j = 0; j < opts.circDivisor; ++j )
			points.push( new Point( i, j ) );
}
function anim(){

	window.requestAnimationFrame( anim );

	ctx.fillStyle = 'black';
	ctx.fillRect( 0, 0, w, h );

	rot.x += opts.rotVel.x;
	rot.y += opts.rotVel.y;
	rot.z += opts.rotVel.z;

	rot.cos.x = Math.cos( rot.x );
	rot.cos.y = Math.cos( rot.y );
	rot.cos.z = Math.cos( rot.z );

	rot.sin.x = Math.sin( rot.x );
	rot.sin.y = Math.sin( rot.y );
	rot.sin.z = Math.sin( rot.z );

	points.map( updatePoint );
	points.map( renderPoint );
}
function updatePoint( point ){ point.update(); }
function renderPoint( point ){ point.render(); }

setup();
anim();
