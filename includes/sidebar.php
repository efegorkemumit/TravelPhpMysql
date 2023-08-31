
<div class="search">
			<div class="search_inner">

				<!-- Search Contents -->
				
				<div class="container fill_height no-padding">
					<div class="row fill_height no-margin">
						<div class="col fill_height no-padding">

							<!-- Search Tabs -->

							<div class="search_tabs_container">
								<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/suitcase.png" alt=""><span>hotels</span></div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/bus.png" alt="">car rentals</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/departure.png" alt="">flights</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/island.png" alt="">trips</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/cruise.png" alt="">cruises</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/diving.png" alt="">activities</div>
								</div>		
							</div>

							<!-- Search Panel -->

							<div class="search_panel active">
							<form action="search_results_hotel.php" method="GET" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>hotels destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
									<div class="extras">
										<ul class="search_extras clearfix">
											<li class="search_extras_item">
												<div class="clearfix">
													<input name="pet" type="checkbox" id="search_extras_1" class="search_extras_cb">
													<label   for="search_extras_1">Pet Friendly</label>
												</div>	
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input name="carPark"  type="checkbox" id="search_extras_2" class="search_extras_cb">
													<label for="search_extras_2">Car Parking</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input name="wireless" type="checkbox" id="search_extras_3" class="search_extras_cb">
													<label  for="search_extras_3">Wireless Internet</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input name="reservation" type="checkbox" id="search_extras_4" class="search_extras_cb">
													<label  for="search_extras_4">Reservations</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input name="private" type="checkbox" id="search_extras_5" class="search_extras_cb">
													<label  for="search_extras_5">Private Parking</label>
												</div>
											</li>
											<li class="search_extras_item">
												<div class="clearfix">
													<input  name="smoking" type="checkbox" id="search_extras_6" class="search_extras_cb">
													<label  for="search_extras_6">Smoking Area</label>
												</div>
											</li>
											
										</ul>
									</div>
								
									<button class="button search_button">search<span></span><span></span><span></span></button>
								</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
							<form action="search_results_car.php" method="GET" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>car destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
							<form action="search_results_flight.php" method="GET" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>flight destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
							<form action="search_resulst_tour.php" method="GET" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>trips destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
							<form action="search_results_cruise.php" method="GET" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>cruise destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
							</div>

							<!-- Search Panel -->

							<div class="search_panel">
							<form action="search_results_activate.php" method="GET" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>act destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>
