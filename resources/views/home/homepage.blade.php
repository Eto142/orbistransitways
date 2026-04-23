@include('partials.header')

{{-- Bootstrap 5 CSS (needed for carousel) --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

{{-- ======================================================
     SWIFT DELIVERY COURIER HOMEPAGE
====================================================== --}}

<style>
/* ---- GLOBAL PAGE OVERRIDES ---- */
.sdc-page { font-family: 'Segoe UI', Arial, sans-serif; color: #1a1a2e; }

/* ---- HERO CAROUSEL ---- */
.sdc-hero { position: relative; width: 100%; height: 92vh; min-height: 520px; overflow: hidden; }
.sdc-hero .carousel, .sdc-hero .carousel-inner, .sdc-hero .carousel-item { height: 100%; }
.sdc-hero .carousel-item img { width: 100%; height: 100%; object-fit: cover; object-position: center; filter: brightness(.55); }
.sdc-hero-overlay { position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; z-index: 10; padding: 0 20px; }
.sdc-hero-badge { display: inline-block; background: #e63946; color: #fff; font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; padding: 6px 18px; border-radius: 30px; margin-bottom: 22px; }
.sdc-hero h1 { font-size: clamp(2rem, 5vw, 4rem); font-weight: 900; color: #fff; line-height: 1.15; margin-bottom: 20px; text-shadow: 0 2px 20px rgba(0,0,0,.5); max-width: 900px; }
.sdc-hero h1 span { color: #e63946; }
.sdc-hero p { font-size: clamp(1rem, 2vw, 1.25rem); color: rgba(255,255,255,.88); max-width: 640px; margin-bottom: 36px; line-height: 1.7; }
.sdc-hero-btns { display: flex; gap: 16px; flex-wrap: wrap; justify-content: center; }
.sdc-btn-primary { background: #e63946; color: #fff; border: none; padding: 15px 36px; border-radius: 4px; font-weight: 700; font-size: 14px; letter-spacing: 1px; text-transform: uppercase; text-decoration: none; transition: background .25s, transform .2s; }
.sdc-btn-primary:hover { background: #c1121f; transform: translateY(-2px); color: #fff; }
.sdc-btn-outline { background: transparent; color: #fff; border: 2px solid rgba(255,255,255,.75); padding: 13px 34px; border-radius: 4px; font-weight: 700; font-size: 14px; letter-spacing: 1px; text-transform: uppercase; text-decoration: none; transition: all .25s; }
.sdc-btn-outline:hover { background: #fff; color: #1a1a2e; border-color: #fff; }
.sdc-hero .carousel-control-prev, .sdc-hero .carousel-control-next { background: transparent !important; border: none !important; box-shadow: none !important; outline: none !important; width: 52px; opacity: .75; }
.sdc-hero .carousel-control-prev:hover, .sdc-hero .carousel-control-next:hover { background: transparent !important; opacity: 1; }
.carousel-control-prev-icon, .carousel-control-next-icon { filter: invert(1) !important; width: 20px; height: 20px; background-color: transparent !important; }
.carousel-indicators [data-bs-target] { width: 10px; height: 10px; border-radius: 50%; border: none; background: rgba(255,255,255,.5); }
.carousel-indicators .active { background: #e63946; }

/* ---- QUICK ACTIONS BAR ---- */
.sdc-actions { background: #1a1a2e; padding: 0; }
.sdc-actions-inner { display: grid; grid-template-columns: repeat(3, 1fr); }
.sdc-action-card { padding: 32px 28px; border-right: 1px solid rgba(255,255,255,.1); transition: background .2s; }
.sdc-action-card:last-child { border-right: none; }
.sdc-action-card:hover { background: rgba(230,57,70,.15); }
.sdc-action-card i { font-size: 26px; color: #e63946; margin-bottom: 12px; display: block; }
.sdc-action-card h4 { color: #fff; font-size: 16px; font-weight: 700; margin: 0 0 8px; }
.sdc-action-card p { color: rgba(255,255,255,.6); font-size: 13px; margin: 0 0 16px; line-height: 1.6; }
.sdc-action-card a.sdc-action-btn { display: inline-block; background: #e63946; color: #fff; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; padding: 9px 20px; border-radius: 3px; text-decoration: none; transition: background .2s; width: 100%; text-align: center; }
.sdc-action-card a.sdc-action-btn:hover { background: #c1121f; }
@media(max-width:768px){ .sdc-actions-inner { grid-template-columns: 1fr; } .sdc-action-card { border-right: none; border-bottom: 1px solid rgba(255,255,255,.1); } }

/* ---- SECTION COMMON ---- */
.sdc-section { padding: 90px 0; }
.sdc-section-alt { background: #f8f9fc; }
.sdc-container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.sdc-label { display: inline-block; color: #e63946; font-size: 12px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 14px; }
.sdc-title { font-size: clamp(1.7rem, 3.5vw, 2.4rem); font-weight: 800; color: #1a1a2e; line-height: 1.25; margin-bottom: 16px; }
.sdc-line { width: 48px; height: 4px; background: #e63946; border-radius: 2px; margin-bottom: 24px; }
.sdc-subtitle { color: #555; line-height: 1.75; font-size: 15px; max-width: 640px; }

/* ---- ABOUT ---- */
.sdc-about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 70px; align-items: center; }
.sdc-about-img-wrap { position: relative; }
.sdc-about-img-wrap img { width: 100%; border-radius: 8px; display: block; height: 500px; object-fit: cover; }
.sdc-about-badge-box { position: absolute; bottom: -24px; right: -24px; background: #e63946; color: #fff; padding: 28px 32px; border-radius: 8px; text-align: center; box-shadow: 0 8px 30px rgba(230,57,70,.4); }
.sdc-about-badge-box .num { font-size: 42px; font-weight: 900; line-height: 1; }
.sdc-about-badge-box .lbl { font-size: 12px; letter-spacing: 1px; text-transform: uppercase; opacity: .85; margin-top: 4px; }
.sdc-check-list { list-style: none; padding: 0; margin: 24px 0 32px; }
.sdc-check-list li { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 14px; font-size: 15px; color: #333; }
.sdc-check-list li i { color: #e63946; margin-top: 2px; flex-shrink: 0; }
@media(max-width:900px){ .sdc-about-grid { grid-template-columns: 1fr; } .sdc-about-badge-box { right: 16px; } }

/* ---- STATS BAR ---- */
.sdc-stats { background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); padding: 60px 0; }
.sdc-stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); text-align: center; gap: 24px; }
.sdc-stat-item { padding: 20px; border-right: 1px solid rgba(255,255,255,.12); }
.sdc-stat-item:last-child { border-right: none; }
.sdc-stat-item .num { font-size: 3rem; font-weight: 900; color: #e63946; line-height: 1; }
.sdc-stat-item .desc { font-size: 13px; color: rgba(255,255,255,.65); text-transform: uppercase; letter-spacing: 1.5px; margin-top: 8px; }
@media(max-width:700px){ .sdc-stats-grid { grid-template-columns: repeat(2,1fr); } .sdc-stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,.1); } }

/* ---- SERVICES GRID ---- */
.sdc-services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 52px; }
.sdc-service-card { background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,.07); transition: transform .25s, box-shadow .25s; }
.sdc-service-card:hover { transform: translateY(-6px); box-shadow: 0 12px 40px rgba(0,0,0,.13); }
.sdc-service-card img { width: 100%; height: 190px; object-fit: cover; display: block; }
.sdc-service-card-body { padding: 24px; }
.sdc-service-card-body h3 { font-size: 16px; font-weight: 800; color: #1a1a2e; margin: 0 0 10px; text-transform: uppercase; letter-spacing: .5px; }
.sdc-service-card-body p { font-size: 13.5px; color: #666; line-height: 1.65; margin: 0 0 18px; }
.sdc-service-card-body a { color: #e63946; font-size: 13px; font-weight: 700; text-decoration: none; letter-spacing: .5px; text-transform: uppercase; }
.sdc-service-card-body a:hover { text-decoration: underline; }
@media(max-width:900px){ .sdc-services-grid { grid-template-columns: repeat(2,1fr); } }
@media(max-width:580px){ .sdc-services-grid { grid-template-columns: 1fr; } }

/* ---- WHY CHOOSE US ---- */
.sdc-why-grid { display: grid; grid-template-columns: 1fr 1.1fr; gap: 60px; align-items: center; }
.sdc-why-img { border-radius: 10px; overflow: hidden; height: 480px; }
.sdc-why-img img { width: 100%; height: 100%; object-fit: cover; display: block; }
.sdc-why-cards { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 32px; }
.sdc-why-card { background: #fff; border-radius: 8px; padding: 24px 20px; box-shadow: 0 2px 15px rgba(0,0,0,.07); border-top: 3px solid #e63946; }
.sdc-why-card i { font-size: 28px; color: #e63946; margin-bottom: 12px; display: block; }
.sdc-why-card h4 { font-size: 14px; font-weight: 800; color: #1a1a2e; text-transform: uppercase; letter-spacing: .5px; margin: 0 0 8px; }
.sdc-why-card p { font-size: 13px; color: #777; line-height: 1.6; margin: 0; }
@media(max-width:900px){ .sdc-why-grid { grid-template-columns: 1fr; } .sdc-why-img { height: 300px; } }

/* ---- PARTNERS / AFFILIATIONS ---- */
.sdc-partners { padding: 60px 0; background: #fff; border-top: 1px solid #eef0f5; border-bottom: 1px solid #eef0f5; }
.sdc-partners-heading { text-align: center; margin-bottom: 36px; }
.sdc-partners-heading p { font-size: 12px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: #aaa; margin: 0; }
.sdc-partners-heading h3 { font-size: 1.1rem; font-weight: 800; color: #1a1a2e; margin: 6px 0 0; }
.sdc-partners-logos { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 36px 48px; }
.sdc-partner-item { display: flex; flex-direction: column; align-items: center; gap: 8px; opacity: .55; filter: grayscale(1); transition: opacity .25s, filter .25s; }
.sdc-partner-item:hover { opacity: 1; filter: grayscale(0); }
.sdc-partner-item img { height: 38px; width: auto; max-width: 120px; object-fit: contain; }
.sdc-partner-item span { font-size: 10px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: #888; }

/* ---- TRACKING BAND ---- */
.sdc-track-band { background: linear-gradient(90deg, #e63946 0%, #c1121f 100%); padding: 56px 0; }
.sdc-track-inner { display: flex; align-items: center; justify-content: space-between; gap: 32px; flex-wrap: wrap; }
.sdc-track-inner h2 { font-size: 1.9rem; font-weight: 900; color: #fff; margin: 0; line-height: 1.3; max-width: 480px; }
.sdc-track-inner h2 span { opacity: .75; display: block; font-size: 1rem; font-weight: 400; margin-top: 4px; }
.sdc-track-form { display: flex; gap: 0; background: #fff; border-radius: 4px; overflow: hidden; flex: 1 1 380px; max-width: 520px; box-shadow: 0 8px 30px rgba(0,0,0,.2); }
.sdc-track-form input { flex: 1; border: none; padding: 16px 20px; font-size: 14px; outline: none; color: #1a1a2e; }
.sdc-track-form button { background: #1a1a2e; color: #fff; border: none; padding: 16px 24px; font-weight: 700; font-size: 13px; letter-spacing: 1px; text-transform: uppercase; cursor: pointer; white-space: nowrap; transition: background .2s; }
.sdc-track-form button:hover { background: #0d0d1a; }

/* ---- TESTIMONIALS ---- */
.sdc-testi-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 52px; }
.sdc-testi-card { background: #fff; border-radius: 10px; padding: 32px 28px; box-shadow: 0 4px 20px rgba(0,0,0,.07); position: relative; }
.sdc-testi-card::before { content: '\201C'; font-size: 80px; line-height: .8; color: #e63946; opacity: .15; position: absolute; top: 12px; left: 20px; font-family: Georgia, serif; }
.sdc-testi-card p { font-size: 14px; color: #555; line-height: 1.75; margin: 0 0 24px; position: relative; z-index: 1; }
.sdc-testi-author { display: flex; align-items: center; gap: 14px; }
.sdc-testi-avatar { width: 46px; height: 46px; border-radius: 50%; background: #e63946; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 800; font-size: 17px; flex-shrink: 0; }
.sdc-testi-name { font-weight: 700; font-size: 14px; color: #1a1a2e; }
.sdc-testi-role { font-size: 12px; color: #999; }
.sdc-stars { color: #f4c430; font-size: 13px; margin-bottom: 16px; }
@media(max-width:900px){ .sdc-testi-grid { grid-template-columns: repeat(2,1fr); } }
@media(max-width:580px){ .sdc-testi-grid { grid-template-columns: 1fr; } }

/* ---- CTA BOTTOM ---- */
.sdc-cta { background: url('assets/images/cargo-ship-sailing-through-ocean.jpg') center/cover no-repeat; position: relative; padding: 100px 0; }
.sdc-cta::before { content: ''; position: absolute; inset: 0; background: rgba(26,26,46,.82); }
.sdc-cta-inner { position: relative; z-index: 1; text-align: center; }
.sdc-cta-inner h2 { font-size: clamp(1.8rem,4vw,2.8rem); font-weight: 900; color: #fff; margin-bottom: 16px; }
.sdc-cta-inner p { font-size: 16px; color: rgba(255,255,255,.75); margin-bottom: 36px; max-width: 540px; margin-left: auto; margin-right: auto; line-height: 1.7; }
.sdc-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
</style>

<div class="sdc-page">

{{-- ===== 1. HERO CAROUSEL ===== --}}
<section class="sdc-hero">
    <div id="sdcHeroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#sdcHeroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#sdcHeroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#sdcHeroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#sdcHeroCarousel" data-bs-slide-to="3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/aerial-view-cargo-ship-cargo-container-harbor.jpg" alt="Cargo ship at harbour">
            </div>
            <div class="carousel-item">
                <img src="assets/images/air-cargo.jpg" alt="Air cargo logistics">
            </div>
            <div class="carousel-item">
                <img src="assets/images/cargo-ship-sailing-through-ocean.jpg" alt="Cargo ship at sea">
            </div>
            <div class="carousel-item">
                <img src="assets/images/airport.avif" alt="Airport logistics">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#sdcHeroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sdcHeroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <div class="sdc-hero-overlay">
        <span class="sdc-hero-badge"><i class="fas fa-shipping-fast" style="margin-right:7px"></i>Worldwide Delivery</span>
        <h1>Your Shipment,<br><span>Our Priority.</span></h1>
        <p>Swift Delivery Courier connects businesses and individuals to the world through fast, secure, and reliable logistics by air, sea, road, and rail.</p>
        <div class="sdc-hero-btns">
            <a href="{{ url('/track-now') }}" class="sdc-btn-primary"><i class="fas fa-map-marker-alt" style="margin-right:8px"></i>Track Your Shipment</a>
            <a href="{{ url('/services') }}" class="sdc-btn-outline">Explore Services</a>
        </div>
    </div>
</section>

{{-- ===== 2. QUICK ACTIONS BAR ===== --}}
<section class="sdc-actions">
    <div class="sdc-actions-inner">
        <div class="sdc-action-card">
            <i class="fas fa-search-location"></i>
            <h4>Track Your Shipment</h4>
            <p>Get real-time updates on any shipment using your tracking number, Waybill, BOL, or PO reference.</p>
            <a href="{{ url('/track-now') }}" class="sdc-action-btn"><i class="fas fa-arrow-right" style="margin-right:6px"></i>Track Now</a>
        </div>
        <div class="sdc-action-card">
            <i class="fas fa-calendar-check"></i>
            <h4>Book a Pickup</h4>
            <p>Schedule a collection at your doorstep. We confirm within hours and collect quickly and safely.</p>
            <a href="{{ url('/contact') }}" class="sdc-action-btn"><i class="fas fa-arrow-right" style="margin-right:6px"></i>Book Pickup</a>
        </div>
        <div class="sdc-action-card">
            <i class="fas fa-route"></i>
            <h4>Search Schedules</h4>
            <p>Browse domestic and international routes, departure times, and available freight capacity.</p>
            <a href="{{ url('/services') }}" class="sdc-action-btn"><i class="fas fa-arrow-right" style="margin-right:6px"></i>View Schedules</a>
        </div>
    </div>
</section>

{{-- ===== 3. ABOUT SECTION ===== --}}
<section class="sdc-section">
    <div class="sdc-container">
        <div class="sdc-about-grid">
            <div class="sdc-about-img-wrap">
                <img src="assets/images/services.avif" alt="Swift Delivery operations">
                <div class="sdc-about-badge-box">
                    <div class="num">10+</div>
                    <div class="lbl">Years of<br>Excellence</div>
                </div>
            </div>
            <div>
                <span class="sdc-label">About Us</span>
                <h2 class="sdc-title">Your Trusted Logistics Partner Worldwide</h2>
                <div class="sdc-line"></div>
                <p class="sdc-subtitle">At Swift Delivery Courier, we are passionate about connecting people and businesses to the world through reliable, fast, and secure logistics. Founded on the principles of integrity and efficiency, we ensure every package from small parcels to complex freight is handled with the utmost care and delivered on schedule.</p>
                <ul class="sdc-check-list">
                    <li><i class="fas fa-check-circle"></i> Real-time shipment tracking across all modes of transport</li>
                    <li><i class="fas fa-check-circle"></i> Dedicated account managers for seamless communication</li>
                    <li><i class="fas fa-check-circle"></i> Fully insured freight handling for total peace of mind</li>
                    <li><i class="fas fa-check-circle"></i> Global network spanning 150+ countries and territories</li>
                </ul>
                <a href="{{ url('/about') }}" class="sdc-btn-primary">Learn More About Us</a>
            </div>
        </div>
    </div>
</section>

{{-- ===== 4. STATS BAR ===== --}}
<section class="sdc-stats">
    <div class="sdc-container">
        <div class="sdc-stats-grid">
            <div class="sdc-stat-item">
                <div class="num">150+</div>
                <div class="desc">Countries Served</div>
            </div>
            <div class="sdc-stat-item">
                <div class="num">50K+</div>
                <div class="desc">Shipments Delivered</div>
            </div>
            <div class="sdc-stat-item">
                <div class="num">98%</div>
                <div class="desc">On-Time Rate</div>
            </div>
            <div class="sdc-stat-item">
                <div class="num">24/7</div>
                <div class="desc">Customer Support</div>
            </div>
        </div>
    </div>
</section>

{{-- ===== 4b. AFFILIATED PARTNERS ===== --}}
<section class="sdc-partners">
    <div class="sdc-container">
        <div class="sdc-partners-heading">
            <p>Trusted Network</p>
            <h3>Affiliated with the World's Leading Logistics Companies</h3>
        </div>
        <div class="sdc-partners-logos">
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/dhl.com" alt="DHL">
                <span>DHL</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/fedex.com" alt="FedEx">
                <span>FedEx</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/ups.com" alt="UPS">
                <span>UPS</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/maersk.com" alt="Maersk">
                <span>Maersk</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/msc.com" alt="MSC">
                <span>MSC</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/dbschenker.com" alt="DB Schenker">
                <span>DB Schenker</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/kuehne-nagel.com" alt="Kuehne+Nagel">
                <span>Kuehne+Nagel</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/xpo.com" alt="XPO Logistics">
                <span>XPO Logistics</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/cma-cgm.com" alt="CMA CGM">
                <span>CMA CGM</span>
            </div>
            <div class="sdc-partner-item">
                <img src="https://logo.clearbit.com/cevalogistics.com" alt="CEVA Logistics">
                <span>CEVA Logistics</span>
            </div>
        </div>
    </div>
</section>

{{-- ===== 5. SERVICES GRID ===== --}}
<section class="sdc-section sdc-section-alt">
    <div class="sdc-container">
        <div style="text-align:center">
            <span class="sdc-label">Our Services</span>
            <h2 class="sdc-title" style="margin:0 auto">What We Deliver</h2>
            <div class="sdc-line" style="margin:16px auto 0"></div>
            <p class="sdc-subtitle" style="margin:16px auto 0">From intermodal freight to specialty cargo comprehensive logistics solutions designed to keep your supply chain moving, smoothly and on schedule.</p>
        </div>
        <div class="sdc-services-grid">
            <div class="sdc-service-card">
                <img src="wp-content/uploads/2022/04/services-intermod.jpg" alt="Intermodal">
                <div class="sdc-service-card-body">
                    <h3>Intermodal Transport</h3>
                    <p>Seamlessly combine rail, road, and sea freight for efficient, coast-to-coast and cross-border solutions with reduced handling costs.</p>
                    <a href="intermodal/index.html">Learn More <i class="fas fa-arrow-right" style="font-size:11px"></i></a>
                </div>
            </div>
            <div class="sdc-service-card">
                <img src="wp-content/uploads/2022/04/services-dedicated.jpg" alt="Dedicated Trucking">
                <div class="sdc-service-card-body">
                    <h3>Dedicated Trucking</h3>
                    <p>Exclusive fleet solutions tailored to your schedule and volume perfect for businesses with consistent, high-priority transportation needs.</p>
                    <a href="dedicated/index.html">Learn More <i class="fas fa-arrow-right" style="font-size:11px"></i></a>
                </div>
            </div>
            <div class="sdc-service-card">
                <img src="assets/images/air-cargo1.webp" alt="Air Freight">
                <div class="sdc-service-card-body">
                    <h3>Air Freight</h3>
                    <p>Priority air cargo services with global reach and real-time visibility. When speed is non-negotiable, we deliver by air fast and professional.</p>
                    <a href="air-freight/index.html">Learn More <i class="fas fa-arrow-right" style="font-size:11px"></i></a>
                </div>
            </div>
            <div class="sdc-service-card">
                <img src="wp-content/uploads/2022/04/services-truckload.jpg" alt="Truckload">
                <div class="sdc-service-card-body">
                    <h3>Truckload Freight</h3>
                    <p>Domestic and cross-border truck freight backed by a powerful carrier network reliable, scalable, and cost-effective for any load size.</p>
                    <a href="truckload/index.html">Learn More <i class="fas fa-arrow-right" style="font-size:11px"></i></a>
                </div>
            </div>
            <div class="sdc-service-card">
                <img src="wp-content/uploads/2022/04/services-ltl.jpg" alt="Pickup & Delivery">
                <div class="sdc-service-card-body">
                    <h3>Pickup &amp; Delivery</h3>
                    <p>Flexible pickup and delivery options tailored to any budget. Drop off at one of our warehouse locations or let us come to you.</p>
                    <a href="pickup-delivery%ef%bf%bc/index.html">Learn More <i class="fas fa-arrow-right" style="font-size:11px"></i></a>
                </div>
            </div>
            <div class="sdc-service-card">
                <img src="wp-content/uploads/2022/04/Specialty-Freight.jfif" alt="Specialty Freight">
                <div class="sdc-service-card-body">
                    <h3>Specialty Freight</h3>
                    <p>Expert handling for art, antiques, machinery, and oversized cargo. We consult, pack, crate, and ship with precision anywhere in the world.</p>
                    <a href="specialty-freight/index.html">Learn More <i class="fas fa-arrow-right" style="font-size:11px"></i></a>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin-top:44px">
            <a href="{{ url('/services') }}" class="sdc-btn-primary">View All Services</a>
        </div>
    </div>
</section>

{{-- ===== 6. TRACKING BAND ===== --}}
<section class="sdc-track-band">
    <div class="sdc-container">
        <div class="sdc-track-inner">
            <h2>Know Exactly Where Your Package Is.<span>Enter your tracking number below for instant updates.</span></h2>
            <form class="sdc-track-form" action="{{ url('/track-now') }}" method="GET">
                <input type="text" name="tracking_number" placeholder="Enter tracking number, Waybill or BOL..." required>
                <button type="submit"><i class="fas fa-search" style="margin-right:8px"></i>Track</button>
            </form>
        </div>
    </div>
</section>

{{-- ===== 7. WHY CHOOSE US ===== --}}
<section class="sdc-section">
    <div class="sdc-container">
        <div class="sdc-why-grid">
            <div>
                <span class="sdc-label">Why Choose Us</span>
                <h2 class="sdc-title">The Swift Delivery Difference</h2>
                <div class="sdc-line"></div>
                <p style="color:#555;font-size:15px;line-height:1.75">We combine decades of logistics expertise with modern technology to give you a seamless shipping experience with full transparency, speed, and zero compromise on safety.</p>
                <div class="sdc-why-cards">
                    <div class="sdc-why-card">
                        <i class="fas fa-satellite-dish"></i>
                        <h4>Live Tracking</h4>
                        <p>Real-time GPS visibility on every shipment, every step of the way.</p>
                    </div>
                    <div class="sdc-why-card">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Fully Insured</h4>
                        <p>Every parcel is covered end-to-end for complete peace of mind.</p>
                    </div>
                    <div class="sdc-why-card">
                        <i class="fas fa-headset"></i>
                        <h4>24/7 Support</h4>
                        <p>Our team is always on call to assist you with any query or issue.</p>
                    </div>
                    <div class="sdc-why-card">
                        <i class="fas fa-globe"></i>
                        <h4>Global Network</h4>
                        <p>Delivering across 150+ countries with trusted local partners worldwide.</p>
                    </div>
                </div>
            </div>
            <div class="sdc-why-img">
                <img src="assets/images/global-mail.avif" alt="Global logistics network">
            </div>
        </div>
    </div>
</section>

{{-- ===== 8. TESTIMONIALS ===== --}}
<section class="sdc-section sdc-section-alt">
    <div class="sdc-container">
        <div style="text-align:center">
            <span class="sdc-label">Testimonials</span>
            <h2 class="sdc-title" style="margin:0 auto">What Our Customers Are Saying</h2>
            <div class="sdc-line" style="margin:16px auto 0"></div>
        </div>
        <div class="sdc-testi-grid">
            <div class="sdc-testi-card">
                <div class="sdc-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p>When it comes to packaging, crating, and shipping, certain words carry a great deal of weight experience, know-how, and integrity. Swift Delivery Courier delivers on all three, every single time.</p>
                <div class="sdc-testi-author">
                    <div class="sdc-testi-avatar">S</div>
                    <div>
                        <div class="sdc-testi-name">Scotty F. George</div>
                        <div class="sdc-testi-role">Mega International</div>
                    </div>
                </div>
            </div>
            <div class="sdc-testi-card">
                <div class="sdc-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p>Our business depends on timely cross-border deliveries. Swift Delivery Courier has never let us down the real-time tracking and proactive updates give us total confidence.</p>
                <div class="sdc-testi-author">
                    <div class="sdc-testi-avatar">A</div>
                    <div>
                        <div class="sdc-testi-name">Amanda T. Brooks</div>
                        <div class="sdc-testi-role">Brooks Trading Co.</div>
                    </div>
                </div>
            </div>
            <div class="sdc-testi-card">
                <div class="sdc-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                <p>From pickup to final delivery, the process was seamless. The team handled our fragile machinery with absolute care. Highly recommend their specialty freight service.</p>
                <div class="sdc-testi-author">
                    <div class="sdc-testi-avatar">R</div>
                    <div>
                        <div class="sdc-testi-name">Richard O. Mensah</div>
                        <div class="sdc-testi-role">RM Engineering Ltd.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== 9. BOTTOM CTA ===== --}}
<section class="sdc-cta">
    <div class="sdc-container">
        <div class="sdc-cta-inner">
            <h2>Ready to Ship? Let's Get Started.</h2>
            <p>Join thousands of satisfied customers who trust Swift Delivery Courier to move what matters most reliably, securely, and on time.</p>
            <div class="sdc-cta-btns">
                <a href="{{ url('/contact') }}" class="sdc-btn-primary"><i class="fas fa-paper-plane" style="margin-right:8px"></i>Get a Quote</a>
                <a href="{{ url('/track-now') }}" class="sdc-btn-outline">Track a Shipment</a>
            </div>
        </div>
    </div>
</section>

</div>{{-- .sdc-page --}}

{{-- Bootstrap JS for carousel --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@include('partials.footer')
