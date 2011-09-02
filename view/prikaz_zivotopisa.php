<div id="colLeftTop">
    
<h1>Prikaz životopisa
    <div style="float:right;">
        <a href="javascript:history.go(-1);">Natrag</a> | <a href="<?=uri('logout')?>">Odjava</a>
    </div>
</h1>

<table id="cv">


<tr>
        <td align="right" valign="top"><b>Ime:</b></td>
        <td><?=$cv['firstname']?></td>
</tr>
<tr>
<tr>
        <td align="right" valign="top"><b>Prezime:</b></td>
        <td><?=$cv['lastname']?></td>
</tr>
<tr>
        <td align="right" valign="top">Adresa prebivališta:</td>
        <td><?=$cv['adrp']?></td>
</tr>
<tr>
        <td align="right" valign="top">Adresa boravišta:</td>
       <td><?=$cv['adrb']?></td>
</tr>
<tr>
        <td align="right" valign="top"><b>E-mail:</b></td>
        <td><a href="mailto:<?=$cv['email']?>"><?=$cv['email']?></a></td>
</tr>
<tr>
        <td align="right" valign="top">Web:</td>
        <td><a href="http://<?=$cv['web']?>/" target="_blank"><?=$cv['web']?></a></td>
</tr>
<tr>
        <td align="right" valign="top"><b>Godina rođenja:</b></td>
        <td><?=$cv['byear']?></td>
</tr>
<tr>
        <td align="right" valign="top">Broj telefona:</td>
        <td><?=$cv['tel']?></td>
</tr>
<tr>
        <td align="right" valign="top">Broj mobitela:</td>
        <td><?=$cv['mob']?></td>
</tr>
</p>



<tr>
        <td align="right" valign="top"><b>Fakultet:</b></td>
        <td><?=$cv['faculty']?></td>
</tr>
<tr>
        <td align="right" valign="top"><b>Smjer/Godina:</b></td>
        <td><?=$cv['courseyear']?></td>
</tr>
<tr>
        <td align="right" valign="top">Srednja škola/Smjer:</td>
        <td><?=$cv['highschool']?></td>
</tr>
<tr>
        <td align="right" valign="top">Aktivnosti na fakultetu:</td>
        <td><?=$cv['activities']?></td>
</tr>
<tr>
        <td align="right" valign="top">Dodatno školovanje:</td>
        <td><?=$cv['extras']?></td>
</tr>
<tr>
		
        <td align="right" valign="top">Jezici:</td>
        <td align="left"><?=$cv['languages']?></td>
</tr>



<tr>
        <td align="right" valign="top">Znanja/Vještine:</td>
        <td><?=$cv['skills']?></td>
</tr>
<tr>
        <td align="right" valign="top">Radno iskustvo:</td>
        <td><?=$cv['workexp']?></td>
</tr>
<tr>
        <td align="right" valign="top" >Ukratko o sebi:</td>
        <td><?=$cv['about']?></td>
</tr>
<tr>
        <td align="right" valign="top">Planirano vrijeme diplomiranja:</td>
       <td><?=$cv['expgrad']?></td>
</tr>
<tr>
        <td align="right" valign="top">Preferirani posao:</td>
        <td><?=$cv['prefs']?></td>
</tr>
<tr>
        <td align="right" valign="top">Očekivanja:</td>
        <td><?=$cv['expectations']?></td>
</tr>

</table>

</div>