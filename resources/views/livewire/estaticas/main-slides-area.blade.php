<div class="main-slides-area">
    <div class="home-slides owl-carousel owl-theme">
        @foreach ($sliders as $slider)
        <div class="main-slides-item">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="main-slides-content">
                            <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                data-aos-once="true">{{ $slider['titulo'] }}</span>
                            <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                                {{ $slider['mensaje'] }} <span class="overlay"></span></h1>
                            <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                                {{ $slider['descripcion'] }}
                            </p>

                            <div class="slides-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                data-aos-once="true">
                                <a href="{{ $slider['url'] }}" class="default-btn">Empezar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700"
                        data-aos-once="true">
                        <div class="main-slides-image" data-tilt>
                            <img src="{{ asset($slider['imagen']) }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="main-slides-shape-1">
        <img src="{{ asset('assets/images/home-slides/slides-shape-1.png') }}" alt="image">
    </div>
    <div class="main-slides-shape-2">
        <img src="{{ asset('assets/images/home-slides/slides-shape-2.png') }}" alt="image">
    </div>
    <div class="main-slides-shape-3">
        <img src="{{ asset('assets/images/home-slides/slides-shape-3.png') }}" alt="image">
    </div>
    <div class="main-slides-shape-4">
        <img src="{{ asset('assets/images/home-slides/slides-shape-4.png') }}" alt="image">
    </div>
    <div class="main-slides-shape-5">
        <img src="{{ asset('assets/images/home-slides/slides-shape-5.png') }}" alt="image">
    </div>
</div>
