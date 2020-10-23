<div class="container-fluid" id="mainContentContainer">

	<div class="row justify-content-md-center">
	
		<div class="col-5" id="userColumn">
			
      <div id="user-container">
			
				<div id="user-offerbox-container">
					
					<div id="user-offerbox-header" class="main-text-bold">

						<span class="left">YOUR OFFER</span>					
						<span class="right">0.00$</span>

					</div>
					
					<div id="user-offerbox-body" class="main-text">

						<div id="user-offerbox-hint">
						
							<span><p>SELECT THE ITEMS YOU WANT TO</p></span>
							<span><p>OFFER FROM YOUR INVENTORY</p></span>
							<p><img class="transhint" src="./src/img/arrow.png" height="26px" width="26px"></p>

						</div>

					</div>
					
				</div>
				
				<div id="img-games-contaiter-user">
				
					<div class="right">
				
						<img class="game-icon main-game" src="./src/img/csgo.png" height="32px" width="32px">
						
					</div>
					
				</div>
				
				<div class="clear-all"></div>
				
				<div id="user-inventory">
				
					<div id="user-inventory-header" class="main-text-bold">

						<span class="left"><input type="search" class="form-control" id="search-input-user" placeholder="Search For Items"></span>	
						
						<div class="right">
							
							<div id="user-sort-div">
								
								<div class="dropdown">
									
									<button class="btn btn-secondary dropdown-toggle disabled" type="button" id="userDropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										SORT: HIGHEST PRICE
									</button>
									
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="">HIGHEST PRICE</a>
										<a class="dropdown-item" href="">LOWEST PRICE</a>
										<a class="dropdown-item" href="">HIGHEST FLOAT</a>
										<a class="dropdown-item" href="">LOWEST FLOAT</a>
									</div>
									
								</div>
								
							</div>
							
							<div><img id="refresh-user" src="./src/img/refresh.png" height="32px" width="32px"></div>
						</div>

					</div>
					
					<div id="user-inventory-body" class="main-text">
					
						<div id="user-inventory-blogin-text">
						
							<span id="steamlog" class="emerald-color login-via"><img id="uibt-steam" src="./src/img/steam-i.png" width="32" height="32">
							Login via Steam<br></span>
							<span class="lm-text">Be sure set your inventory privacy to public and enable Steam Guard.</span>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
    </div>
		
    <div class="col-sm" id="info-row">
			
      <div id="info-container">
			
				<div id="first-info-block">
				
					<div id="fib-header" class="ib-text">
					
						<span>BALANCE</span>
						
					</div>
					
					<div id="fib-container" class="ib-text-bold">
					
						<div class="row">
						
							<div class="col">
							
								<span id="balSymbol">+</span>
								
							</div>
							
							<div class="col">
							
								<span id="balVal">0.00</span>
								
							</div>
							
							<div class="col">
							
								<span id="balSign">$</span>
								
							</div>
							
						</div>
						
						<div id="trade-button-container">
						
							<a role="button" id="tradeButton" class="green-text">TRADE</a>
							
						</div>
						
						<div id="i-withdraw">
							
							<div class="row no-gutters">
							
								<div class="col-md-auto">
								
									<span class="white-bold-text">Do not withdraw items</span>
									
								</div>
								
								<div class="col" id="check-withdraw-button">
								
									<input type="checkbox" checked data-toggle="toggle" data-style="ios" data-size="xs" data-on="Off" data-off="On" data-offstyle="success">
									
								</div>
								
							</div>
							
						</div>
						
						<div id="bonus-button-container">
						
							<a role="button" id="bonusButton">CLICK HERE<br>FOR BONUS</a>
							
						</div>
						
						<div id="fib-additional">
						
							<span>Hover on item, for<br>additional information.</span>
							
						</div>
						
					</div>
					
				</div>
				
				<div id="second-info-block">
				
					<div id="second-info-block-header">
					
						FILTERS
						
					</div>
					
					<div id="second-info-block-body">
					
						<div id="pricesSortContainer">
							<input id="priceFrom" type="number" class="form-control left" value="0">
							<span id="dollarSign">$</span>
							<input id="priceTo" type="number" class="form-control right" value="2000">

							<div id="priceSlider"></div>

							<div class="clear-all"></div>
						</div>
						
						<div id="botLockContainer">
							
							<div class="row no-gutters">
							
								<div class="col-md-auto">
								
									<span class="white-bold-text">Bot Lock</span>
									
								</div>
								
								<div class="col" id="check-withdraw-button">
								
									<input id="botLockToggle" type="checkbox" checked data-toggle="toggle" data-style="ios" data-size="xs" data-on=" " data-off=" " data-offstyle="success">
									
								</div>
								
							</div>
							
						</div>
						
						<div id="stattrakContainer">
							
							<div class="row no-gutters">
							
								<div class="col-md-auto">
								
									<span class="white-bold-text">StatTrak™</span>
									
								</div>
								
								<div class="col" id="check-withdraw-button">
								
									<input id="stattrakToggle" type="checkbox" checked data-toggle="toggle" data-style="ios" data-size="xs" data-on=" " data-off=" " data-offstyle="success">
									
								</div>
								
							</div>
							
						</div>
						
						<div id="stickersContainer">
							
							<div class="row no-gutters">
							
								<div class="col-md-auto">
								
									<span class="white-bold-text">Stickers</span>
									
								</div>
								
								<div class="col" id="check-withdraw-button">
								
									<input id="stickersToggle" type="checkbox" checked data-toggle="toggle" data-style="ios" data-size="xs" data-on=" " data-off=" " data-offstyle="success">
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div id="third-info-block">
				
					<div id="third-info-block-header">
					
						RATES
						
					</div>
					
					<div id="third-info-block-body" class="sm-text-3">
					
						<span>From 50$+<br></span>
						<span>99% | 100%<hr></span>
						
						<span>20$ ... 50$<br></span>
						<span>98% | 100%<hr></span>
						
						<span>2$ ... 20$<br></span>
						<span>96% | 100%<hr></span>
						
						<span>0.2$ ... 2$<br></span>
						<span>90% | 100%<hr></span>
						
						<span class="red-text"><strong>1% BONUS INACTIVE</strong></span>
						
					</div>
					
				</div>
				
			</div>
			
    </div>
		
    <div class="col-5" id="botColumn">
			
      <div id="bots-container">
			
				<div id="trade-button-container-2">
						
							<a role="button" id="tradeButton" class="green-text">TRADE</a>
							
				</div>
				
				<div id="bots-offerbox-container">
					
					<div id="bots-offerbox-header" class="main-text-bold">

						<span class="left">0.00$</span>					
						<span class="right">BOT'S OFFER</span>

					</div>
					
					<div id="bots-offerbox-body" class="main-text">
						
						<div id="bots-offerbox-items">
						
							<div id="bots-offerbox-hint">
							
								<span><p>SELECT THE ITEMS YOU WANT</p></span>
								<span><p>TO BUY FROM BOTS INVENTORY</p></span>
								<p><img class="transhint" src="./src/img/arrow.png" height="26px" width="26px"></p>

							</div>
							
						</div>

					</div>
					
				</div>
				
				<div id="img-games-contaiter-bots">
				
					<div class="left">
					
						<div class="gameimgdiv">
							<img class="game-icon-b main-game" src="./src/img/csgo.png" height="32px" width="32px">
							
						</div>
						
						<div class="gameimgdiv gameunav">
							<img class="game-icon-d" src="./src/img/dota2.png" height="32px" width="32px">
							<span class="tooltiptext">D2 is unavaible right now, coming soon...</span>
						</div>
						
						<div class="gameimgdiv gameunav">
							<img class="game-icon-d" src="./src/img/tf2.png" height="32px" width="32px">
							<span class="tooltiptext">TF 2 is unavaible right now, coming soon...</span>
						</div>
						
					</div>
					
				</div>
				
				<div class="clear-all"></div>
				
				<div id="bots-inventory">
				
					<div id="bots-inventory-header" class="main-text-bold">

						<span class="right"><input type="search" class="form-control" id="search-input-bots" placeholder="Search For Items"></span>	
						
						<div class="left">
							<div><img id="refresh-bots" src="./src/img/refresh.png" height="32px" width="32px"></div>
							
							<div id="bots-sort-div">
								
								<div class="dropdown">
									
									<button class="btn btn-secondary dropdown-toggle" type="button" id="botsDropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										SORT: HIGHEST PRICE
									</button>
									
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdown-menu-bots">
										<a class="dropdown-item" href="src/test.php?st=hp">HIGHEST PRICE</a>
										<a class="dropdown-item" href="src/test.php?st=lp">LOWEST PRICE</a>
										<a class="dropdown-item" href="src/test.php?st=hf">HIGHEST FLOAT</a>
										<a class="dropdown-item" href="src/test.php?st=lf">LOWEST FLOAT</a>
									</div>
									
								</div>
								
							</div>
						</div>

					</div>
					
					<div id="bots-inventory-body" class="main-text">
					
						<div id="bots-items-container">
							
							<div id="waitDiv">
								
								Loading items 
								<div id="wCloak">
									<img id="waitCloak" src="./src/img/load.png" height="32px" width="32px">
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
    </div>
	
	</div>
	
</div>