<manialink version="1" >
<timeout>0</timeout>

<include url="../lib/include.php?mQ" />

<label text="lbl1" posn="-20 30 0" class="tlbl" />
<label text="lbl2" posn="-20 20 0" class="tlbl" />
<label text="lbl3" posn="-20 10 0" class="tlbl" />
<label text="lbl4" posn="-20 0 0" class="tlbl testcl" />
<label text="testlbl1" posn="-20 -10 0" id="testlbl1" />
<label text="testlbl2" posn="-20 -20 0" id="testlbl2" />
<quad bgcolor="568" sizen="10 10" posn="-20 0 -2" />
<frame posn="50 0 0">
	<label text="posn 0" posn="0 -20 0" id="testlbl2" />
	<quad bgcolor="09f" sizen="10 10" />
	<quad bgcolor="95f" sizen="10 10" posn="-30 20 0" id="testquad" halign="right" valign="center" />
</frame>
<script><!--
main() {
	mQ_debug = True;
	log(mQ("label, #testquad"));
}
--></script>
</manialink>