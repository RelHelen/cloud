<?php include 'head.php'?>

	<main class="main">		
			<header class="main-header p-tl">
				<h2 class="main-header__h2">
					Все устройства
				</h2>
			</header>
			<section class="panel panel_view p-tl">	
				<header class="panel-header">
					<div class="panel-tab">
						<!-- 1 -->

<div class="tabs">
<div class="tabs__nav">
  <a class="tabs__link tabs__link_active" href="#content-1">Договора</a>
  <a class="tabs__link" href="#content-2">Оплата</a>
  <a class="tabs__link" href="#content-3">Связь</a>
</div>
<div class="tabs__content">
  <div  class="tabs__pane tabs__pane_show" id="content-1">
   <!-- договора -->
  			<div class="br-lt contract">
				<form action="#">
					<div class="contract-item">			
						<input id="dog[1]" type="checkbox">	
						<label for="dog[1]">
							<span class="val val_contract rbl">МСО Люберцы3</span>
						    <span class="par par_cotract lbl">Договор №525 от 21.02.2021 </span>	
					    </label>
					</div>
					<div class="contract-item">			
						<input id="dog[2]" type="checkbox">	
						<label for="dog[2]">
							<span class="val val_contract rbl">МСО Серпухов</span>
						    <span class="par par_cotract lbl">Договор №526 от 22.02.2021 </span>	
					    </label>
					</div>
				</form>							 				
				</div>							
   <!-- /договора -->
  </div>
  <div hidden class="tabs__pane" id="content-2">
    Содержимое 2...
  </div>
  <div hidden class="tabs__pane" id="content-3">
    Содержимое 3...
  </div>
</div>
</div>
<script>
var $tabs = function (target) {
	var
	  _elemTabs = (typeof target === 'string' ? document.querySelector(target) : target),
	  _eventTabsShow,
	  _showTab = function (tabsLinkTarget) {
	    var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
	    tabsPaneTarget = document.querySelector(tabsLinkTarget.getAttribute('href'));
	    tabsLinkActive = tabsLinkTarget.parentElement.querySelector('.tabs__link_active');
	    tabsPaneShow = tabsPaneTarget.parentElement.querySelector('.tabs__pane_show');
	    // если следующая вкладка равна активной, то завершаем работу
	    if (tabsLinkTarget === tabsLinkActive) {
	      return;
	    }
	    // удаляем классы у текущих активных элементов
	    if (tabsLinkActive !== null) {
	      tabsLinkActive.classList.remove('tabs__link_active');
	    }
	    if (tabsPaneShow !== null) {
	      tabsPaneShow.classList.remove('tabs__pane_show');
	    }
	    // добавляем классы к элементам (в завимости от выбранной вкладки)
	    tabsLinkTarget.classList.add('tabs__link_active');
	    tabsPaneTarget.classList.add('tabs__pane_show');
	    document.dispatchEvent(_eventTabsShow);
	  },
	  _switchTabTo = function (tabsLinkIndex) {
	    var tabsLinks = _elemTabs.querySelectorAll('.tabs__link');
	    if (tabsLinks.length > 0) {
	      if (tabsLinkIndex > tabsLinks.length) {
	        tabsLinkIndex = tabsLinks.length;
	      } else if (tabsLinkIndex < 1) {
	        tabsLinkIndex = 1;
	      }
	      _showTab(tabsLinks[tabsLinkIndex - 1]);
	    }
	  };

	_eventTabsShow = new CustomEvent('tab.show', { detail: _elemTabs });

	_elemTabs.addEventListener('click', function (e) {
	  var tabsLinkTarget = e.target;
	  // завершаем выполнение функции, если кликнули не по ссылке
	  if (!tabsLinkTarget.classList.contains('tabs__link')) {
	    return;
	  }
	  // отменяем стандартное действие
	  e.preventDefault();
	  _showTab(tabsLinkTarget);
	});

	return {
	  showTab: function (target) {
	    _showTab(target);
	  },
	  switchTabTo: function (index) {
	    _switchTabTo(index);
	  }
	}

};
$tabs('.tabs');
</script>
						<!-- 2 -->

					</div>
					

				</header>
				<div class="p-tb device">					
					<div class="box "> 
						<div class="device-item ">							
								<ul class="device-detalies ">									
									<li class="device-detalies-item ">
										<span class="val large-txt">15616</span>
											
										<span class="par_connect"></span>										 									
									</li>
									<li class="device-detalies-item ">
										<span class="par ">qr_pay</span>
									 
										<span class="par ">24.07.2021</span>	
									</li>																			
									
									<li class="device-detalies-item ">										
										<span class="val">
											<span class="large-txt error-txt">300</span>
											<span class="par">&#8381;</span>
										</span>

										<span class="val error-txt">24.07.2021 13:10</span>
									</li>

									<li  class="device-detalies-item">
										
										<span class="par">МСО Люберцы3 </span>
										<span class="par">Бокс1</span>
									</li>
								</ul>														 
					    </div>

					    <div class="device-item ">							
								<ul class="device-detalies ">									
									<li class="device-detalies-item ">
										<span class="val large-txt">15616</span>
											
										<span class="par_connect"></span>										 									
									</li>
									<li class="device-detalies-item ">
										<span class="par ">qr_pay</span>
									 
										<span class="par ">24.07.2021</span>	
									</li>																			
									
									<li class="device-detalies-item ">										
										<span class="val">
											<span class="large-txt error-txt">300</span>
											<span class="par">&#8381;</span>
										</span>

										<span class="val error-txt">24.07.2021 13:10</span>
									</li>

									<li  class="device-detalies-item">
										
										<span class="par">МСО Люберцы3 </span>
										<span class="par">Бокс1</span>
									</li>
								</ul>														 
					    </div>
					    <div class="device-button">
					    	
							<a href="" class="btn" id="ctl-count-btn"><span>Смотреть другие устройства</span></a>
						    
					    </div>					    
					</div>						 			
				</div>					
			</section>
		
	</main>

<?php include 'footer.php'?>
	