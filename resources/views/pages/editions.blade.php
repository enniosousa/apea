@extends('template.public.index')
@section('metaTitle', 'Edições anteriores da Semana Tech')
@section('metaDescription', 'Edições anteriores da Semana Tech')
@section('page')
<section class="mbr-section mbr-section__container article mbr-after-navbar" id="header3-e" data-rv-view="72" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">EDIÇÕES ANTERIORES</h3>
                <small class="mbr-section-subtitle">Em 2017 faremos a nossa 4ª edição e estamos anciosos para criar memórias</small>
            </div>
        </div>
    </div>
</section>
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="false" id="gallery1-o" data-rv-view="93" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->


    <!-- Gallery -->
    <div class="mbr-gallery-row container">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false" data-tags="Responsive">
                        <div href="#lb-gallery1-o" data-slide-to="0" data-toggle="modal">



                            <img src="assets/images/img-20150922-2000x1125-800x450.jpg" alt="">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false" data-tags="Creative">
                        <div href="#lb-gallery1-o" data-slide-to="1" data-toggle="modal">



                            <img src="assets/images/img-20161026-2000x1125-800x450.jpg" alt="">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-video-url="false" data-tags="Animated">
                        <div href="#lb-gallery1-o" data-slide-to="2" data-toggle="modal">



                            <img src="assets/images/img-20161027-191921224-hdr-2000x1125-800x450.jpg" alt="">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-o">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-o" data-slide-to="0"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-o" data-slide-to="1"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-o" class=" active" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="assets/images/img-20150922-2000x1125.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/img-20161026-2000x1125.jpg" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="assets/images/img-20161027-191921224-hdr-2000x1125.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-o">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-o">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
@endsection