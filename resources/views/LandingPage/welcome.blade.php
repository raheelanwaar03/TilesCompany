@extends('LandingPage.layout.app')
@section('content')
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-subtitle">Construction Firm</div>
                    <div class="section-title">About <span>{{ env('APP_NAME') }}</span></div>
                    <p>
                        Greatings of the Day! <br>
                        Hi {{ env('APP_NAME') }} is a experinced Construction Company which have almost 10 year's of
                        experience.
                        We can help you in building your dream house.
                    </p>
                    <p>In which we are expert.</p>
                    <ul class="listext list-unstyled mb-30">
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>Electric Work</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>Plumbing</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>All kind of AC ducts</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">`
                                <p>Panting</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>Tiles Fixing</p>
                            </div>
                        </li>
                    </ul>
                    <div class="line-dec"></div>
                    <div class="about-bottom">
                        <div class="px-3 ml-2">
                            <p></p>
                        </div>
                        <div class="about-name-wrapper">
                            <div class="about-name">Jose Mandapathil Louis</div>
                            <div class="about-rol">Manger</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img"> <img src="{{ asset('assets/img/about.jpg') }}" alt="">
                        <div class="about-img-hotifer">
                            <p>Our 10 years working experience make a different construction building.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services center section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">What We Do</div>
                    <div class="section-title">Our <span>Services</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="item mx-3 mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('assets/img/electric1.png') }}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-new-construction"></i> </div>
                            <h5><a href="services-page.html">Electric Work</a></h5>
                            <p>Installs and repairs electrical wiring, systems, and fixtures in buildings. Installs conduits
                                and pipes to house electrical wires and cables. Ensures piping complies with electrical
                                codes. Installs circuit breakers and other electrical hardware and connects wiring to them.
                            </p>
                        </div>
                    </div>
                    <div class="item mx-3 mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('assets/img/plumbing.jpg') }}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-construction-sign"></i> </div>
                            <h5><a href="services-page.html">Plumbing Work</a></h5>
                            <p>Plumbers install and repair pipes and fixtures that carry water, gas, or other fluids in
                                homes and businesses. They also maintain plumbing fixtures like bathtubs and toilets and
                                appliances such as dishwashers or heating systems.</p>
                        </div>
                    </div>
                    <div class="item mx-3 mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('assets/img/Ac1.png') }}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-cogwheel"></i> </div>
                            <h5><a href="services-page.html">All type of AC Duct work</a></h5>
                            <p>Perform preventive maintenance and routine servicing of equipment. Diagnose defects, and
                                install, repair and maintain heating, ventilating, refrigeration, and air-conditioning
                                units. Follow oral and written instructions.</p>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('assets/img/tile.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-radiation"></i> </div>
                            <h5><a href="services-page.html">Tiles Fixing</a></h5>
                            <p>Mixes, applies, and spreads plaster, concrete, mortar, cement, mastic, glue, or other
                                adhesive to apply, seal, and finish tile and marble flooring, counters, or walls. Uses
                                levels, squares, straightedges, and hand or power cutting tools to complete jobs. Ensures
                                masonry materials are properly aligned and straightened.</p>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('assets/img/panting.webp') }}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-factory"></i> </div>
                            <div class="service-icon"> <i class="norc-cogwheel"></i> </div>
                            <h5><a href="services-page.html">Painting</a></h5>
                            <p>Applies various finishes to buildings, rooms, or other structures, including primers or
                                sealers. Prepares, cleans, and tapes all jobsites. Removes old paint coating, if necessary.
                                Mixes colors or oils to obtain desired color or consistency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process">
        <div class="section-padding bg-img bg-fixed section-padding" data-background="{{ asset('assets/img/banner2.jpg') }}"
            data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 mb-45 text-center">
                        <h5>How We Work</h5>
                        <h2>Our Process</h2>
                        <p>Our work flow depends</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('assets/img/arrow1.png') }}" class="tobotm"
                                alt=""> <span class="icon norc-paper"></span>
                            <h6><span>01.</span>Planing</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('assets/img/arrow1.png') }}" alt="">
                            <span class="icon norc-pen-tool-2"></span>
                            <h6><span>02.</span>Design</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('assets/img/arrow1.png') }}" class="tobotm"
                                alt=""> <span class="icon norc-new-construction"></span>
                            <h6><span>03.</span>Construct</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <span class="icon norc-trophy"></span>
                            <h6><span>04.</span>Finishing</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Latest Works</div>
                    <div class="section-title">Our <span>Projects</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-90">
                    <div class="projects left">
                        <figure><img src="{{ asset('assets/img/projects/5.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h4>Interior design by: <span>{{ env('APP_NAME') }}</span></h4>
                            <p>The Interior Designer will create functional, safe, and aesthetically pleasing spaces by
                                assessing space requirements, determining optimal furniture placement, and selecting
                                decorative items, all while adhering to relevant blueprint, building code, and inspection
                                requirements.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-new-construction"></i> Renovation</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-90">
                    <div class="projects">
                        <figure><img src="{{ asset('assets/img/projects/1.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h4>Factory Construction by:<span>{{ env('APP_NAME') }}</span></h4>
                            <p>Factory design is used to plan changes when a factory or production line is to be modified.
                                Factory design is also used to plan and layout completely new factories</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-factory"></i> Construction</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="projects left">
                        <figure><img src="{{ asset('assets/img/projects/6.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h4>Residential Construction by:<span>{{ env('APP_NAME') }}</span></h4>
                            <p>Residential interior design refers to the designing of people's homes as opposed to
                                commercial property. The object of these designers is to create interiors that fit the
                                functioning of clients' homes, but also reflect each client's personal taste.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-construction-sign"></i> Building</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="values section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Values</div>
                    <div class="section-title">Core <span>Values</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-construction-sign"></span>
                        <h5>Safety</h5>
                        <p>Safety will always come first as we strive for accident-free projects. Fusce tidunt nis ace park
                            norttito amet space.</p>
                        <div class="facility-shape"> <span class="norc-construction-sign"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-bulb-63"></span>
                        <h5>Innovation</h5>
                        <p>Innovative construction methodologies are products or techniques that stray away from the
                            traditional means of construction. These methodologies further advance the sustainability and
                            efficiency of a firm's construction process.</p>
                        <div class="facility-shape"> <span class="norc-bulb-63"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-paper-diploma"></span>
                        <h5>Quality</h5>
                        <p>At its core, quality in construction means that a project is completed within the defined
                            guidelines set out in the Scope of Work. This document serves as a set of guardrails for the
                            project based on the owner's expectations, and sheds light on how to execute the project in a
                            way that meets these standards.</p>
                        <div class="facility-shape"> <span class="norc-paper-diploma"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-chess-knight"></span>
                        <h5>Integrity</h5>
                        <p>Structural integrity is an engineering field that helps ensure that either a structure or
                            structural component is fit for purpose under normal operational conditions and is safe even
                            should conditions exceed that of the original design.</p>
                        <div class="facility-shape"> <span class="norc-chess-knight"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-strategy"></span>
                        <h5>Strategy</h5>
                        <p>What is a Construction Strategy? A Construction Strategy is predominantly concerned with all
                            aspects of the design that affect the buildability or logistics of constructing a project.</p>
                        <div class="facility-shape"> <span class="norc-strategy"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-flag-points-32"></span>
                        <h5>Inclusion</h5>
                        <p>Inclusions define the description of tasks, items, and works that are specifically included in
                            the project scope. In an inclusive bid, the bidder clearly defines what will be undertaken
                            exhaustively.</p>
                        <div class="facility-shape"> <span class="norc-flag-points-32"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Latest Work</span></div>
                    <div class="section-title">Our <span>Work site</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/img/constraction1.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/img/company2.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/img/company1.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('assets/img/constraction3.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner.jpg"
            data-overlay-dark="4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 valign">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="play-button vid" href="https://youtu.be/z4nO6NuEM3A">
                                    <svg class="circle-fill">
                                        <circle cx="43" cy="43" r="39" stroke="#fff"
                                            stroke-width="1"></circle>
                                    </svg>
                                    <svg class="circle-track">
                                        <circle cx="43" cy="43" r="39" stroke="none"
                                            stroke-width="1" fill="none"></circle>
                                    </svg> <span class="polygon">
                                        <i class="norc-triangle-right"></i>
                                    </span> </a>
                            </div>
                            <div class="cont mt-30 mb-30">
                                <h6>Promo Video</h6>
                                <h4>Video About Company</h4>
                                <p>Video showing our 10 years of business experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>What said about us</h6>
                                <h4>Customer Reviews</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span class="quote"><img src="{{ asset('assets/img/quot.png') }}"
                                            alt=""></span>
                                    <p class="v-border">Their estimates of work, and project management skills are top
                                        notch. The design work they do is excellent. They're super flexible and work with
                                        you to get things just the way you like for as close to your budget as is possible.
                                        Communication is top notch.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme py-5">
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>
@endsection
