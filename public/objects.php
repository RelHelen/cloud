<?php include 'head.php'?>
	<main class="main">		
			<header class="main-header p-tl">
				<h2 class="main-header__h2">
					Параметры устройства
				</h2>
			</header>
			<section class="panel panel_view p-tl">	
				<header class="panel-header">					
					<h3 class="panel-header__h3 ">
						<span class="par accent-txt">SN</span>
						<span class="val">15616</span>
					</h3>
					<div class="signal">
							
							<span class="signal__text">Дата сигнала</span>
							<span class="signal__date error-bl">28.07.2021</span>
					</div>	
				</header>	
				<div class="p-tb device">					
					<div class="box "> 
						<div class="device-item">							
								<ul class="device-detalies">
									<li class="device-detalies-item">
										<span class="par par_dev spec-txt">qr_pay </span>
										
									</li>
									<li class="device-detalies-item">
										<span class="par par_rent">Стоимость аренды </span>
										<span class="val error-txt">300р</span>
									</li>
									<li class="device-detalies-item">
										<span class="par par_period">Период аренды </span>
										<span class="val ">30 дн</span>
									</li>
									<li  class="device-detalies-item">
										<span class="par par_clock">Дата аренды истекает </span>
										<span class="val error-txt">24.07.2021 13:10</span>
									</li>
									<li  class="device-detalies-item">
										<span class="par par_place">Место </span>
										<span class="val ">Бокс1</span>
									</li>
								</ul>
								<ul class="device-contract">
									<li class="device-contract-item">
										<a href="contract.php">
											<span class="par par_cotract lbl">Договор </span>
											<span class="val val_contract rbl">№525 от 21.02.2021</span>
										</a>
									</li>
									<li class="device-contract-item">
										 
											<span class="par par_cotract lbl">Адрес:    </span>
											<span class="val val_contract rbl">МСО Люберцы</span>
										 
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
	