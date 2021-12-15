<x-front-layout>

    <section class="full-height-slider type-1">
        <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(	http://unionagency.one/delice/img/shop/main-naner-bg.jpg)" data-swiper-parallax="50%"></div>
        <div class="table-view mobile-rel-block">
            <div class="table-cell">
                <div class="container no-padd">
                    <div class="row vertical-wrap">
                        <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                            <div class="simple-item color-type-1 text-center">
                                <div class="main-title">
                                    <h1 class="h1 caption">Nos recettes</h1>
                                    <div class="empty-sm-30"></div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="simple-text md">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="empty-lg-120 empty-md-100 empty-sm-60 empty-xs-60"></div>
        <div class="container">
            <div class="row row-3-columns type-1 row-2-columns">
                @foreach($recettes as $recette)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="empty-sm-60 empty-xs-50"></div>
                    <div class="menu-item menu-item-6 type-3">
                        <div class="text">
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <h5 class="h5 caption"><a href="#" class="link-hover-line">{{ $recette->name }}</a></h5>
                            <div class="empty-sm-5 empty-xs-5"></div>
                            <div class="simple-text">
                                <p><b>Description: </b>{{ $recette->description }}</p>
                            </div>
                        </div>
                        <div class="page-button button-style-1 type-2">
                            <input type="submit">
                            <span class="txt">Details</span><i></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="empty-lg-80 empty-md-50 empty-sm-40 empty-xs-30"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <div class="page-navigation">
                        <a href="#" class="left-arr">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="6px" height="8px" viewBox="0 0 292.359 292.359" style="enable-background:new 0 0 292.359 292.359;" xml:space="preserve">
                                <g>
                                    <path d="M222.979,5.424C219.364,1.807,215.08,0,210.132,0c-4.949,0-9.233,1.807-12.848,5.424L69.378,133.331   c-3.615,3.617-5.424,7.898-5.424,12.847c0,4.949,1.809,9.233,5.424,12.847l127.906,127.907c3.614,3.617,7.898,5.428,12.848,5.428   c4.948,0,9.232-1.811,12.847-5.428c3.617-3.614,5.427-7.898,5.427-12.847V18.271C228.405,13.322,226.596,9.042,222.979,5.424z" fill="#898989"></path>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">29</a>
                        <a href="#" class="right-arr">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="6px" height="8px" viewBox="0 0 292.359 292.359" style="enable-background:new 0 0 292.359 292.359;" xml:space="preserve">
                                <g>
                                    <path d="M222.979,133.331L95.073,5.424C91.456,1.807,87.178,0,82.226,0c-4.952,0-9.233,1.807-12.85,5.424   c-3.617,3.617-5.424,7.898-5.424,12.847v255.813c0,4.948,1.807,9.232,5.424,12.847c3.621,3.617,7.902,5.428,12.85,5.428   c4.949,0,9.23-1.811,12.847-5.428l127.906-127.907c3.614-3.613,5.428-7.897,5.428-12.847   C228.407,141.229,226.594,136.948,222.979,133.331z" fill="#898989"></path>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
    </section>

</x-front-layout>