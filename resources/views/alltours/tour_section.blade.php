<div class="container margin_60_35">
    <div class="col-lg-12">
        <div class="row g-0 custom-search-input-2 inner">
            <div class="col-lg-4">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="What are you looking for...">
                    <i class="icon_search"></i>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Where">
                    <i class="icon_pin_alt"></i>
                </div>
            </div>
            <div class="col-lg-3">
                <select class="wide">
                    <option>All Categories</option>
                    <option>Churches</option>
                    <option>Historic</option>
                    <option>Museums</option>
                    <option>Walking tours</option>
                </select>
            </div>
            <div class="col-lg-2">
                <input type="submit" class="btn_search" value="Search">
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /custom-search-input-2 -->

    <div class="isotope-wrapper">
        <div class="row">


            @foreach ($tours as $tour)
            <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                <div class="box_grid" data-cue="slideInUp">
                    <figure>
                        <a href="/tour-detail/{{$tour->id}}" class="wish_bt"></a>
                        <a href="/tour-detail/{{$tour->id}}">
                            <img src="{{ $tour->image_paths[0] }}" class="img-fluid" alt="{{ $tour->name }}" width="800" height="533">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>TOUR</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="/tour-detail/{{$tour->id}}">{{$tour->name}}</a></h3>
                        <p>{{$tour->subtitle}}</p>
                        <span class="price">From <strong>${{$tour->price}}</strong> /per person</span>
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 4 days</li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /box_grid -->
            @endforeach
        </div>
        <!-- /row -->
    </div>
    <!-- /isotope-wrapper -->


</div>