<!DOCTYPE html>
<html>
<head>
	<title>Dragos's PHP test</title>
</head>
<body>
<h1>Dragos's PHP test</h1>

<p>
<!--textInput-->
<label for="variable_id">Field_name:</label>
	<input type="text" name="variable_key" id="variable_id" size="widthOfInputField"><br/><br/>

<!--Password Input-->
<label for="variable_id">Field_name:</label>
	<input type="password" name="variable_key" id="variable_id" size="widthOfInputField"><br/><br/>

<!--RADIO Input-->
	<label for="variable_id">Options_title:</label><br/>
		<input type="radio" name="variable_key" value="radioOptionName1" checked>DisplayedOption1<br/>
		<input type="radio" name="variable_key" value="radioOptionName2">DisplayedOption2<br/><br/>
		<!-- name=array key, value=array_value, checked= default checked value -->

<!--CheckBoxes Input-->
<p>
	Title:<br/>
	<input type="checkbox" name="variable_key1" value="variable_name1" checked>VariableName1<br/>
<input type="checkbox" name="variable_key1" value="variable_name1">VariableName1<br/>
<input type="checkbox" name="variable_key2" value="variable_name2">VariableName2<br/>
<input type="checkbox" name="variable_key3" value="variable_name3">VariableName3<br/>
<input type="checkbox" name="variable_key4" value="variable_name4">VariableName4<br/>
	<!-- missing value=variable_name => value=on -->
</p>

<!--SelectDropdown Input-->
<p>
<label for="variable_id">Options_title:</label></p><br/>
<select name="variable_key" id="dropdownID">
<option value="variable_default-optional" selected>Please Select:</option><br/>
<option value="variable_name1">VariableName1</option><br/>
<option value="variable_name2">VariableName2</option><br/>
<option value="variable_name3">VariableName3</option><br/>
</select>
	<!-- 1 variable key for multiple variable_names -->
</p>

<!--Text area Input-->
<p><label for="variableID">Form title:<br/>
	<textarea rows="rows#" cols="columns#" name="variable_key">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
</p>


<!--NOT RECOMMENDED - Multiple select Input-->
<p>
	<label for="variableID">Form title:<br/>
		<select multiple="multipleSelect" name="ExtendedArray[]" id="formID">
			<option value="variable_name1">variableName1</option>
			<option value="variable_name2">variableName2</option>
			<option value="variable_name3">variableName3</option>
			<option value="variable_name4">variableName4</option>
			<option value="variable_name5">variableName5</option>
		</select>
</p>

<p>
	<input type="submit" name="dopost" value="Submit:"/>
	<input type="button" onclick="location.href='http://localhost/phpTest/';return false;" value="Escape/"
</p><br/>
<br/><br/>
<!-- HTML 5 ONLY -->
<h2>HTML 5 ONLY</h2>
<p>
	<input type="color" name="colorpicker" value="aabbcc"><br/><br/><br/>
	<input type="date" name="datepicker" value="#a"><br/><br/><br/>
	
		<!-- Validated in the browser -->
	<input type="email" name="emailvalid" value="#a"><br/><br/><br/>
	<input type="number" name="number" value="#a"><br/><br/><br/>
	<input type="url" name="urlType" value="#a"><br/><br/><br/>

		<!-- unrecognized type-->
	<input type="anyvalue" name="flyingType" value="as"><br/><br/><br/> 
</p>

<button>Submit</button>
<!-- HTML 5 ONLY -->
<?php 
$oldValue = isset($_POST['value']) ? $_POST['value'] :'';
 ?>
 <p>
<form method="post">
	<p><label for="value">Input:</label>

<input type="text" name="value">

	</p>
 </p>

</html>