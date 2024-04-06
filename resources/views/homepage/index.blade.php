@include('partials.header')
	
	<main>

        @include('tourpage.slider')

        @include('homepage.categories')
		

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-end wow position-relative" data-wow-offset="250">
					<div class="block-reveal" >
						<img src="https://i.ibb.co/2cTj1qS/traveller2.png" alt="traveller2" style="background-repeat:no-repeat">	
							{{-- <div id="traveller-img"></div>					 --}}

					</div>
				</div>

				<div class="col-lg-5 col-md-6 float-end wow position-relative" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>We got you Covered!</h3>
							<p>{{$data['dialog']}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	

    @include('partials.footer')