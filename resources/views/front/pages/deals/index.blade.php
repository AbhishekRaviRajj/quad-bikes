<x-front.master-layout>
  <div id="barba-wrappers" aria-live="polite">
    <div class="barba-container">
      <main class="l-main">
        <section class="section">
          <div class="container">
            <div class="row" id="listing"> @foreach($deal as $deals) <div class="col-lg-12  z-index-1">
                <div class="mb-30em animated fadeInUp active">
                  <div class="card card--shadow-green">
                    <div class="card__content">
                      <div class="card__headline card__headline--with-price row">
                        <div class="card__headline-left headline-wave  col-lg-4 col-sm-12">
                          <!-- <h2 class="headline-3">{{$deals->name}}</h2>-->
                          <img src="{{ asset('admin/uploads/vehicle/' . $deals->image) }}" class="mt-10em list" alt="">
                        </div>
                        <div class="card__headline-price-wrapper  col-lg-8 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-lg-12">
                              <h2 class="headline-3">{{$deals->name}}</h2>
                              {{-- <p>{{$deals->description}}</p> --}}
                            </div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-12">
                              <ul class="list-tour-info list-tour-info--two-cols">
                                <li class="list-tour-info__item">
                                  <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-account')}}">
                                    </use>
                                  </svg>
                                  <div class="list-tour-info__item-desc">
                                    <b>Tour Guide</b>
                                    <span>{{$deals['tours']->tour_guide}}</span>
                                  </div>
                                </li>
                                <li class="list-tour-info__item">
                                  <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-star')}}">
                                    </use>
                                  </svg>
                                  <div class="list-tour-info__item-desc">
                                    <b>Convey Leader</b>
                                    <span>{{$deals['tours']->convoy_leader}}</span>
                                  </div>
                                </li>
                                <li class="list-tour-info__item">
                                  <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-account-multiple')}}">
                                    </use>
                                  </svg>
                                  <div class="list-tour-info__item-desc">
                                    <b>No. Of Persons</b>
                                    <span>{{$deals->no_of_persons}}</span>
                                  </div>
                                </li>
                                <li class="list-tour-info__item">
                                  <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-map')}}">
                                    </use>
                                  </svg>
                                  <div class="list-tour-info__item-desc">
                                    <b>Pickup & Drop off</b>
                                    <span>{{$deals['tours']->pickup_and_drop}}</span>
                                  </div>
                                </li>
                                <li class="list-tour-info__item">
                                  <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-calendar-range')}}">
                                    </use>
                                  </svg>
                                  <div class="list-tour-info__item-desc">
                                    <b>Available Everyday</b>
                                    <span>Sunrise to Sunset</span>
                                  </div>
                                </li>
                                <li class="list-tour-info__item">
                                  <svg width="36px" height="36px" class="fill-blurple" aria-hidden="true" aria-focusable="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{asset('assets/front/images/icons.svg#icon-baby-face-outline')}}">
                                    </use>
                                  </svg>
                                  <div class="list-tour-info__item-desc">
                                    <b>Min Age</b>
                                    <span>{{$deals['tours']->min_age}}Yrs</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 col-lg-12 button_nd">
                              <a class="btn btn--purple " href="{{url('view-detail/'.$deals['id'])}}" title="Book now"> Book Now </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> @endforeach </div>
          </div>
        </section>
    </main>
  </div>
  </div>
</x-front.master-layout>