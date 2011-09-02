<style type="text/css">
table.sample {
	border-width: 1px;
	border-style: outset;
	border-color: gray;
	border-collapse: collapse;
	background-color: white;
}
table.sample th {
	border-width: 1px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
table.sample td {
	border-width: 1px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
</style>
<div id="colLeftTop">

  <h1>Pregled životopisa
    <div style="float:right;">
        <a href="<?=uri('logout')?>">Odjava</a>
	<p>
		<form action="<?=uri('pretraga')?>" method="post">
			<input type="text" name="q" id="q" onfocus="document.getElementById('q').value = ''" value=" Pretraga..." onblur="if(this.value=='')this.value=' Pretraga...';" />
			<input type="submit" value="Traži" />
		</form>
	</p>
    </div>
  </h1>
    
    <br />
    
    <table class="sample" cellpadding="5" cellspacing="5">
    
        <th>Ime i prezime</th>
        <th>Fakultet</th>
        <th>Smjer/Godina</th>
        
        <? foreach($cvs as $row){?>
            
            <tr>
                <td><a href="<?=uri('zivotopisi/pregled')?>?id=<?=$row['id']?>"><?=$row['firstname']?> <?=$row['lastname']?></a></td>
                <td><?=$row['faculty']?></td>
                <td><?=$row['courseyear']?></td>
            </tr>
            
        <?}?>
        
    </table>
</div>
