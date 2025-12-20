 <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row footer-top-section">
                <div class="col-12 col-lg-4 mb-4 mb-lg-0 footer-about-column">
                    <h5 class="footer-title-todd">Todd Patkin</h5>
                    <p class="footer-description">Todd Patkin is an author, keynote speaker, and happiness coach dedicated to helping individuals and organizations overcome stress, anxiety, and depression to build more fulfilling lives and thriving workplace cultures.</p>
                    <div class="footer-social-icons">
                        <a href="#" class="footer-social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="http://twitter.com/#!/ToddPatkin" class="footer-social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/toddpatkinthehappinesscoach/" class="footer-social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.facebook.com/ToddPatkin" class="footer-social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="footer-social-icon" aria-label="X"><i class="fab fa-x"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-4 mb-4 mb-lg-0 footer-services-column">
                    <h5 class="footer-title-yellow">SERVICES</h5>
                    <ul class="footer-list">
                        <li><a href="<?php echo esc_url( toddpatkin_get_page_url( 'about-author', 'templates/template-about-author.php' ) ); ?>" class="footer-link">About Author</a></li>
                        <li><a href="<?php echo esc_url( toddpatkin_get_page_url( 'expertise', 'templates/template-expertise.php' ) ); ?>" class="footer-link">Expertise</a></li>
                        <li><a href="#books" class="footer-link">Author Books</a></li>
                        <li><a href="<?php echo esc_url( toddpatkin_get_page_url( 'course', 'templates/template-course.php' ) ); ?>" class="footer-link">Courses</a></li>
                        <li><a href="<?php echo esc_url( toddpatkin_get_page_url( 'blog', 'templates/template-blog.php' ) ); ?>" class="footer-link">Blogs</a></li>
                        <li><a href="#video" class="footer-link">Videos</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-4 mb-4 mb-lg-0 footer-company-column">
                    <h5 class="footer-title-yellow">COMPANY</h5>
                    <ul class="footer-list">
                        <li><a href="#about" class="footer-link">About us</a></li>
                        <li><a href="#" class="footer-link">Our Team</a></li>
                        <li><a href="#contact" class="footer-link">Contact</a></li>
                    </ul>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="row footer-bottom-section">
                <div class="col-12 col-lg-6 mb-3 mb-lg-0 footer-copyright-wrapper">
                    <p class="footer-copyright">&copy; 2025 Todd Patkin. All rights reserved.</p>
                </div>
                <div class="col-12 col-lg-6 footer-bottom-links-wrapper">
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    <a href="#" class="footer-bottom-link">Terms of Service</a>
                    <a href="#" class="footer-bottom-link">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content contact-modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contact-modal-header mb-4">
                        <h2 class="contact-modal-title">Contact Us</h2>
                        <p class="contact-modal-subtitle">Lorem ipsum dolor sit amet consectetur. In</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="afd0a9d" title="Contact form_copy"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content success-modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="success-modal-header text-center">
                        <div class="success-modal-icon mb-4">
                            <div class="success-checkmark-outer">
                                <div class="success-checkmark-inner">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="success-modal-title mb-3">Successfull</h2>
                        <p class="success-modal-message mb-4">Please purchase the book to get complete access to the book</p>
                        <button type="button" class="btn btn-warning w-100 success-modal-close-btn" data-bs-dismiss="modal">
                            Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0 py-2 px-3">
                    <h6 class="modal-title text-white mb-0" id="videoModalLabel">Todd Speaking at TEDx</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe 
                            id="videoIframe"
                            src="" 
                            title="Todd Speaking at TEDx"
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Video Modal -->
    <div class="modal fade" id="courseVideoModal" tabindex="-1" aria-labelledby="courseVideoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0 py-2 px-3">
                    <h6 class="modal-title text-white mb-0" id="courseVideoModalLabel">Course Preview</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe 
                            id="courseVideoIframe"
                            src="" 
                            title="Course Preview"
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>

</html>