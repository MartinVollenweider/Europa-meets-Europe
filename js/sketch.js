// Variables
let p5Sketch;
let song, analyzer;
let amplifier;
	amplifier = 100;

function preload() {
  img = loadImage(curImg);
  song = loadSound('audio/jupiter.mp3');
  console.log("Preload " + curImg);
}


function setup() {
  // put setup code here
    p5Sketch = createCanvas (960,540);
    p5Sketch.parent("p5");
    background('rgba(255,255,255,0.0)');
    frameRate(240);
    noStroke();
    img.resize(960, 0)
    console.log(imageWidth);
    img.loadPixels();
	song.loop();
	
	// create a new Amplitude analyzer
  	analyzer = new p5.Amplitude();

  	// Patch the input to an volume analyzer
  	analyzer.setInput(song);
}

function draw() {
   // Get the average (root mean square) amplitude
  var rms = analyzer.getLevel() * amplifier;

  var x = floor(random(img.width));
  var y = floor(random(img.height));
  var pix = img.get(x, y);
	console.log(pix);
  fill(pix);
  ellipse(x, y, rms, rms);
}