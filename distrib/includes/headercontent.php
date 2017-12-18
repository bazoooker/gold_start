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
        ����
      </div>

        <div class="info">
          <div class="info-contacts info-contacts_horizontal">        
            <span class="info-contacts__location">
              <i class="icon icon_location"></i>
              �. �������, ���������� �����, 18�, ��� "�����"
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
									"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
										"DELAY" => "N",	// ����������� ���������� ������� ����
										"MAX_LEVEL" => "1",	// ������� ����������� ����
										"MENU_CACHE_GET_VARS" => array(	// �������� ���������� �������
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// ����� ����������� (���.)
										"MENU_CACHE_TYPE" => "N",	// ��� �����������
										"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
										"ROOT_MENU_TYPE" => "head",	// ��� ���� ��� ������� ������
										"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
									),
									false
								);?>
              </ul>
          </div>  
        </div>

        <div class="menu menu_footer">
          <ul class="main-menu main-menu_vertical">
								<?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
										"DELAY" => "N",	// ����������� ���������� ������� ����
										"MAX_LEVEL" => "1",	// ������� ����������� ����
										"MENU_CACHE_GET_VARS" => array(	// �������� ���������� �������
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// ����� ����������� (���.)
										"MENU_CACHE_TYPE" => "N",	// ��� �����������
										"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
										"ROOT_MENU_TYPE" => "top",	// ��� ���� ��� ������� ������
										"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
									),
									false
								);?>
          </ul>  
        </div>

        <div class="info info_footer">
          <div class="info-contacts info-contacts_vertical">       
            <span class="info-contacts__location">
              <i class="icon icon_location"></i>
              �. �������, ���������� �����, 18�, ��� "�����"
            </span>
            <a class="info-contacts__phone">
              <span class="phone-code">(3852)</span>
              59 00 59
            </a>
          </div>

          <a href="#" class="btn btn_main-color btn_block f-right">����������� �������-������</a>  
        </div>

    </div>

    <div id="header">
      <div class="container">

        <div class="tile tile-3">
          <a href="#" class="logo"></a>
        </div>

        <div class="tile tile-9">
          <div class="info info_header row"> <!-- ������� ������� ������ -->

            <div class="info-links info-links_horizontal">
              <ul class="row">
                <!-- li>
                
                <a href="#" class="info-link_timetable">
                <i class="icon icon_calendar"></i>����������</a></li>
                <li><a href="#" class="info-link_news">������� � �����</a></li -->


								<?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
										"DELAY" => "N",	// ����������� ���������� ������� ����
										"MAX_LEVEL" => "1",	// ������� ����������� ����
										"MENU_CACHE_GET_VARS" => array(	// �������� ���������� �������
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// ����� ����������� (���.)
										"MENU_CACHE_TYPE" => "N",	// ��� �����������
										"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
										"ROOT_MENU_TYPE" => "head",	// ��� ���� ��� ������� ������
										"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
									),
									false
								);?>


              </ul>
            </div>

            <div class="info-contacts info-contacts_horizontal">        
              <span class="info-contacts__location">
                <i class="icon icon_location"></i>
                �. �������, ���������� �����, 18�, ��� "�����"
              </span>
              <a class="info-contacts__phone">
                <span class="phone-code">(3852)</span>
                59 00 59
              </a>
            </div>

          </div> <!-- ������� ������� ������ ����� -->

          <div class="menu menu_header row"> <!-- ������ ������� ������ -->

            <ul class="main-menu main-menu_horizontal">
              <!-- li><a href="#">����</a></li>
              <li><a href="#">������</a></li>
              <li><a href="#">spa</a></li>
              <li><a href="#">������� �����</a></li>
              <li><a href="#">��������</a></li -->
								<?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
										"DELAY" => "N",	// ����������� ���������� ������� ����
										"MAX_LEVEL" => "1",	// ������� ����������� ����
										"MENU_CACHE_GET_VARS" => array(	// �������� ���������� �������
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// ����� ����������� (���.)
										"MENU_CACHE_TYPE" => "N",	// ��� �����������
										"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
										"ROOT_MENU_TYPE" => "top",	// ��� ���� ��� ������� ������
										"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
									),
									false
								);?>

            </ul>
            
            <a href="#" class="btn btn_main-color btn_try f-right">����������� �������-������</a>
              
          </div> <!-- ������ ������� ������ ����� --> 
        </div>             

      </div>    
    </div>

  <div class="content">
