PVector prev;

void setup () {
    size (1000, 10000);
    background(255);
    prev = new PVector(0.0, 0.0);
}

void draw () {
    fill(0, 50);
    stroke(0, 50);
    line(prev.x, prev.y, mouseX, mouseY);
    noStroke();
    ellipse(mouseX, mouseY, 2, 2);
    prev.set(mouseX, mouseY);
}