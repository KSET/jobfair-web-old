<script language="JavaScript" type="text/javascript">
function checkform ( form )
{
  if (form.email.value == "" || form.firstname.value == "" || form.lastname.value == "" || form.byear.value ==  "" || form.faculty.value == "" || form.courseyear.value == "")
  {
    alert( "Niste unijeli sve tražene podatke!" );
    return false ;
  }
  return true ;
}
</script>
<h1>Unesite svoj životopis</h1>

<form action="<?=uri('zivotopisi/predaja')?>" method="post" onsubmit="return checkform(this);">

<table id="cv">


<tr>
        <td align="right" valign="top"><span style="color: red">*</span> <b>Ime:</b></td>
        <td><input type="text" name="firstname" value="<?php echo $_POST["firstname"]; ?>" /></td>
</tr>
<tr>
<tr>
        <td align="right" valign="top"><span style="color: red">*</span> <b>Prezime:</b></td>
        <td><input type="text" name="lastname" value="<?php echo $_POST["lastname"]; ?>" /></td>
</tr>
<tr>
        <td align="right" valign="top">Adresa prebivališta:</td>
        <td><input type="text" name="adrp"  value="<?php echo $_POST["adrp"]; ?>" /></td>
</tr>
<tr>
        <td align="right" valign="top">Adresa boravišta:</td>
        <td><input type="text" name="adrb" value="<?php echo $_POST["adrb"]; ?>" /></td>
</tr>
<tr>
        <td align="right" valign="top"><span style="color: red">*</span> <b>E-mail:</b></td>
        <td><input type="text" name="email" value="<?php echo $_POST["email"];?>" /></td>
</tr>
<tr>
        <td align="right" valign="top">Web:</td>
        <td><input type="text" name="web"  value="<?php echo $_POST["web"];?>" /></td>
</tr>
<tr>
        <td align="right" valign="top"><span style="color: red">*</span> <b>Godina rođenja:</b></td>
        <td><input type="text" name="byear" value="<?php echo $_POST["byear"]; ?>" /></td>
</tr>
<tr>
        <td align="right" valign="top">Broj telefona:</td>
        <td><input type="text" name="tel" value="<?php  ($error) ? $_POST["tel"]: ''; ?>" /></td>
</tr>
<tr>
        <td align="right" valign="top">Broj mobitela:</td>
        <td><input type="text" name="mob" value="<?php echo $_POST["mob"] ; ?>" /></td>
</tr>
</p>



<tr>
        <td align="right" valign="top"><span style="color: red">*</span> <b>Fakultet:</b></td>
        <td><input type="text" name="faculty" value="<?php echo $_POST["faculty"];?>" /></td>
</tr>
<tr>
        <td align="right" valign="top"><span style="color: red">*</span> <b>Smjer/Godina:</b></td>
        <td><input type="text" name="courseyear" value="<?php echo $_POST["courseyear"];?>" /></td>
</tr>
<tr>
        <td align="right" valign="top">Srednja škola/Smjer:</td>
        <td><input type="text" name="highschool" value="<?php echo $_POST["highschool"]; ?>" /></td>
</tr>
<tr>
        <td align="right" valign="top">Aktivnosti na fakultetu:</td>
        <td><textarea name="activities" cols="40" rows="5"><?php echo $_POST["activities"]; ?></textarea></td>
</tr>
<tr>
        <td align="right" valign="top">Dodatno školovanje:</td>
        <td><textarea name="extras" cols="40" rows="5"><?php echo $_POST["extras"]; ?></textarea></td>
</tr>
<tr>
		
        <td align="right" valign="top">Jezici:</td>
        <td>
			<input type="text" name="lang1" value="<?=$_POST['lang1']?>" /><select name="op1">
														<option selected value="-">-</option>
														<option value="Aktivno">Aktivno</option>
														<option value="Pasivno">Pasivno</option>
												</select><br />
			<input type="text" name="lang2" value="<?=$_POST['lang2']?>" /><select name="op2">
														<option selected value="-" >-</option>
														<option value="Aktivno">Aktivno</option>
														<option value="Pasivno">Pasivno</option>
												</select><br />
			<input type="text" name="lang3" value="<?=$_POST['lang3']?>" /><select name="op3">
														<option selected value="-" >-</option>
														<option value="Aktivno">Aktivno</option>
														<option value="Pasivno">Pasivno</option>
												</select><br />
        </td>
</tr>



<tr>
        <td align="right" valign="top">Znanja/Vještine:</td>
        <td><textarea name="skills" cols="40" rows="5"><?php echo $_POST["skills"]; ?></textarea></td>
</tr>
<tr>
        <td align="right" valign="top">Radno iskustvo:</td>
        <td><textarea name="workexp" cols="40" rows="5"><?php echo $_POST["workexp"]; ?></textarea></td>
</tr>
<tr>
        <td align="right" valign="top" >Ukratko o sebi:</td>
        <td><textarea name="about" cols="40" rows="5"><?php echo $_POST["about"]; ?></textarea></td>
</tr>
<tr>
        <td align="right" valign="top">Planirano vrijeme diplomiranja:</td>
        <td>
			<select name="expgrad">
				<option value="" selected >-</option>
				<option>2011</option>
				<option>2012</option>
				<option>2013</option>
				<option>2014</option>
				<option>2015</option>
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
				<option>2019</option>
				<option>2020</option>
		</select>
        </td>
</tr>
<tr>
        <td align="right" valign="top">Preferirani posao:</td>
        <td><textarea name="prefs" cols="40" rows="5"><?php echo $_POST["prefs"]; ?></textarea></td>
</tr>
<tr>
        <td align="right" valign="top">Očekivanja:</td>
        <td><textarea name="expectations" cols="40" rows="5"><?php  echo $_POST["expectations"]; ?></textarea></td>
</tr>

<tr>
	<td colspan="2" align="right"><input type="submit" name="submit" value="Spremi" /></td>
</tr>
</table>




</form>
