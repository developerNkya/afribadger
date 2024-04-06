@include('partials.header')

<main>
	
	<main>
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Faq Section</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
						<div class="box_style_cat" id="faq_box">
							<ul id="cat_nav">
								<li><a href="#payment" class="active"><i class="icon_document_alt"></i>Payments</a></li>
								<li><a href="#tips"><i class="icon_document_alt"></i>Tour Information </a></li>
								<li><a href="#reccomendations"><i class="icon_document_alt"></i>Booking processes</a></li>
								<li><a href="#terms"><i class="icon_document_alt"></i>Terms&amp;conditons</a></li>
							</ul>
						</div>
						<!--/sticky -->
				</aside>
				<!--/aside -->
				
				<div class="col-lg-9" id="faq">
					<h4 class="nomargin_top">Payments</h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="payment">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>
										What payment methods are accepted for booking tours?
									</a>
								</h5>
							</div>

							<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-bs-parent="#payment">
								<div class="card-body">
									<p>We offer a variety of secure payment options for booking tours, including major credit/debit cards (Visa, Mastercard and bank transfers. </p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
										<i class="indicator ti-plus"></i> Are there any hidden fees associated with tour bookings?
									</a>
								</h5>
							</div>
							<div id="collapseTwo_payment" class="collapse" role="tabpanel" data-bs-parent="#payment">
								<div class="card-body">
								   <p>We believe in transparency, and we strive to ensure that there are no hidden fees associated with our tour bookings.<br> The price you see listed for each tour is the total cost you'll pay, excluding any optional extras you may choose to add during the booking process.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
										<i class="indicator ti-plus"></i>Can I get a refund if I need to cancel my tour booking?
									</a>
								</h5>
							</div>
							<div id="collapseThree_payment" class="collapse" role="tabpanel" data-bs-parent="#payment">
								<div class="card-body">
									<p>Our refund policy varies depending on the specific tour and the cancellation timeframe. Many tours offer full or partial refunds if you cancel within a certain period before the scheduled departure time. Please review the cancellation policy displayed on the tour listing or contact our customer support team for assistance with refund requests.</p>
								</div>
							</div>
						</div>

							<!-- /card -->
							<div class="card">
								<div class="card-header" role="tab">
									<h5 class="mb-0">
										<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
											<i class="indicator ti-plus"></i>What should I do if I encounter difficulties while making a payment for a tour?
										</a>
									</h5>
								</div>
								<div id="collapseThree_payment" class="collapse" role="tabpanel" data-bs-parent="#payment">
									<div class="card-body">
										<p>If you experience any issues during the payment process, such as payment declines or technical errors, please double-check that all payment details are entered correctly. If the problem persists, don't hesitate to contact our customer support team for assistance. We're here to help resolve any payment-related issues promptly, ensuring a smooth booking experience for you.</p>
									</div>
								</div>
							</div>
								<!-- /card -->
			
						<!-- /card -->
					</div>
					<!-- /accordion payment -->
					
					<h4 class="nomargin_top">Tour Information </h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="tips">


						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_tips" aria-expanded="true"><i class="indicator ti-plus"></i>
										How do I know which tour is right for me?
									</a>
								</h5>
							</div>

							<div id="collapseOne_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>We understand that choosing the perfect tour can be overwhelming with so many options available. Our website provides detailed descriptions of each tour, including highlights, activities, and duration. Additionally, feel free to reach out to our customer support team for personalized recommendations based on your interests and preferences.</p>
								</div>
							</div>
						</div>


						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_tips" aria-expanded="false">
										<i class="indicator ti-plus"></i>Are meals included in the tour packages?
									</a>
								</h5>
							</div>
							<div id="collapseTwo_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>The inclusion of meals varies depending on the specific tour package. Some tours may include meals, while others may not. Please refer to the tour description for information on what is included in each package. If you have dietary restrictions or preferences, let us know, and we'll do our best to accommodate your needs.</p>
									
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_tips" aria-expanded="false">
										<i class="indicator ti-plus"></i>What should I bring with me on the tour?
									</a>
								</h5>
							</div>
							<div id="collapseThree_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>It's essential to be prepared for your tour to ensure a comfortable and enjoyable experience. We recommend bringing essentials such as comfortable clothing and footwear, sunscreen, a hat, sunglasses, and any personal items you may need. Additionally, check the tour description for specific items recommended for the tour you're booking.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_tips" aria-expanded="false">
										<i class="indicator ti-plus"></i>Is transportation provided to and from the tour starting point?
									</a>
								</h5>
							</div>
							<div id="collapseThree_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>Transportation arrangements vary depending on the tour package. Some tours include transportation to and from the starting point, while others may require you to arrange your transportation. Please review the tour description for details on transportation arrangements or contact our customer support team for assistance.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_tips" aria-expanded="false">
										<i class="indicator ti-plus"></i>What happens if the weather is bad on the day of the tour?
									</a>
								</h5>
							</div>
							<div id="collapseThree_tips" class="collapse" role="tabpanel" data-bs-parent="#tips">
								<div class="card-body">
									<p>While we strive to ensure that all tours operate as scheduled, sometimes weather conditions may affect tour availability or itinerary. In the event of inclement weather, our team will assess the situation and provide updates or alternative arrangements as necessary. Your safety and satisfaction are our top priorities, and we'll do our best to accommodate any changes due to weather conditions.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion suggestions -->
					
					<h4 class="nomargin_top">Booking Process</h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="reccomendations">

						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_reccomendations" aria-expanded="true"><i class="indicator ti-plus"></i>
										Can I make changes to my booking after it's been confirmed?
									</a>
								</h5>
							</div>

							<div id="collapseOne_reccomendations" class="collapse" role="tabpanel" data-bs-parent="#reccomendations">
								<div class="card-body">
									<p> Depending on availability and the specific tour operator's policies, it may be possible to make changes to your booking after it's been confirmed. Contact our customer support team as soon as possible if you need to make any modifications to your booking, and we'll do our best to accommodate your request.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_reccomendations" aria-expanded="false">
										<i class="indicator ti-plus"></i>Can I book a tour for a large group or special event?
									</a>
								</h5>
							</div>
							<div id="collapseTwo_reccomendations" class="collapse" role="tabpanel" data-bs-parent="#reccomendations">
								<div class="card-body">
									<p> Absolutely! We can accommodate large groups or special events such as corporate outings, family reunions, or private tours. Contact our group booking specialist for assistance with arranging a custom tour package tailored to your group's needs and preferences.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_reccomendations" aria-expanded="false">
										<i class="indicator ti-plus"></i>Is there a minimum age requirement for booking tours?
									</a>
								</h5>
							</div>
							<div id="collapseThree_reccomendations" class="collapse" role="tabpanel" data-bs-parent="#reccomendations">
								<div class="card-body">
									<p>The minimum age requirement varies depending on the tour and its activities. Some tours may have age restrictions due to safety or activity level considerations. Please review the tour description or contact our customer support team for information on age requirements before booking.
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_reccomendations" aria-expanded="false">
										<i class="indicator ti-plus"></i>What happens if I miss my tour departure time?
									</a>
								</h5>
							</div>
							<div id="collapseThree_reccomendations" class="collapse" role="tabpanel" data-bs-parent="#reccomendations">
								<div class="card-body">
									<p>We understand that unforeseen circumstances may arise, causing you to miss your tour departure time. If you're running late or unable to make it to the scheduled departure point, please contact our customer support team as soon as possible. We'll do our best to assist you in rescheduling your tour or arranging alternative options if available.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion Reccomendations -->
					
					<h4 class="nomargin_top">Terms&amp;conditons</h4>
					<div role="tablist" class="add_bottom_45 accordion_2" id="terms">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-bs-toggle="collapse" href="#collapseOne_terms" aria-expanded="true"><i class="indicator ti-plus"></i>Details</a>
								</h5>
							</div>

							<div id="collapseOne_terms" class="collapse" role="tabpanel" data-bs-parent="#terms">
								<div class="card-body">
									<p><strong>Terms and Conditions</strong></p>
									<p>These terms and conditions ("Terms") govern your use of our website and the booking of tours through our platform. By accessing our website and making a booking, you agree to comply with these Terms. Please read them carefully before proceeding.</p>
									<ol>
										<li><strong>Booking and Payment:</strong>
											<ul>
												<li>By booking a tour through our website, you agree to pay the specified price for the selected tour.</li>
												<li>Payment can be made using the accepted payment methods displayed on our platform.</li>
												<li>All prices are inclusive of applicable taxes and fees unless otherwise stated.</li>
											</ul>
										</li>
										<li><strong>Cancellation and Refunds:</strong>
											<ul>
												<li>Cancellation policies vary depending on the tour and its operator. Please review the specific cancellation policy displayed during the booking process.</li>
												<li>Refunds, if applicable, will be processed according to the terms outlined in the cancellation policy.</li>
												<li>Cancellations made outside the specified timeframe or for non-refundable bookings may result in forfeiture of the booking amount.</li>
											</ul>
										</li>
										<li><strong>Booking Modifications:</strong>
											<ul>
												<li>Modifications to bookings, such as changes to the date, time, or number of participants, may be subject to availability and additional fees.</li>
												<li>We will make reasonable efforts to accommodate booking modifications, but we cannot guarantee availability or waive any applicable fees.</li>
											</ul>
										</li>
										<li><strong>Tour Participation:</strong>
											<ul>
												<li>Participants must adhere to the rules and guidelines set forth by the tour operator.</li>
												<li>Participants are responsible for ensuring they meet any age, health, or fitness requirements specified for the tour.</li>
												<li>Failure to comply with tour rules or requirements may result in denial of participation without refund.</li>
											</ul>
										</li>
										<li><strong>Liability and Insurance:</strong>
											<ul>
												<li>Participants acknowledge and accept any inherent risks associated with participating in tours.</li>
												<li>We recommend that participants obtain adequate travel insurance coverage to protect against unforeseen circumstances, including trip cancellations, medical emergencies, and personal liability.</li>
											</ul>
										</li>
										<li><strong>Privacy and Data Protection:</strong>
											<ul>
												<li>We are committed to protecting your privacy and personal data in accordance with applicable laws and regulations.</li>
												<li>By using our website and booking tours through our platform, you consent to the collection, use, and processing of your personal information as described in our Privacy Policy.</li>
											</ul>
										</li>
										<li><strong>Changes to Terms:</strong>
											<ul>
												<li>We reserve the right to update or modify these Terms at any time without prior notice.</li>
												<li>Any changes to these Terms will be effective immediately upon posting on our website.</li>
												<li>It is your responsibility to review these Terms periodically for updates or changes.</li>
											</ul>
										</li>
										<li><strong>Governing Law and Jurisdiction:</strong>
											<ul>
												<li>These Terms are governed by and construed in accordance with the laws of [Jurisdiction].</li>
												<li>Any disputes arising out of or relating to these Terms shall be subject to the exclusive jurisdiction of the courts in [Jurisdiction].</li>
											</ul>
										</li>
									</ol>
									<p>If you have any questions or concerns regarding these Terms, please contact us for clarification before proceeding with your booking. Your continued use of our website and booking services constitutes acceptance of these Terms and any updates or modifications thereto.</p>
								</div>
							</div>
							
						</div>
					</div>
					<!-- /accordion Terms -->
					

				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		</main>

@include('partials.footer')