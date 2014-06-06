document.addEventListener(Event.MOUSEMOVE,document.onmousemove = getMouseXY);
var y1 = 0;
var x1 = 0;
function getMouseXY(e) {
x1 = e.pageX;
y1 = e.pageY;
if (x1 < 0){x1 = 0;}
if (y1 < 0){y1 = 0;} 
document.getElementById('mario').style.left = 30+x1 + 'px';
document.getElementById('mario').style.top = 30+y1 + 'px';
return true;
}
