<div class="wp-block-group container_da6f6efcc8ce is-layout-flow wp-block-group-is-layout-flow" >
                  




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

        </div>