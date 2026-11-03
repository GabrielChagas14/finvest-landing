<?php
/**
 * Template Name: Front Page Template
 *
 * @package FinVest
 * @version 1.0.0
 */

get_header();

$phone   = finvest_get_option( 'finvest_phone', '+1 (800) 555-VEST' );
$email   = finvest_get_option( 'finvest_email', 'advisory@finvestwealth.com' );
$aum     = finvest_get_option( 'finvest_aum', '$1.8B+' );
$clean_p = preg_replace( '/[^0-9+]/', '', $phone );
?>

<main id="primary" class="site-main">

    <!-- ==================== 1. HERO SECTION ==================== -->
    <section class="hero-section" id="hero">
        <div class="hero-bg-overlay"></div>
        <div class="hero-grid-mesh"></div>

        <div class="finvest-container hero-content">
            <!-- Trust Badge Pill -->
            <div class="hero-badge animate-fade-in-up">
                <span class="hero-badge-dot"></span>
                <span>Fiduciary Wealth Advisory • SEC Registered</span>
            </div>

            <!-- Master Headlines -->
            <h1 class="hero-title animate-fade-in-up">
                Your Wealth. <br>
                <span class="text-gradient-gold">Our Expertise.</span>
            </h1>

            <p class="hero-lead animate-fade-in-up">
                Institutional-grade portfolio management, aggressive tax mitigation, and generational wealth preservation designed exclusively for business founders, executives, and high-net-worth families.
            </p>

            <!-- Dual CTAs -->
            <div class="hero-actions animate-fade-in-up">
                <button type="button" class="btn btn-primary btn-lg open-consultation-modal">
                    <span>Schedule a Free Consultation</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
                <a href="#services" class="btn btn-secondary btn-lg">
                    <span>Explore Advisory Disciplines</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M7 13l5 5 5-5M7 6l5 5 5-5"/>
                    </svg>
                </a>
            </div>

            <!-- High-Impact Live Stats Strip -->
            <div class="hero-stats-bar">
                <div class="stat-item">
                    <div class="stat-number" data-target="1.8" data-prefix="$" data-suffix="B+" data-decimals="1"><?php echo esc_html( $aum ); ?></div>
                    <div class="stat-label">Assets Under Advisory</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="99.2" data-suffix="%" data-decimals="1">99.2%</div>
                    <div class="stat-label">Client Retention Rate</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="25" data-suffix="+">25+</div>
                    <div class="stat-label">Avg. Advisor Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="100" data-suffix="%">100%</div>
                    <div class="stat-label">Fee-Only Fiduciary</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 2. TRUST SIGNALS & CERTIFICATIONS ==================== -->
    <section class="trust-section" id="trustSignals">
        <div class="finvest-container">
            <h2 class="trust-title">Recognized & Accredited by Leading Financial Institutions</h2>
            <div class="trust-badges-grid">
                <!-- CFP Board -->
                <div class="trust-badge-item">
                    <div class="trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                    <span>CFP® Board Certified</span>
                </div>

                <!-- CFA Institute -->
                <div class="trust-badge-item">
                    <div class="trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <span>CFA® Charterholder</span>
                </div>

                <!-- SEC Registered -->
                <div class="trust-badge-item">
                    <div class="trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <span>SEC Registered Fiduciary</span>
                </div>

                <!-- Bloomberg Partner -->
                <div class="trust-badge-item">
                    <div class="trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                    </div>
                    <span>Bloomberg Certified Analytics</span>
                </div>

                <!-- Morningstar -->
                <div class="trust-badge-item">
                    <div class="trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <span>Morningstar Institutional</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 3. SERVICES SECTION ==================== -->
    <section class="section" id="services">
        <div class="finvest-container">
            <div class="section-header">
                <span class="section-kicker">Core Disciplines</span>
                <h2 class="section-title">Comprehensive Wealth Architecture</h2>
                <p class="section-desc">
                    True wealth management requires an integrated approach. We orchestrate every facet of your financial life to maximize risk-adjusted yields and insulate your legacy.
                </p>
            </div>

            <div class="services-grid">
                <!-- Service 1: Investment Portfolio Management -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="20" x2="12" y2="10"></line>
                            <line x1="18" y1="20" x2="18" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="16"></line>
                        </svg>
                    </div>
                    <h3 class="service-card-title">Investment Portfolio Management</h3>
                    <p class="service-card-desc">
                        Custom multi-asset allocation incorporating equities, private credit, and alternative markets designed to preserve principal while compounding real long-term growth.
                    </p>
                    <ul class="service-features-list">
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Algorithmic tax-loss harvesting</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Downside tail-risk hedging models</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Access to private market co-investments</span>
                        </li>
                    </ul>
                    <a href="#contact" class="service-link open-consultation-modal">
                        <span>Discuss Portfolio Allocation</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <!-- Service 2: Retirement Planning -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3 class="service-card-title">Retirement Planning & Distribution</h3>
                    <p class="service-card-desc">
                        Advanced cash-flow modeling and asset decumulation strategies that guarantee lifestyle freedom without eroding capital, regardless of market volatility.
                    </p>
                    <ul class="service-features-list">
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Sequence-of-returns protection</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Mega Backdoor Roth conversions</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Longevity stress-testing (Monte Carlo)</span>
                        </li>
                    </ul>
                    <a href="#contact" class="service-link open-consultation-modal">
                        <span>Plan Retirement Horizon</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <!-- Service 3: Tax Optimization -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                    </div>
                    <h3 class="service-card-title">Tax Optimization & Structuring</h3>
                    <p class="service-card-desc">
                        Aggressive, legally insulated tax mitigation strategies in direct coordination with top estate attorneys and CPAs to minimize federal and state tax friction.
                    </p>
                    <ul class="service-features-list">
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Qualified Small Business Stock (QSBS)</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Charitable Remainder Trusts (CRT)</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Asset location across taxable & exempt</span>
                        </li>
                    </ul>
                    <a href="#contact" class="service-link open-consultation-modal">
                        <span>Review Tax Strategy</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <!-- Service 4: Business Financial Advisory -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h3 class="service-card-title">Business Financial Advisory</h3>
                    <p class="service-card-desc">
                        Advising founders and enterprise owners through capital structuring, liquidity events, executive non-qualified deferred compensation, and M&A exits.
                    </p>
                    <ul class="service-features-list">
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Pre-liquidity transaction planning</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Key-person & buyout funding agreements</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Cash surplus treasury yield optimization</span>
                        </li>
                    </ul>
                    <a href="#contact" class="service-link open-consultation-modal">
                        <span>Consult on Enterprise Advisory</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <!-- Service 5: Real Estate Investment -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <h3 class="service-card-title">Real Estate Investment & Syndication</h3>
                    <p class="service-card-desc">
                        Direct commercial real estate allocation, institutional debt facilities, and tax-deferred 1031 exchanges to generate non-correlated passive cash flow.
                    </p>
                    <ul class="service-features-list">
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Section 1031 & Delaware Statutory Trusts (DST)</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Direct real estate private placement deals</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Depreciation & cost segregation advisory</span>
                        </li>
                    </ul>
                    <a href="#contact" class="service-link open-consultation-modal">
                        <span>Explore Real Estate Assets</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <!-- Service 6: Family Office & Estate Governance -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="service-card-title">Family Office & Estate Governance</h3>
                    <p class="service-card-desc">
                        Intergenerational wealth transfer architecture, irrevocable trusts, family constitutions, and philanthropic governance to protect dynastic capital.
                    </p>
                    <ul class="service-features-list">
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Dynasty trust structuring & protection</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Next-generation financial stewardship</span>
                        </li>
                        <li class="service-feature-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>Private donor-advised foundation setup</span>
                        </li>
                    </ul>
                    <a href="#contact" class="service-link open-consultation-modal">
                        <span>Preserve Family Legacy</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 4. ABOUT SECTION (SPLIT LAYOUT) ==================== -->
    <section class="section section-darker" id="about">
        <div class="finvest-container">
            <div class="about-grid">
                <!-- Left Narrative Column -->
                <div class="about-narrative">
                    <span class="section-kicker">The FinVest Standard</span>
                    <h2 class="about-heading">
                        A Pure Fee-Only Fiduciary Firm <br>
                        <span class="text-gradient-gold">Dedicated Solely to Your Interests</span>
                    </h2>

                    <p class="about-body">
                        Most commercial banks and brokerage conglomerates sell proprietary products laced with hidden commissions and undisclosed conflicts of interest. At FinVest, we operate under a legally binding fiduciary oath: we never accept kickbacks, load fees, or third-party incentives.
                    </p>

                    <p class="about-body">
                        Every strategy we recommend is engineered with one objective: compounding your net worth after taxes, fees, and inflation.
                    </p>

                    <!-- Fiduciary Pledge Box -->
                    <div class="fiduciary-pledge-box">
                        <div class="fiduciary-pledge-quote">
                            "When an advisor is compensated by product commissions, their client is no longer their priority. Our fee-only model guarantees our fiduciary loyalty sits on the exact same side of the table as yours."
                        </div>
                        <div class="fiduciary-pledge-author">
                            — Alexander Vance, CFA | Managing Partner & CIO
                        </div>
                    </div>

                    <!-- Value Highlights -->
                    <div class="about-highlights">
                        <div class="about-highlight-item">
                            <div class="highlight-check">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div>
                                <h4 class="highlight-title">Zero Product Sales</h4>
                                <p class="highlight-text">We manage custom portfolios, never proprietary mutual funds or insurance quotas.</p>
                            </div>
                        </div>

                        <div class="about-highlight-item">
                            <div class="highlight-check">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div>
                                <h4 class="highlight-title">Independent Custody</h4>
                                <p class="highlight-text">Your assets stay strictly in your name at Charles Schwab or Fidelity Institutional.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Allocation Card -->
                <div class="about-visual-card">
                    <div class="visual-card-inner">
                        <div class="visual-card-header">
                            <div>
                                <h3 class="visual-card-title">Target Portfolio Architecture</h3>
                                <span style="font-size: 0.8rem; color: var(--color-text-subtle);">Active Multi-Asset Balance</span>
                            </div>
                            <div class="visual-pill">Beta: 0.68 | Alpha: +3.4%</div>
                        </div>

                        <div class="allocation-breakdown">
                            <!-- Asset 1 -->
                            <div class="allocation-item">
                                <div class="allocation-label-row">
                                    <span>Global Core Equities (Factor-Tilted)</span>
                                    <strong class="text-gold">40%</strong>
                                </div>
                                <div class="allocation-bar-bg">
                                    <div class="allocation-bar-fill" style="width: 40%;"></div>
                                </div>
                            </div>

                            <!-- Asset 2 -->
                            <div class="allocation-item">
                                <div class="allocation-label-row">
                                    <span>Private Credit & Floating Debt</span>
                                    <strong class="text-gold">25%</strong>
                                </div>
                                <div class="allocation-bar-bg">
                                    <div class="allocation-bar-fill" style="width: 25%;"></div>
                                </div>
                            </div>

                            <!-- Asset 3 -->
                            <div class="allocation-item">
                                <div class="allocation-label-row">
                                    <span>Direct Real Estate & Infrastructure</span>
                                    <strong class="text-gold">20%</strong>
                                </div>
                                <div class="allocation-bar-bg">
                                    <div class="allocation-bar-fill" style="width: 20%;"></div>
                                </div>
                            </div>

                            <!-- Asset 4 -->
                            <div class="allocation-item">
                                <div class="allocation-label-row">
                                    <span>Alternative Strategies & Liquid Hedging</span>
                                    <strong class="text-gold">15%</strong>
                                </div>
                                <div class="allocation-bar-bg">
                                    <div class="allocation-bar-fill" style="width: 15%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="visual-custodians">
                            <div>Primary Custodians:</div>
                            <div><span>Charles Schwab</span> &bull; <span>Fidelity Institutional</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 5. PROCESS SECTION (NUMBERED STEPS) ==================== -->
    <section class="section" id="process">
        <div class="finvest-container">
            <div class="section-header">
                <span class="section-kicker">Our Proven Methodology</span>
                <h2 class="section-title">Four Steps to Disciplined Wealth Management</h2>
                <p class="section-desc">
                    Disciplined wealth preservation is not an event — it is a continuous, institutional framework built upon empirical rigor and transparency.
                </p>
            </div>

            <div class="process-grid">
                <!-- Step 1 -->
                <div class="process-step-card">
                    <div class="step-number-wrap">01</div>
                    <h3 class="step-title">Discovery &amp; Wealth Audit</h3>
                    <p class="step-desc">
                        We perform an exhaustive forensic analysis of your current assets, tax liabilities, fee drag, and estate encumbrances to establish baseline metrics.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="process-step-card">
                    <div class="step-number-wrap">02</div>
                    <h3 class="step-title">Bespoke Architecture</h3>
                    <p class="step-desc">
                        Our investment committee constructs a tailored wealth blueprint incorporating asset location, liability immunization, and risk tolerances.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="process-step-card">
                    <div class="step-number-wrap">03</div>
                    <h3 class="step-title">Tactical Execution</h3>
                    <p class="step-desc">
                        We deploy capital via institutional trading desks, utilizing dollar-cost and tax-loss parameters to minimize transaction friction.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="process-step-card">
                    <div class="step-number-wrap">04</div>
                    <h3 class="step-title">Fiduciary Governance</h3>
                    <p class="step-desc">
                        Continuous oversight, quarterly family rebalancing reviews, and proactive annual tax planning keep your wealth trajectory on target.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 6. TEAM SECTION ==================== -->
    <section class="section section-darker" id="team">
        <div class="finvest-container">
            <div class="section-header">
                <span class="section-kicker">Advisory Leadership</span>
                <h2 class="section-title">Senior Fiduciary Partners</h2>
                <p class="section-desc">
                    Our leadership combines decades of senior tier-one investment banking, estate law, and private market experience.
                </p>
            </div>

            <div class="team-grid">
                <!-- Advisor 1 -->
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <div class="team-photo-placeholder">AV</div>
                        <div class="team-badge-overlay">Managing Partner &amp; CIO</div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Alexander Vance, CFA</h3>
                        <span class="team-role">Chief Investment Officer</span>
                        <p class="team-bio">
                            Former Managing Director of Global Equities at Goldman Sachs with 22 years of market experience. Directs FinVest's global allocation committee and tail-risk hedging.
                        </p>
                        <div class="team-credentials-list">
                            <span class="credential-tag">CFA Charter</span>
                            <span class="credential-tag">Wharton MBA</span>
                            <span class="credential-tag">22+ Yrs Exp</span>
                        </div>
                    </div>
                </div>

                <!-- Advisor 2 -->
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <div class="team-photo-placeholder">ES</div>
                        <div class="team-badge-overlay">Partner, Head of Wealth Planning</div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Eleanor Sterling, CFP®, JD</h3>
                        <span class="team-role">Partner, Estate &amp; Tax Structuring</span>
                        <p class="team-bio">
                            Specializes in high-net-worth dynasty trusts, cross-border tax sheltering, and pre-liquidity business planning. Dual-credentialed in law and financial planning.
                        </p>
                        <div class="team-credentials-list">
                            <span class="credential-tag">CFP® Certified</span>
                            <span class="credential-tag">Harvard Law JD</span>
                            <span class="credential-tag">18+ Yrs Exp</span>
                        </div>
                    </div>
                </div>

                <!-- Advisor 3 -->
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <div class="team-photo-placeholder">MC</div>
                        <div class="team-badge-overlay">Senior Partner, Private Markets</div>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Marcus Chen, CAIA</h3>
                        <span class="team-role">Director of Alternative Assets</span>
                        <p class="team-bio">
                            Leads direct real estate syndication, private credit facilities, and non-correlated alternative fund screening for our qualified high-net-worth families.
                        </p>
                        <div class="team-credentials-list">
                            <span class="credential-tag">CAIA Certified</span>
                            <span class="credential-tag">MIT Sloan MSF</span>
                            <span class="credential-tag">16+ Yrs Exp</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 7. TESTIMONIALS SECTION ==================== -->
    <section class="section" id="testimonials">
        <div class="finvest-container">
            <div class="section-header">
                <span class="section-kicker">Client Perspectives</span>
                <h2 class="section-title">Trusted by Discerning Investors</h2>
                <p class="section-desc">
                    Here is what our clients say about partnering with a pure fiduciary advisory firm.
                </p>
            </div>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-quote">
                            "After our software company completed an $85M exit, every private bank pitched commission products. FinVest was the only firm that structured an institutional trust framework, reduced our capital gains burden by 34%, and protected our family's capital."
                        </p>
                    </div>
                    <div class="testimonial-client">
                        <div class="client-avatar">RK</div>
                        <div>
                            <div class="client-name">Richard K.</div>
                            <div class="client-title">Enterprise Tech Founder &amp; Angel Investor</div>
                            <span class="portfolio-metric-badge">Advisory Client: 6 Years</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-quote">
                            "The tax optimization and real estate syndication access provided by Eleanor and Marcus are second to none. They transformed our idle corporate cash into tax-sheltered cash flow. They truly act as our external family office."
                        </p>
                    </div>
                    <div class="testimonial-client">
                        <div class="client-avatar">SM</div>
                        <div>
                            <div class="client-name">Sarah M., MD</div>
                            <div class="client-title">Healthcare Executive &amp; Surgical Practice Founder</div>
                            <span class="portfolio-metric-badge">Advisory Client: 4 Years</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div>
                        <div class="testimonial-stars">
                            ★★★★★
                        </div>
                        <p class="testimonial-quote">
                            "FinVest's fee-only philosophy gave us absolute peace of mind. Alexander's multi-asset downside hedging saved our principal during the volatile rate hikes, while preserving double-digit real returns across our commercial holdings."
                        </p>
                    </div>
                    <div class="testimonial-client">
                        <div class="client-avatar">DL</div>
                        <div>
                            <div class="client-name">David L.</div>
                            <div class="client-title">Principal, Commercial Real Estate Holdings</div>
                            <span class="portfolio-metric-badge">Advisory Client: 8 Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 8. CTA BANNER SECTION ==================== -->
    <section class="cta-banner-section" id="contact">
        <div class="finvest-container">
            <div class="cta-banner-card">
                <span class="section-kicker">Confidential Wealth Audit</span>
                <h2 class="cta-banner-title">
                    Ready to Elevate Your Wealth Strategy?
                </h2>
                <p class="cta-banner-desc">
                    Schedule a private, no-obligation consultation with our Senior Partners. We will analyze your current asset allocation, identify fee and tax leaks, and outline bespoke opportunities.
                </p>

                <div class="cta-banner-actions">
                    <button type="button" class="btn btn-primary btn-lg open-consultation-modal">
                        <span>Schedule a Free Consultation</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                    <a href="tel:<?php echo esc_attr( $clean_p ); ?>" class="btn btn-gold-outline btn-lg">
                        <span>Call Direct: <?php echo esc_html( $phone ); ?></span>
                    </a>
                </div>

                <div class="cta-contact-strip">
                    <div class="cta-contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>Direct Desk: <a href="tel:<?php echo esc_attr( $clean_p ); ?>"><?php echo esc_html( $phone ); ?></a></span>
                    </div>

                    <div class="cta-contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span>Confidential Inquiries: <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></span>
                    </div>

                    <div class="cta-contact-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>100% Confidential Fiduciary Review</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
