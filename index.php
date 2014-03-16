<!DOCTYPE html>
<html>
    <head>
        <title>Vascserkész</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <!--<script src="http://code.jquery.com/jquery-2.1.0-rc1.js"></script>-->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="js/jquery2.1.0.js"></script>
    </head>

    <body>

		<div class="title"></div>
		<div id="cc_menu" class="cc_menu">
			<div class="cc_item" style="z-index:5;	background:#444 url(images/bg_1_bw.png) no-repeat; background-size: 100% 100%">
				<img src="images/bg_1.png" alt="image" />
				<span class="cc_title">Vascserkész</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_info">Információk</li>
						<li class="cc_content_hist">Történelem</li>
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
						<li class="cc_content_shoot">Célbalövés</li>
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
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:1; background:#444 url(images/bg_5_bw.png) no-repeat;  background-size: 100% 100%">
				<img src="images/bg_5.png" alt="image" />
				<span class="cc_title">Elérhetőség</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_reg">Jelentkezés</li>
						<li class="cc_content_quest">Kérdések</li>
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
					<?php include('skuska.html') ?>
				</div>
				<div class="cc_content_bike">
					<?php include('bicaj.php') ?>
				</div>
				<div class="cc_content_run">
					<?php include('skuska.html') ?>	
				</div>
				<div class="cc_content_canoe">
					<?php include('skuska.html') ?>
				</div>
				<div class="cc_content_swim">
					<?php include('skuska.html') ?>
				</div>
				<div class="cc_content_shoot">
					<?php include('skuska.html') ?>	
				</div>
				<div class="cc_content_photo">
					<?php include('skuska.html') ?>
				</div>
				<div class="cc_content_video">
					<?php include('skuska.html') ?>
				</div>
				<div class="cc_content_stuff">
					<?php include('skuska.html') ?>	
				</div>
				<div class="cc_content_race">
					<?php include('skuska.html') ?>
				</div>
				<div class="cc_content_reg">
					<?php include('jelentkezes.php') ?>
				</div>
				<div class="cc_content_quest">
					
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
						$(this).css('position','fixed');
						$(this).css('top','75%');
						$(this).css('right','25%');
					});
				}
				
				//function to hide the content
				function hideContent(){
					$('#cc_content').find('div[class*=cc_content]').hide();  //div[class*=cc_content] toto vyhlada elementy ktorych attr ma v sebe cc_content a schova ich, pretoze iba DIV skova aj vsetky div vo vnutri tych cc_content
					}

					$('#cc_back').click(function(){
					$(this).css('position','absolute');
					$(this).css('top','90%');
					$(this).css('right','1%');
					});

            });
				
        </script>
    </body>
</html>
