@extends('master')
@extends('layouts.app')
@section('content')
    <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ URL('storage/images/pic3.jpg') }}" class="d-block w-100 " alt="Wild Landscape" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL('storage/images/pic8.jpg') }}" class="d-block w-100 h-25 " alt="Camera" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- about section -->
    <div class="about-section">
        <div class="about-header">
            <h2>Who are frenolsite hub </h2>
        </div>

        <div class="box-container">
            <div class="images">
                <img src="{{ URL('storage/images/pic5.jpg') }}" alt="" title="" width="400" height="400">

            </div>

            <h4>developing section</h4>

            <p>We are a technology savvy company transforming Africa through the innovative, state of the art tailor-made
                software solutions for banking, financial, agricultural, transport & public sector.</p>
            <p>We operate on a sustainable commercial footing and are convinced that economic IMPACT is best achieved
                through developing a vibrant and resilient SME sector. Frenol has been a market leader in the provision of
                affordable innovative solutions within the continent by being the
                center bolt upon which multiple transactions are anchored through our solutions.</p>
            <h4>sales department</h4>
            <p>Frenol has been a market leader in the provision of
                affordable innovative solutions within the continent by being the
                center bolt upon which multiple transactions are anchored through our solutions
            </p>
            <a href="about" class="btn btn-info">About us</a>

        </div>

    </div>
    <hr>

    <div class="section-title">
        <!--   <div class="images">
                           <img src="{{ URL('storage/images/pic9.jpg') }}" alt="" title="" width="250" height="250">

                        </div>-->

        <h4>We are trusted across kenya and Africa at large, with over 10 years experience.</h4>

        <p>we believe that Africa is enriched with resourses. In today’s world, delivering a great customer experience is
            essential in differentiating your business and building loyalty with your customers.</p>
        <div class="contan">
            <div class="col">
                <img src="{{ URL('storage/images/handshake.png') }}" alt="" title="" width="50"
                    height="50">
                <h3>Partners</h3>
            </div>

            <div class="col">
                <img src="{{ URL('storage/images/africa.png') }}" alt="" title="" width="50"
                    height="50">
                <h3>Countries</h3>
            </div>

            <div class="col">
                <img src="{{ URL('storage/images/client.png') }}" alt="" title="" width="50"
                    height="50">
                <h3>clients</h3>
            </div>
            <div class="col">
                <img src="{{ URL('storage/images/planning.png') }}" alt="" title="" width="50"
                    height="50">
                <h2>252</h2>
                <h3>Projects</h3>
            </div>
        </div>


    </div>
    <div class="servive">
        <h4>Our Tailored & Bespoke</h4><span>Solution</span>
        <p>Frenol technologies help STARTUPs & MSME to build their BRAND. We specialised in MAR-TECH (Marketing &
            Technology) solutions & services and give end to
            end solutions & services required for their growth and provide access to all services starting from Consulting,
            Strategy planning, Technology implementation
            and Data Analytics. We are Providing services of Website Development, Mobile App Development, Digital Marketing,
            Artificial Intelligence, Machine Learning & Image Processing.
        <div class="service-container">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ URL('storage/images/planning.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">POS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">learn more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="partners">
    <h3>Our partners</h3>
    <p>As an endorsement of the Fintech that Frenol technology is, the company has received several industry certifications and awards over the years.</p>
    </div>
@endsection
