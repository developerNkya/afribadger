<!-- itenary -->

<div class="wp-block-group container_c9f1b11a1b51 is-layout-flow wp-block-group-is-layout-flow" >
                  

<div class="view-tour-body-large">
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
        <h3 class="text_bf0d900ad321 has-text-color has-background has-text-align-center wp-block-heading" style="text-transform:none;font-style:normal;font-size:19.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">4</h3>
      </div>
      <div class="wp-block-group container_d46c55d4151b is-layout-flow wp-block-group-is-layout-flow">
        <h2 class="text_f6365cc971e1 has-text-color has-background has-text-align-left wp-block-heading" style="text-transform:none;font-style:normal;font-size:27.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Arrival at the Airport and transfer to Hotel</h2>
      </div>
    </div>
    
    <!-- Clickable Image -->
    <figure class="imageview_d207cb065864 wp-block-image">
      <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I285:861;280:381.svg" />
    </figure>
  </div>


  <!-- Itinerary (Initially Hidden) -->
 <!-- Itinerary (Initially Hidden) -->
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
          <div class="text-wrapper">1</div>
        </div>
        <div class="div-wrapper">
          <p class="p">Arrival at the Airport and transfer to Hotel</p>
        </div>
      </div>
      <img class="button-expandable" src="../../assets/images/button-expandable.png" />
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


<script>
document.addEventListener("DOMContentLoaded", function () {
  // Itinerary logic (remains unchanged)
  const imageViews = document.querySelectorAll('.imageview_d207cb065864');
  const expandableButtons = document.querySelectorAll('.button-expandable');

  imageViews.forEach((imageView, index) => {
    const parentContainer = imageView.closest('.wp-block-group.container_c9f1b11a1b51');
    const itinerary = parentContainer ? parentContainer.querySelector('.opened-itenary') : null;

    if (!itinerary) {
      console.error('Itinerary not found for the current image view.');
      return;
    }

    const expandableButton = expandableButtons[index];

    imageView.addEventListener('click', function () {
      itinerary.classList.add('show'); 
      expandableButton.src = '../../assets/images/button-expandable.png'; 
    });

    expandableButton.addEventListener('click', function () {
      itinerary.classList.remove('show'); 
      expandableButton.src = '../../assets/images/button-expandable.png'; 
    });
  });

  // FAQ toggle logic (new functionality)
    const faqView = document.querySelectorAll('.imageview_d207cb065864-faq');
  const faqButtons = document.querySelectorAll('.button-expandable-faq');

faqView.forEach((imageView, index) => {
  const parentContainer = imageView.closest('.wp-block-group.container_c9f1b11a1b51');
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


  <!-- safari costs -->
<div class="safari-costs-large">
  

<div class="wp-block-group container_5c96ff3f7e4c is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_d6d76588eb46 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_64a33a905df3 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_b171f5b6250a has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Includes</h2>
       

<div class="wp-block-group container_17f1829185f8 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_7a911d4c3df3 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:17.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Full board accommodation as specified on safari.<br/>4WD Land Cruiser vehicle with pop-up roof.<br/>Well-trained driver-guide.<br/>Full board meals whilst on safari.<br/>All the national park fees as per itinerary.<br/>All meals whilst on safari.<br/>Mineral water.</p>
     

<div class="wp-block-group container_eb1a50f1e90a is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_7b8526fdf8b3 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_fe43248742d9 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_c7aa1110aab8 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_2d16fd524b66 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_411c4b63aed9 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_d54ede9e2c82 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>
        </div>


<div class="wp-block-group container_daeaede98937 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_a34348f70af5 is-layout-flow wp-block-group-is-layout-flow" >
                          <h2 class="text_d9893833c44c has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:31.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Safari Cost Excludes</h2>
       

<div class="wp-block-group container_4233655f53fc is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_a55ecc337ed8 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_f9c8e6976781 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_8fe379eeb7d2 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_9d12dd1d7849 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_9e5868a9b18f is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_5177cdb52cd1 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_2997ebdcef38 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_8ad7819fc94b is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>

      <p class="text_93ccf382f99e has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:17.5px;font-weight:400;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Airfares airport taxes and fees.<br/>Laundry.<br/>Entry visas and vaccinations.<br/>Personal items.<br/>Tips and gratuities.<br/>Travel Insurance.<br/>Optional tour.<br/>Guide tips and any items of personal nature.</p>
             </div>
        </div>
        </div>
        </div>
</div>


<!-- faq section -->
    <h2 class=" faq-title text_ce43d4354680-faq has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:47.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">FAQ</h2>
<div class="faq-section">
  <div class="hider" style="background:white">
  <div class="wp-block-group container_ee0a20b79ef9-faq is-layout-flow wp-block-group-is-layout-flow">
  <!-- Inside structure -->
  <div class="wp-block-group container_e9c12360b1d4 is-layout-flow wp-block-group-is-layout-flow" style="width:1117px">
    <div class="wp-block-group container_7c1bd3296b50 is-layout-flow wp-block-group-is-layout-flow">
      <div class="wp-block-group container_d46c55d4151b is-layout-flow wp-block-group-is-layout-flow">
        <h2 class="text_f6365cc971e1 has-text-color has-background has-text-align-left wp-block-heading" style="position:relative;text-transform:none;font-style:normal;font-size:27.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Arrival at the Airport and transfer to Hotel</h2>
      </div>
    </div>
    
    <!-- Clickable Image -->
    <figure class="imageview_d207cb065864-faq wp-block-image">
      <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/196:500.svg" />
    </figure>
  </div>


  <!-- Itinerary (Initially Hidden) -->
 <!-- Itinerary (Initially Hidden) -->
<!-- Itinerary (Initially Hidden) -->
<div class="opened-itenary-faq" style="margin-top: 50px; background-color: white; padding-top: 20px;">
  <div class="state-yes" style="width:1120px">
    <div class="collapsible-button">
      <div class="frame">
        <div class="div-wrapper">
          <p class="p">Answer</p>
        </div>
      </div>
      <img class="button-expandable-faq" src="../../assets/images/button-expandable.png" />
    </div>
    <div class="rectangle-2"></div>
    <div class="frame-2">
      <img class="group" src="../../assets/images/group-22.png" />
      <div class="frame-3">
        <p class="the-group-arrives-at">
          The group arrives at Kilimanjaro Airport (JRO). Participants are met by a representative of Altezza Travel and transferred to a hotel in Arusha.<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;Note: The hotel cost only includes breakfast. Check-in starts at 2:00 PM.
        </p>
      </div>
    </div>
  </div>
</div>



</div>
</div>


</div>


<div class="other-tours " >
 <div class="wp-block-group container_348e1e739115 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_4a2ee803b687 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_d9a88b5f6662 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_61998548a931 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_9e0ba8223955 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_6eca4e4ccf35 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_6f8ec9daf062 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_ba6a6650d145 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_732f991506c0 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">10 Days</p>
     
        <h3 class="text_5e9aec0b4310 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation</h3>
               </div>


<div class="wp-block-group container_54c3068f8771 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_432a00c15e25 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_e99a39cc988d is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_a1352dd4f3d5 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">$3900</p>
     
        <h2 class="text_0606563d23ca has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">$3300</h2>
       

<div class="wp-block-group container_9b6d7814d089 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_59fe147319b3"><a href="index-2.html" class="button_link_59fe147319b3" target="_self" rel="noopener">
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


<div class="wp-block-group container_643da5ce2cc5 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_abb7b79ce8b2 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_1f3e0e5c895a is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_1d214eb1ccfd is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_cbb705de9909 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_23aa3befb450 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">10 Days</p>
     
        <h3 class="text_d47fa77a6aac has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation</h3>
               </div>


<div class="wp-block-group container_50c024b52120 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_d11077fc87b5 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_78ce617d3257 is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_8428b8d497f1 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">$3900</p>
     
        <h2 class="text_f8534d2034df has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">$3300</h2>
       

<div class="wp-block-group container_b8609efb7217 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_427440f53fe9"><a href="index-2.html" class="button_link_427440f53fe9" target="_self" rel="noopener">
                  <p class="text_7eb135068d32 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_261a6a1d04e3 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2471;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>



<figure class="imageview_98fd4e05d0d9 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2472.webp" />
</figure>

        </div>


<div class="wp-block-group container_d59f3db0e65a is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_13a43cbd1c22 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_a933c886bded is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_dd7930b61157 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_7c098398eb7c is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_b17c76b1ac83 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#1a1a1a99;background-color:transparent;">10 Days</p>
     
        <h3 class="text_2821a89b0ad9 has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:23.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">Comfort&nbsp;&nbsp;Safari&nbsp;and&nbsp;Beach&nbsp;Vacation</h3>
               </div>


<div class="wp-block-group container_23c12c8ce51f is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>


<div class="wp-block-group container_b38d76a47464 is-layout-flow wp-block-group-is-layout-flow" >
                  
<div class="wp-block-group container_9d1a6baaea0e is-layout-flow wp-block-group-is-layout-flow" >
                        <p class="text_4de3af7129c0 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:500;letter-spacing:-0.5px;color:#0000008a;background-color:transparent;">$3900</p>
     
        <h2 class="text_bfa9cda4ccae has-text-color has-background has-text-align-left wp-block-heading"  style="text-transform:none;font-style:normal;font-size:35.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">$3300</h2>
       

<div class="wp-block-group container_93934c067170 is-layout-flow wp-block-group-is-layout-flow" >
   
      
        <div class="wp-block-spacer" style="height:0px" aria-hidden="true"></div> 
        
    </div>
        </div>


<div class="wp-block-yotako-block-anchor button_77224195fa6d"><a href="index-2.html" class="button_link_77224195fa6d" target="_self" rel="noopener">
                  <p class="text_6814b087b196 has-text-color has-background has-text-align-left"  style="text-transform:none;font-style:normal;font-size:15.5px;font-weight:600;letter-spacing:-0.5px;color:#26461d;background-color:transparent;">View More</p>
     


<figure class="imageview_5edb6c234c47 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2474;405:837;221:315.svg" />
</figure>

    </a></div>        </div>
        </div>
        </div>



<figure class="imageview_a576616436d4 wp-block-image" >
<img decoding="async"  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2475.webp" />
</figure>

        </div>
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