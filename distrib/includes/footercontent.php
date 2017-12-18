</div>

  <!-- ========== footer begin ========== -->

  <div id="footer">
    <div class="container">
      <div class="row">

        <div class="col col-3">
          <a href="#" class="logo"></a>  
        </div>

        <div class="info info_footer col col-3">
          <div class="info-links info-links_vertical">
            <ul>
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
        </div>

        <div class="menu menu_footer col col-2">
          <ul class="main-menu main-menu_vertical">
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
        </div>

        <div class="info info_footer col col-4">
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
    </div>
  </div>

</div>

<!-- ========== footer end ========== -->
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script src='/js/swiper.min.js'></script>

<!-- инициализируем свайпер -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'fade',
      navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      },
    });    
  </script> 

<!-- мобильное меню -->
<script>
  // открытие
  $("#btnOpenMobileMenu").click(function(){
    $("#mobile-menu").removeClass("mobile-menu_hidden");
    $("#mobile-menu-overlay").removeClass("mobile-menu-overlay_hidden");
  });

  // закрытие
  $("#btnCloseMobileMenu").click(function(){
    $("#mobile-menu").addClass("mobile-menu_hidden");
    $("#mobile-menu-overlay").addClass("mobile-menu-overlay_hidden");
  });

 $("#mobile-menu-overlay").click(function(){
    $("#mobile-menu").addClass("mobile-menu_hidden");
    $("#mobile-menu-overlay").addClass("mobile-menu-overlay_hidden");

 });


</script>

