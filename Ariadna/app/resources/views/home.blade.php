@extends('layouts.base')

@section('content')

    <section id="banner-main" class="complete-banner">
        <picture>
            <source srcset="./dist/assets/images/img-banner-travel-mobile.png" media="(max-width: 767.98px)"
                    type="image/png">
            <img src="{{ Vite::asset('resources/images/img-banner-travel.png')  }}" alt="" title="" typeof="foaf:Image">
        </picture>
        <div class="container container-text">
            <img src="{{ Vite::asset('resources/images/travel-logo-banner.png') }}" alt="" srcset="">
            <button class="btn btn-primary">MORE INFO</button>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="testimonials-content">
                <article class="testimonials-cards">
                    <div class="testimonials-info">
                        <p><span class="quotation">“</span>Empower Your Business Success and accelerate
                            Your Business <span>Growth through Cutting edge
                  Performance-driven Digital Strategies</span> <span class="quotation">”</span>.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <section id="services" class="services">
        <div class="container">
            <div class="services-content">
                <article class="services-cards">
                    <div class="services-info">
                        <h2>All the services your hotel needs <br>
                            to improve its digital presence and direct sales</h2>
                    </div>

                    <div class="services-offerts">
                        <div class="row">
                            <div class="col-12 col-md-4 services-offerts-item">
                                <img src="{{ Vite::asset('resources/images/travel-creativity.png') }}" alt="" srcset="">
                                <h3>Estrategy</h3>
                            </div>
                            <div class="col-12 col-md-4 services-offerts-item">
                                <img src="{{ Vite::asset('resources/images/travel-creativity.png') }}" alt="" srcset="">
                                <h3>Creativity</h3>
                            </div>
                            <div class="col-12 col-md-4 services-offerts-item">
                                <img src="{{ Vite::asset('resources/images/travel-creativity.png') }}" alt="" srcset="">
                                <h3>Media</h3>
                            </div>
                            <div class="col-12 col-md-4 services-offerts-item">
                                <img src="{{ Vite::asset('resources/images/travel-creativity.png') }}" alt="" srcset="">
                                <h3>Performance Marketing</h3>
                            </div>
                            <div class="col-12 col-md-4 services-offerts-item">
                                <img src="{{ Vite::asset('resources/images/travel-creativity.png') }}" alt="" srcset="">
                                <h3>Tech Solutions</h3>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="banner-clients" style="background-image: url({{ Vite::asset('resources/images/travel-slider-clients.png')  }})">
        <div class="banner-clients-items-container">
            <div class="banner-clients-item">
                <img src="{{ Vite::asset('resources/images/img-banner-client-item.png') }}" alt="">
                <h2>The Fives Resorts</h2>
            </div>
            <div class="banner-clients-item">
                <img src="{{ Vite::asset('resources/images/img-banner-client-item.png') }}" alt="">
                <h2>The Fives Resorts</h2>
            </div>
            <div class="banner-clients-item">
                <img src="{{ Vite::asset('resources/images/img-banner-client-item.png') }}" alt="">
                <h2>The Fives Resorts</h2>
            </div>
            <div class="banner-clients-item">
                <img src="{{ Vite::asset('resources/images/img-banner-client-item.png') }}" alt="">
                <h2>The Fives Resorts</h2>
            </div>
        </div>

    </section>


    <section class="carouse-clients">
        <img src="{{ Vite::asset('resources/images/travel-brand-visit-scotland.svg') }}" alt="">
        <img src="{{ Vite::asset('resources/images/travel-brand-palace.svg') }}" alt="">
        <img src="{{ Vite::asset('resources/images/travel-brand-blue-diamond.svg') }}" alt="">
        <img src="{{ Vite::asset('resources/images/travel-brand-meet-puerto-rico.svg') }}" alt="">
        <img src="{{ Vite::asset('resources/images/travel-brand-miami-greather.svg') }}" alt="">
        <img src="{{ Vite::asset('resources/images/travel-brand-hilton.svg') }}" alt="">
        <img src="{{ Vite::asset('resources/images/travel-brand-embassy-hilton.svg') }}" alt="">
        <img src="{{ Vite::asset('resources/images/travel-brand-latam.svg') }}" alt="">
    </section>

    <section class="linetime">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="col-12 line-time-text-container">
                        <h2>OUR
                            PERFORMANCE METHODOLOGY</h2>
                    </div>
                </div>
                <div class="col-12 col-md-8">

                    <section class="timeline">
                        <ol>
                            <li>
                                <div>
                                    <p><strong>Investigación</strong></p>
                                    Conocer a fondo a tu público objetivo para conectar con él.

                                </div>
                            </li>
                            <li>
                                <div>

                                    <p><strong>Público <br> objetivo</strong></p>
                                    Conocer a fondo a tu público objetivo para conectar con él.

                                </div>
                            </li>
                            <li>
                                <div>
                                    <p><strong>priorización</strong></p> De todos los canales de Marketing Digital,
                                    elección del
                                    mejorcanal para tu modelo de negocio.
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p><strong>Creatividad</strong></p>
                                    Diseños de campañas de Marketing en torno a los objetivos establecidosy Buyer
                                    persona.

                                </div>
                            </li>
                            <li>
                                <div>
                                    <p><strong>Medición de resultados</strong></p>
                                    Revisión continua de desarrollo y resulatdos de as campañas de Marketing.
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p><strong>Optimización y mejora</strong></p>
                                    Proceso continuo de optimización y mejora de resultados.
                                </div>
                            </li>
                        </ol>
                    </section>
                </div>
            </div>
        </div>
    </section>


    <section class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 request-form-container">
                    <form>
                        <div class="form-group">
                            <label for="contactPerson">Contact person</label>
                            <input type="text" class="form-control" id="contactPerson">
                        </div>

                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" class="form-control" id="company">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>

                        <div class="form-group">
                            <label for="textarea">Company’s Needs</label>
                            <textarea class="form-control" id="textarea" rows="3"></textarea>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check">
                            <label class="form-check-label" for="check"><small>
                                    I accept the <a href="#">terms and conditions</a> </small></label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 request-form-text-container">
                    <h2>Request
                        a Proposal</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla condimentum ante,
                        quis
                        pulvinar ex vulputate vel. Maecenas orci ante, condimentum vitae facilisis a, facilisis eget
                        arcu.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="parthnes">
        <div class="container">
            <div class="row">

                <img class="col-3" src="{{ Vite::asset('resources/images/travel-google-partners-brand.png') }}" alt="">
                <img class="col-3" src="{{ Vite::asset('resources/images/travel-google-analytics-brand.png') }}" alt="">
                <img class="col-3" src="{{ Vite::asset('resources/images/travel-google-adwords-brand.png') }}" alt="">

            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 contact-data">
                    <h3 class="title-column">Contact Information</h3>
                    <div class="contact-group phone">
                        <ul>
                            <li><a href="">(+57) 315 9273307</a></li>
                            <li><a href="">(+57) 315 9273307 - WhatsApp</a></li>
                        </ul>
                    </div>

                    <div class="contact-group address">
                        <ul>
                            <li><a href="">Calle 99 # 49 - 53 <br>
                                    Bogota, COL</a></li>
                        </ul>
                    </div>

                    <div class="contact-group mail">
                        <ul>
                            <li><a href="">yudy.montoya@ariadnacg.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3 services-links">
                    <h3 class="title-column">services</h3>
                    <div class="contact-group address">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Our works</a></li>
                            <li><a href="#">Methodology</a></li>
                            <li><a href="#">Proposal</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-12 col-md-4 contact-form">
                    <h3 class="title-column">
                        Contact us
                    </h3>

                    <div class="col-12 request-form-container">
                        <form>
                            <div class="form-group">
                                <label for="contactPerson">NAME:</label>
                                <input type="text" class="form-control" id="contactPerson">
                            </div>

                            <div class="form-group">
                                <label for="email">E-MAIL:</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="phone">PHONE:</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>

                            <div class="form-group">
                                <label for="textarea">MESSAGE:</label>
                                <textarea class="form-control" id="textarea" rows="3"></textarea>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check">
                                <label class="form-check-label" for="check"><small>
                                        I accept the <a href="#">terms and conditions</a> </small></label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection