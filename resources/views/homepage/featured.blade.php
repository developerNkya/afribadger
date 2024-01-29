
<div>
    <div class="pt-30 pb-10 md:py-60 px-10">
        <div class="container-lg">
            <h2
                class="text-center mb-20 md:mb-50 font-handwriting leading-none break-words text-40 md:text-45 lg:text-55">
                <span class="bg-gradient-90-primary-alt text-fill-transparent bg-clip-text">
                    ~ Featured  ~
                </span>
            </h2>
            <article class="relative md:pt-9/12 md:mb-20">
                <a href="tribes/the-berber-amazigh.html"
                    class="block relative rounded-4 overflow-hidden pt-6/12 md:pt-0 md:z-above md:absolute md:top-0 md:left-0 md:w-6/12 md:pb-6/12">
                    <div class="animation-loading animation-2s animation-ease-in-out absolute inset-0 slideshow-container">
                        <img src="https://i.ibb.co/xJhShB9/wallpaperflare-com-wallpaper.jpg" class="h-full w-full opacity-0 lazyload reveal absolute object-cover inset-0 slide" />
                        <img src="https://i.ibb.co/5sLZt3V/harshil-gudka-2q-N2-QQw-T8s-unsplash.jpg" class="h-full w-full opacity-0 lazyload reveal absolute object-cover inset-0 slide" />
                        <img src="https://images.unsplash.com/photo-1522328130867-8df79ee56d04?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="h-full w-full opacity-0 lazyload reveal absolute object-cover inset-0 slide" />
                      
                        <!-- Add more images as needed -->                     
                        <div class="v-portal" style="display: none"></div>
                      </div>

                </a>
                <div class="hidden md:block absolute top-0 left-2/12 w-3/12 pt-6/12">
                    <a href="tribes/the-berber-amazigh.html"
                        class="block relative w-full pb-full rounded-4 overflow-hidden mt-15 -ml-15">
                        <div
                            class="animation-loading animation-2s animation-ease-in-out absolute inset-0">
                            <img data-srcset="https://i.ibb.co/59HQbsw/crispin-jones-DDEBAl7-ULAo-unsplash.jpg 2000w, https://i.ibb.co/59HQbsw/crispin-jones-DDEBAl7-ULAo-unsplash.jpg 500w"
                                class="h-full w-full opacity-0 lazyload reveal absolute object-cover inset-0" />
                            <!---->
                            <div class="v-portal" style="display: none"></div>
                        </div>
                    </a>
                </div>
                <div
                    class="-mt-20 relative z-above bg-maize rounded-4 p-20 md:absolute md:right-0 md:top-2/12 md:py-80 md:px-60 md:w-7/12 md:ml-auto">
                    <section class="md:text-left">
                        <header>
                            <!---->
                            <div class="pb-15 md:pb-20">
                                <h3
                                    class="text-brown-primary truncate leading-copy -my-5 font-handwriting leading-none break-words text-30">
                                    <a href="tribes/the-berber-amazigh.html">
                                        Welcome To our site!
                                    </a>
                                </h3>
                            </div>
                        </header>
                        <div class="box orient-vertical overflow-hidden clamp-4">
                            <p class="visible">
                                Kilimanjaro is very popular with both experienced hikers and first time trekkers because it is considered to be the easiest of the seven summits.
                                 It is the largest free-standing mountain rise in the world, 
                                 meaning it is not part of a mountain range. Dont plan to miss this tour!
                            </p>
                        </div>
                        <ul
                            class="pt-20 sm:pt-30 flex font-slab tracking-wider text-center text-12 list-none whitespace-no-wrap">
                        </ul>
                        <div class="pt-20 md:pt-30">
                            <div class="text-white">
                                <a
                                    class="group flex w-full md:inline-flex md:align-top rounded-2 overflow-hidden relative text-white md:w-auto">
                                    <div
                                        class="flex items-center relative w-full pointer-events-none transition-color transition-250 text-white bg-gradient-90-primary text-14 h-45 md:h-50 md:px-50 justify-center">
                                        <div
                                            class="relative flex items-center z-above font-slab tracking-wider whitespace-no-wrap pb-2">
                                            Explore >>
                                        </div>
                                        <!---->
                                    </div>
                                    <div
                                        class="absolute inset-0 transition-color transition-250 bg-transparent rounded-2 shadow-button hover:bg-white-30">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </article>
        </div>
    </div>

</div>

<script>
    let slideIndex = 0;
    
    function showSlides() {
      let slides = document.getElementsByClassName("slide");
      let currentSlide = slides[slideIndex];
      let nextIndex = (slideIndex + 1) % slides.length;
      let nextSlide = slides[nextIndex];
    
      // Fade out the current slide
      currentSlide.style.opacity = 0;
    
      // Wait for fade-out to complete, then switch images and fade in
      setTimeout(function() {
        currentSlide.style.display = "none";
        nextSlide.style.display = "block";
        nextSlide.style.opacity = 1;
        slideIndex = nextIndex;
      }, 500); // Adjust the duration to match your transition time
    
      setTimeout(showSlides, 2000); // Change slide every 2 seconds
    }
    
    // Initialize the slideshow
    showSlides();
    </script>
    