  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  
  <div class="wrap">
    
    <!-- mobile menu -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay_hidden"></div>

     <div class="mobile-menu-bar">
      <div class="container">
      <a href="#" class="logo"></a>

      <div id="btnOpenMobileMenu" class="hamburger-menu">
        <span class="hamburger-icon">
          <i class="hamburger-bar"></i>
          <i class="hamburger-bar"></i>
          <i class="hamburger-bar"></i>
        </span>
        меню
      </div>

        <div class="info">
          <div class="info-contacts info-contacts_horizontal">        
            <span class="info-contacts__location">
              <i class="icon icon_location"></i>
              г. Барнаул, Павловский тракт, 18В, ТРЦ "Арена"
            </span>
            <a class="info-contacts__phone">
              <span class="phone-code">(3852)</span>
              59 00 59
            </a>
          </div>
        </div> 
        </div>
           
    </div>

    <div id="mobile-menu" class="mobile-menu_hidden">
        <i id="btnCloseMobileMenu"></i>
          <a href="#" class="logo"></a>  
        <div class="info info_footer">
          <div class="info-links info-links_vertical">
            <ul>
								<?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
										"DELAY" => "N",	// Откладывать выполнение шаблона меню
										"MAX_LEVEL" => "1",	// Уровень вложенности меню
										"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
										"MENU_CACHE_TYPE" => "N",	// Тип кеширования
										"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
										"ROOT_MENU_TYPE" => "head",	// Тип меню для первого уровня
										"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
									),
									false
								);?>
              </ul>
          </div>  
        </div>

        <div class="menu menu_footer">
          <ul class="main-menu main-menu_vertical">
								<?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
										"DELAY" => "N",	// Откладывать выполнение шаблона меню
										"MAX_LEVEL" => "1",	// Уровень вложенности меню
										"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
										"MENU_CACHE_TYPE" => "N",	// Тип кеширования
										"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
										"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
										"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
									),
									false
								);?>
          </ul>  
        </div>

        <div class="info info_footer">
          <div class="info-contacts info-contacts_vertical">       
            <span class="info-contacts__location">
              <i class="icon icon_location"></i>
              г. Барнаул, Павловский тракт, 18В, ТРЦ "Арена"
            </span>
            <a class="info-contacts__phone">
              <span class="phone-code">(3852)</span>
              59 00 59
            </a>
          </div>

          <a href="#" class="btn btn_main-color btn_block f-right">попробовать премиум-фитнес</a>  
        </div>

    </div>

    <div id="header">
      <div class="container">

        <div class="tile tile-3">
          <a href="#" class="logo"></a>
        </div>

        <div class="tile tile-9">
          <div class="info info_header row"> <!-- верхняя полоска хедера -->

            <div class="info-links info-links_horizontal">
              <ul class="row">
                <!-- li>
                
                <a href="#" class="info-link_timetable">
                <i class="icon icon_calendar"></i>расписание</a></li>
                <li><a href="#" class="info-link_news">новости и акции</a></li -->


								<?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
										"DELAY" => "N",	// Откладывать выполнение шаблона меню
										"MAX_LEVEL" => "1",	// Уровень вложенности меню
										"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
										"MENU_CACHE_TYPE" => "N",	// Тип кеширования
										"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
										"ROOT_MENU_TYPE" => "head",	// Тип меню для первого уровня
										"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
									),
									false
								);?>


              </ul>
            </div>

            <div class="info-contacts info-contacts_horizontal">        
              <span class="info-contacts__location">
                <i class="icon icon_location"></i>
                г. Барнаул, Павловский тракт, 18В, ТРЦ "Арена"
              </span>
              <a class="info-contacts__phone">
                <span class="phone-code">(3852)</span>
                59 00 59
              </a>
            </div>

          </div> <!-- верхняя полоска хедера конец -->

          <div class="menu menu_header row"> <!-- нижняя полоска хедера -->

            <ul class="main-menu main-menu_horizontal">
              <!-- li><a href="#">клуб</a></li>
              <li><a href="#">фитнес</a></li>
              <li><a href="#">spa</a></li>
              <li><a href="#">клубные карты</a></li>
              <li><a href="#">контакты</a></li -->
								<?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
										"DELAY" => "N",	// Откладывать выполнение шаблона меню
										"MAX_LEVEL" => "1",	// Уровень вложенности меню
										"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
										"MENU_CACHE_TYPE" => "N",	// Тип кеширования
										"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
										"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
										"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
									),
									false
								);?>

            </ul>
            
            <a href="#" class="btn btn_main-color btn_try f-right">попробовать премиум-фитнес</a>
              
          </div> <!-- нижняя полоска хедера конец --> 
        </div>             

      </div>    
    </div>

  <div class="content">
