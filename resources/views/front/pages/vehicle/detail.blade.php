<x-front.master-layout>
    <main>
        <div class="section">
          <div class="row row--g-10">
            <div class="col-12 col-lg-7 col-xl-7 col-xxl-5 offset-xxl-1">
                <header>
                    <div class="headline-wave">
                        <h1 class="headline-2">{{$objVehicle->name}}</h1> <svg width="100px" height="16px"
                            class="stroke-blurple">
                            <use xlink:href="images/icons.svg#icon-wave-squiggle"></use>
                        </svg>
                    </div>
                    <div class="content mt-10em">
                        <p>{{$objVehicle->description}}</p>
                    </div>
                </header>
                <div class="video-images">
                    <figure class="video-images__left-img">
                        <picture>
                                <img class=" "
                                src="{{ asset('admin/uploads/vehicle/' . $objVehicle->image)}}"
                                alt="">
                        </picture>
                    </figure>
                    <figure class="video-images__main-img">
                            <picture>
                                <img class=" "
                                    src="{{ asset('admin/uploads/vehicle/' . $objVehicle->banner_img)}}"
                                    alt="">
                            </picture> 
                            </figure>
                    <figure class="video-images__right-img">
                        <picture>
                            <img class=" "
                                src="{{ asset('admin/uploads/vehicle/' . $objVehicle->image)}}"
                                alt="">
                        </picture>
                    </figure>
                </div>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="list-icon-wrapper">
                            <ul class="list-icon list-icon--tick">
                                @foreach($includes as $value)
                                <li>{{$value->title}}</li>
                                @endforeach
                            </ul>
                            <ul class="list-icon list-icon--cross">
                                @foreach($notIncludes as $value)
                                <li>{{$value->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                  
                    <div class="col-md-8">
                        <blockquote class="blockquote blockquote--margin-sm blockquote--blurple">
                            <ul
                            class="list-tour-info list-tour-info--two-cols"
                          >
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-baby-face-outline')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Min Age</b> <span>{{$objVehicle->tour->min_age}}Yrs</span>
                              </div>
                            </li>
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-map')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Pickup & Drop off</b> <span>{{$objVehicle->tour->pickup_and_drop}}</span>
                              </div>
                            </li>
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-calendar-range')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Ride Duration</b> 
                                @foreach($times as $value)
                                <span>{{$value->time}}@if($value->type == 'Minutes'){{ 'Mins'}} @else {{'Hours'}} @endif</span>
                                @endforeach
                              </div>
                            </li>
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-star')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Convoy Leader</b> <span>{{$objVehicle->tour->convoy_leader}}</span>
                              </div>
                            </li>
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-account')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Tour Guide</b> <span>{{$objVehicle->tour->tour_guide}}</span>
                              </div>
                            </li>
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-account')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Safety Gears</b>
                                @foreach($saftyGears as $value)
                                <span>{{$value->title}}</span>
                                @endforeach
                                
                              </div>
                            </li>
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-silverware-fork-knife')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Refreshments</b>
                                @foreach($refreshments as $value)
                                <span>{{$value->title}}</span>
                                @endforeach
                              </div>
                            </li>
                            <li class="list-tour-info__item">
                                <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-calendar-range')}}">
                                    </use>
                                </svg>
                              <div class="list-tour-info__item-desc">
                                <b>Available Everyday</b> <span>Sunrise to Sunset</span>
                              </div>
                            </li>
                          </ul>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-5 col-xxl-4 offset-xxl-1">
              <div class="mb-30em  card card--shadow-purple bg-purple animated fadeInUp active">
                <div class="card__content">
                    <div class="headline-wave">
                        <h3 class="headline-4">Price</h3> <svg width="100px"
                            height="16px" class="stroke-blurple">
                            <use xlink:href="images/icons.svg#icon-wave-squiggle" />
                        </svg>
                        <h3 style="color:yellow">@if(isset($objVehicle->discount)){{$objVehicle->discount}}% Off @endif</h3>
                    </div>
                    <ul class="list-icon list-icon--tick list-1-cols list-mobile-limit js-limit-list">
                        @foreach($objVehicle->prices as $value)
                        <li>{{$value->time}} Mins Ride :@if(isset($objVehicle->discount))<del style="color:red">{{$value->amount}} AED</del> @endif @if(isset($objVehicle->discount)) {{$value->amount - ($value->amount * ($objVehicle->discount / 100))}}@endif AED</li>
                        @endforeach
                        @if(isset($safariPrice))
                        <li>{{$safariPrice->amount}} AED</li>
                        @endif
                    </ul>
                    </div>
                </div>
              <div class="mb-30em   animated fadeInUp active">
                <div class="card card--shadow-blurple  " >
                  <div class="card__content">
                    <div class="card__headline card__headline--with-price">
                      <div class="headline-wave">
                        <h2 class="headline-3" id="button_drpd" style="cursor: pointer;">Must know Befor You Book</h2> <svg  height="16px"
                          class="stroke-orange">
                          <use xlink:href="/images/icons.svg#icon-wave-squiggle"></use>
                        </svg>
                        <script>
                        let btn= document.getElementById('button_drpd');
                        btn.onclick =  funtion = () =>   {
                        let demo_content = document.getElementById('cnt');
                        let cntn = demo_content.style.display;
                        cntn = "none";         
                        demo_content.style.display == "none" ? demo_content.style.display = "block" : demo_content.style.display = "none"}
                        </script>
                      </div>                       
                    </div>
                    <div class="list-icon-wrapper" id="cnt" style="display:none;">
                      <ul class="list-icon list-icon--tick">
                        @foreach($mustKnows as $value)
                        <li>{{$value->title}}</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-30em   animated fadeInUp active">
                <div class="card card--shadow-blue  " >
                  <div class="card__content">
                    <div class="card__headline card__headline--with-price">
                      <div class="headline-wave">
                        <h2 class="headline-3" id="button_drpd3" style="cursor: pointer;">Tour Itenary</h2> <svg  height="16px"
                          class="stroke-orange">
                          <use xlink:href="/images/icons.svg#icon-wave-squiggle"></use>
                        </svg>
                        <script>
                        let btn3= document.getElementById('button_drpd3');
                        btn3.onclick =  funtion = () =>   {
                
                        let demo_content3 = document.getElementById('cnt3');
                        let cntn3 = demo_content3.style.display;
                        cntn3 = "none";         
                        demo_content3.style.display == "none" ? demo_content3.style.display = "block" : demo_content3.style.display = "none"    }
                        </script>
                      </div>                        
                    </div>
                    <div class="list-icon-wrapper" id="cnt3" style="display:none;">
                      <p class="content mt-10em mb-10em">
                        <p>{!! $objVehicle->tour_itenary !!}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-30em animated fadeInUp active">
                <div class="card card--shadow-orange" >
                  <div class="card__content">
                    <div class="card__headline card__headline--with-price">
                      <div class="headline-wave">
                        <h2 class="headline-3" id="button_drpd2" style="cursor: pointer;">Additional Info</h2> <svg  height="16px"
                          class="stroke-orange">
                          <use xlink:href="/images/icons.svg#icon-wave-squiggle"></use>
                        </svg>
                        <script>
                        let btnn= document.getElementById('button_drpd2');
                        btnn.onclick =  funtion = () =>   {
                        let demo_content = document.getElementById('cnt2');
                        let cnt = demo_content.style.display;
                       cnt = "none";         
                        demo_content.style.display == "none" ? demo_content.style.display = "block" : demo_content.style.display = "none" }
                        </script>
                      </div>
                    </div>
                    <div class="cntnt" id="cnt2" style="display:none;">
                      <div class="list-icon-wrapper">
                        <ul class="list-icon list-icon--tick">
                            @foreach($addInfos as $value)
                            <li>{{$value->title}}</li>
                            @endforeach
                        </ul>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
              
              <!-- <a class="btn btn--purple mt-10em" href="#sect" title="View Tour Dates"> Next </a> -->
              <!-- <a class="btn btn--purple mt-10em" href="{{url('gallary/'.$objVehicle->random_id)}}" title="View Tour Gallary">View Gallary </a> -->
            
            </div>
          </div>
        </div>
        @if($objVehicle->type != 'Safari')
<!--- Gallary slides -->
        <div class=" tab-box-content tab-box-content--active bg-blue border-img-top border-img-top--blue border-img-bottom border-img-bottom--blue js-tabContent " data-content="tab-2">
          <section class="border-img-top border-img-top--orange border-img-bottom border-img-bottom--orange border-img-top--hide-on-mobile ">
            <div class="toggle-wrapper toggle-wrapper__tour-gallery"> <label class="toggle" for="gallery-toggle">
                 <span><h2 class="headline-2"> Gallery </h2></span> </label> </div>
            <div class="tour-gallery tour-gallery--orange pt-0em" data-gallery-active-category="activities">
              <div class="tour-gallery__inner" data-gallery-content-category="activities">
                <div class="tour-gallery__images js-gallery-images" data-gallery-day="1" data-gallery-category="activities">
                  <figure class="tour-gallery__preview-wrapper"> 
                    <a href="" class="js-popup" title="">
                        <img class="tour-gallery__preview-ratio js-gallery-preview lazy loaded" data-src="" alt="" src="{{ asset('admin/uploads/gallry_images/'.$singleImglry->gallry_images) }}" data-was-processed="true"> 
                    </a>
                    <div>
                      <figcaption class=" tour-gallery__preview-caption  tour-gallery__preview-caption--empty  js-gallery-description ">
                      </figcaption>
                    </div>
                  </figure>
                  <ul class="tour-gallery__image-list" data-id="galleryList">
                    @foreach($objVehicle->gallery as $key => $images)
                    <li class="tour-gallery__image-list-item"> 
                        <button type="button" class="js-thumb-button tour-gallery__image-list-button {{ $loop->first ? 'active' : '' }}" onclick="App.updatePreview(this, 'activities', 1);" data-description="" data-popup-img-url="{{ asset('admin/uploads/gallry_images/'.$images['gallry_images']) }}">
                            <img class="tour-gallery__image-list-thumb rotate-left lazy loaded" data-src="{{ asset('admin/uploads/gallry_images/'.$images['gallry_images']) }}" alt="" src="{{ asset('admin/uploads/gallry_images/'.$images['gallry_images']) }}" data-was-processed="true"> 
                        </button> 
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </section>
           <!-- <p class="text-center"> <a class="btn btn--black" href="/book-a-Duen buggy tours-tour?country=Vietnam"> View More </a> </p>  -->
        </div>
<!--- End -->
      @endif
     <div class="section" id="sect">
     <form method="POST" id="cartItems">
       @csrf
       <input type="hidden" name="id" value="{{$objVehicle->random_id}}">
          <div class="row row--g-10">
            <div class="col-12 col-lg-6 col-xxl-5 col-xl-5  col-sm-12" 
              data-gtm-vis-recent-on-screen-30257650_40="769" data-gtm-vis-first-on-screen-30257650_40="769"
              data-gtm-vis-total-visible-time-30257650_40="100" data-gtm-vis-has-fired-30257650_40="1">

                     
                    <div class="dates picker card--shadow-orange">
                    <div id="bookingHeading">
                    <h1>Select Pickup Date</h1>
                    </div>
                      <!-- calander -->
                      <div id="container" style="margin: 10px 0 15px 0; height: 255px; position: relative"></div>

                      <div class="well">
                            <div class="row">
                             <div class="col-sm-12 pt-2">
                                <h1> Select Pickup Time </h1>
                                <div style="overflow-x:auto;">
                                <table id="times">
                                  <tbody>
                                    <tr>
                                    <td value="1">11 Am</td>
                                    <td value="1">11 Am</td>
                                    <td value="1">11 Am</td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                              </div>
                            <div class="col-sm-6">
                              <label>Date</label>
                            <input id="datepicker" type="text" name="bookingDate" class="form-control filled" data-zdp_readonly_element="false"></div>
                            <div class="col-sm-6">
                              <label>Time</label>
                            @if($objVehicle->type != 'Safari')
                            <input id="slctAvTime" type="text" name="time" class="form-control filled" value="" readonly>
                            @endif
                            @if($objVehicle->type === 'Safari')
                            <input id="slctAvTime" type="text" name="time" class="form-control filled" value="{{$objVehicle->pickup_time}}" readonly>
                            @endif
                            </div>
                          </div>
                      </div>
                      <!-- end -->
                     </div>
                    </div>
            <div class="col-12 col-lg-6 col-xl-7 col-xxl-5  col-sm-12" data-gtm-vis-recent-on-screen-30257650_40="769"
              data-gtm-vis-first-on-screen-30257650_40="769" data-gtm-vis-total-visible-time-30257650_40="100"
              data-gtm-vis-has-fired-30257650_40="1">
              <div class="mb-30em animated fadeInUp active " id="duration">
                <div class="card card--shadow-orange">
                  <div class="card__content">
                    <div class="card__headline card__headline--with-price">
                      <div class="card__headline-left headline-wave">
                        <h2 class="headline-3">{{$objVehicle->name}}</h2> <svg  height="16px"
                          class="stroke-orange">
                          <use xlink:href="#icon-wave-squiggle"></use>
                        </svg>
                      </div>
                      <div class="card__headline-price-wrapper">
                      </div>
                    </div>
                    <div class="content mt-10em mb-10em">
                      <!-- <p>{{$objVehicle->description}}</p> -->
                    </div>
                    @if($objVehicle->type == 'Safari')
                    <div>
                      <h5>Amount</h5>
                      @if(isset($safariPrice))
                        <p  >{{$safariPrice->amount}} AED</p>
                        <input type="hidden"  name ="totalPrice" value="{{$safariPrice->amount}}">
                      @endif
                      <button type="button" id="sub" class="sub">-</button>
                        <input style="width:40px" name="qnty" class="qntyPrce"type="number" id="1" value="1" min="1" max="10" />
                        <button type="button" id="add" class="add">+</button>
                    </div>
                    @endif
                    @if($objVehicle->type != 'Safari')
                    <table class="list-tour-info list-tour-info--two-cols">
                    <tr>
                        <th>Duration</th>
                        <th>Amount</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                    </tr>
                      <tr>
                        <td style="width:25%;">
                          <div class="form__row">
                            <div class="form__row__left">
                              <div class="form__group"> 
                                <select class="" id="timeSelect">
                                  @foreach($objVehicle->prices as $value)  
                                  <option value="@if(isset($dealsDiscount)) {{$value->amount - ($value->amount * ($dealsDiscount / 100))}}@else{{$value->amount}}@endif">{{$value->time}} Min</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td id="slctPrice" style="width:25%"></td>
                        <td class="qntityBtn" style="width:25%">
                        <button type="button" id="sub" class="sub">-</button>
                        <input style="width:40px" name="qnty" class="qntyPrce"type="number" id="1" value="1" min="1" max="10" />
                        <button type="button" id="add" class="add">+</button>
                        </td>
                        <td style="width:25%"><input name="totalPrice" value="" id="totaltourAmt" readonly></td>
                      </tr>
                    </table>                 
                    @endif
                    </li>
                    </ul>
                    </table>
                    
                    <h1 style="font-size: 1.75rem">  Extra Activities</h1>
                    <table>
                        @foreach($extraActivitys as $key => $value)
                      <tr>
                        <td><strong class="mb-20em" name="etraname">{{$value->title}}</strong></td>
                        <td><label class="switch">
                          <input id ="checkBox{{$key+1}}" type="checkbox" name="extra_price[]" value="{{$value->id}}" class="checkBoxId">
                          <span class="slider round"></span>
                      </label></td>
                      <!-- <td style="display: none;" class="checkboxQntity qntityBtn"><button type="button" id="sub" class="sub">-</button>
                        <input style="width:40px" name="qnty" class="qntyPrce"type="number" id="1" value="1" min="1" max="10" />
                        <button type="button" id="add" class="add">+</button></td> -->
                      <td id="extraAcPrice"><strong class="mb-20em">{{$value->price}} AED</strong></td>
                       <!-- <td><button type="button" id="sub" class="sub">-</button>
                        <input style="width:40px" type="number" value="1" min="1" max="10" />
                        <button type="button" id="add" class="add">+</button>
                        </td> -->
                        <td name="priceGet" value="" id=""></td>
                      </tr>   
                      @endforeach                
                    </table>
                    <!-- <a class="btn btn--purple add_cart" href="javascript:void(0);" data-id="{{$objVehicle->random_id}}" title="add-to-cart"> Book Now </a> -->
                    <x-primary-button class="ml-4 btn btn-primary profile-button btn--purple" >
                      {{ __('Book Now') }}
                    </x-primary-button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  </main> 
</x-front.master-layout> 
<!-- <script src="{{asset ('assets/front/scripts/vendor7369.js?v=m0Wgcip88r')}}"></script>  -->
 <script>
    $(document).ready(function() {
        $(document).on('submit','#cartItems',function(e){
          // alert(jhj);
        e.preventDefault();
        $.ajax({
            type: $(this).prop('method'),
            url: "{{ url('add-to-cart') }}",
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
            window.location.href = "{{URL::to('cart')}}"
              toastr.success(response.success); 
              },
              error: function (response){
              var text = JSON.parse(response.responseText)
              toastr.error(text.message);
            }
        });
        toastr.options = {
        positionClass: 'toast-top-center'
    };
    });
// time select
      var prc = $('#timeSelect').val();
      $('#slctPrice').html(prc);
        $(document).on('change','#timeSelect', function(){
          var price = $(this).val();
          $('#slctPrice').text(price);
          $('#totaltourAmt').val(price);
        })

        $('#times').click(function(e) { 
          var time = $(e.target).text();
          $('#slctAvTime').val(time);
        })

    $('#datepicker').Zebra_DatePicker({
         format: 'd-m-Y',
         direction: true,
        always_visible: $('#container')
        
    });
// end
//add subtract qntity
  $('.add').click(function () {
    var val ="{{$objVehicle->available_quantity}}";
      if ($(this).prev().val() < val) {
        $(this).prev().val(+$(this).prev().val() + 1);
      }
  });
  $('.sub').click(function () {
      if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
      }
  });
//end

//amount with quntity
    var prc = $('#timeSelect').val();
    $('#totaltourAmt').val(prc);
    $(document).on('click','.add',function(e){
            e.preventDefault();
        var qntity = $('.qntyPrce').val();
        var curentPrice = $('#slctPrice').text();
        var price = curentPrice * qntity;
        $('#totaltourAmt').val(price);  
    })
    $(document).on('click','.sub',function(e){
            e.preventDefault();
        var qntity = $('.qntyPrce').val();
        var curentPrice = $('#slctPrice').text();
        var price = curentPrice * qntity;
        $('#totaltourAmt').val(price);  
    })
//end

// checkbox quantity
// var i =0;
// $('.checkBoxId').on('click', function(){
//   var dd = $('.checkBoxId').attr('id'); 
//   // alert(dd); 
// });
// $('.checkBox').on('click', function(){
//     if ( $(this).prop('checked') ) {
//         $('.checkboxQntity').show();
//     }else{
//       $('.checkboxQntity').hide();
//     }
//   });
});

      
</script>
    