<html>
<head>
<title>

</title>
</head>
<body>
<center>

<span style="font-size: large;"><span class="Apple-style-span" style="color: red;"><script language="JavaScript" type="text/javascript">
//<![CDATA[
<!--
today = new Date()
if(today.getMinutes() < 10){
pad = "0"}
else
pad = "";
document.write ;if((today.getHours() >=6) && (today.getHours() <=9)){
document.write("¡Buen día!")
}
if((today.getHours() >=10) && (today.getHours() <=11)){
document.write("¡Buen día!")
}
if((today.getHours() >=12) && (today.getHours() <=19)){
document.write("¡Buenas tardes!")
}
if((today.getHours() >=20) && (today.getHours() <=23)){
document.write("¡Buenas noches!")
}
if((today.getHours() >=0) && (today.getHours() <=3)){
document.write("¡Buenas noches!")
}
if((today.getHours() >=4) && (today.getHours() <=5)){
document.write("¡Buenas noches!")
}
// -->
//]]>
</script></span></span></center>
<script>if(window.screen.availWidth == 800)window.parent.document.body.style.zoom="75%"; if(window.screen.availWidth == 640)window.parent.document.body.style.zoom="60%"</script>

<center>
<script language="JavaScript" type="text/javascript">
//<![CDATA[
hoje = new Date()
numero_de_textos = 4
segundos = hoje.getSeconds()
numero = segundos % numero_de_textos
if (numero == 0){
texto = "Todos tus sueños pueden hacerse realidad si tienes el coraje de perseguirlos"
}
if (numero == 01){
texto = "El camino para empezar es dejar de hablar y comenzar a hacer"
}
if (numero == 02){
texto = "Si se puede tener todo en la vida, pero no todo al mismo tiempo"
}
if (numero == 03){
texto = "No importa cómo llegaste al mundo, lo que importa es que estás aquí"
}
document.write('' + texto +'')


//]]>
</script>
</center>
<center>
<script language="JavaScript">
<!-- Mas javascripts en www.creatupropiaweb.com -->
// This Script And Over 400 Others Found At
//  Java City 2000 http://www.jc2k.com
<!-- ActiveASCII by Neal Kanodia (please, don't delete this line)
// Get more JavaScript and other programs/scripts at my web page:
// http://www.inlink.com/~hkanodia
function createArr(num) { for(var i = 0; i < num; i++) { this[i] = null } }
function fillArr(tx,me,ti,wa) { this.text = tx;  this.method = me.toLowerCase();  this.ticks = ti;  this.wait = wa }
function block(num,txt,mthod,tcks,wit) { blocks[num] = new fillArr(txt,mthod,tcks,wit) }
function ms(unt) { var sp = "";  for( var i = 1; i <= unt; i++ ) { sp += " " } return(sp) }
function Activate() { if (cblock == max) { cblock = 0;  if (iloop == 0) { loops--;  if (loops == 0) { meth = "0" } else { meth = blocks[cblock].method } } else { meth = blocks[cblock].method } } else { meth = blocks[cblock].method }
if (meth == "0") { document.Active.ASCII.value = end }
if (meth == "display") { Tape = blocks[cblock].text;  Wait = blocks[cblock].wait;  Display() }
if (meth == "display center") { Tape = blocks[cblock].text;  Wait = blocks[cblock].wait;  half = Tape.length / 2;  DisplayC() }
if (meth == "scroll left") { clen = tlen;  Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  tTicks = Ticks * 2;  ScrollL() }
if (meth == "scroll right") { clen = 0 - blocks[cblock].text.length;  Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  tTicks = Ticks * 2;  ScrollR() }
if (meth == "scroll lc") { clen = 0 - blocks[cblock].text.length;  Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  Wait = blocks[cblock].wait;  tTicks = Ticks * 2;  half = Tape.length / 2;  ScrollLC() }
if (meth == "scroll rc") { clen = tlen;  Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  Wait = blocks[cblock].wait;  tTicks = Ticks * 2;  half = Tape.length / 2;  ScrollRC() }
if (meth == "scroll cl") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  tTicks = Ticks * 2;  half = Tape.length / 2;  clen = cent - half;  ScrollCL() }
if (meth == "scroll cr") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  tTicks = Ticks * 2;  half = Tape.length / 2;  clen = cent - half;  ScrollCR() }
if (meth == "slide left") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  Wait = blocks[cblock].wait;  cpos = 0;  clet = Tape.charAt(cpos);  clen = tlen;  cstr = "";  SlideL() }
if (meth == "slide lc") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  Wait = blocks[cblock].wait;  cpos = Tape.length - 1;  clet = Tape.charAt(cpos);  clen = 0;  cstr = "";  half = Tape.length / 2;  iba = cent - half;  ib = ms(iba);  SlideLC() }
if (meth == "slide rc") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  Wait = blocks[cblock].wait;  cpos = 0;  clet = Tape.charAt(cpos);  cstr = "";  half = Tape.length / 2;  clen = cent + half;  fs = ms(cent - half);  SlideRC() }
if (meth == "slide cl") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  cpos = 0;  clet = Tape.charAt(cpos);  cstr = Tape.substring(1,Tape.length);  half = Tape.length / 2;  clen = cent - half;  iba = 0;  ib = ms(iba);  SlideCL() }
if (meth == "slide cr") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  cpos = Tape.length - 1;  clet = Tape.charAt(cpos);  cstr = Tape.substring(0,Tape.length - 1);  half = Tape.length / 2;  clen = 0;  fs = ms(cent - half);  SlideCR() }
if (meth == "slip left") { clen = 0;  Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  SlipL() }
if (meth == "slip right") { clen = 0;  Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  SlipR() }
if (meth == "slip letter") { Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  cpos = Tape.length - 1;  clet = Tape.charAt(cpos);  cstr = Tape.substring(0,Tape.length - 1);  clen = 0;  SlipLet() }
if (meth == "split"){ Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  var iii = Tape.length / 2;  if (iii / 2 != Math.ceil(iii / 2)) { Tape = Tape + " " } hstr1 = Tape.substring(0,Tape.length/2);  hstr2 = Tape.substring(Tape.length/2,Tape.length);  tTicks = Ticks * 2;  clen = cent - hstr1.length;  iba = 0;  ib = ms(iba);  Split() }
if (meth == "merge"){ Tape = blocks[cblock].text;  Ticks = blocks[cblock].ticks;  var iii = Tape.length / 2;  if (iii / 2 != Math.ceil(iii / 2)) { Tape = Tape + " " } hstr1 = Tape.substring(0,Tape.length/2);  hstr2 = Tape.substring(Tape.length/2,Tape.length);  tTicks = Ticks * 2;  clen = 0 - hstr1.length;  iba = tlen;  ib = ms(iba);  Wait = blocks[cblock].wait;  Merge() } }
function Display() { document.Active.ASCII.value = Tape;  cblock++;  timerID = setTimeout("Activate()",Wait) }
function DisplayC() { var temp = cent - half;  ini = ms(temp);  document.Active.ASCII.value = ini + Tape;  cblock++;  timerID = setTimeout("Activate()",Wait) }
function ScrollL() { if (clen >= 0) { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("ScrollL()",Ticks) } else { beg = 0 - clen;  if (beg == Tape.length) { document.Active.ASCII.value = "";  cblock++;  timerID = setTimeout("Activate()",Ticks) } else { tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("ScrollL()",tTicks) } } }
function ScrollR() { if (clen >= 0) { if (clen > tlen) { document.Active.ASCII.value = "";  cblock++;  timerID = setTimeout("Activate()",Ticks) } else { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("ScrollR()",Ticks) } } else { beg = 0 - clen;  tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("ScrollR()",tTicks) } }
function ScrollLC() { if (clen >= 0) { if (cent <= (clen + half)) { cblock++;  timerID = setTimeout("Activate()",Wait) } else { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("ScrollLC()",Ticks) } } else { beg = 0 - clen;  if (cent <= (clen + half)) { cblock++;  timerID = setTimeout("Activate()",Wait) } else { tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("ScrollLC()",tTicks) } } }
function ScrollRC() { if (clen >= 0) { if (cent >= (clen + half)) { cblock++;  timerID = setTimeout("Activate()",Wait) } else { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("ScrollRC()",Ticks) } } else { beg = 0 - clen;  if (cent >= (clen + half)) { cblock++;  timerID = setTimeout("Activate()",Wait) } tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("ScrollRC()",tTicks) } }
function ScrollCL() { if (clen >= 0) { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("ScrollCL()",Ticks) } else { beg = 0 - clen;  if (beg >= Tape.length) { document.Active.ASCII.value = "";  cblock++;  timerID = setTimeout("Activate()",Wait) } else { tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("ScrollCL()",tTicks) } } }
function ScrollCR() { if (clen >= 0) { if (clen > tlen) { document.Active.ASCII.value = "";  cblock++;  timerID = setTimeout("Activate()",Wait) } else { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("ScrollCR()",Ticks) } } else { beg = 0 - clen;  tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("ScrollCR()",tTicks) } }
function SlideL() { if (clen >= 0) { ini = ms(clen);  tickered = cstr + ini + clet;  document.Active.ASCII.value = tickered;  clen -= 3;  timerID = setTimeout("SlideL()",Ticks) } else { document.Active.ASCII.value = cstr + clet;  cstr = document.Active.ASCII.value;  clen = tlen - cstr.length;  cpos++;  clet = Tape.charAt(cpos);  if (clet == " ") { cstr = cstr + " ";  cpos++;  clet = Tape.charAt(cpos) } if (clet == "") { cblock++;  timerID = setTimeout("Activate()",Wait) } else { timerID = setTimeout("SlideL()",Ticks) } } }
function SlideLC() { if (clen <= cent - half) { ini = ms(clen);  tickered = ini + clet + ib + cstr;  document.Active.ASCII.value = tickered;  clen += 3;  iba -= 3;  ib = ms(iba);  timerID = setTimeout("SlideLC()",Ticks) } else { iba = cent - half;  ini = ms(iba);  ib = ms(iba);  document.Active.ASCII.value = ini + clet + cstr;  cstr = clet + cstr;  clen = 0;  cpos--;  if (cpos >= 0) { clet = Tape.charAt(cpos);  if (clet == " ") { cstr = " " + cstr;  cpos--;  clet = Tape.charAt(cpos) } timerID = setTimeout("SlideLC()",Ticks) } else { cblock++;  timerID = setTimeout("Activate()",Wait) } } }
function SlideRC() { if (clen >= 0) { ini = ms(clen);  tickered = fs + cstr + ini + clet;  document.Active.ASCII.value = tickered;  clen -= 3;  timerID = setTimeout("SlideRC()",Ticks) } else { clen = cent + half;  cstr += clet;  document.Active.ASCII.value = fs + cstr;  cpos++;  clet = Tape.charAt(cpos);  if (clet == " ") { cstr = cstr + " ";  cpos++;  clet = Tape.charAt(cpos) } if (clet == "") { document.Active.ASCII.value = fs + Tape;  cblock++;  timerID = setTimeout("Activate()",Wait) } else { timerID = setTimeout("SlideRC()",Ticks) } } }
function SlideCL() { if (clen > 0) { ini = ms(clen);  tickered = ini + clet + ib + cstr;  document.Active.ASCII.value = tickered;  clen -= 3;  iba += 3;  ib = ms(iba);  timerID = setTimeout("SlideCL()",Ticks) } else { iba = 0;  ib = ms(iba);  clen = cent - half;  ini = ms(clen);  document.Active.ASCII.value = ini + cstr;  cstr = cstr.substring(1,Tape.length);  cpos++;  clet = Tape.charAt(cpos);  if (clet == " ") { cstr = cstr.substring(1,Tape.length);  cpos++;  clet = Tape.charAt(cpos) } if (clet == "") { document.Active.ASCII.value = "";  cblock++;  timerID = setTimeout("Activate()",Ticks) } else { timerID = setTimeout("SlideCL()",Ticks) } } }
function SlideCR() { if (clen <= cent + half) { ini = ms(clen);  tickered = fs + cstr + ini + clet;  document.Active.ASCII.value = tickered;  clen += 3;  timerID = setTimeout("SlideCR()",Ticks) } else { clen = 0;  document.Active.ASCII.value = fs + cstr;  cstr = cstr.substring(0,cstr.length - 1);  cpos--;  half += 1;  if (cpos >= 0) {    ;  clet = Tape.charAt(cpos);  if (clet == " ") { cstr = cstr.substring(0,cstr.length - 1);  cpos--;  clet = Tape.charAt(cpos) } timerID = setTimeout("SlideCR()",Ticks) } else { cblock++;  timerID = setTimeout("Activate()",Ticks) } } }
function SlipR() { if (clen >= 0) { if (clen > tlen) { document.Active.ASCII.value = "";  cblock++;  timerID = setTimeout("Activate()",Ticks) } else { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("SlipR()",Ticks) } } else { beg = 0 - clen;  tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen++;  timerID = setTimeout("SlipR()",Ticks) } }
function SlipL() { if (clen >= 0) { ini = ms(clen);  tickered = ini + Tape;  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("SlipL()",Ticks) } else { beg = 0 - clen;  if (beg == Tape.length) { document.Active.ASCII.value = "";  cblock++;  timerID = setTimeout("Activate()",Ticks) } else { tickered = Tape.substring(beg,tlen);  document.Active.ASCII.value = tickered;  clen--;  timerID = setTimeout("SlipL()",Ticks) } } }
function SlipLet() { if (clen < tlen) { ini = ms(clen);  tickered = cstr + ini + clet;  document.Active.ASCII.value = tickered;  clen += 3;  timerID = setTimeout("SlipLet()",Ticks) } else { clen = 0;  cstr = cstr.substring(0,cstr.length - 1);  cpos--;  if (cpos >= 0) {    ;  clet = Tape.charAt(cpos);  if (clet == " ") { cstr = cstr.substring(0,cstr.length - 1);  cpos--;  clet = Tape.charAt(cpos) } timerID = setTimeout("SlipLet()",Ticks) } else { cblock++;  timerID = setTimeout("Activate()",Ticks) } } }
function Split() { if (clen >= 0) { ini = ms(clen);  tickered = ini + hstr1 + ib + hstr2;  document.Active.ASCII.value = tickered;  clen--;  iba += 2;  ib = ms(iba);  timerID = setTimeout("Split()",Ticks) } else { if (clen <= 0 - hstr1.length) { cblock++;  timerID = setTimeout("Activate()",Ticks) } else { beg = 0 - clen;  tickered = hstr1.substring(beg,tlen);  document.Active.ASCII.value = tickered + ib + hstr2;  clen--;  iba += 2;  ib = ms(iba);  timerID = setTimeout("Split()",tTicks) } } }
function Merge() { if (clen >= 0) { if (clen > cent - hstr1.length) { tickered = ini + hstr1 + hstr2;  document.Active.ASCII.value = tickered;  cblock++;  timerID = setTimeout("Activate()",Wait) } else { ini = ms(clen);  tickered = ini + hstr1 + ib + hstr2;  document.Active.ASCII.value = tickered;  clen++;  iba -= 2;  ib = ms(iba);  timerID = setTimeout("Merge()",Ticks) } } else { beg = 0 - clen;  tickered = hstr1.substring(beg,tlen);  document.Active.ASCII.value = tickered + ib + hstr2;  clen++;  iba -= 4;  ib = ms(iba);  timerID = setTimeout("Merge()",tTicks) } }
/////////////////////////////////////////////////////////////////
//# User Vars
// Number of blocks (see bottom) to be displayed.
// ***COMMON ERROR***: Make sure to set this value according to the
// number of blocks (always the last block # + 1)!
var max = 18
// Don't change this!
var blocks = new createArr(max)
// Length of textbox
// ***COMMON ERROR: If you change this or the length of the
// textbox, remember to change the other accordingly.***
var len = 50
// Number of time to loop ALL blocks (use 0 for unlimited)
var loops = 0
// If you set the number of loops, set the final messege
var end = 'End of "ActiveASCII" by Neal Kanodia.'
// Use this format for each string (starting at 0 until 1 less
// than max):
// block(#block,"Text to display","Method",#ticks,#wait)
// example: block(0,"1st block.","Scroll Left",25,0)
// ***COMMON ERROR***: If you add a block INCREASE MAX BY 1
// ***COMMON ERROR***: If you remove a block DECREASE MAX BY 1
// ***COMMON ERROR***: Check the spelling of your methods!!!
block(0,"Hola Bienvenidos al sistema","merge",25,1000)
block(1,"Aqui te informaremos acerca de","split",25,0)
block(2,"cuales son tus mejores","scroll left",25,0)
block(3,"opciones para que","scroll right",25,0)
block(4,"puedas tomar la mejor","scroll lc",25,500)
block(5,"decicion para tu plato favorito","scroll rc",25,500)
block(6,"por medio del mesero inteligente","scroll cl",25,0)
block(7,"que te dira tus platillos favoritos","scroll cr",25,0)
block(8,"ademas de poder","slide left",25,500)
block(9,"elgir tus bebidas y postres","slide lc",25,500)
block(10,"luego de haberte registrado","slide rc",25,500)
block(11,"podras realizar tus pedidos","slide cl",25,0)
block(12,"para comprar y llevar a tu casa","slide cr",25,0)
block(13,"y disfrutar con tu familia","slip left",25,0)
block(14,"cada operacion queda registrada","slip right",25,0)
block(15,"para darte las mejores opciones","slip letter",25,0)
block(16,"lo que mas se compra y darte a ti","display",0,500)
block(17,"la mejor recomendacion para tu pedido","display",0,500)
block(18,"...DISFRUTALO...","display center",0,500)


//End User Vars
/////////////////////////////////////////////////////////////////
// Don't change!!!
var tlen = 2.4 * len
var cent = tlen / 2.2
var clen = null
var tickered = null
var ini = null
var iloop = 0
if (loops == 0) {iloop = 1}
var cblock = 0
var timerID = null
var beg = null
var clet = null
var cstr = null
var cpos = null
var ib = null
var iba = null
var fs = null
var hstr1 = null
var hstr2 = null
<!-- end  -->
</script>
<script language="JavaScript">
document.write('<form name="Active" onSubmit="0">')
document.write('<input type="text" name="ASCII" size="50">')
document.write('</form>')
Activate()
</script>

</center>
</body>
</html>