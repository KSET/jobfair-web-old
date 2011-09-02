<div id="colLeftTop">

  <h1>Pregled životopisa</h1>
<form method="POST" action="<?=uri('authenticate')?>">    
Za prijavu u bazu životopisa koristite korisničko ime i lozinku koju ste dobili putem elektroničke pošte od organizatora ili se javite na <a href="mailto:lea.ordanic@kset.org">e-mail</a>.<br /><br />
                <table align="center">
                    <tr>
                        <td align="right"><?=__('Username')?>:</td>
                        <td><input type="text" name="username" style="width:150px;" /></td>
                    </tr>
                    <tr>
                        <td align="right"><?=__('Password')?>:</td>
                        <td><input type="password" name="password" style="width:150px;" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><input type="submit" name="submit" value="<?=__('Log in')?>" /></td>
                    </tr>
                </table>

</form>
</div>