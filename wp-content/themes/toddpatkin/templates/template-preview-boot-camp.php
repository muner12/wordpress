<?php

/**
 * Template Name: Preview Boot Camp Book
 */
get_header();
?>
<!-- Preview Book Main Section -->
<section class="preview-book-section">
    <div class="container">
        <div class="preview-book-content">
            <!-- Book Info Header -->
            <div class="book-preview-header d-flex justify-content-between align-items-center pb-3 border-bottom mb-4">
                <div class="book-preview-info d-flex flex-column">
                    <h1 class="book-preview-title mb-2">Boot Camp Twelve weeks of finding happiness</h1>
                    <p class="book-preview-author mb-0">Todd Patkin</p>
                </div>
                <a href="mailto:todd@toddpatkin.com" class="btn-purchase-book text-uppercase">Purchase Book</a>
            </div>

            <!-- Book Pages Viewer -->
            <div class="book-viewer">
                <div class="book-pages-container">
                    <!-- Page 1 - No Overlay -->
                    <div class="book-page book-page-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-page-2-5d9968.png" alt="Book Page 1" class="book-page-image" onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/book-boot-camp-762c6a.png'">
                    </div>
                    <!-- Page 2 - No Overlay -->
                    <div class="book-page book-page-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-page-2-5d9968.png" alt="Book Page 2" class="book-page-image" onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/book-boot-camp-762c6a.png'">
                    </div>
                    <!-- Page 3 - With Overlay -->
                    <div class="book-page book-page-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-page-4-256e71.png" alt="Book Page 3" class="book-page-image" onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/book-boot-camp-762c6a.png'">
                        <div class="book-page-overlay" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                            <div class="unlock-content">
                                <i class="fas fa-lock unlock-icon"></i>
                                <span class="unlock-text">Unlock</span>
                            </div>
                        </div>
                    </div>
                    <!-- Page 4 - With Overlay -->
                    <div class="book-page book-page-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-page-4-256e71.png" alt="Book Page 4" class="book-page-image" onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/book-boot-camp-762c6a.png'">
                        <div class="book-page-overlay" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                            <div class="unlock-content">
                                <i class="fas fa-lock unlock-icon"></i>
                                <span class="unlock-text">Unlock</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Purchase Book Modal -->
<div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content purchase-modal-content">
            <div class="modal-body purchase-modal-body">
                <!-- Alert Icon -->
                <div class="purchase-modal-icon">
                    <div class="alert-icon-circle">
                        <i class="fas fa-exclamation"></i>
                    </div>
                </div>
                <!-- Message -->
                <p class="purchase-modal-message">
                    Please purchase the book to get complete access to the book
                </p>
                <!-- Action Buttons -->
                <div class="purchase-modal-buttons">
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <a href="mailto:todd@toddpatkin.com" class="btn btn-buy-now">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

