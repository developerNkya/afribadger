<div class="grid-container">
    @foreach ($national_parks as $index => $tour)
    <div
    class="wp-block-group container_78f648086c0a is-layout-flow wp-block-group-is-layout-flow"
  >
    <div
      class="wp-block-group container_79f5e12f2529 is-layout-flow wp-block-group-is-layout-flow"
    >
      <div
        class="wp-block-group container_f2683dbcc308 is-layout-flow wp-block-group-is-layout-flow"
      >
        <div
          class="wp-block-spacer"
          style="height: 0px"
          aria-hidden="true"
        ></div>
      </div>

      <div
        class="wp-block-group container_5c6fab2b8014 is-layout-flow wp-block-group-is-layout-flow"
      >
        <div
          class="wp-block-group container_36336854db70 is-layout-flow wp-block-group-is-layout-flow"
        >
          <p
            class="text_a8febd9c1c0f has-text-color has-background has-text-align-left"
            style="
              text-transform: none;
              font-style: normal;
              font-size: 15.5px;
              font-weight: 500;
              letter-spacing: -0.5px;
              color: #1a1a1a99;
              background-color: transparent;
            "
          >
          {{ $tour->days }} Days
          </p>

          <h3
            class="text_0c4ee6b1abd6 has-text-color has-background has-text-align-left wp-block-heading"
            style="
              text-transform: none;
              font-style: normal;
              font-size: 23.5px;
              font-weight: 600;
              letter-spacing: -0.5px;
              color: #26461d;
              background-color: transparent;
            "
          >
          {{ $tour->title }}
          </h3>
        </div>

        <div
          class="wp-block-group container_46ac84707136 is-layout-flow wp-block-group-is-layout-flow"
        >
          <div
            class="wp-block-spacer"
            style="height: 0px"
            aria-hidden="true"
          ></div>
        </div>

        <div
          class="wp-block-group container_b6c9bd465828 is-layout-flow wp-block-group-is-layout-flow"
        >
          <div
            class="wp-block-group container_461f7766e98a is-layout-flow wp-block-group-is-layout-flow"
          >
            <p
              class="text_f968f3908dd2 has-text-color has-background has-text-align-left"
              style="
                text-transform: none;
                font-style: normal;
                font-size: 15.5px;
                font-weight: 500;
                letter-spacing: -0.5px;
                color: #0000008a;
                background-color: transparent;
              "
            >
              $3900
            </p>

            <h2
              class="text_cc5302f39554 has-text-color has-background has-text-align-left wp-block-heading"
              style="
                text-transform: none;
                font-style: normal;
                font-size: 35.5px;
                font-weight: 600;
                letter-spacing: -0.5px;
                color: #26461d;
                background-color: transparent;
              "
            >
            ${{ $tour->amount }}
            </h2>

            <div
              class="wp-block-group container_ac8eb1555726 is-layout-flow wp-block-group-is-layout-flow"
            >
              <div
                class="wp-block-spacer"
                style="height: 0px"
                aria-hidden="true"
              ></div>
            </div>
          </div>

          <div
            class="wp-block-yotako-block-anchor button_07def8d5b44f"
          >
            <a
              href="View_Tour/index.html"
              class="button_link_07def8d5b44f"
              target="_self"
              rel="noopener"
            >
              <p
                class="text_f9b7dfe52d2d has-text-color has-background has-text-align-left"
                style="
                  text-transform: none;
                  font-style: normal;
                  font-size: 15.5px;
                  font-weight: 600;
                  letter-spacing: -0.5px;
                  color: #26461d;
                  background-color: transparent;
                "
              >
                View More
              </p>

              <figure
                class="imageview_0e1f3ee1b8e2 wp-block-image"
              >
                <img
                  decoding="async"
                  src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/I507:2168;405:837;221:315.svg"
                />
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>

    <figure class="imageview_6962fab1119c wp-block-image">
      <img
        decoding="async"
        src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/507:2169.webp"
      />
    </figure>
  </div>
    @endforeach
</div>

<!-- pagination -->
<div class="tour-links" style="top:100px;left:260px">
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($national_parks->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $national_parks->previousPageUrl() }}">Previous</a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($national_parks->links()->elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="page-item disabled">
                <a class="page-link" href="#">{{ $element }}</a>
            </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $national_parks->currentPage())
            <li class="page-item active">
                <a class="page-link" href="#">{{ $page }}</a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
            @endif
            @endforeach
            @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($national_parks->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $national_parks->nextPageUrl() }}">Next</a>
            </li>
            @else
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Next</a>
            </li>
            @endif
        </ul>
</div>

<!-- banner image -->
                       <figure class="imageview_5072149b035e wp-block-image">
                            <img decoding="async"
                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3137.webp" />
                        </figure>

<div class="medium-footer">
  
                        <div
                            class="wp-block-group container_39550c757905 is-layout-flow wp-block-group-is-layout-flow">
                            <div
                                class="wp-block-group container_c8a11a7e03ed is-layout-flow wp-block-group-is-layout-flow">
                                <div
                                    class="wp-block-group container_bfb9b8685d68 is-layout-flow wp-block-group-is-layout-flow">
                                    <div
                                        class="wp-block-group container_571af1729c1c is-layout-flow wp-block-group-is-layout-flow">
                                        <figure class="imageview_2f1a36e1593e wp-block-image">
                                            <img decoding="async"
                                                src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/414:3142.svg" />
                                        </figure>

                                        <p class="text_654272eb8b22 has-text-color has-background has-text-align-left"
                                            style="
                          text-transform: none;
                          font-style: normal;
                          font-size: 15.5px;
                          font-weight: 500;
                          letter-spacing: -0.5px;
                          color: #000000;
                          background-color: transparent;
                        ">
                                            Camel Leon Safaris Ltd. was born out of a love for the
                                            idea of adapting to various environments, mirroring the
                                            chameleon&apos;s ability. Our founders wanted to share
                                            this experience with people in the wilds of Africa,
                                            highlighting the beauty of nature when one immerses and
                                            adapts to it.
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="wp-block-group container_fbba48ffa871 is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_22b7df1669c4 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Travel Tips
                                    </p>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/tanzania-entry-requirements/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_e5f7a231efb7 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Entry Requirements
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/tanzania-safari-planning-guide-2/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_1f7d6ab90706 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Tanzania Safari Planning Guide
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/best-time-to-visit-tanzania/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_c30c094f1744 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Best time to visit Tanzania
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/kilimanjaro-climbing-guide/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_882bec1a183c has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Kilimanjaro Planning Guide
                                            </p>
                                        </a>
                                    </div>

                                    <div class="wp-block-yotako-block-anchor">
                                        <a href="https://serengeticlarity.com/drones-photography-guidelines/"
                                            class="" target="_self" rel="noopener">
                                            <p class="text_25c147501593 has-text-color has-background has-text-align-left"
                                                style="
                            text-transform: none;
                            font-style: normal;
                            font-size: 15.5px;
                            font-weight: 500;
                            text-decoration: underline;
                            letter-spacing: -0.5px;
                            color: #808080;
                            background-color: transparent;
                          ">
                                                Drones &#038; Photography Guide
                                            </p>
                                        </a>
                                    </div>
                                    <p class="text_95e2ee1d127e has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Tipping Guide
                                    </p>
                                </div>

                                <div
                                    class="wp-block-group container_d06721a1562b is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_5400236ae562 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Camelleon Safaris
                                    </p>

                                    <p class="text_826370a02777 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        About US
                                    </p>

                                    <p class="text_95b116f9bfd8 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Terms And Cionditions
                                    </p>

                                    <p class="text_150fb267f618 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Booking Process
                                    </p>

                                    <p class="text_ee5c1702f9f4 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Payment Details
                                    </p>

                                    <p class="text_87245e8587f3 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Privacy Policy
                                    </p>
                                </div>

                                <div
                                    class="wp-block-group container_cb8848659ba9 is-layout-flow wp-block-group-is-layout-flow">
                                    <p class="text_05d1e98e737e has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 900;
                        letter-spacing: -0.5px;
                        color: #000000;
                        background-color: transparent;
                      ">
                                        Contact Information
                                    </p>

                                    <p class="text_ce401fb904b2 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        Sales &#038; Safari Expert
                                    </p>

                                    <p class="text_f70e70f34048 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 17.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        +25568 655 5755
                                    </p>

                                    <p class="text_ba625137f4d4 has-text-color has-background has-text-align-left"
                                        style="
                        text-transform: none;
                        font-style: normal;
                        font-size: 15.5px;
                        font-weight: 500;
                        letter-spacing: -0.5px;
                        color: #808080;
                        background-color: transparent;
                      ">
                                        info@camelleonsafaris.com
                                    </p>
                                </div>
                            </div>
                        </div>


                           <div
                            class="wp-block-group container_f5381a2b60c6 is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                        </div>

</div>