<!-- itenary -->

<div class="wp-block-group container_c9f1b11a1b51 is-layout-flow wp-block-group-is-layout-flow" >
                  



<div class="view-tour-body-large">

@foreach(json_decode($tour->day_events, true) as $event)
<div class="wp-block-group container_ee0a20b79ef9 is-layout-flow wp-block-group-is-layout-flow">
  <!-- Inside structure -->
  <div class="wp-block-group container_e9c12360b1d4 is-layout-flow wp-block-group-is-layout-flow">
    <div class="wp-block-group container_7c1bd3296b50 is-layout-flow wp-block-group-is-layout-flow">
      <div class="wp-block-group container_323096f0adde is-layout-flow wp-block-group-is-layout-flow">
        <!-- Link container -->
        <div class="wp-block-yotako-block-anchor button_79068482ba7e">
          <a href="../index.html" class="button_link_79068482ba7e" target="_self" rel="noopener">
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
  <div class="state-yes" style="width:1120px">
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
            const parentContainer = imageView.closest('.wp-block-group.container_ee0a20b79ef9');
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
            const parentContainer = expandableButton.closest('.wp-block-group.container_ee0a20b79ef9');
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



  <!-- safari costs -->
<div class="safari-costs-large">
  

<div class="wp-block-group container_5c96ff3f7e4c is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_d6d76588eb46 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_64a33a905df3 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_b171f5b6250a has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Includes</h2>
       

<div class="wp-block-group container_17f1829185f8 is-layout-flow wp-block-group-is-layout-flow" >
  
<p class="text_7a911d4c3df3 has-text-color has-background has-text-align-left"  
   style="text-transform:none;font-style:normal;font-size:17.5px;font-weight:400;
          letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
    @foreach($tour->includes['includes'] as $include)
        <span style="color: #26461d; font-size: 20px; font-weight: bold;">•</span> 
        {{ $include }}<br/>
    @endforeach
</p>

     




        </div>
        </div>


<div class="wp-block-group container_daeaede98937 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_a34348f70af5 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_d9893833c44c has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Excludes</h2>
       

<div class="wp-block-group container_4233655f53fc is-layout-flow wp-block-group-is-layout-flow" >
<p class="text_93ccf382f99e has-text-color has-background has-text-align-left"  
   style="text-transform:none;font-style:normal;font-size:17.5px;font-weight:400;
          letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
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


<!-- faq section -->
    <h2 class=" faq-title text_ce43d4354680-faq has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">FAQ</h2>
<div class="faq-section">



  <!-- <div class="hider" style="background:white"> -->
@foreach(json_decode($tour->faq, true) as $faq)
<div class="wp-block-group container_ee0a20b79ef9 is-layout-flow wp-block-group-is-layout-flow">
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
  <div class="state-yes" style="width:1120px">
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













<div class="other-tours " >
 <div class="wp-block-group container_348e1e739115 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_4a2ee803b687 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_d9a88b5f6662 is-layout-flow wp-block-group-is-layout-flow" >
     
<!-- here -->




@foreach ($other_tours as $index => $tour)
<div class="wp-block-group container_61998548a931 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_9e0ba8223955 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_6eca4e4ccf35 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_6f8ec9daf062 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_ba6a6650d145 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_732f991506c0 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">{{$tour->days}} Days</p>
     
        <h3 class="text_5e9aec0b4310 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">{{$tour->title}}</h3>
               </div>


<div class="wp-block-group container_54c3068f8771 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_432a00c15e25 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_e99a39cc988d is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_a1352dd4f3d5 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">{{$tour->initial_cost}}</p>
     
        <h2 class="text_0606563d23ca has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">{{$tour->amount}}S</h2>
       

<div class="wp-block-group container_9b6d7814d089 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_59fe147319b3"><a href="{{ route('view-tour', ['slug' => $tour->slug]) }}"  class="button_link_59fe147319b3" target="_self" rel="noopener">
                  <p class="text_527ea7ac9573 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_368c65727742 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2468;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>



<figure class="imageview_9eddbd619257 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2469.webp" />
</figure>

        </div>


        @endforeach





        </div>
        </div>


        <h2 class="text_94b8caa3e641 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Other Safari Tours</h2>
               </div>
</div>
</div>



<div class="view-tour-large-footer" style="position: relative;top:-5000px;left:-170px;">
   @include('shared.footer');
</div>
        </div>





 <!-- stick -->
<!--  <div class="wp-block-group container_ed0f18246d7b is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
 -->