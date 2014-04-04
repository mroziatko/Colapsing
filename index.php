<!DOCTYPE html>
<html>
    <head>
        <title>Vascserkész</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <!--<script src="http://code.jquery.com/jquery-2.1.0-rc1.js"></script>-->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="js/jquery2.1.0.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 
		<script type="text/javascript" src="js/jquery.plugin.js"></script> 
		<script type="text/javascript" src="js/jquery.countdown.js"></script>
        <script type="text/javascript">
        	
		$(function () {
			var liftOfTime  = new Date();
			liftOfTime  = new Date(liftOfTime .getFullYear(), 8 - 1, 29);
			$('#countDown').countdown({until: liftOfTime });
		});

        </script>
    </head>

    <body>

		<!--<div class="title"></div>-->
		<div class="information">
			<h1>Vascserkész 2014</h1>
			<h2>Kis-Kárpátok</h2>
			<h3>augusztus 29. - 31.</h3>
			<span class="is-countdown" id="countDown"></span>

		</div>
		<div id="cc_menu" class="cc_menu">
			<div class="cc_item" style="z-index:5;	background:#444 url(images/bg_1_bw.png) no-repeat; background-size: 100% 100%">
				<img src="images/bg_1.png" alt="image" />
				<span class="cc_title">Vascserkész</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_info">Információk</li>
						<!--<li class="cc_content_hist">Történelem</li>-->
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:4; background:#444 url(images/bg_2_bw.png) no-repeat;  background-size: 100% 100%">
				<img src="images/bg_2.png" alt="image" />
				<span class="cc_title">Versenyszámok</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_walk">Gyaloglás</li>
						<li class="cc_content_bike">Kerékpározás</li>
						<li class="cc_content_run">Futás</li>
						<li class="cc_content_canoe">Kajak</li>
						<li class="cc_content_swim">Úszás</li>
						<li class="cc_content_shoot">céllövészet</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:3; background:#444 url(images/bg_3_bw.png) no-repeat;  background-size: 100% 100%">
				<img src="images/bg_3.png" alt="image" />
				<span class="cc_title">Galéria</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_photo">Képek</li>
						<li class="cc_content_video">Videók</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:2; background:#444 url(images/bg_4_bw.png) no-repeat;  background-size: 100% 100%">
				<img src="images/bg_4.png" alt="image" />
				<span class="cc_title">GY.I.K.</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_stuff">Felszerelés</li>
						<li class="cc_content_race">Verseny</li>
						<li class="cc_content_other">Egyéb</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:1; background:#444 url(images/bg_5_bw.png) no-repeat;  background-size: 100% 100%">
				<img src="images/bg_5.png" alt="image" />
				<span class="cc_title">Elérhetőség</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_reg">Jelentkezés</li>
						<li class="cc_content_quest">Kérdés</li>
						<li class="cc_content_contact">Elérhetőség</li>
					</ul>
				</div>
			</div>
			<div id="cc_content" class="cc_content">
				<span id="cc_back" class="cc_back">&lt;&lt; Vissza</span>
				
				<div class="cc_content_info">
					<?php include('info.php') ?>
				</div>
				<div class="cc_content_hist">
					<?php include('skuska.html') ?>
				</div>
				<div class="cc_content_walk">
					<h1>Gyaloglás</h1>
					<ul>
						<li><b>Táv:</b> 50km</li>
						<li><b>Kötelező felszerelés:</b></li>
						<ul>
							<li>Hálózsák</li>
							<li>Derékalj</li>
							<li>Tartalék zokni</li>
							<li>Esőkabát</li>
							<li>Fejvédő</li>
							<li>Iránytű</li>
							<li>Kés/bicska</li>
							<li>Gyufa</li>
							<li>Egészségügyi kártya</li>
							<li>Elemlámpa</li>
							<li>Pótelem és égő</li>
							<li>Személyi igazolvány</li>
							<li>Elegendő élelem 24 órára</li>
							<li>Kulacs vagy egyéb víztároló, amibe elegendő vizet el tudsz vinni 24 órás túrára</li>
						</ul>
						<li><b>Ajánlott felszerelés:</b></li>
						<ul>
							<li>Egészségügyi láda (csapatonként egy)</li>
							<li>Kullancs és szúnyog elleni spray</li>
							<li>Szöllőcukor</li>
							<li>Készpénz</li>
							<li>Más, a versenyző számára fontos felszerelés</li>
						</ul>
						<li><b>Egyéb:</b> Ezt a távot a csapat minden tagjának (min. 4 cserkésznek) be kell fejeznie. 
						A versenyszám egész ideje alatt a versenyzők kötelező módon vinniük kell saját felszerelésüket 
						(zsákjukat a fentebb felsorolt kellékekkel együtt). Kivételt képeznek a következő versenyszámok: 
						úszás, futás, kajakozás és kerékpározás
						</li>
					</ul>
				</div>
				<div class="cc_content_bike">
					<h1>Kerékpározás</h1>
					<ul>
						<li><b>Táv:</b> 46km</li>
						<li><b>Kötelező felszerelés:</b></li>
						<ul>
							<li>Kerékpár</li>
							<li>Bukósisak</li>
							<li>Fényvisszaverő mellény</li>
							<li>Személyi igazolvány</li>
						</ul>
						<li><b>Ajánlott, kiegészítő felszerelés:</b></li>
						<ul>
							<li>Motoros egészségügyi láda</li>
							<li>Kis hátizsák</li>
							<li>Víz</li>
							<li>Kerékpár javításara szükséges felszerelés</li>
						</ul>
						<li><b>Egyéb:</b> A versenyző ezt a távot maga tekeri le, e közben a társai fojtatják a túrát. 
						A Kerékpározó a táv letekerése után, csatlakozik a csapatához.</li>
					</ul>
				</div>
				<div class="cc_content_run">
					<h1>Futás</h1>
					<ul>
						<li><b>Táv:</b> 2km</li>
						<li><b>Kötelező felszerelés:</b> nincs</li>
						
						<li><b>Ajánlott, kiegészítő felszerelés:</b></li>
						<ul>
							<li>Torna cipő</li>
						</ul>
						<li><b>Egyéb:</b> A versenyző ezt a távot maga teszi meg, 
						e közben a társai várakoznak az adot állomáson. 
						Versenyszámot a versenyző a hátizsákja nélkül teljesíti. 
						A futásban részt vett versenyző megérkezése után tovább halad.</li>
					</ul>
				</div>
				<div class="cc_content_canoe">
					<h1>Kajak</h1>
					<ul>
						<li><b>Táv:</b> 1km</li>
						<li><b>Kötelező felszerelés:</b></li>
						
						<li><b>Ajánlott, kiegészítő felszerelés:</b></li>
						<ul>
							<li>Törölköző</li>
							<li>Pót trikó és nadrág</li>
						</ul>
						<li><b>Egyéb:</b> A versenyző a távot maga teszi meg,
						e közben a társai várakoznak az adot állomáson. 
						Versenyszámot a versenyző a hátizsákja nélkül teljesíti. 
						A kajakozásban részt vett versenyző csapathoz érkezése után tovább haladhat.</li>
					</ul>
				</div>
				<div class="cc_content_swim">
					<h1>Úszás</h1>
					<ul>
						<li><b>Táv:</b> 800m</li>
						<li><b>Kötelező felszerelés:</b></li>
						<ul>
							<li>Úszó nadrág/fürdő ruha</li>
							<li>Törölköző</li>
						</ul>
						
						<li><b>Ajánlott, kiegészítő felszerelés:</b></li>
						<ul>
							<li>Úszó szemüveg</li>
							<li>Úszó sapka</li>
						</ul>
						<li><b>Egyéb:</b> A versenyző a távot maga teszi meg, 
						e közben a társai várakoznak az adot állomáson. 
						A versenyszámot a versenyző a hátizsákja nélkül teljesíti. 
						Az úszásban részt vett versenyző csapathoz érkezése után a tovább haladhat.</li>
					</ul>
				</div>
				<div class="cc_content_shoot">
					<h1>céllövészet</h1>
					<ul>
						<li><b>Táv:</b> 20m</li>
						<li><b>Kötelező felszerelés:</b></li>
						<li><b>Ajánlott, kiegészítő felszerelés:</b></li>
						<li><b>Egyéb:</b> A versenyzőnek 5 lövése van. 
						A lövéseket a hátizsákjával kell elvégeznie.</li>
					</ul>
				</div>
				<div class="cc_content_photo">
					<?php include('image.php') ?>
				</div>
				<div class="cc_content_video">
					<iframe width="560" height="315" src="//www.youtube.com/embed/Hf71ynOL8PA" frameborder="0" allowfullscreen></iframe>
					<!--<?php include('video.php') ?>	-->
				</div>
				<div class="cc_content_stuff">
					<!--<?php include('skuska.html') ?>	-->
					<p>Ha lesznek kérdések, és úgy látjuk, hogy ez nagy gondot okozhat, felírjuk ide.</p>
				</div>
				<div class="cc_content_race">
					<!--<?php include('skuska.html') ?>-->
					<p>Ha lesznek kérdések, és úgy látjuk, hogy ez nagy gondot okozhat, felírjuk ide.</p>
				</div>
				<div class="cc_content_other">
					 <!--<?php include('skuska.html') ?>-->
					 <p>Ha lesznek kérdések, és úgy látjuk, hogy ez nagy gondot okozhat, felírjuk ide.</p>	
				</div>
				<div class="cc_content_reg">
					<?php include('jelentkezes_elo.php') ?>
				</div>
				<div class="cc_content_quest">
					<?php include('kerdes.php') ?>
				</div>
				<div class="cc_content_contact">
					<?php include('kontakt2.php') ?>
				</div>
				
			</div>
		</div>
        
        <!-- The JavaScript -->
        <script type="text/javascript">
            $(function() {
				//all the menu items
				var $items 		= $('#cc_menu .cc_item');
				//number of menu items
				var cnt_items	= $items.length;
				//if menu is expanded then folded is true
				var folded		= false;
				//timeout to trigger the mouseenter event on the menu items
				var menu_time;
				/**
				bind the mouseenter, mouseleave to each item:
				- shows / hides image and submenu
				bind the click event to the list elements (submenu):
				- hides all items except the clicked one, 
				and shows the content for that item
				*/
				$items.unbind('mouseenter')
					  .bind('mouseenter',m_enter)
				      .unbind('mouseleave')
					  .bind('mouseleave',m_leave)
					  .find('.cc_submenu > ul > li')
					  .bind('click',function(){
					var $li_e = $(this);
						  //if the menu is already folded,
						  //just replace the content
					if(folded){
						hideContent();
						showContent($li_e.attr('class'));
					}	
					      else //fold and show the content
						fold($li_e);
				});
				
				/**
				mouseenter function for the items
				the timeout is used to prevent this event 
				to trigger if the user moves the mouse with 
				a considerable speed through the menu items
				*/
				function m_enter(){
					var $this 	= $(this);
					clearTimeout(menu_time);
					menu_time 	= setTimeout(function(){
					//img
					$this.find('img').stop().animate({'top':'0px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'35%'},400);
					},200);
				}
				
				//mouseleave function for the items
				function m_leave(){
					var $this = $(this);
					clearTimeout(menu_time);
					//img
					$this.find('img').stop().animate({'top':'-100%'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'0px'},400);
				}
				
				//back to menu button - unfolds the menu
				$('#cc_back').bind('click',unfold);
				
				/**
				hides all the menu items except the clicked one
				after that, the content is shown
				*/
				function fold($li_e){
					var $item		= $li_e.closest('.cc_item');
					
					var d = 100;
					var step = 0;
					$items.unbind('mouseenter mouseleave');
					$items.not($item).each(function(){
						var $item = $(this);
						$item.stop().animate({
							'marginLeft':'-14%'
						},d += 200,function(){
							++step;
							if(step == cnt_items-1){
								folded = true;
								showContent($li_e.attr('class'));
							}	
						});
					});
				}
				
				/**
				shows all the menu items 
				also hides any item's image / submenu 
				that might be displayed
				*/
				function unfold(){
					$('#cc_content').stop().animate({'left':'-100%'},600,function(){
						var d = 100;
						var step = 0;
					$items.each(function(){
							var $item = $(this);
							
							$item.find('img')
								 .stop()
								 .animate({'top':'-100%'},200)
								 .andSelf()
								 .find('.cc_submenu > ul')
								 .stop()
								 .animate({'height':'0px'},200);
								 
							$item.stop().animate({
							'marginLeft':'0px'
							},d += 200,function(){
								++step;
								if(step == cnt_items-1){
									folded = false;
									$items.unbind('mouseenter')
										  .bind('mouseenter',m_enter)
										  .unbind('mouseleave')
										  .bind('mouseleave',m_leave);
									
									hideContent();
								}		  
							});
						});
					});
				}
				
				//function to show the content
				function showContent(idx){
					$('#cc_content').stop().animate({'left':'15%'},200,function(){
						$(this).find('.'+idx).fadeIn();
					});
					$('#cc_back').stop().animate({},400,function(){
						$(this).css({'position':'fixed','top':'85%','right':'10%'});
					});
				}
				
				//function to hide the content
				function hideContent(){
					$('#cc_content').find('div[class*=cc_content]').hide();
					}

					$('#cc_back').click(function(){
					$(this).css({'position':'absolute','top':'94%','right':'3%'});
					});
            });
				
        </script>
    </body>
</html>