<center><b>Circles v1.7b &nbsp&nbsp&nbsp by DerBen</b>&nbsp&nbsp&nbsp
<button id='circtogsetup'>-Settings Toggle-</button>
<button id='circstart'>-New Game-</button>
<button id='circtoghelp'>-Help Toggle-</button>
</center>
<div id="circhelp" style="display:none">
<center>
<br>Circles is a game where you attempt to match all the coloured half circles by moving the big circles around.<br> The computer will generate and shuffle a new puzzle, all you have to do is put it together like a jigsaw puzzle.
<p>Drag pieces with a plus or line.
<br>Click pieces with a circle or curve.<p>
<p><br>Need help? Take a look at the <a target="_blank" href='https://youtu.be/CwkhMN1WqD0'><b>(-Tutorial Video-)</b></a><br>
<p><br><p></center></div>
<div id="circsetup" style="display:none"><center>
<h3>Choose a level preset:</h3>
<button id='v1'>Simple</button> 
<button id='v2'>Easy</button> 
<button id='v3'>Medium</button> 
<button id='v4'>Hard</button> 
<button id='v5'>Difficult</button> 
<button id='v6'>Expert</button> 
<button id='v7'>Insane</button> 
<h3>Or choose your options:</h3>
<!--
 1 drag: 0=blank 1=fixed 2=move:+ 3=UD:- 4=LR:|
 2 click: 0=nothing 1=rotate:O 2=flipH:U 3=flipV:C
 3+: tag colors 0=null ryvb
-->
<table id='circtab'>
<tr><td><b>Choice</b></td><td><b>Input</b></td><td><b>Range</b></td><td><b>Meaning</b></td></tr>
<tr><td>Size:</td><td><input id='wxh' type='input' name='wxh' maxlength='2' size='2' value='4'></td><td>3-10</td><td>Width</td></tr>
<tr><td>Movement:</td><td><input id='mov' type='input' name='mov' maxlength='2' size='1' value='2'></td><td>2-4</td><td>Movement complexity</td></tr>
<tr><td>Rotation:</td><td><input id='rot' type='input' name='rot' maxlength='1' size='1' value='1'></td><td>0-3</td><td>Rotation complexity.</td></tr>
<tr><td>Colours:</td><td><input id='clr' type='input' name='clr' maxlength='1' size='1' value='5'></td><td>2-9</td><td>Colours used.</td></tr>
<tr><td>Percent:</td><td><input id='pct' type='input' name='pct' maxlength='2' size='2' value='55'></td><td>20-80%</td><td>Filled tile space percentage.</td></tr>
<tr><td>Fixed:</td><td><input id='pnt' type='input' name='pnt' maxlength='1' size='1' value='1'></td><td>0-9</td><td>Will randomly place up to set number of fixed tiles.</td></tr>
<tr><td>Ratio:</td><td colspan="2"><select name="rat" id='rat'><option value="0">Square</option><option value="1">Screen</option></select></td><td>Square will be same number of squares on every device<br>Screen will grow with available screen size.</td></tr>
</table><br><!--<input id='start' type='button' value='Start New Game'> OR <input id='load' type='button' value='Load Game' >-->
After changing these options, press <button id='circstart2'>-New Game-</button>!<br>

<input id='ww' type='hidden' name='ww' value='0'><input id='hh' type='hidden' name='hh' value='0'>
</center><p><br></p>
</div>
<?php //include 'gen.php'; ?>
<center>
<!--<button id='sgcirc'>save game</button> - <button id='spcirc'>save progress</button>-->
<div id="wrp"><canvas id='can'></canvas><canvas id='spr'></canvas></div>
</center>