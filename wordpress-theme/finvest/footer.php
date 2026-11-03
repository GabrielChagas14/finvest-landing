<?php
/**
 * FinVest Theme Footer Template
 *
 * @package FinVest
 * @version 1.0.0
 */

$phone   = finvest_get_option( 'finvest_phone', '+1 (800) 555-VEST' );
$email   = finvest_get_option( 'finvest_email', 'advisory@finvestwealth.com' );
$address = finvest_get_option( 'finvest_address', '740 Park Avenue, Penthouse B, New York, NY 10021' );
$clean_p = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- ==================== SITE FOOTER ==================== -->
<footer class="site-footer" id="siteFooter">
    <div class="finvest-container">
        <!-- Top Footer Grid -->
        <div class="footer-top-grid">
            <!-- Col 1: Brand & Bio -->
            <div class="footer-brand-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                    <div class="brand-monogram">FV</div>
                    <div class="brand-text-wrap">
                        <span class="brand-name">FinVest</span>
                        <span class="brand-sub">Wealth Advisory</span>
                    </div>
                </a>
                <p class="footer-brand-desc">
                    FinVest is a fee-only Registered Investment Advisor (RIA) dedicated to fiduciary wealth management, intergenerational legacy planning, and bespoke portfolio architecture for high-net-worth individuals and family offices.
                </p>
                <div class="footer-socials">
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="X / Twitter">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>
                    </a>
                    <a href="https://bloomberg.com" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Bloomberg Terminal Network">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Core Disciplines -->
            <div>
                <h4 class="footer-col-title"><?php esc_html_e( 'Core Disciplines', 'finvest' ); ?></h4>
                <ul class="footer-links-list">
                    <li><a href="#services"><?php esc_html_e( 'Investment Management', 'finvest' ); ?></a></li>
                    <li><a href="#services"><?php esc_html_e( 'Retirement Planning', 'finvest' ); ?></a></li>
                    <li><a href="#services"><?php esc_html_e( 'Tax Optimization', 'finvest' ); ?></a></li>
                    <li><a href="#services"><?php esc_html_e( 'Business Advisory & M&A', 'finvest' ); ?></a></li>
                    <li><a href="#services"><?php esc_html_e( 'Real Estate Syndication', 'finvest' ); ?></a></li>
                    <li><a href="#services"><?php esc_html_e( 'Family Office Governance', 'finvest' ); ?></a></li>
                </ul>
            </div>

            <!-- Col 3: Fiduciary & Compliance -->
            <div>
                <h4 class="footer-col-title"><?php esc_html_e( 'Governance & Legal', 'finvest' ); ?></h4>
                <ul class="footer-links-list">
                    <li><a href="#about"><?php esc_html_e( 'Fiduciary Standard', 'finvest' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Form ADV Part 2A', 'finvest' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Client Relationship Summary (CRS)', 'finvest' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Privacy Policy', 'finvest' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Terms of Advisory', 'finvest' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'SEC Disclosures', 'finvest' ); ?></a></li>
                </ul>
            </div>

            <!-- Col 4: Private Office Location -->
            <div>
                <h4 class="footer-col-title"><?php esc_html_e( 'Private Office', 'finvest' ); ?></h4>
                <div class="footer-contact-info">
                    <div class="footer-contact-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span><?php echo esc_html( $address ); ?></span>
                    </div>
                    <div class="footer-contact-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <a href="tel:<?php echo esc_attr( $clean_p ); ?>"><?php echo esc_html( $phone ); ?></a>
                    </div>
                    <div class="footer-contact-row">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mandatory Regulatory Disclaimer -->
        <div class="footer-disclaimer-box">
            <p><strong>Regulatory & Compliance Disclosure:</strong> FinVest Wealth Advisory LLC is an investment adviser registered with the U.S. Securities and Exchange Commission (SEC). Registration of an investment adviser does not imply any specific level of skill or training and does not constitute an endorsement of the firm by the Commission. Past performance is no guarantee of future returns. Investments are not FDIC insured, nor are they deposits or other obligations of any bank.</p>
            <p>Client assets are held separately with qualified independent custodians including Charles Schwab & Co., Inc. and Fidelity Institutional Brokerage Services LLC, members FINRA/SIPC.</p>
        </div>

        <!-- Bottom Copyright -->
        <div class="footer-bottom">
            <div>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> FinVest Wealth Advisory LLC. All Rights Reserved. Designed by Gabriel Chagas.
            </div>
            <div class="footer-bottom-links">
                <a href="#siteHeader">Back to Top</a>
                <a href="#">Privacy Notice</a>
                <a href="#">Security Safeguards</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<!-- ==================== CONSULTATION BOOKING MODAL ==================== -->
<div class="finvest-modal" id="consultationModal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modalHeading">
    <div class="modal-backdrop close-consultation-modal"></div>
    <div class="modal-dialog">
        <button class="modal-close-btn close-consultation-modal" aria-label="<?php esc_attr_e( 'Close consultation window', 'finvest' ); ?>">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <div class="modal-header">
            <span class="section-kicker">Confidential Advisory</span>
            <h3 class="modal-title" id="modalHeading">Schedule a Free Consultation</h3>
            <p class="modal-desc">
                Speak directly with an accredited fiduciary wealth manager. We will review your current asset allocation and discuss tax-efficient strategies with zero sales pressure.
            </p>
        </div>

        <div class="modal-alert-success" role="alert">
            Thank you. Your consultation request has been received. A Managing Director will reach out to you within 4 business hours.
        </div>

        <form class="modal-form" id="consultationForm">
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label" for="clientName"><?php esc_html_e( 'Full Name *', 'finvest' ); ?></label>
                    <input type="text" id="clientName" name="client_name" class="form-input" required placeholder="Alexander Hamilton">
                </div>
                <div class="form-group">
                    <label class="form-label" for="clientEmail"><?php esc_html_e( 'Email Address *', 'finvest' ); ?></label>
                    <input type="email" id="clientEmail" name="client_email" class="form-input" required placeholder="alex@company.com">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label" for="clientPhone"><?php esc_html_e( 'Phone Number *', 'finvest' ); ?></label>
                    <input type="tel" id="clientPhone" name="client_phone" class="form-input" required placeholder="+1 (555) 000-0000">
                </div>
                <div class="form-group">
                    <label class="form-label" for="clientWealthBracket"><?php esc_html_e( 'Investable Assets *', 'finvest' ); ?></label>
                    <select id="clientWealthBracket" name="wealth_bracket" class="form-select" required>
                        <option value="" disabled selected><?php esc_html_e( 'Select wealth bracket', 'finvest' ); ?></option>
                        <option value="500k-1m">$500,000 – $1,000,000</option>
                        <option value="1m-3m">$1,000,000 – $3,000,000</option>
                        <option value="3m-10m">$3,000,000 – $10,000,000</option>
                        <option value="10m+">$10,000,000+ (Ultra HNW / Family Office)</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="primaryGoal"><?php esc_html_e( 'Primary Area of Interest *', 'finvest' ); ?></label>
                <select id="primaryGoal" name="primary_goal" class="form-select" required>
                    <option value="" disabled selected><?php esc_html_e( 'Select discipline', 'finvest' ); ?></option>
                    <option value="portfolio">Investment Portfolio Management</option>
                    <option value="retirement">Retirement & Cashflow Distribution</option>
                    <option value="tax">Tax Optimization & Structuring</option>
                    <option value="business">Business Financial Advisory & Exit</option>
                    <option value="realestate">Real Estate & Alternative Assets</option>
                    <option value="estate">Comprehensive Family Office Governance</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="consultationNotes"><?php esc_html_e( 'Confidential Notes (Optional)', 'finvest' ); ?></label>
                <textarea id="consultationNotes" name="notes" class="form-textarea" rows="3" placeholder="Briefly describe your objectives or questions..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 0.5rem;">
                Confirm Consultation Request
            </button>
            <p style="font-size: 0.75rem; text-align: center; color: var(--color-text-subtle);">
                Strictly confidential. FinVest will never sell or disclose your personal information.
            </p>
        </form>
    </div>
</div>

<!-- Back to Top Floating Button -->
<button class="back-to-top" aria-label="<?php esc_attr_e( 'Back to top of page', 'finvest' ); ?>">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
