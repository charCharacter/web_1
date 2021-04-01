<!doctype html>
<?
error_reporting(E_ERROR | E_PARSE);
header('Content-Type: text/html; charset=utf-8');
?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>11 Бригада | НГТУ</title>
	<meta property="og:title" content="11 Бригада | НГТУ | ПМИ-81" />
	<meta property="og:image" content="https://shkolazhizni.ru/img/content/i119/119795_or.jpg" />
	<meta property="og:description" content="Личный сайт бригады"/>

      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="Material Design Lite">
      <link rel="apple-touch-icon-precomposed" href="https://www.nstu.ru/img/favicon/icon-144x144.png">
      <meta name="msapplication-TileImage" content="https://www.nstu.ru/img/favicon/icon-144x144.png">
	  <meta name="msapplication-TileColor" content="#3372DF">
	  
      <link rel="shortcut icon" href="https://www.nstu.ru/img/favicon/icon-144x144.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="material.cyan-light_blue.min.css">
      <link rel="stylesheet" href="components.css">
      <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
   </head>
   <body>
      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
         <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Главная</span>
               <div class="mdl-layout-spacer"></div>
            </div>
         </header>
         <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
               <img src="images/nstu_i_w.png" class="demo-avatar">
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
               <a class="mdl-navigation__link" href="#home-section"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Главная</a>
               <a class="mdl-navigation__link" href="#classes-section"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Дисциплины</a>
               <div class="mdl-layout-spacer"></div>
            </nav>
         </div>
         <main class="mdl-layout__content mdl-color--grey-100">
			<section id="home-section" class="mdl-components-page mdl-components__page" name="Главная">
				<div class="mdl-grid demo-content">
				   <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
					  <div class="mdl-card__media mdl-cell mdl-cell--12-col-tablet">
						 <img class="article-image" src="https://shkolazhizni.ru/img/content/i119/119795_or.jpg" border="0" alt="">
					  </div>
					  <div class="mdl-cell mdl-cell--8-col">
						 <h2 class="mdl-card__title-text">Личный сайт бригады 11</h2>
						 <div class="mdl-card__supporting-text no-left-padding">
							<p>Данный сайт разработан совместно.</p>
							<p>Используется для демонстрации базовых навыков разработчиков.</p>
						 </div>
					  </div>
				   </div>
				   <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
					  <div class="mdl-card__media">
						 <img class="article-image" src="images/e.jpg" border="0" alt="">
					  </div>
					  <div class="mdl-card__title">
						 <h2 class="mdl-card__title-text">Егор Демидович</h2>
					  </div>
					  <div class="mdl-card__supporting-text">
						 <p>Президент компании RandGor Studio.</p>
					  </div>
					  <div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#egor-section" data-upgraded=",MaterialButton,MaterialRipple">Подробнее<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
					  </div>
				   </div>
				   <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
					  <div class="mdl-card__media">
						 <img class="article-image" src="https://sun9-19.userapi.com/IbwZSNUmbAGqUsJFVwDfKztmwS53mRUFQx44KQ/bBjQ4KRbHZQ.jpg" border="0" alt="">
					  </div>
					  <div class="mdl-card__title">
						 <h2 class="mdl-card__title-text">Михаил Муравьев</h2>
					  </div>
					  <div class="mdl-card__supporting-text">
						 <p>You Know Who I Am.</p>
					  </div>
					  <div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#michael-section" data-upgraded=",MaterialButton,MaterialRipple">Подробнее<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
					  </div>
				   </div>
				</div>
			</section>
			
			<section id="classes-section" class="mdl-components-page mdl-components__page" name="Дисциплины">
				<div class="mdl-grid demo-content">
				<?
					$names = ["Компьютерные сети","Математическая статистика","Низкоуровневое программирование","Основы web-программирования","Численные методы","Логическое программирование","Человеко-машинное взаимодействие","Основы теории информации и криптографии","Учебная практика","Физическая культура и спорт"];
					$imgs = ["https://cslpc.ca/wp-content/uploads/2017/03/5d13c0_99e446fed7764cefb5ec06df4557bef4-1.jpg","https://www.kstu.ru/servlet/contentblob?pre=328725","https://i2.wp.com/rutvet.ru/sites/default/files/styles/large/public/field/image/bigskolko-bit-v-1-bayte-informacii-8191.jpg","https://vasilkoff.com/wp-content/uploads/2013/11/PHP_web_design-300x200.png","https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Trapezoidal_rule_illustration_small.svg/300px-Trapezoidal_rule_illustration_small.svg.png","https://osobista.in.ua/images/Kak_razvit_logiku_rebenku_i_vzroslomu_2.jpg","https://class-club.ru/wp-content/uploads/2020/05/1-23-300x200.jpg","https://www.qubicgroup.com/wp-content/uploads/2016/07/Data-Security-300x200.jpg","https://www.uncannyowl.com/wp-content/uploads/2014/02/178370128-300x200.jpg","https://www.m-o-i.com/wp-content/uploads/2015/12/bigstock-Happy-Little-Girl-Finish-First-65123782-300x200.jpg"];
					$hrefs = ["#ks-section","#ms-section","#np-section","#wp-section","#portfolio-example01.html","#portfolio-example01.html","#chmv-section","#portfolio-example01.html","#portfolio-example01.html","#portfolio-example01.html"];
					
					for($i=0; $i<count($names); $i++){
						echo('
							<div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
								<div class="mdl-card__media">
									<img class="article-image" src="'.$imgs[$i].'" border="0" alt="">
								</div>
								<div class="mdl-card__title">
									<h2 class="mdl-card__title-text">'.$names[$i].'</h2>
								</div>
								<div class="mdl-card__supporting-text">
									Лабораторные работы
								</div>
								<div class="mdl-card__actions mdl-card--border">
									<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="'.$hrefs[$i].'" data-upgraded=",MaterialButton,MaterialRipple">Подробнее<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
								</div>
						   </div>
						');
					}
				?>
				</div>
			</section>
			
			<section id="ks-section" class="mdl-components-page mdl-components__page" name="Компьютерные сети">
				<div class="mdl-grid demo-content">

					<div class="snippet-demo-container demo-data-table demo-data-table__data-table">
						<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" id="ks_labs">
						  <thead>
							<tr>
							  <th class="mdl-data-table__cell--non-numeric">Работа</th>
							  <th>Дата</th>
							</tr>
						  </thead>
						  <tbody>
						    <?
								$s = file_get_contents("https://e.randgor.ru/scripts/getfiles.php?class=ks");
								
								$r = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $s), true )['files'];
								
								foreach ($r as $index => $array) {
									echo('
										<tr>
										  <td class="mdl-data-table__cell--non-numeric" href="'.$array['url'].'">'.$array['name'].'</td>
										  <td>'.$array['date'].'</td>
										</tr>
									');
								}
							?>
						  </tbody>
						</table>

					</div>

					<div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
							<button class="mdl-button mdl-js-button mdl-button--raised" data-upgraded=",MaterialButton" onclick="this.blur(); download_lab('ks_labs');" style="margin:auto;">
								Скачать
							</button>
					</div>
				</div>
			</section>
         
			<section id="chmv-section" class="mdl-components-page mdl-components__page" name="Человеко-машинное взаимодействие">
				<div class="mdl-grid demo-content">

					<div class="snippet-demo-container demo-data-table demo-data-table__data-table">
						<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" id="chmv_labs">
						  <thead>
							<tr>
							  <th class="mdl-data-table__cell--non-numeric">Работа</th>
							  <th>Дата</th>
							</tr>
						  </thead>
						  <tbody>
						    <?
								$s = file_get_contents("https://e.randgor.ru/scripts/getfiles.php?class=chmv");
								
								$r = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $s), true )['files'];

								
								foreach ($r as $index => $array) {
									echo('
										<tr>
										  <td class="mdl-data-table__cell--non-numeric" href="'.$array['url'].'">'.$array['name'].'</td>
										  <td>'.$array['date'].'</td>
										</tr>
									');
								}
							?>
						  </tbody>
						</table>
					</div>

					<div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
							<button class="mdl-button mdl-js-button mdl-button--raised" data-upgraded=",MaterialButton" onclick="this.blur(); download_lab('chmv_labs');" style="margin:auto;">
								Скачать
							</button>
					</div>
				</div>
			</section>
         
			<section id="egor-section" class="mdl-components-page mdl-components__page" name="Егор Демидович">
				<div class="mdl-grid demo-content">
					<div class="mdl-grid portfolio-max-width">
						<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Егор Демидович</h2>
							</div>
							<div class="mdl-card__media">
								<img class="article-image" src="images/ew.jpg" border="0" alt="">
							</div>
							<div class="mdl-card__supporting-text">
								<span>Интересы и умения</span>
							</div>
							<div class="mdl-grid portfolio-copy">
								<h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Введение</h3>
								<div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding">
									<p>
										Я родился в городе Астана (сейчас Нур-Султан), обучался в Назарбаев Интеллектуальной Школе (НИШ).
									</p>
									<p>
										Студент третьего курса Факультета прикладной математики и информатики Новосибирского государственного технического университета.
									</p>
									<p>
										Сейчас мне 20 лет.
									</p>
									<p>
										Иногда я приезжаю в Астану, чтобы встретиться со старыми друзьями и провести время с родными, которые остались на моей Родине.
									</p>
								</div>
								<div class="mdl-cell mdl-cell--6-col">
									<img class="article-image" src="https://kazintercool.kz/img/objects/nis/01.jpg" border="0" alt="">
								</div>
								<h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Интересы</h3>
								<div class="mdl-cell mdl-cell--6-col">
									<img class="article-image" src="https://sun9-50.userapi.com/c637219/v637219343/87519/n5rzqoI2Mn4.jpg" border="0" alt="">
								</div>
								<div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding ">
									<p>
										Интересуюсь последними технологическими открытиями, занимаюсь спортом и не боюсь рисковать. 
									</p>
									<p>
										Люблю быть лучшим из лучших. 
									</p>
									<p>
										Люблю узнавать новое. 
									</p>
									<p>
										Больше всего мне нравится создавать мобильные приложения для своей компании RandGor Studio.
									</p>
									<p>
										Недавно начал изучать применение систем ИИ (Искусственного Интеллекта) для решения бытовых задач.
									</p>
								</div>
								<h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Умения</h3>
								<div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding ">
									<p>
										Имею очень глубокие и широкие познания в программировании. 
									</p>
									<p>
										Имел дело практически со всеми известными стеками технологий. 
									</p>
									<p>
										Свободно владею иностранными языками: английским и казахским.
									</p>
									<p>
										Когда-то умел делать шпагат.
									</p>
								</div>
								<div class="mdl-cell mdl-cell--6-col">
									<img class="article-image" src="https://ot5000.ru/images/portfolio/6-1.jpg" border="0" alt="">
								</div> 
							</div>
						</div>
					</div>
					<h4 id="main_list_description" class="margin-left16">Комментарии:</h4>
					<div class="mdl-grid demo-content full-width">
						<div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
							<div class="mdl-card__title inline">
								<h2 class="mdl-card__title-text">Добавить комментарий</h2>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width"
									id="adding_author_div">
									<input class="mdl-textfield__input" type="text" id="adding_author">
									<label class="mdl-textfield__label" for="adding_author">Ваше имя...</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield full-width" id="adding_comment_div">
									<textarea class="mdl-textfield__input" type="text" rows="15"
										id="adding_comment"></textarea>
									<label class="mdl-textfield__label"
										for="adding_comment">Ваш комментарий...</label>
								</div>
							</div>
							<div class="mdl-card__actions mdl-card--border"><a
									class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent margin-h8"
									data-upgraded=",MaterialButton,MaterialRipple" onclick="addComment(0);">Добавить<span
										class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
							</div>
						</div>
						<div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
								<img class="article-image" src="https://russkiiyazyk.ru/wp-content/uploads/2016/04/kommentariy.jpg" border="0" alt="">
							</div>
							<div class="mdl-cell mdl-cell--12-col">
								<h2 class="mdl-card__title-text">Добавление комментария на личную страничку Егора из 11-й бригады</h2>
								<div class="mdl-card__supporting-text no-left-padding">
									<p>Для выполнения процедуры комментирования необходимо заполнить все поля.</p>
								</div>
							</div>
						</div>


					</div>
					<div id="comments_block_0" class="mdl-grid demo-content full-width">
						
					</div>
				</div>
			</section>
			
			<section id="michael-section" class="mdl-components-page mdl-components__page is-active" name="Михаил Муравьев">
				<div class="mdl-grid demo-content">
					<div class="mdl-grid portfolio-max-width">
						<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
							<div class="mdl-card__title">
								<h2 class="mdl-card__title-text">Михаил Муравьев</h2>
							</div>
							
							
							<div class="mdl-grid portfolio-copy">
								<h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Немного о себе</h3>
								<div class="mdl-cell mdl-cell--2-col">
									<img class="article-image" src="https://cdn.iconscout.com/icon/free/png-512/graduation-cap-hat-study-degree-46243.png" border="0" alt="" mdl-cell="">
								</div><div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding">
									<p>Студент, почти 20 лет. Учусь в НГТУ с 2018 года. По счастливой случайности попал на самый лучший факультет. Ранее 11 почти прекрасных лет жизни провёл в 175 школе.</p>
								</div>
								
								<h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Интересы</h3>
								
								<div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding ">
									<p>Интересуюсь кофеиносодержащими продуктами и решением проблем, вызванных продолжительной прокрастинацией. Также интересуюсь видеоиграми, прослушиванием музыки и невдумчивыми телесериалами. Как и большая часть населения Земли.</p>
								</div>
								<div class="mdl-cell mdl-cell--3-col">
									<img class="article-image" src="https://qph.fs.quoracdn.net/main-qimg-ad65fd98e9ff251a6347ac781d6dec6e" border="0" alt="">
								</div><h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Знания и навыки</h3>
								
								
								<div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding ">
									
								<p>Мои знания ограничены школьной и университетской программами. Соответственно практических навыков работы у меня не имеется.</p><p><em>"Я даже не знаю того, что ничего не знаю."</em></p></div>
							</div>
						<div class="mdl-cell mdl-cell--12-col">
									<img src="https://www.kino-teatr.ru/movie/kadr/124361/780840.jpg" width="100%" height="75" border="0" alt="">
								</div></div>
					</div>
				</div>
			</section>
		</main>
    </div>
	<div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
		<div class="mdl-snackbar__text" id="snackbar-cancel_div"></div>
		<a id="snackbar-cancel"
			class="mdl-snackbar__action mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent"
			data-upgraded=",MaterialButton,MaterialRipple"><span class="mdl-button__ripple-container"><span
					class="mdl-ripple"></span></span></a>
	</div>
   </body>
	<script src="main.js"></script>
</html>