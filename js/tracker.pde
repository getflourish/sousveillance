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

void touchMove(TouchEvent touchEvent) {
  // empty the canvas
  noStroke();
  fill(255);
  rect(0, 0, 400, 300);
 
  // draw circles at where fingers touch
  fill(180, 180, 100);
  for (int i = 0; i < touchEvent.touches.length; i++) {
    int x = touchEvent.touches[i].offsetX;
    int y = touchEvent.touches[i].offsetY;
    ellipse(x, y, 50, 50);
  }
}
 
void touchEnd(TouchEvent touchEvent) {
  noStroke();
  fill(255);
  rect(1, 1, 400, 300);
}