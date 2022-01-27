<html>
<head>

</head>
<body>


<!-- Murciélagos volando -->
<div id='murcielago1' style='position:absolute; z-index:80; left: -500px; width:125px; height:108px;'>
<img border='0' src='https://lh6.googleusercontent.com/-crcD3PVdlIk/TqdR8xGrIII/AAAAAAAAB0M/cOvpScApOEY/s125/murcielago1.gif'/></div>
<div id='murcielago2' style='position:absolute; z-index:81; left: -600px; width:120px; height:99px;'>
<img border='0' src='https://lh4.googleusercontent.com/-DyHfLK-WVLA/TqdR80ftNVI/AAAAAAAAB0Y/jMtZ02K9d_s/s120/murcielago2.gif'/></div>
<div id='murcielago3' style='position:absolute; z-index:82; left: -700px; width:160px; height:120px;'>
<img border='0' src='https://lh4.googleusercontent.com/-n2SC0wbbKwg/TqdR8-iJAsI/AAAAAAAAB0Q/RjmdPLRs6OQ/s160/murcielago3.gif'/></div>
<div id='murcielago4' style='position:absolute; z-index:83; left: -800px; width:106px; height:85px;'>
<img border='0' src='https://lh5.googleusercontent.com/-2DdYLWXwyiA/TqdR9Ch1DYI/AAAAAAAAB0k/RbZ-RB8s6Q0/s106/murcielago4.gif'/></div>
<!-- Fin de los murciélagos -->

</body>
<script type='text/javascript'>
//<![CDATA[
/***********************************************
* Murciélagos volando por el blog
* Script original de Virtual_Max
* Adaptado por ciudadblogger.com
***********************************************/

var vmin=2;
var vmax=5;
var vr=2;
var timer1;

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function Chip(chipname,width,height){
this.named=chipname;
this.vx=vmin+vmax*Math.random();
this.vy=vmin+vmax*Math.random();
this.w=width+20;
this.h=height;
this.xx=0;
this.yy=0;
this.timer1=null;
}

function movechip(chipname){
if (document.getElementById){
eval("chip="+chipname);
if (window.innerWidth || window.opera){
pageX=window.pageXOffset;
pageW=window.innerWidth-40;
pageY=window.pageYOffset;
pageH=window.innerHeight-20;
}
else if (document.body){
pageX=iecompattest().scrollLeft;
pageW=iecompattest().offsetWidth-40;
pageY=iecompattest().scrollTop;
pageH=iecompattest().offsetHeight-20;
} 

chip.xx=chip.xx+chip.vx;
chip.yy=chip.yy+chip.vy;
chip.vx+=vr*(Math.random()-0.5);
chip.vy+=vr*(Math.random()-0.5);
if(chip.vx>(vmax+vmin)) chip.vx=(vmax+vmin)*2-chip.vx;
if(chip.vx<(-vmax-vmin)) chip.vx=(-vmax-vmin)*2-chip.vx;
if(chip.vy>(vmax+vmin)) chip.vy=(vmax+vmin)*2-chip.vy;
if(chip.vy<(-vmax-vmin)) chip.vy=(-vmax-vmin)*2-chip.vy;
if(chip.xx<=pageX){
chip.xx=pageX;
chip.vx=vmin+vmax*Math.random();
}
if(chip.xx>=pageX+pageW-chip.w){
chip.xx=pageX+pageW-chip.w;
chip.vx=-vmin-vmax*Math.random();
}
if(chip.yy<=pageY)
{chip.yy=pageY;
chip.vy=vmin+vmax*Math.random();
}
if(chip.yy>=pageY+pageH-chip.h)
{chip.yy=pageY+pageH-chip.h;
chip.vy=-vmin-vmax*Math.random();
}

document.getElementById(chip.named).style.left=chip.xx+"px";
document.getElementById(chip.named).style.top=chip.yy+"px";
chip.timer1=setTimeout("movechip('"+chip.named+"')",100);
}
}

function pagestart(){
murcielago1=new Chip("murcielago1",147,168);
murcielago2=new Chip("murcielago2",47,68);
murcielago3=new Chip("murcielago3",47,68);
murcielago4=new Chip("murcielago4",47,68);

movechip("murcielago1");
movechip("murcielago2");
movechip("murcielago3");
movechip("murcielago4");
}

if (window.addEventListener)
window.addEventListener("load", pagestart, false)
else if (window.attachEvent)
window.attachEvent("onload", pagestart)
else if (document.getElementById)
window.onload=pagestart
//]]>
</script>
</html>