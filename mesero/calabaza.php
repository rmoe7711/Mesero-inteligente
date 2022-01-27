<html>
<head>
<title>

</title>
</head>
<body>

<script type="text/javascript">
//Por El Balcon de Jaime
if ((document.getElementById) &&
window.addEventListener || window.attachEvent){

(function(){
var balconimg1 = new Image();
balconimg1.src = "http://1.bp.blogspot.com/_gjBqKNTws4M/TL3hGpp_Z-I/AAAAAAAAFGY/20GMO4p6_Sw/s320/blhalloweeen.png";
var balconimgA = 160;
var balconimgB = 150;
var balconvelocidadpoca = 1;
var balconvelocidad = 40;
var balconvelocidadmucha = 4;
var balconblA = 1;
balconblA = parseInt(document.images.length);
if (document.getElementById("balconelemento2"+balconblA)) balconblA++;
var balconK1 = "<div id='balconelemento2"+balconblA+"' style='position:absolute;"
+"top:2px;left:2px;height:"+balconimgA+"px;width:"+balconimgB+"px;"
+"overflow:hidden'><img src='"+balconimg1.src+"' alt=''/><\/div>";
document.write(balconK1);

var h,w,r,temp;
var d = document;
var y = 2;
var x = 2;
var balconmv1 = 45;
var balconelemento3 = 1;
var balconelemento4 = new Array(1,0,1);
var balconmovimiento1 = 2;
var bacls = 0;
var bacls2 = new Array(1,-1,2,-2,0,0,1,-1,2,-2);
var balcxx1 = 0;
var balcxx = 0;
var balconelemento = "px";
var balconj1 = (typeof window.innerWidth == "number");
var balconj2 = (typeof window.pageYOffset == "number");

if (balconj1) r = window;
else{
if (d.documentElement &&
typeof d.documentElement.clientWidth == "number" &&
d.documentElement.clientWidth != 0)
r = d.documentElement;
else{
if (d.body &&
typeof d.body.clientWidth == "number")
r = d.body;
}
}
function balconttV(){
var oh,sy,ow,sx,rh,rw;
if (balconj1){
if (d.documentElement && d.defaultView &&
typeof d.defaultView.scrollMaxY == "number"){
oh = d.documentElement.offsetHeight;
sy = d.defaultView.scrollMaxY;
ow = d.documentElement.offsetWidth;
sx = d.defaultView.scrollMaxX;
rh = oh-sy;
rw = ow-sx;
}
else{
rh = r.innerHeight;
rw = r.innerWidth;
}
h = rh - balconimgA;
w = rw - balconimgB;
}
else{
h = r.clientHeight - balconimgA;
w = r.clientWidth - balconimgB;
}
}
function balconj3(yx){
var y,x;
if (balconj2){
y = r.pageYOffset;
x = r.pageXOffset;
}
else{
y = r.scrollTop;
x = r.scrollLeft;
}
return (yx == 0)?y:x;
}
function balconfunc1(){
bacls = bacls2[Math.floor(Math.random()*bacls2.length)];
balconelemento3 = balconelemento4[Math.floor(Math.random()*balconelemento4.length)];
balcxx = Math.floor(20+Math.random()*50);
}
function jtblcn1(){
var balconjB,hb,balconjC,dx,balconjA;
if (balconelemento3 == 1) balconmovimiento1 +=0.05;
if (balconelemento3 == 0) balconmovimiento1 -=0.05;
if (balconmovimiento1 >= balconvelocidadmucha) balconmovimiento1 = balconvelocidadmucha;
if (balconmovimiento1 <= balconvelocidadpoca) balconmovimiento1 = balconvelocidadpoca;
balcxx1++;
if (balcxx1 >= balcxx){
balconfunc1();
balcxx1=0;
}
balconjA = balconmv1+=bacls;
balconjC = balconmovimiento1 * Math.sin(balconjA*Math.PI/180);
dx = balconmovimiento1 * Math.cos(balconjA*Math.PI/180);
y+=balconjC;
x+=dx;
balconjB = 180-balconmv1;
hb = 0-balconmv1;
if ((y < 1) && (x < 1)){y = 1; x = 1; balconmv1 = 45;}
if ((y < 1) && (x > w)){y = 1; x = w; balconmv1 = 130;}
if ((y > h) && (x < 1)){y = h; x = 1; balconmv1 = 320;}
if ((y > h) && (x > w)){y = h; x = w; balconmv1 = 224;}
if (y < 1) {y = 1; balconmv1 = hb;}
if (y > h) {y = h; balconmv1 = hb;}
if (x < 1) {x = 1; balconmv1 = balconjB;}
if (x > w) {x = w; balconmv1 = balconjB;}

temp.style.top = y + balconj3(0) + balconelemento;
temp.style.left = x + balconj3(1) + balconelemento;
setTimeout(jtblcn1,balconvelocidad);
}
function balconblj(){
temp = document.getElementById("balconelemento2"+balconblA);
balconttV();
jtblcn1();
}
if (window.addEventListener){
window.addEventListener("resize",balconttV,false);
window.addEventListener("load",balconblj,false);
}
else if (window.attachEvent){
window.attachEvent("onresize",balconttV);
window.attachEvent("onload",balconblj);
}
})();
}
</script>
</body>
</html>