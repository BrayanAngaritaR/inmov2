{{-- https://codepen.io/blaurancin/pen/LYRoZzB --}}
@extends('templates.agencia-app.projects.app') @section('content')
<div class="content">
   <!-- Map -->
   <div class="map-container fw-map big_map">
      <div id="map-main"></div>
      <ul class="mapnavigation no-list-style">
         <li>
            <a href="#" class="prevmap-nav mapnavbtn">
               <span><i class="fas fa-caret-left"></i></span>
            </a>
         </li>
         <li>
            <a href="#" class="nextmap-nav mapnavbtn">
               <span><i class="fas fa-caret-right"></i></span>
            </a>
         </li>
      </ul>
      <div class="scrollContorl mapnavbtn tolt" data-microtip-position="top-left" data-tooltip="Enable Scrolling">
         <span><i class="fal fa-unlock"></i></span>
      </div>
      <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="Your location">
         <span><i class="fal fa-location"></i></span>
      </div>
      <div class="map-close"><i class="fas fa-times"></i></div>
   </div>
   <!-- Map end -->
   <!-- breadcrumbs-->
   <div class="breadcrumbs fw-breadcrumbs smpar fl-wrap">
      <div class="container">
         <div class="breadcrumbs-list">
         	<a href="#">Inicio</a>
         	<span>Propiedades</span>
         </div>
         <div class="share-holder sh_in2 hid-share">
            <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i> Compartir </a>
            <div class="share-container isShare"></div>
         </div>
         <div class="categoties-column_container inline-categories cat-list">
            <ul>
               <li>
                  <a href="#" class="act-category tolt" data-microtip-position="bottom" data-tooltip="Apartamentos"><i class="fal fa-city"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Oficinas"><i class="fal fa-car-building"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Casas"><i class="fal fa-home"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Hoteles"><i class="fal fa-hotel"></i> </a>
               </li>
               <li>
                  <a href="#" class="tolt" data-microtip-position="bottom" data-tooltip="Lotes"><i class="fal fa-warehouse-alt"></i></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- breadcrumbs end -->
   <!-- section -->
   <section class="gray-bg small-padding">
      <div class="container">
         <div class="row">
            <div class="mob-nav-content-btn color-bg show-list-wrap-search ntm fl-wrap">Show Filters</div>
            <!-- search sidebar-->
            <div class="col-md-4">
               <div class="fl-wrap lws_mobile">
                  <div class="list-searh-input-wrap-title fl-wrap"><i class="far fa-sliders-h"></i><span>Search Filters</span></div>
                  <div class="block-box fl-wrap search-sb" id="filters-column">
                     <!-- listsearch-input-item-->
                     <div class="listsearch-input-item">
                        <label>Status</label>
                        <select data-placeholder="Status" class="chosen-select on-radius no-search-select">
                           <option>Any Status</option>
                           <option>For Rent</option>
                           <option>For Sale</option>
                        </select>
                     </div>
                     <!-- listsearch-input-item end-->
                     <!-- listsearch-input-item -->
                     <div class="listsearch-input-item">
                        <label>Keywords</label>
                        <input type="text" onClick="this.select()" placeholder="Address , Street , State..." value="" />
                     </div>
                     <!-- listsearch-input-item end-->
                     <!-- listsearch-input-item -->
                     <div class="listsearch-input-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <label>Cities</label>
                              <select data-placeholder="All Cities" class="chosen-select on-radius no-search-select">
                                 <option>All Cities</option>
                                 <option>New York</option>
                                 <option>London</option>
                                 <option>Paris</option>
                                 <option>Kiev</option>
                                 <option>Moscow</option>
                                 <option>Dubai</option>
                                 <option>Rome</option>
                                 <option>Beijing</option>
                              </select>
                           </div>
                           <div class="col-sm-6">
                              <label>Categories</label>
                              <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
                                 <option>All Categories</option>
                                 <option>House</option>
                                 <option>Apartment</option>
                                 <option>Hotel</option>
                                 <option>Villa</option>
                                 <option>Office</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <!-- listsearch-input-item end-->
                     <!-- listsearch-input-item -->
                     <div class="listsearch-input-item">
                        <div class="price-rage-item fl-wrap">
                           <span class="pr_title">Price:</span>
                           <input type="text" class="price-range-double" data-min="100" data-max="100000" name="price-range2" data-step="100" value="1" data-prefix="$" />
                        </div>
                     </div>
                     <!-- listsearch-input-item end-->
                     <!-- listsearch-input-item -->
                     <div class="listsearch-input-item">
                        <div class="price-rage-item fl-wrap">
                           <span class="pr_title">Area:</span>
                           <input type="text" class="price-range-double" data-min="1" data-max="1000" name="price-range2" data-step="1" value="1" data-prefix="" />
                        </div>
                     </div>
                     <!-- listsearch-input-item end-->
                     <!-- listsearch-input-item -->
                     <div class="listsearch-input-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <label>Bedrooms</label>
                              <select data-placeholder="Bedrooms" class="chosen-select on-radius no-search-select">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                              </select>
                           </div>
                           <div class="col-sm-6">
                              <label>Bathrooms</label>
                              <select data-placeholder="Bathrooms" class="chosen-select on-radius no-search-select">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <!-- listsearch-input-item end-->
                     <!-- listsearch-input-item -->
                     <div class="listsearch-input-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <label>Floors</label>
                              <select data-placeholder="Bathrooms" class="chosen-select on-radius no-search-select">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                              </select>
                           </div>
                           <div class="col-sm-6">
                              <label>Property Id</label>
                              <input type="text" onClick="this.select()" placeholder="Id" value="" />
                           </div>
                        </div>
                     </div>
                     <!-- listsearch-input-item end-->
                     <!-- listsearch-input-item-->
                     <div class="listsearch-input-item">
                        <label>Amenities</label>
                        <div class="fl-wrap filter-tags">
                           <ul class="no-list-style">
                              <li>
                                 <input id="check-aa" type="checkbox" name="check" />
                                 <label for="check-aa">Elevator in building</label>
                              </li>
                              <li>
                                 <input id="check-b" type="checkbox" name="check" />
                                 <label for="check-b"> Laundry Room</label>
                              </li>
                              <li>
                                 <input id="check-c" type="checkbox" name="check" checked />
                                 <label for="check-c">Equipped Kitchen</label>
                              </li>
                              <li>
                                 <input id="check-d" type="checkbox" name="check" />
                                 <label for="check-d">Air Conditioned</label>
                              </li>
                              <li>
                                 <input id="check-d2" type="checkbox" name="check" checked />
                                 <label for="check-d2">Parking</label>
                              </li>
                              <li>
                                 <input id="check-d3" type="checkbox" name="check" checked />
                                 <label for="check-d3">Swimming Pool</label>
                              </li>
                              <li>
                                 <input id="check-d4" type="checkbox" name="check" />
                                 <label for="check-d4">Fitness Gym</label>
                              </li>
                              <li>
                                 <input id="check-d5" type="checkbox" name="check" />
                                 <label for="check-d5">Security</label>
                              </li>
                              <li>
                                 <input id="check-d6" type="checkbox" name="check" />
                                 <label for="check-d6">Garage Attached</label>
                              </li>
                              <li>
                                 <input id="check-d7" type="checkbox" name="check" />
                                 <label for="check-d7">Back yard</label>
                              </li>
                              <li>
                                 <input id="check-d8" type="checkbox" name="check" />
                                 <label for="check-d8">Fireplace</label>
                              </li>
                              <li>
                                 <input id="check-d9" type="checkbox" name="check" />
                                 <label for="check-d9">Window Covering</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- listsearch-input-item end-->
                     <div class="msotw_footer">
                        <a href="#" class="btn small-btn float-btn color-bg">Search</a>
                        <div class="reset-form reset-btn"><i class="far fa-sync-alt"></i> Reset Filters</div>
                     </div>
                  </div>
                  <a class="back-tofilters color-bg custom-scroll-link fl-wrap scroll-to-fixed-fixed" href="#filters-column">Back to filters <i class="fas fa-caret-up"></i></a>
               </div>
            </div>
            <!-- search sidebar end-->
            <div class="col-md-8">
               <!-- list-main-wrap-header-->
               <div class="list-main-wrap-header box-list-header fl-wrap">
                  <!-- list-main-wrap-title-->
                  <div class="list-main-wrap-title">
                     <h2>Results For : <span>New York </span><strong>8</strong></h2>
                  </div>
                  <!-- list-main-wrap-title end-->
                  <!-- list-main-wrap-opt-->
                  <div class="list-main-wrap-opt">
                     <!-- price-opt-->
                     <div class="price-opt">
                        <span class="price-opt-title">Sort by:</span>
                        <div class="listsearch-input-item">
                           <select data-placeholder="Popularity" class="chosen-select no-search-select">
                              <option>Popularity</option>
                              <option>Average rating</option>
                              <option>Price: low to high</option>
                              <option>Price: high to low</option>
                           </select>
                        </div>
                     </div>
                     <!-- price-opt end-->
                     <!-- price-opt-->
                     <div class="grid-opt">
                        <ul class="no-list-style">
                           <li class="grid-opt_act">
                              <span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="far fa-th"></i></span>
                           </li>
                           <li class="grid-opt_act">
                              <span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="far fa-list"></i></span>
                           </li>
                        </ul>
                     </div>
                     <!-- price-opt end-->
                  </div>
                  <!-- list-main-wrap-opt end-->
               </div>
               <!-- list-main-wrap-header end-->
               <!-- listing-item-wrap-->
               <div class="listing-item-container box-list_ic fl-wrap">
                  <!-- listing-item -->
                  <div class="listing-item">
                     <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img fl-wrap">
                           <a href="listing-single.html" class="geodir-category-img_item">
                              <img src="images/all/1.jpg" alt="" />
                              <div class="overlay"></div>
                           </a>
                           <div class="geodir-category-location">
                              <a href="#1" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA</a>
                           </div>
                           <ul class="list-single-opt_header_cat">
                              <li><a href="#" class="cat-opt blue-bg">Sale</a></li>
                              <li><a href="#" class="cat-opt color-bg">Apartment</a></li>
                           </ul>
                           <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                              <span><i class="fal fa-heart"></i></span>
                           </a>
                           <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                              <span><i class="fal fa-random"></i></span>
                           </a>
                           <div class="geodir-category-listing_media-list">
                              <span><i class="fas fa-camera"></i> 8</span>
                           </div>
                        </div>
                        <div class="geodir-category-content fl-wrap">
                           <h3><a href="listing-single.html">Gorgeous house for sale</a></h3>
                           <div class="geodir-category-content_price">$ 600,000</div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                           <div class="geodir-category-content-details">
                              <ul>
                                 <li><i class="fal fa-bed"></i><span>3</span></li>
                                 <li><i class="fal fa-bath"></i><span>2</span></li>
                                 <li><i class="fal fa-cube"></i><span>450 ft2</span></li>
                              </ul>
                           </div>
                           <div class="geodir-category-footer fl-wrap">
                              <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt="" /><span>By Liza Rose</span></a>
                              <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="top" data-tooltip="Good" data-starrating2="4"></div>
                           </div>
                        </div>
                     </article>
                  </div>
                  <!-- listing-item end-->
                  <!-- listing-item -->
                  <div class="listing-item">
                     <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img fl-wrap">
                           <a href="listing-single.html" class="geodir-category-img_item">
                              <img src="images/all/1.jpg" alt="" />
                              <div class="overlay"></div>
                           </a>
                           <div class="geodir-category-location">
                              <a href="#2" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> 40 Journal Square , NJ, USA</a>
                           </div>
                           <ul class="list-single-opt_header_cat">
                              <li><a href="#" class="cat-opt blue-bg">Sale</a></li>
                              <li><a href="#" class="cat-opt color-bg">Apartment</a></li>
                           </ul>
                           <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                              <span><i class="fal fa-heart"></i></span>
                           </a>
                           <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                              <span><i class="fal fa-random"></i></span>
                           </a>
                           <div class="geodir-category-listing_media-list">
                              <span><i class="fas fa-camera"></i> 47</span>
                           </div>
                        </div>
                        <div class="geodir-category-content fl-wrap">
                           <h3><a href="listing-single.html">Luxury Family Home</a></h3>
                           <div class="geodir-category-content_price">$ 320,000</div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                           <div class="geodir-category-content-details">
                              <ul>
                                 <li><i class="fal fa-bed"></i><span>4</span></li>
                                 <li><i class="fal fa-bath"></i><span>2</span></li>
                                 <li><i class="fal fa-cube"></i><span>460 ft2</span></li>
                              </ul>
                           </div>
                           <div class="geodir-category-footer fl-wrap">
                              <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt="" /><span>By Anna Lips</span></a>
                              <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="top" data-tooltip="Excellent" data-starrating2="5"></div>
                           </div>
                        </div>
                     </article>
                  </div>
                  <!-- listing-item end-->
                  <!-- listing-item -->
                  <div class="listing-item">
                     <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img fl-wrap">
                           <a href="listing-single.html" class="geodir-category-img_item">
                              <img src="images/all/1.jpg" alt="" />
                              <div class="overlay"></div>
                           </a>
                           <div class="geodir-category-location">
                              <a href="#3" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a>
                           </div>
                           <ul class="list-single-opt_header_cat">
                              <li><a href="#" class="cat-opt blue-bg">Rent</a></li>
                              <li><a href="#" class="cat-opt color-bg">House</a></li>
                           </ul>
                           <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                              <span><i class="fal fa-heart"></i></span>
                           </a>
                           <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                              <span><i class="fal fa-random"></i></span>
                           </a>
                           <div class="geodir-category-listing_media-list">
                              <span><i class="fas fa-camera"></i> 4</span>
                           </div>
                        </div>
                        <div class="geodir-category-content fl-wrap">
                           <h3><a href="listing-single.html">Family house for Rent</a></h3>
                           <div class="geodir-category-content_price">$ 700 / per month</div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                           <div class="geodir-category-content-details">
                              <ul>
                                 <li><i class="fal fa-bed"></i><span>2</span></li>
                                 <li><i class="fal fa-bath"></i><span>1</span></li>
                                 <li><i class="fal fa-cube"></i><span>220 ft2</span></li>
                              </ul>
                           </div>
                           <div class="geodir-category-footer fl-wrap">
                              <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt="" /><span>By Mark Frosty</span></a>
                              <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="top" data-tooltip="Good" data-starrating2="4"></div>
                           </div>
                        </div>
                     </article>
                  </div>
                  <!-- listing-item end-->
                  <!-- listing-item -->
                  <div class="listing-item">
                     <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img fl-wrap">
                           <a href="listing-single.html" class="geodir-category-img_item">
                              <img src="images/all/1.jpg" alt="" />
                              <div class="overlay"></div>
                           </a>
                           <div class="geodir-category-location">
                              <a href="#4" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA </a>
                           </div>
                           <ul class="list-single-opt_header_cat">
                              <li><a href="#" class="cat-opt blue-bg">Sale</a></li>
                              <li><a href="#" class="cat-opt color-bg">Apartment</a></li>
                           </ul>
                           <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                              <span><i class="fal fa-heart"></i></span>
                           </a>
                           <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                              <span><i class="fal fa-random"></i></span>
                           </a>
                           <div class="geodir-category-listing_media-list">
                              <span><i class="fas fa-camera"></i> 13</span>
                           </div>
                        </div>
                        <div class="geodir-category-content fl-wrap">
                           <h3><a href="listing-single.html">Contemporary Apartment</a></h3>
                           <div class="geodir-category-content_price">$ 1,600,000</div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                           <div class="geodir-category-content-details">
                              <ul>
                                 <li><i class="fal fa-bed"></i><span>4</span></li>
                                 <li><i class="fal fa-bath"></i><span>1</span></li>
                                 <li><i class="fal fa-cube"></i><span>550 ft2</span></li>
                              </ul>
                           </div>
                           <div class="geodir-category-footer fl-wrap">
                              <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt="" /><span>By Bill Trust</span></a>
                              <div
                                 class="listing-rating card-popup-rainingvis tolt"
                                 data-microtip-position="top"
                                 data-tooltip="Excellent
                                                "
                                 data-starrating2="5"
                              ></div>
                           </div>
                        </div>
                     </article>
                  </div>
                  <!-- listing-item end-->
                  <!-- listing-item -->
                  <div class="listing-item">
                     <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img fl-wrap">
                           <a href="listing-single.html" class="geodir-category-img_item">
                              <img src="images/all/1.jpg" alt="" />
                              <div class="overlay"></div>
                           </a>
                           <div class="geodir-category-location">
                              <a href="#5" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>
                           </div>
                           <ul class="list-single-opt_header_cat">
                              <li><a href="#" class="cat-opt blue-bg">Sale</a></li>
                              <li><a href="#" class="cat-opt color-bg">Villa</a></li>
                           </ul>
                           <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                              <span><i class="fal fa-heart"></i></span>
                           </a>
                           <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                              <span><i class="fal fa-random"></i></span>
                           </a>
                           <div class="geodir-category-listing_media-list">
                              <span><i class="fas fa-camera"></i> 12</span>
                           </div>
                        </div>
                        <div class="geodir-category-content fl-wrap">
                           <h3><a href="listing-single.html">Kayak Point House</a></h3>
                           <div class="geodir-category-content_price">$ 500.000</div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                           <div class="geodir-category-content-details">
                              <ul>
                                 <li><i class="fal fa-bed"></i><span>5</span></li>
                                 <li><i class="fal fa-bath"></i><span>1</span></li>
                                 <li><i class="fal fa-cube"></i><span>510 ft2</span></li>
                              </ul>
                           </div>
                           <div class="geodir-category-footer fl-wrap">
                              <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt="" /><span>By Andy Sposty</span></a>
                              <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="top" data-tooltip="Average" data-starrating2="3"></div>
                           </div>
                        </div>
                     </article>
                  </div>
                  <!-- listing-item end-->
                  <!-- listing-item -->
                  <div class="listing-item">
                     <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img fl-wrap">
                           <a href="listing-single.html" class="geodir-category-img_item">
                              <img src="images/all/1.jpg" alt="" />
                              <div class="overlay"></div>
                           </a>
                           <div class="geodir-category-location">
                              <a href="#6" class="map-item scroll-top-map tolt" data-microtip-position="top-left" data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i> 70 Bright St, Jersey City, NJ USA</a>
                           </div>
                           <ul class="list-single-opt_header_cat">
                              <li><a href="#" class="cat-opt blue-bg">Rent</a></li>
                              <li><a href="#" class="cat-opt color-bg">Apartment</a></li>
                           </ul>
                           <a href="#" class="geodir_save-btn tolt" data-microtip-position="left" data-tooltip="Save">
                              <span><i class="fal fa-heart"></i></span>
                           </a>
                           <a href="#" class="compare-btn tolt" data-microtip-position="left" data-tooltip="Compare">
                              <span><i class="fal fa-random"></i></span>
                           </a>
                           <div class="geodir-category-listing_media-list">
                              <span><i class="fas fa-camera"></i> 21</span>
                           </div>
                        </div>
                        <div class="geodir-category-content fl-wrap">
                           <h3><a href="listing-single.html">Urban House</a></h3>
                           <div class="geodir-category-content_price">1500 / per month</div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                           <div class="geodir-category-content-details">
                              <ul>
                                 <li><i class="fal fa-bed"></i><span>5</span></li>
                                 <li><i class="fal fa-bath"></i><span>3</span></li>
                                 <li><i class="fal fa-cube"></i><span>1210 ft2</span></li>
                              </ul>
                           </div>
                           <div class="geodir-category-footer fl-wrap">
                              <a href="agent-single.html" class="gcf-company"><img src="images/avatar/1.jpg" alt="" /><span>By Liza Kobart</span></a>
                              <div
                                 class="listing-rating card-popup-rainingvis tolt"
                                 data-microtip-position="top"
                                 data-tooltip="Excellent
                                                "
                                 data-starrating2="5"
                              ></div>
                           </div>
                        </div>
                     </article>
                  </div>
                  <!-- listing-item end-->
               </div>
               <!-- listing-item-wrap end-->
               <!-- pagination-->
               <div class="pagination">
                  <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                  <a href="#">1</a>
                  <a href="#" class="current-page">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
               </div>
               <!-- pagination end-->
            </div>
            <!-- col-md 8 end -->
         </div>
      </div>
   </section>
   <div class="limit-box fl-wrap"></div>
</div>
@stop

