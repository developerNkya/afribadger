<div class="wp-block-group container_4e3d9e39666e is-layout-flow wp-block-group-is-layout-flow" >

  <div class="tour-content">
                          <h2 class="text_ff42df684304 has-text-color has-background has-text-align-center wp-block-heading"  style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Overview</h2>
       
        <h3 class="text_753ef0810df9 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:19.5px;font-weight:500;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
{{$tour->tour_info}}
      </h3>


<!-- border -->
<div class="wp-block-group container_38788649a70b is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
    <!-- itenary -->
  <div class="itenary-small">
    <h2 class="text_da06bcbaabd7 has-text-color has-background has-text-align-left wp-block-heading" 
        style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
        Itinerary
    </h2>

    @foreach(json_decode($tour->day_events, true) as $event)
    <div class="wp-block-yotako-block-anchor button_918fe2cd01a0">
      <div class="wp-block-group container_7e3530d3246e is-layout-flow wp-block-group-is-layout-flow">
        <div class="wp-block-group container_f3bfadad181a is-layout-flow wp-block-group-is-layout-flow">
          <div class="wp-block-group container_9325242a4eaa is-layout-flow wp-block-group-is-layout-flow">
            <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
          </div>

          <p class="text_760c0f94c923 has-text-color has-background has-text-align-left" 
             style="text-transform:uppercase;font-style:normal;font-size:13.5px;font-weight:600;letter-spacing:-0.5px;color:#f4e7c9;background-color:transparent;">
             Day
          </p>
        </div>

        <h3 class="text_5a947dcac893 has-text-color has-background has-text-align-center wp-block-heading" 
            style="text-transform:none;font-style:normal;font-size:19.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
            {{ $event['day'] }}
        </h3>
      </div>

      <div class="wp-block-group container_5f66b41bcc64 is-layout-flow wp-block-group-is-layout-flow">
        <p class="text_c273670e1c70 has-text-color has-background has-text-align-left" 
           style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
           {{ $event['title'] }}
        </p>
      </div>

      <figure class="imageview_7690f9900705 wp-block-image">
        <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/423:4760.svg" />
      </figure>
    </div>

    <!-- when opened:: -->
    <div class="small-tour-details">
      <div class="opened-itenary" style="background-color: white; padding-top: 20px;">
        <div class="state-yes" style="height:fit-content;margin-bottom: 109px !important;">
          <div class="collapsible-button">
            <div class="frame">
              <div class="div-wrapper">
                <p class="p">{{ $event['title'] }}</p>
              </div>
            </div>
            <img class="button-expandable-small" src="../../assets/images/button-expandable.png" />
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
  </div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Itinerary logic
    const imageViews = document.querySelectorAll('.imageview_7690f9900705');
    const expandableButtons = document.querySelectorAll('.button-expandable-small');

    imageViews.forEach((imageView, index) => {
        // Find the corresponding itinerary for this image
        const parentContainer = imageView.closest('.wp-block-yotako-block-anchor');
        const itinerary = parentContainer ? parentContainer.nextElementSibling.querySelector('.opened-itenary') : null;

        if (!itinerary) {
            console.error(`Itinerary not found for image index ${index}`);
            return;
        }

        const expandableButton = expandableButtons[index];

        imageView.addEventListener('click', function () {
            console.log("Opening Itinerary", index);

            // Hide other open itineraries
            document.querySelectorAll('.opened-itenary').forEach(it => {
                if (it !== itinerary) it.classList.remove('show');
            });

            // Toggle visibility of the clicked itinerary
            itinerary.classList.toggle('show');
            expandableButton.src = '../../assets/images/button-expandable.png';
        });

        expandableButton.addEventListener('click', function () {
            console.log("Closing Itinerary", index);
            itinerary.classList.remove('show');
            expandableButton.src = '../../assets/images/button-expandable.png';
        });
    });
});


</script>



<!-- safari includes -->
<div class="safari-includes-small">
       <div class="wp-block-group container_c3d225d0f727 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_2fde2e0b36f6 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_1e14ebc3dd51 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_72898d924eee has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Includes</h2>
       

<div class="wp-block-group container_da3fadf1eb23 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_9a2c731ab1ec has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
                        @foreach($tour->includes['includes'] as $exclude)
        <span style="color: #26461d; font-size: 20px; font-weight: bold;">•</span> 
        {{ $exclude }}<br/>
    @endforeach              
                      </p>
     


        </div>
        </div>


<div class="wp-block-group container_6960a4e248ca is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_d2c0d88dd7b7 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Excludes</h2>
       

<div class="wp-block-group container_abca94120be3 is-layout-flow wp-block-group-is-layout-flow" >
                  

      <p class="text_889812c376b6 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
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
<div class="small-faq-section">
     
  <div class="itenary-small">
    <h2 class="text_da06bcbaabd7-faq has-text-color has-background has-text-align-left wp-block-heading" 
        style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
        FAQ's
    </h2>

    @foreach(json_decode($tour->faq, true) as $faq)
    <div class="wp-block-yotako-block-anchor button_918fe2cd01a0-faq">

      <div class="wp-block-group container_5f66b41bcc64 is-layout-flow wp-block-group-is-layout-flow">
        <p class="text_c273670e1c70 has-text-color has-background has-text-align-left" 
           style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">
           {{ $faq['question'] }} 
        </p>
      </div>

      <figure class="imageview_7690f9900705 wp-block-image">
        <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/423:4760.svg" />
      </figure>
    </div>

    <!-- when opened:: -->
    <div class="small-tour-details-faq">
      <div class="opened-itenary" style="background-color: white; padding-top: 20px;">
        <div class="state-yes" style="height:fit-content;margin-bottom:80px;margin-top:-50px">
          <div class="collapsible-button">
            <div class="frame">
              <div class="div-wrapper">
                <p class="p">Answer</p>
              </div>
            </div>
            <img class="button-expandable-small" src="../../assets/images/button-expandable.png" />
          </div>

          <div class="rectangle-2"></div>
          <div class="frame-2">
            <div class="frame-3">
              <p class="the-group-arrives-at">
              {{ $faq['answer'] }} 
              </p>
            </div>
          </div>
          <div class="frame-4">
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>
       
       <div class="small-other-tours">
        <h3 class="text_9767805c127d has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Other Safari Tours</h3>

        <div class="wp-block-group container_c23fea7781b4 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_1d7391e9003a is-layout-flow wp-block-group-is-layout-flow" >
     


@foreach ($other_tours as $index => $tour)
<div class="wp-block-group container_88e3c8c3bf20 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_1ff0184f0d23 is-layout-flow wp-block-group-is-layout-flow" >
<figure class="imageview_20916a3028a7 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2675.webp" />
</figure>
               
<div class="wp-block-group container_319a47eeb50b is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_e78325e6a6b9 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_46c39bace58d is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_be51c3fbb1c1 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">{{$tour->days}} Days</p>
     
        <h3 class="text_04cd74397d85 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">{{$tour->title}}</h3>
               </div>


<div class="wp-block-group container_15f543d2bab3 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_2f620520d6f9 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_695d85012668 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_e3333f4026e8 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">${{$tour->initial_cost}}</p>
     
        <h2 class="text_106b30775946 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">${{$tour->amount}}</h2>
       

<div class="wp-block-group container_796af06c9f8c is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_f26f5d2dec40"><a href="{{ route('view-tour', ['slug' => $tour->slug]) }}"  class="button_link_f26f5d2dec40" target="_self" rel="noopener">
                  <p class="text_0abdfd47a017 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_e584239beb5c wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2674;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>




        </div>
@endforeach
        </div>
        </div>
       </div>


       <div class="small-footer">
        <div class="wp-block-group container_77c41d0f77eb is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_62421d6ac903 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_e5e32cc7d414 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_af46ce7ae012 is-layout-flow wp-block-group-is-layout-flow" >
                  

<figure class="imageview_7f959592d3bb wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/419:3807.svg" />
</figure>


      <p class="text_0677ac74b986 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Camel Leon Safaris Ltd. was born out of a love for the idea of adapting to various environments, mirroring the chameleon&apos;s ability. Our founders wanted to share this experience with people in the wilds of Africa, highlighting the beauty of nature when one immerses and adapts to it.</p>
             </div>
        </div>


<div class="wp-block-group container_8a172b24c9f1 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_bee0eb21ad55 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:900;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Travel Tips</p>
     

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/tanzania-entry-requirements/" class="" target="_self" rel="noopener">
                  <p class="text_e7d163df576c has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Entry Requirements</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/" class="" target="_self" rel="noopener">
                  <p class="text_15eef20c5527 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Tanzania Safari Planning Guide</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/best-time-to-visit-tanzania/" class="" target="_self" rel="noopener">
                  <p class="text_b2eb006bbfb3 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Best time to visit Tanzania</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/" class="" target="_self" rel="noopener">
                  <p class="text_2ced00c2c9da has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Kilimanjaro Planning Guide</p>
         </a></div>

<div class="wp-block-yotako-block-anchor "><a href="https://serengeticlarity.com/drones-photography-guidelines/" class="" target="_self" rel="noopener">
                  <p class="text_d7ed1846883c has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;text-decoration:underline;letter-spacing:-0.5px;color:#808080;background-color:transparent;"> Drones &#038; Photography Guide</p>
         </a></div>
      <p class="text_98bf780d1ebc has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Tipping Guide</p>
             </div>


<div class="wp-block-group container_7292c9591043 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_ed808aeec9d1 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:900;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Camelleon Safaris</p>
     
      <p class="text_7617c3ced2de has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">About US</p>
     
      <p class="text_4217231b72a1 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Terms And Cionditions</p>
     
      <p class="text_ad5bd038f45a has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Booking Process</p>
     
      <p class="text_8ca85fce89c4 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Payment Details</p>
     
      <p class="text_f3684671ac7d has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Privacy Policy</p>
             </div>


<div class="wp-block-group container_da74f4a4931f is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_a121be893fe9 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:900;letter-spacing:-0.5px;color:#000000;background-color:transparent;">Contact Information</p>
     
      <p class="text_a7234ac0ec49 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">Sales &#038; Safari Expert</p>
     
      <p class="text_bb0abf2681fd has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:17.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">+25568 655 5755</p>
     
      <p class="text_49d30dff5cf0 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#808080;background-color:transparent;">info@camelleonsafaris.com</p>
             </div>
        </div>
        </div>
        <div class="wp-block-group container_007e9be61514_updated is-layout-flow wp-block-group-is-layout-flow">
<div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
</div>
       </div>  

</div>      
</div>

