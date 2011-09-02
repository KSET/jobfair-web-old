<!DOCTYPE HTML />
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Job Fair 2011 - 18. i 19. svibnja 2011. - Fakultet elektrotehnike i računarstva" />
    <meta name="keywords" content="JobFair, 2011, FER, studenti, SSFER, KSET, zaposlenje, posao, obrazovanje, poduzetništvo, siemens, erste, intesa saopaolo card, hrvatski telekom, in2, intech, omegasoftware, riz odašiljači, amdosoft, hp, hipersfera, infinum, pet minutra, gensym, rep.hr, mmv-auris, ieee, mipro, redea, elmar, stepri" />

    <title>Job Fair 2011 - <?=$content_title?></title>

    <link href="<?=uri('static/css')?>styles.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?=uri('static/images')?>favicon.ico" />
    <link rel="icon" type="image/png" href="<?=uri('static/images')?>favicon.png" />
    <script type="text/javascript" src="<?=uri('static/js')?>jquery-1.5.1.min.js" language="javascript"></script>
    <script type="text/javascript" src="<?=uri('static/js')?>custom-functions.js" language="javascript"></script>
  </head>

  <body>

    <div id="overlay"></div>

    <div id="container">

      <!-- HEADER - logo  -->
      
      <div id="header">

	<div id="title">
	  18. i 19. svibnja 2011.  &mdash; Fakultet Elektrotehnike i računarstva
	</div>

	<div id="topBanner">
	  <a href="http://www.hup.hr" id="org_hup"></a>
	  <a href="http://www.hgk.hr" id="org_hgk"></a>
	  <a href="http://www.fer.hr" id="org_fer"></a>
	  <a href="http://www.kset.org" id="org_kset"></a>
	  <a href="http://www.ssfer.hr" id="org_ssfer"></a>
	</div>

      </div>

      <!-- BODY - main content -->
      
      <div id="body">

	<!-- MOTIF - main motif/theme  -->

	<div id="jumbo">

	  <div id="jumbonav" style="z-index:5">
	    <a href="#" class="active">1</a>
	    <a href="#">2</a>
	    <a href="#">3</a>
	    <a href="#">4</a>
	  </div>
	  
	  <div id="slideshow">
	    <img src="<?=uri('static/images')?>0.png" style="z-index:4" />
	    <img src="<?=uri('static/images')?>1.png" style="z-index:3; display:none;" />
	    <img src="<?=uri('static/images')?>2.png" style="z-index:2; display:none;" />
	    <img src="<?=uri('static/images')?>3.png" style="z-index:1; display:none;" />
	  </div>

	</div>

	<!-- CONTENT -->

	<div id="content">

	  <!-- NAVIGATION -->

	  <div id="nav">
	    <a href="<?=uri('')?>" <?php if (get_uri_segment(1) == '') echo("class=\"active\""); ?> >POČETNA</a>
	    <a href="<?=uri('sudionici')?>" <?php if (get_uri_segment(1) == 'sudionici') echo("class=\"active\""); ?> >SUDIONICI</a>
	    <a href="<?=uri('zivotopisi')?>" <?php if (get_uri_segment(1) == 'zivotopisi') echo("class=\"active\""); ?> >ŽIVOTOPISI</a>
	    <a href="<?=uri('media')?>" <?php if (get_uri_segment(1) == 'media') echo("class=\"active\""); ?> >MEDIA</a>
	    <a href="<?=uri('organizatori')?>" <?php if (get_uri_segment(1) == 'organizatori') echo("class=\"active\""); ?> style="float:right; border-right: 0px; border-left: 1px solid #000;">ORGANIZATORI</a>
	  </div>
	  
	  <div id="colRight">

	    <div class="box">
	      <h1>TERMINI PREZENTACIJA</h1>

	      <div class="content">
		<!--
		<p>
		  <b>Pozivamo sve tvrtke</b> željne promocije među današnjim studentima, a sutrašnjim visokobrazovanim inženjerima i poslovnim partnerima da nam se pridruže na ovogodišnjem JobFairu. 
		</p>
		<p>
		  Dovoljno nas je kontaktirati putem e-maila <a href="mailto:jobfair@kset.org">jobfair@kset.org</a>. 
		</p>
		-->

		<p>Sve prezentacije se održavaju u <b>Sivoj vijećnici</b> FER-a</p>

		<b>18 Svibnja. -  srijeda</b>
		<table>
		  <tr>
		    <td>10:00</td>
		    <td><a href="http://www.pet-minuta.hr">Pet minuta</a></td>
		  </tr>
		  <tr>
		    <td>10:40</td>
		    <td><a href="http://www.gensym.hr/">GenSym</a></td>
		  </tr>
		  <tr>
		    <td>11:20</td>
		    <td><a href="http://www.infinum.hr/">Infinum</a></td>
		  </tr>
		  <tr>
		    <td>12:15</td>
		    <td><a href="http://www.t.ht.hr/"><b>Hrvatski Telekom</b></a></td>
		  </tr>
		  <tr>
		    <td>13:15</td>
		    <td><a href="http://www.siemens.hr/"><b>Siemens</b></a></td>
		  </tr>
		  <tr>
		    <td>14:15</td>
		    <td><a href="http://www.in2.hr/"><b>IN2</b></a></td>
		  </tr>
		  <tr>
		    <td>15:15</td>
		    <td><a href="http://www.intechweb.org/"><b>InTech</b></a></td>
		  </tr>
		  <tr>
		    <td>16:15</td>
		    <td><a href="http://www.fer.hr/"><b>FER</b> - doktorski studiji</a></td>
		  </tr>
		</table>

		<p></p>
		<b>19 Svibnja. -  četvrtak</b>
		<table>
		  <tr>
		    <td>10:15</td>
		    <td><a href="http://www.hipersfera.hr">Hipersfera</a></td>
		  </tr>
		  <tr>
		    <td>11:15</td>
		    <td><a href="http://www.redea.hr/">REDEA + TIC</a></td>
		  </tr>
		  <tr>
		    <td>12:15</td>
		    <td><a href="http://www.erstebank.hr/"><b>Erste&Steiermarkische bank</b></a></td>
		  </tr>
		  <tr>
		    <td>13:15</td>
		    <td><a href="http://www.riz.hr/"><b>RIZ-Odašiljači</b></a></td>
		  </tr>
		  <tr>
		    <td>14:15</td>
		    <td><a href="http://www.intesasanpaolocard.com/"><b>Intesa Sanpaolo Card</b></a></td>
		  </tr>
		  <tr>
		    <td>15:15</td>
		    <td><a href="http://www.hp.com/hr/"><b>Hewlett Packard</b></a></td>
		  </tr>
		  <tr>
		    <td>16:15</td>
		    <td><a href="http://www.step.uniri.hr/">STeP-Ri</a></td>
		  </tr>
		</table>
		
	      </div>
	    </div>

	    <div style="height: 15px;"></div>

	    <script src="http://widgets.twimg.com/j/2/widget.js"></script>
	    <script>
	      new TWTR.Widget({
	      version: 2,
	      type: 'profile',
	      rpp: 5,
	      interval: 6000,
	      width: 250,
	      height: 300,
	      theme: {
	      shell: {
	      background: '#9fd0e7',
	      color: '#222222'
	      },
	      tweets: {
	      background: '#ffffff',
	      color: '#222222',
	      links: '#666666'
	      }
	      },
	      features: {
	      scrollbar: true,
	      loop: false,
	      live: true,
	      hashtags: true,
	      timestamp: true,
	      avatars: false,
	      behavior: 'all'
	      }
	      }).render().setUser('JobFair_2011').start();
	    </script>

	  </div>

	  <!-- LEFT COLUMN - CONTENT -->

	  <div id="colLeft">
	    
	    <?php
	       require_once('view/' . $content_page . '.php');
	    ?>

	  </div>

	</div>

	<div style="clear:both"></div>

      </div>


      <!-- FOOTER -->

      <div id="footer">
	<strong>JobFair 2011.</strong><br />
	Savez Studenata Fakulteta Elektrotehnike i Računarstva &mdash; Klub Studenata Elektrotehnike
      </div>

    </div>

  </body>
</html>
