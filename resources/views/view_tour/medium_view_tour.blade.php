

<div class="wp-block-group container_da6f6efcc8ce is-layout-flow wp-block-group-is-layout-flow" >
  <!-- itenaries section -->
  <div class="view-tour-body-large">

@foreach(json_decode($tour->day_events, true) as $event)
<div class="wp-block-group container_ee0a20b79ef9_medium is-layout-flow wp-block-group-is-layout-flow">
  <!-- Inside structure -->
  <div class="wp-block-group container_e9c12360b1d4 is-layout-flow wp-block-group-is-layout-flow">
    <div class="wp-block-group container_7c1bd3296b50 is-layout-flow wp-block-group-is-layout-flow">
      <div class="wp-block-group container_323096f0adde is-layout-flow wp-block-group-is-layout-flow">
        <!-- Link container -->
        <div class="wp-block-yotako-block-anchor button_79068482ba7e">
          <a href="#" class="button_link_79068482ba7e" target="_self" rel="noopener">
            <div class="wp-block-group container_724d47ba64cd is-layout-flow wp-block-group-is-layout-flow">
              <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div>
            </div>
            <p class="text_0a2fe4ad23ac has-text-color has-background has-text-align-left" style="text-transform:uppercase;font-style:normal;font-size:13.5px;font-weight:600;letter-spacing:-0.5px;color:#f4e7c9;background-color:transparent;">Day</p>
          </a>
        </div>
        <h3 class="text_bf0d900ad321 has-text-color has-background has-text-align-center wp-block-heading" style="text-transform:none;font-style:normal;font-size:19.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">{{ $event['day'] }}</h3>
      </div>
      <div class="wp-block-group container_d46c55d4151b is-layout-flow wp-block-group-is-layout-flow">
        <h2 class="text_f6365cc971e1 has-text-color has-background has-text-align-left wp-block-heading" style="text-transform:none;font-style:normal;font-size:27.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">  {{ $event['title'] }}</h2>
      </div>
    </div>
    
    <!-- Clickable Image -->
    <figure class="imageview_d207cb065864 wp-block-image">
      <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I285:861;280:381.svg" />
    </figure>
  </div>
  <!-- Itinerary (Initially Hidden) -->
<div class="opened-itenary" style="margin-top: 50px; background-color: white; padding-top: 20px;">
  <div class="state-yes" style="width:770px">
    <div class="collapsible-button">
      <div class="frame">
        <div class="day-count">
          <div class="div">
            <div class="rectangle"></div>
            <div class="day">DAY</div>
          </div>
          <div class="text-wrapper">{{ $event['day'] }}</div>
        </div>
        <div class="div-wrapper">
          <p class="p">{{ $event['title'] }}</p>
        </div>
      </div>
      <img class="button-expandable" src="../../assets/images/button-expandable.png" />
    </div>
    <div class="rectangle-2"></div>
    <div class="frame-2">
      <div class="frame-3">
        <p class="the-group-arrives-at">
        {{ $event['details'] }}       
        </p>
      </div>
    </div>
  </div>


</div>

</div>
@endforeach

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Itinerary toggle logic
    const imageViews = document.querySelectorAll('.imageview_d207cb065864');
    const expandableButtons = document.querySelectorAll('.button-expandable');

    imageViews.forEach((imageView) => {
        imageView.addEventListener('click', function () {
            const parentContainer = imageView.closest('.wp-block-group.container_ee0a20b79ef9_medium');
            const itinerary = parentContainer ? parentContainer.querySelector('.opened-itenary') : null;

            if (!itinerary) {
                console.error('Itinerary not found for the current image view.');
                return;
            }

            // Close any open itineraries first
            document.querySelectorAll('.opened-itenary').forEach(it => it.classList.remove('show'));

            // Show the selected itinerary
            itinerary.classList.add('show');
        });
    });

    expandableButtons.forEach((expandableButton) => {
        expandableButton.addEventListener('click', function () {
            const parentContainer = expandableButton.closest('.wp-block-group.container_ee0a20b79ef9_medium');
            const itinerary = parentContainer ? parentContainer.querySelector('.opened-itenary') : null;

            if (!itinerary) {
                console.error('Itinerary not found for the current expandable button.');
                return;
            }

            // Hide the clicked itinerary
            itinerary.classList.remove('show');
        });
    });
});

</script>

<!-- safari includes -->
<div class="safari-includes">
  <div class="wp-block-group container_371d7de6ab8d is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_c991778cf46b is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_9d72e655c519 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_833400b34249 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Includes</h2>
       

<div class="wp-block-group container_16acd549af72 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_1b203d75b37b has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
                        @foreach($tour->includes['includes'] as $exclude)
        <span style="color: #26461d; font-size: 20px; font-weight: bold;">•</span> 
        {{ $exclude }}<br/>
    @endforeach                        
                        </p>
     
        </div>
        </div>


<div class="wp-block-group container_2afe3327fce7 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_47ead32807a4 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_addf1c97b134 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Excludes</h2>
       

<div class="wp-block-group container_73317a457e6d is-layout-flow wp-block-group-is-layout-flow" >
                  

      <p class="text_e75e6e72ca37 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
      @foreach($tour->includes['excludes'] as $exclude)
        <span style="color: #26461d; font-size: 20px; font-weight: bold;">•</span> 
        {{ $exclude }}<br/>
    @endforeach
    </p>
             </div>
        </div>
        </div>
        </div>

</div>


<!-- faq -section -->
<div class="faq-medium-section">
   <h2 class="text_a6705c924ab0 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">FAQ’s</h2>
   @foreach(json_decode($tour->faq, true) as $faq)
<div class="wp-block-group container_ee0a20b79ef9_medium is-layout-flow wp-block-group-is-layout-flow">
  <!-- Inside structure -->
  <div class="wp-block-group container_e9c12360b1d4-faq-large is-layout-flow wp-block-group-is-layout-flow">
    <div class="wp-block-group container_7c1bd3296b50 is-layout-flow wp-block-group-is-layout-flow">
      <div class="wp-block-group container_d46c55d4151b is-layout-flow wp-block-group-is-layout-flow">
        <h2 class="text_f6365cc971e1 has-text-color has-background has-text-align-left wp-block-heading" style="text-transform:none;font-style:normal;font-size:27.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;"> {{ $faq['question'] }}
        </h2>
      </div>
    </div>
    
    <!-- Clickable Image -->
    <figure class="imageview_d207cb065864 wp-block-image">
      <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I285:861;280:381.svg" />
    </figure>
  </div>
  <!-- Itinerary (Initially Hidden) -->
<div class="opened-itenary" style="margin-top: 50px; background-color: white; padding-top: 20px;margin-bottom:-217px !important;top:-47px !important;position:relative !important">
  <div class="state-yes" style="width:770px">
    <div class="collapsible-button">
      <div class="frame">
        <div class="div-wrapper">
          <p class="p"> {{ $faq['question'] }}</p>
        </div>
      </div>
      <img class="button-expandable" src="../../assets/images/button-expandable.png" />
    </div>
    <div class="rectangle-2"></div>
    <div class="frame-2">
      <div class="frame-3">
        <p class="the-group-arrives-at">
        {{ $faq['answer'] }}    
        </p>
      </div>
    </div>
  </div>


</div>

</div>
@endforeach

</div>


<!-- other safaris -->
<div class="other-safaris-medium">

        <h2 class="text_dba374c3e302 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Other Safari Tours</h2>

        <div class="wp-block-group container_c25f9cd854f7 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_0fb15f884df1 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_b2a69104a335 is-layout-flow wp-block-group-is-layout-flow" >
     
@foreach ($other_tours as $index => $tour)
<div class="wp-block-group container_d41e69cf737c is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_47d50a4139b2 is-layout-flow wp-block-group-is-layout-flow" >
<figure class="imageview_2932edbde5e4 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2572.webp" />
</figure>              
<div class="wp-block-group container_5595676d0099 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_1a55af72bfed is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_c6fbbd5945a1 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_590b167bee0a has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">{{$tour->days}} Days</p>
     
        <h3 class="text_07842806440a has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">{{$tour->title}}</h3>
               </div>


<div class="wp-block-group container_9ba672b89cf2 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_e9a07f467fb1 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_d09cab998cf0 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_9ea4c851789e has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">${{$tour->initial_cost}}</p>
     
        <h2 class="text_99a6bd2c4d69 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">${{$tour->amount}}</h2>
       

<div class="wp-block-group container_4715a3d8465f is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_7676ba979d0e"><a href="{{ route('view-tour', ['slug' => $tour->slug]) }}"  class="button_link_7676ba979d0e" target="_self" rel="noopener">
                  <p class="text_7b40d6d20dc9 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_bc231b7f568a wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2571;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>





        </div>
@endforeach
<!-- ends -->

        </div>
        </div>
        </div>

</div>


<!-- medium-view-tour-footer -->
<div class="medium-footer" style="position: relative;">
  <div class="wp-block-group container_59b6c4c28146 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>

    <div class="wp-block-group container_a236557e1927 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_82b276883aad is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_dec0ac038a14 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_fee43d06cd44 is-layout-flow wp-block-group-is-layout-flow" >
                  

<figure class="imageview_8f1d4dc8c6b6 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/419:3754.svg" />
</figure>


      <p class="text_700276de64b4 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Camel Leon Safaris Ltd. was born out of a love for the idea of adapting to various environments, mirroring the chameleon&apos;s ability. Our founders wanted to share this experience with people in the wilds of Africa, highlighting the beauty of nature when one immerses and adapts to it.</p>
             </div>
        </div>


<div class="wp-block-group container_dcb03018b885 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_2e7944c899ab has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:900;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Travel Tips</p>
     

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/tanzania-entry-requirements/" class="" target="_self" rel="noopener">
                  <p class="text_a7333f9405c5 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Entry Requirements</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/" class="" target="_self" rel="noopener">
                  <p class="text_56e5ea5af75e has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Tanzania Safari Planning Guide</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/best-time-to-visit-tanzania/" class="" target="_self" rel="noopener">
                  <p class="text_1b519907fc04 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Best time to visit Tanzania</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/" class="" target="_self" rel="noopener">
                  <p class="text_a5975bf05063 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Kilimanjaro Planning Guide</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/drones-photography-guidelines/" class="" target="_self" rel="noopener">
                  <p class="text_f69e1b1311f2 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;"> Drones &#038; Photography Guide</p>
         </a></div>
      <p class="text_aa6e657b5cb3 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Tipping Guide</p>
             </div>


<div class="wp-block-group container_451b5657c77b is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_9b82bc72039b has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:900;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Camelleon Safaris</p>
     
      <p class="text_9e4de2f5a7ce has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">About US</p>
     
      <p class="text_fa14c641a4e9 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Terms And Cionditions</p>
     
      <p class="text_5bbbdda7fc78 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Booking Process</p>
     
      <p class="text_1f3ea672b2fb has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Payment Details</p>
     
      <p class="text_4c15e0da83dd has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Privacy Policy</p>
             </div>


<div class="wp-block-group container_533bb42a61d5 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_33af696921cd has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:900;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Contact Information</p>
     
      <p class="text_3c232da50438 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Sales &#038; Safari Expert</p>
     
      <p class="text_58a02c6793a9 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:17.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">+25568 655 5755</p>
     
      <p class="text_e2147186022b has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">info@camelleonsafaris.com</p>
             </div>
        </div>
        </div>
<div class="wp-block-group container_d6bccd3b0a27 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
</div>

        </div>