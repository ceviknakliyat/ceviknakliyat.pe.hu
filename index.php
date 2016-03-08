<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<script language="javascript" src="http://is.sitekodlari.com/sagtusengelleme1.js"></script>-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style6.css" />
<link rel="stylesheet"  href="css/css.css" type="text/css" />  
<link rel="stylesheet" href="css/style.css" type="text/css" />
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Çevik Nakliyat</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="copyright" content="Çevik Nakliyat" />
<meta name="author" content="Çevik Nakliyat" />
<meta name="RESOURCE-TYPE" content="DOCUMENT" />
<meta name="DISTRIBUTION" content="GLOBAL" />
<meta name="rating" content="general" />
<meta name="robots" content="index,follow" />
<meta name="ROBOTS" content="all" />
<meta name="REVISIT-AFTER" content="1 DAYS" />
<meta name="RATING" content="GENERAL" />
<meta name="keywords" content="Güvenli taşımacılık ve Hızlı nakliyat" />
<meta name="description" content="10 yıldır müşterilerimize konforlu bir hizmet sunmaktayız." />
<meta name="Altavista" content="all" />
<meta name="Google" content="all" />
<meta name="Yahoo" content="all" />
<meta name="Googlebot" content="all" />
<meta name="hotbot" content="all" />
<meta name="msnbot" content="all" />
<meta name="alexabot" content="all" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Add jQuery library -->
	<script type="text/javascript" src="source/jquery-1.8.0.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="source/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.0"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.0" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox-buttons.css?v=1.0.3" />
	<script type="text/javascript" src="source/jquery.fancybox-buttons.js?v=1.0.3"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox-thumbs.css?v=1.0.6" />
	<script type="text/javascript" src="source/jquery.fancybox-thumbs.js?v=1.0.6"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/jquery.fancybox-media.js?v=1.0.3"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
					
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style><script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
</head>
<script type="text/javascript">
    audio = new Audio();
    audio.src = "mp3/1.mp3";
    audio.loop = true;
    audio.play();
</script>
<body>
<div class="header">
  <ul id="menu">
    	<li><a href="index.php" target="">ANASAYFA</a>
        	<ul>
			</ul>
        </li>
	
    	<li><a href="hakkimizda.php" target="">HAKKIMIZDA</a>
       	  <ul>
			</ul>
        </li>
	
        <li><a href="hizmetlerimiz.php" target="">HİZMETLERİMİZ</a>
        	<ul>
			</ul>
        </li>
	
    	<li><a href="hesapla.php" target="">NAKLİYAT FİYATI HESAPLAMA</a>
       	  <ul>
			</ul>
        </li>
	
        <li><a href="iletisim.php" target="">İLETİŞİM</a>
        	<ul>
			</ul>
        </li>
  </ul>
</div>	
<div class="icerik">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#jslidernews3 .button-previous') ,
						next:$('#jslidernews3 .button-next') };
  
		var _complete = function(slider, index){ 
								$('#jslidernews3 .slider-description').animate({height:0});
								slider.find(".slider-description").animate({height:50}) 
						};							;
	 	$('#jslidernews3').lofJSidernews( { interval : 3100,
												direction		: 'opacity',	
											 	//easing			: 'easeOutBounce',
												duration		: 500,
												auto		 	: true,
												mainWidth:975,
												buttons			: buttons,
												onComplete:_complete } );	
	});
</script>
  		  
  <!--		<div id="jslidernews3" class="lof-slidecontent" style="width:975px; height:355px;">
	<div class="preload"><div></div></div>
            
            <div  class="button-previous"></div>
                   
   
    <div class="main-slider-content" style="width:975px; height:355px;">
                <ul class="sliders-wrap-inner">
               
          
	               

<li> <a href="" style="" ><img src="uploads/slider/3b2c1slayt1.jpg" width="975" height="355" border="0"> </a></li> 
                    
   	               

<li> <a href="" style="" ><img src="uploads/slider/c5e43slayt2.jpg" width="975" height="355" border="0"> </a></li> 
                    
   	               

<li> <a href="" style="" ><img src="uploads/slider/70dd7slayt3.jpg" width="975" height="355" border="0"> </a></li> 
                    
   	               

<li> <a href="" style="" ><img src="uploads/slider/b2225slayt4.jpg" width="975" height="355" border="0"> </a></li> 
                    
     
                    
     

                
    </ul>  	
          </div>
 		
    <div class="button-next"></div>
    <div class="button-control action-start hover-stop"><span></span></div>
 </div> 	-->
 <center>
 <div id="slider-wrapper">
 <div class="slider">
 <a href="" class="img-bir">
 <img src="images/slider/1.jpg" alt="" width="940" height="450"/></a>
 <a href="" class="img-iki">
 <img src="images/slider/2.jpg" alt="" width="940" height="450"/></a>
 <a href="" class="img-uc">
 <img src="images/slider/3.jpg" alt="" width="940" height="450"/></a>
 <a href="" class="img-dort">
 <img src="images/slider/4.jpg" alt="" width="940" height="450"/></a>
 <a href="" class="img-bes">
 <img src="images/slider/5.jpg" alt="" width="940" height="450"/></a>
 <a href="" class="img-alti">
 <img src="images/slider/6.jpg" alt="" width="940" height="450"/></a>
  </div>
 </div>
 </center>
<div class="bosluk"></div>  	
<div class="bosluk"></div>  	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="sol">
<div class="bosluk"></div>
        <div class="bosluk"></div>
<div class="bosluk"></div> 
        <div class="yazi_11_line">  
        	<p style="text-align: center;">
	<img alt="" src="images/moving-kelebek.gif" style="width: 200px; height: 200px;" /></p>
        </div>
		<div class="bosluk"></div>       
     	<div class="bosluk"></div>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </div>   
	<div class="main_orta">
    	<div class="ana_sayfa_kutu_baslik"> Kalite Politikamız </div>
        <div class="bosluk"></div>
        <div class="bosluk"></div>
        	<div id="sayfa_img">
              <div class="yaz11pt"> 
            <p>
	<img alt="" src="images/kalitee.jpg" style="width: 250px; height: 235px; float: right; margin: 10px;" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta urna eget turpis pulvinar, in consectetur turpis consequat. Vestibulum viverra lacus neque, ut volutpat orci dictum ac. Donec id orci augue. Nulla mollis dolor eu purus venenatis, non maximus metus hendrerit. Integer molestie at dui et luctus. Phasellus magna tellus, congue et aliquet in, finibus ut libero. In rutrum tortor sed justo posuere, efficitur laoreet neque viverra. Sed fermentum vulputate pretium.</p>
<p>
	Sed blandit lacus porttitor, varius neque in, sollicitudin lorem. In nec cursus eros. Nunc et mi velit. Nulla orci tellus, feugiat non porta ac, sagittis a sapien. Praesent vel risus fringilla, fringilla orci at, sagittis turpis. Aenean magna justo, consectetur vel dignissim a, fermentum id est. Vivamus bibendum tempor est id ornare. Etiam at metus lacinia, congue leo nec, ullamcorper nisi. Ut sodales est feugiat, posuere enim vel, fermentum sem. Donec viverra dapibus enim, id tempus nulla maximus nec.</p>
<p>
	Nam tristique mauris sit amet ligula ornare dictum. Maecenas vitae ipsum porta, ornare turpis eget, dictum ipsum. Mauris placerat neque a nibh aliquet, vitae elementum urna vestibulum. Ut commodo hendrerit ullamcorper. Sed consequat nisi id ullamcorper vulputate. Vestibulum viverra vitae arcu gravida rhoncus. Pellentesque in magna odio. Morbi vel egestas nisl. Etiam rutrum semper faucibus. Pellentesque at mattis eros. Nunc pharetra, elit id auctor luctus, justo sem vehicula mi, ac finibus libero erat ac ligula. Pellentesque non magna sed ex facilisis volutpat eu sed sapien.</p>
              </div>
            </div>
        <div class="bosluk"></div>
		</div>
</div>	
<div class="bosluk"></div>
</div>
<div class="sag2"></div>
<div class="footer_g">
  <div class="footer">
  <div class="bosluk"></div>
  <table width="100%" border="0">
        <tr>
          <td width="30%" align="left" valign="top" ><span class="yazi_11_line">Copyright © Çevik Nakliyat Tüm Hakları Saklıdır.
          <br />Site içerisindeki içerikler ve görseller<br />izinsiz kopyalanamaz ve yayınlanamaz.
          </span><span class="yazi_12_s"><br />
          </span><br />
          <a href="http://www.facebook.com" target="_blank" title="facebook"><img src="images/facebook.png"   border="0" /></a>&nbsp; <a href="twitter" target="_blank" title="twitter"><img src="images/twitter.png"  border="0" /></a></td>
          <td width="5%" align="center" valign="top" ><img src="images/footer_cizgi.png" width="2" height="160" /></td>
          <td width="36%" align="left" valign="top" class="yazi_11_lines"><table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td colspan="3"><span class="footer_title"><strong>İLETİŞİM</strong></span></td>
            </tr>
            <tr>
              <td colspan="3"><img src="images/footer_cizgi_2.png" width="139" height="1" /></td>
            </tr>
            <tr>
              <td width="8%"><span class="yazi_11_lines"><strong>Adres</strong></span></td>
              <td width="2%"><span class="yazi_11_lines"><strong>:</strong></span></td>
              <td width="90%" class="yazi_11_lines">///////</td>
            </tr>
            <tr>
              <td colspan="3"><span class="yazi_11_lines"><img src="images/footer_cizgi_2.png" width="139" height="1" /></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><strong>Telefon</strong></span></td>
              <td><span class="yazi_11_lines"><strong>:</strong></span></td>
              <td class="yazi_11_lines">0535 441 35 66</td>
            </tr>
            <tr>
              <td colspan="3"><span class="yazi_11_lines"><img src="images/footer_cizgi_2.png" width="139" height="1" /></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><strong>Fax</strong></span></td>
              <td><span class="yazi_11_lines"><strong>:</strong></span></td>
              <td class="yazi_11_lines"> Yok </td>
            </tr>
            <tr>
              <td colspan="3"><span class="yazi_11_lines"><img src="images/footer_cizgi_2.png" width="139" height="1" /></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><strong>E-Mail</strong></span></td>
              <td><span class="yazi_11_lines"><strong>:</strong></span></td>
              <td class="yazi_11_lines">cevik.nakliyat@hotmail.com</td>
            </tr>
            <tr>
              <td colspan="3"><img src="images/footer_cizgi_2.png" width="139" height="1" /></td>
            </tr>
            
          </table></td>
          <td width="1%" align="left" valign="top" >&nbsp;</td>
          <td width="4%" align="center" valign="top" class="yazi_11_lines"><img src="images/footer_cizgi.png" width="2" height="160" /></td>
          <td width="24%" align="left" valign="top" class="yazi_11_lines"><table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><span class="footer_title"><strong>SAYFALAR</strong></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><img src="images/footer_cizgi_2.png" width="139" height="1" /></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><a href="hizmetlerimiz.php" class="yazi_11_lines">Hizmetlerimiz</a></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><img src="images/footer_cizgi_2.png" width="139" height="1" /></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><a href="haberler.php" class="yazi_11_lines">Haberler / Duyurular</a></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><img src="images/footer_cizgi_2.png" width="139" height="1" /></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><a href="galeri.php" class="yazi_11_lines"><strong>F</strong>oto Galeri</a></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><img src="images/footer_cizgi_2.png" width="139" height="1" /></span></td>
            </tr>
            <tr>
              <td><span class="yazi_11_lines"><a href="iletisim.php" class="yazi_11_lines">İletişim</a></span></td>
            </tr>
            <tr>
              <td><img src="images/footer_cizgi_2.png" width="139" height="1" /></td>
            </tr>
          </table></td>
        </tr>
      </table>
    
    
  </div>
<div class="bosluk"></div>
</div>
<div class="bosluk"></div>
</body>
</html>
<IFRAME name="frame_ismi" src="sayac/sayac.php" width="1" height="1" scrolling="no" frameborder="0" marginwidth="0" marginheight="0"></IFRAME>