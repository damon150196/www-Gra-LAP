<?php

if(@$_SESSION['id_user'] )
{
	echo'
	<form>
		<div id="colors">
			<label><input type="radio" name="color" id="red" value="#FF0000" /><div style="width: 20px; height:20px; background-color: #FF0000;" checked="checked" ></div></label>
			<label><input type="radio" name="color" id="green" value="#00FF00" /><div style="width: 20px; height:20px; background-color: #00FF00;"></div></label>
			<label><input type="radio" name="color" id="blue" value="#0000FF" /><div style="width: 20px; height:20px; background-color: #0000FF;"></div></label>
			<label><input type="radio" name="color" id="yellow" value="#FFFF00" /><div style="width: 20px; height:20px; background-color: #FFFF00;"></div></label>
		</div>
	</form>
	
	<div id="tabels">
		<table id="my">
			<tr>
				<td><button type="button" class="button" col="0" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="1" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="2" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="3" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="4" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="5" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="6" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="7" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="8" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="9" row="0" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="1" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="2" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="3" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="4" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="5" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="6" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="7" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="8" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="9" owner="my" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr>
		</table>
		<table id="enemy">
			<tr>
				<td><button type="button" class="button" col="0" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="0" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="1" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="1" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="2" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="2" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="3" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="3" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="4" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="4" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="5" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="5" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="6" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="6" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="7" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="7" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="8" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="8" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr><tr>
				<td><button type="button" class="button" col="9" row="0" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="1" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="2" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="3" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="4" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="5" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="6" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="7" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="8" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
				<td><button type="button" class="button" col="9" row="9" owner="enemy" onclick="change(this)" style="width: 20px; height: 20px;"></button></td>
			</tr>

		</table>
	</div>
	';
}
else
{
	header("Location: index.php");
}


?>