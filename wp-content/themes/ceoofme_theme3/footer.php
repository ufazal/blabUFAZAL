</div>

<!-- please leave footer links intact -->
<div id="footer">design &raquo; <a href="http://www.bluelinerny.com">Blueliner Marketing, LLC</a></div>

<?php wp_footer(); ?>

<script language="javascript">
if (!document.layers)
document.write('<div id="divStayTopLeft" style="position:absolute">')
</script>

<layer id="divStayTopLeft">

<script language="javascript">
document.write('<div ><ul class="sidetab" id="navlist"><li id="sidetab1"><a href="<?php bloginfo("home"); ?>" title="Home"></a></li><li id="sidetab2"><a href="<?php bloginfo("home"); ?>/about"  title="About"></a></li><li id="sidetab3"><a href="<?php bloginfo("home"); ?>/contact" title="contact"></a></li><li id="sidetab5"><a href="http://feeds.feedburner.com/CeoOfMe" title="Subscribe to Feed"></a></li></ul></div>')
</script>

</layer>


<script type="text/javascript">

/*
Floating Menu script-  Roy Whittle (http://www.javascript-fx.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use
*/

//Enter "frombottom" or "fromtop"
var verticalpos="fromtop"

if (!document.layers)
document.write('</div>')

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body;
}

function JSFX_FloatTopDiv()
{
	var startX = 5,
	startY =100;
	var PX='px', d = document;
	function ml(id)
	{
		var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
		if(d.layers){el.style=el,PX='';}
		el.sP=function(x,y){el.style.left=x+PX;el.style.top=y+PX;};
		el.x = startX;
		if (verticalpos=="fromtop")
		el.y = startY;
		else{
		el.y = window.innerHeight ? pageYOffset + window.innerHeight : ietruebody().scrollTop + ietruebody().clientHeight;
		el.y -= startY;
		}
		return el;
	}
	window.stayTopLeft=function()
	{
		if (verticalpos=="fromtop"){
		var pY = window.innerHeight ? pageYOffset : ietruebody().scrollTop;
		ftlObj.y += (pY + startY - ftlObj.y)/8;
		}
		else{
		var pY = window.innerHeight ? pageYOffset + window.innerHeight : ietruebody().scrollTop + ietruebody().clientHeight;
		ftlObj.y += (pY - startY - ftlObj.y)/8;
		}
		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("stayTopLeft()", 10);
	}
	ftlObj = ml("divStayTopLeft");
	stayTopLeft();
}
JSFX_FloatTopDiv();
</script>

</body>
</html>