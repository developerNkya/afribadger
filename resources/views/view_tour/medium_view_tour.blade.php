<div class="wp-block-group container_da6f6efcc8ce is-layout-flow wp-block-group-is-layout-flow" >
                  




  <!-- itenaries section -->
<div class="wp-block-group container_05a35a35cbc2 is-layout-flow wp-block-group-is-layout-flow" >

                  
<div class="wp-block-group container_2608d335926e is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_94ba8e6dae40 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_63a4225468d7 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-yotako-block-anchor button_63fee80ead3f"><a href="../index.html" class="button_link_63fee80ead3f" target="_self" rel="noopener">
            
<div class="wp-block-group container_4b3c3f87d48e is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>

      <p class="text_1f4d1cf86082 has-text-color has-background has-text-align-left"  style="text-transform:uppercase;font-style:normal;font-size:13.5px;font-weight:600;letter-spacing:-0.5px;color:#f4e7c9;background-color:transparent;">Day</p>
         </a></div>
        <h3 class="text_dbd8059627d9 has-text-color has-background has-text-align-center wp-block-heading"  style="text-transform:none;font-style:normal;font-size:19.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">4</h3>
               </div>


<div class="wp-block-group container_d6f91a95ee8e is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_fa55cf660874 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:27.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Depature</h2>
               </div>
        </div>



<figure class="imageview_d810f0f30684 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I419:4155;280:381.svg" />
</figure>

<!-- Itinerary (Initially Hidden) -->

</div>
<div class="medium-tour-details">
   <div class="opened-itenary" style=" background-color: white; padding-top: 20px;">
  <div class="state-yes">
    <div class="collapsible-button">
      <div class="frame">
        <div class="day-count">
          <div class="div">
            <div class="rectangle"></div>
            <div class="day">DAY</div>
          </div>
          <div class="text-wrapper">1</div>
        </div>
        <div class="div-wrapper">
          <p class="p">Arrival at the Airport and transfer to Hotel</p>
        </div>
      </div>
      <img class="button-expandable-medium" src="../../assets/images/button-expandable.png" />
    </div>
    <div class="rectangle-2"></div>
    <div class="frame-2">
      <img class="group" src="../../assets/images/group-22.png" />
      <div class="frame-3">
        <div class="text-wrapper-2">Arrival</div>
        <p class="the-group-arrives-at">
          The group arrives at Kilimanjaro Airport (JRO). Participants are met by a representative of Altezza Travel and transferred to a hotel in Arusha.<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;Note: The hotel cost only includes breakfast. Check-in starts at 2:00 PM.
        </p>
      </div>
    </div>
    <div class="frame-4">
      <div class="group-wrapper">
        <div class="overlap-wrapper">
          <div class="overlap">
            <div class="overlap-group">
              <div class="rectangle-3"></div>
              <div class="rectangle-4"></div>
              <div class="rectangle-5"></div>
            </div>
            <div class="rectangle-6"></div>
          </div>
        </div>
      </div>
      <div class="frame-5">
        <div class="frame-6">
          <div class="text-wrapper-3">Accommodation</div>
          <div class="text-wrapper-4">GRAND MELIA ARUSHA</div>
        </div>
        <div class="frame-7">
          <img class="img" src="../../assets/images/rectangle-71.png" /> <img class="img" src="../../assets/images/rectangle-72.png" />
        </div>
        <div class="frame-8">
          <div class="frame-9">
            <img class="vector" src="img/vector-2.svg" />
            <div class="text-wrapper-5">Meal Plan:</div>
          </div>
          <div class="text-wrapper-6">Breakfast included</div>
        </div>
        <div class="frame-10">
          <div class="frame-11">
            <img class="vector-2" src="img/image.svg" />
            <div class="text-wrapper-7">Swimming Pool</div>
          </div>
          <div class="frame-11">
            <img class="vector-2" src="img/vector.svg" />
            <div class="text-wrapper-7">Wifi</div>
          </div>
          <div class="frame-11">
            <img class="vector-2" src="img/vector-3.svg" />
            <div class="text-wrapper-7">Restaurant</div>
          </div>
          <div class="frame-11">
            <img class="vector-2" src="img/vector-4.svg" />
            <div class="text-wrapper-7">Spa</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
</div>



        </div>
        <script>
document.addEventListener("DOMContentLoaded", function () {
  // Itinerary logic (remains unchanged)
  const imageViews = document.querySelectorAll('.imageview_d810f0f30684');
  const expandableButtons = document.querySelectorAll('.button-expandable-medium');

  imageViews.forEach((imageView, index) => {
    const parentContainer = imageView.closest('.wp-block-group.container_da6f6efcc8ce');
    const itinerary = parentContainer ? parentContainer.querySelector('.opened-itenary') : null;

    if (!itinerary) {
      console.error('Itinerary not found for the current image view.');
      return;
    }

    const expandableButton = expandableButtons[index];

    imageView.addEventListener('click', function () {
       console.log("disable1");
      itinerary.classList.add('show'); 
      expandableButton.src = '../../assets/images/button-expandable.png'; 
    });

    expandableButton.addEventListener('click', function () {
      console.log("disable");
      itinerary.classList.remove('show'); 
      expandableButton.src = '../../assets/images/button-expandable.png'; 
    });
  });

  // FAQ toggle logic (new functionality)
    const faqView = document.querySelectorAll('.imageview_d810f0f30684-faq');
  const faqButtons = document.querySelectorAll('.button-expandable-faq-m');

faqView.forEach((imageView, index) => {
  const parentContainer = imageView.closest('.wp-block-group.container_da6f6efcc8ce');
  const itinerary = parentContainer ? parentContainer.querySelector('.opened-itenary-faq') : null;

  if (!itinerary) {
    console.error('Itinerary not found for the current image view.');
    return;
  }

  const faqButton = faqButtons[index];

  imageView.addEventListener('click', function () {
    itinerary.classList.add('show');
    itinerary.style.display = 'inline'; // Set display to inline after opening
    faqButton.src = '../../assets/images/button-expandable.png';
  });

  faqButton.addEventListener('click', function () {
    itinerary.classList.remove('show');
    itinerary.style.display = 'none'; // Hide the FAQ when clicked again
    faqButton.src = '../../assets/images/button-expandable.png';
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
                        <p class="text_1b203d75b37b has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Full board accommodation as specified on safari.<br/>4WD Land Cruiser vehicle with pop-up roof.<br/>Well-trained driver-guide.<br/>Full board meals whilst on safari.<br/>All the national park fees as per itinerary.<br/>All meals whilst on safari.<br/>Mineral water.</p>
     

<div class="wp-block-group container_22ef46522172 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_db99a6ef6116 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_22654e280858 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_7be1119fedbd is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_5bc500ffaa89 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_508e77486d66 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_cd28750a1ad7 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>
        </div>


<div class="wp-block-group container_2afe3327fce7 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_47ead32807a4 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_addf1c97b134 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Excludes</h2>
       

<div class="wp-block-group container_73317a457e6d is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_73dd0112968b is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_e8baa6f790d6 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_f4d62d2ef373 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_dbb68f185517 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_c18f393f7184 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_e121ffa5551f is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_de40c162080e is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>

      <p class="text_e75e6e72ca37 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Airfares airport taxes and fees.<br/>Laundry.<br/>Entry visas and vaccinations.<br/>Personal items.<br/>Tips and gratuities.<br/>Travel Insurance.<br/>Optional tour.<br/>Guide tips and any items of personal nature.</p>
             </div>
        </div>
        </div>
        </div>

</div>


<!-- faq -section -->
<div class="faq-medium-section">
   <h2 class="text_a6705c924ab0 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">FAQ’s</h2>
<div class="wp-block-group container_05a35a35cbc2 is-layout-flow wp-block-group-is-layout-flow"  style="background:white">

                  
<div class="wp-block-group container_2608d335926e is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_94ba8e6dae40 is-layout-flow wp-block-group-is-layout-flow" >
                  



<div class="wp-block-group container_d6f91a95ee8e is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_fa55cf660874 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:27.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Arrival at the Airport and transfer to Hotel</h2>
               </div>
        </div>



<figure class="imageview_d810f0f30684-faq wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I419:4155;280:381.svg" />
</figure>

<!-- Itinerary (Initially Hidden) -->

</div>
   <div class="opened-itenary-faq medium-faq-details" style=" background-color: white; padding-top: 20px;">
  <div class="state-yes">
    <div class="collapsible-button">
      <div class="frame">
        <div class="div-wrapper">
          <p class="p">Arrival at the Airport and transfer to Hotel</p>
        </div>
      </div>
      <img class="button-expandable-faq-m" src="../../assets/images/button-expandable.png" />
    </div>
    <div class="rectangle-2"></div>
    <div class="frame-2">
      <img class="group" src="../../assets/images/group-22.png" />
      <div class="frame-3">
        <div class="text-wrapper-2">Arrival</div>
        <p class="the-group-arrives-at">
          The group arrives at Kilimanjaro Airport (JRO). Participants are met by a representative of Altezza Travel and transferred to a hotel in Arusha.<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;Note: The hotel cost only includes breakfast. Check-in starts at 2:00 PM.
        </p>
      </div>
    </div>
</div> 
</div>



        </div>

</div>


<!-- other safaris -->
<div class="other-safaris-medium">

        <h2 class="text_dba374c3e302 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Other Safari Tours</h2>

        <div class="wp-block-group container_c25f9cd854f7 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_0fb15f884df1 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_b2a69104a335 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_d41e69cf737c is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_47d50a4139b2 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_5595676d0099 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_1a55af72bfed is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_c6fbbd5945a1 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_590b167bee0a has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">10 Days</p>
     
        <h3 class="text_07842806440a has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation</h3>
               </div>


<div class="wp-block-group container_9ba672b89cf2 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_e9a07f467fb1 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_d09cab998cf0 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_9ea4c851789e has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">$3900</p>
     
        <h2 class="text_99a6bd2c4d69 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">$3300</h2>
       

<div class="wp-block-group container_4715a3d8465f is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_7676ba979d0e"><a href="index-2.html" class="button_link_7676ba979d0e" target="_self" rel="noopener">
                  <p class="text_7b40d6d20dc9 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_bc231b7f568a wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2571;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>



<figure class="imageview_2932edbde5e4 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2572.webp" />
</figure>

        </div>


<div class="wp-block-group container_b4c9bcf6cd61 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_fbf0b94a0003 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_601e456e5fcb is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_4c841d31148c is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_9b084270e4c5 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_1e9489d2921f has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">10 Days</p>
     
        <h3 class="text_c8e2c14c2b5f has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation</h3>
               </div>


<div class="wp-block-group container_61216ea70b20 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_e72e7012bd90 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_86de22be4106 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_870b03e66a72 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">$3900</p>
     
        <h2 class="text_717ca11c9179 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">$3300</h2>
       

<div class="wp-block-group container_3ba244d83eb0 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_fbda26aa8fea"><a href="index-2.html" class="button_link_fbda26aa8fea" target="_self" rel="noopener">
                  <p class="text_4938d5d83edd has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_f5a877a18ecc wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2574;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>



<figure class="imageview_924a421a7d53 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2575.webp" />
</figure>

        </div>


<div class="wp-block-group container_291aef115e2a is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_01862b9e551d is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_72ed1a43c342 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_59d397efaf02 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_7b821152d82f is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_eb777efa0487 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">10 Days</p>
     
        <h3 class="text_2a4e29b9a5c4 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation</h3>
               </div>


<div class="wp-block-group container_30270213e630 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_ffe4f3abc8a2 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_0d51f82fead8 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_507537a8dbcc has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">$3900</p>
     
        <h2 class="text_2e55164ecf4d has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">$3300</h2>
       

<div class="wp-block-group container_7b8be5c1eedf is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_b3d613bcb2ca"><a href="index-2.html" class="button_link_b3d613bcb2ca" target="_self" rel="noopener">
                  <p class="text_f4404b9110e7 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_0eaa55250763 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2577;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>



<figure class="imageview_fa146d5b9d2e wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2578.webp" />
</figure>

        </div>


<div class="wp-block-group container_b273cb7ec2ab is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_5f644c302393 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_7bb56f9dc2f0 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_dd180cdd9b83 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_bf1d8b6cff3a is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_c9a2f9500ed7 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">10 Days</p>
     
        <h3 class="text_019aa012436f has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation</h3>
               </div>


<div class="wp-block-group container_df83e04f2825 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_86db8fe67a82 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_bba3a2c3576e is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_3b5feb9e0e54 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">$3900</p>
     
        <h2 class="text_47b29187624a has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">$3300</h2>
       

<div class="wp-block-group container_dcd494a8d1a4 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_e1d29dee23c6"><a href="index-2.html" class="button_link_e1d29dee23c6" target="_self" rel="noopener">
                  <p class="text_ad2ca73e557d has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_869336982a85 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2580;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>



<figure class="imageview_b3e96b076829 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2581.webp" />
</figure>

        </div>
        </div>
        </div>
        </div>

</div>


<!-- medium-view-tour-footer -->
<div class="medium-footer" style="position: relative;left: -40px;">
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