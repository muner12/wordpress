<?php

/**
 * Template Name: Blog 3 - High-Functioning Depressive
 */
get_header();
?>
<style>
    /* Enhanced Blog Details Styling */
    .blog-details-header {
        margin-bottom: 40px;
        padding-bottom: 30px;
        border-bottom: 2px solid #E0E0E0;
    }
    
    .blog-meta-info {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;
        font-size: 14px;
        color: #808080;
    }
    
    .blog-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .blog-meta-item i {
        color: #275BA7;
    }
    
    .blog-details-title {
        margin-bottom: 20px;
    }
    
    .blog-author-card {
        background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%);
        border: 1px solid #E0E0E0;
        border-radius: 12px;
        padding: 25px;
        margin: 40px 0;
        display: flex;
        align-items: center;
        gap: 20px;
    }
    
    .blog-author-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #275BA7 0%, #1a4a8a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 32px;
        font-weight: bold;
        flex-shrink: 0;
    }
    
    .blog-author-info h4 {
        margin: 0 0 8px 0;
        font-size: 20px;
        color: #2D2D2D;
    }
    
    .blog-author-info p {
        margin: 0;
        color: #808080;
        font-size: 14px;
    }
    
    .blog-details-blockquote {
        background: linear-gradient(135deg, #F8F9FA 0%, #FFFFFF 100%);
        border-left: 5px solid #275BA7;
        padding: 30px 35px;
        margin: 40px 0;
        border-radius: 8px;
        position: relative;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    
    .blog-details-blockquote::before {
        content: '"';
        font-size: 80px;
        color: #275BA7;
        opacity: 0.2;
        position: absolute;
        top: 10px;
        left: 20px;
        font-family: Georgia, serif;
    }
    
    .blog-details-quote-text {
        position: relative;
        z-index: 1;
        font-size: 22px;
        line-height: 1.7;
    }
    
    .blog-details-quote-author {
        margin-top: 15px;
        font-weight: 600;
        color: #275BA7;
    }
    
    .blog-key-points {
        background: #F8F9FA;
        border-radius: 12px;
        padding: 30px;
        margin: 40px 0;
    }
    
    .blog-key-points h3 {
        color: #275BA7;
        margin-bottom: 20px;
        font-size: 24px;
    }
    
    .blog-key-points ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .blog-key-points li {
        padding: 12px 0 12px 35px;
        position: relative;
        font-size: 16px;
        line-height: 1.6;
        color: #2D2D2D;
    }
    
    .blog-key-points li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #275BA7;
        font-weight: bold;
        font-size: 20px;
    }
    
    .blog-social-share {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 20px 0;
        border-top: 1px solid #E0E0E0;
        border-bottom: 1px solid #E0E0E0;
        margin: 40px 0;
    }
    
    .blog-social-share span {
        font-weight: 600;
        color: #2D2D2D;
        margin-right: 10px;
    }
    
    .blog-social-share a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .blog-social-share a:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    
    .blog-social-share .share-facebook { background: #1877F2; }
    .blog-social-share .share-twitter { background: #1DA1F2; }
    .blog-social-share .share-linkedin { background: #0077B5; }
    .blog-social-share .share-email { background: #275BA7; }
    
    .blog-cta-section {
        background: linear-gradient(135deg, #275BA7 0%, #1a4a8a 100%);
        border-radius: 12px;
        padding: 40px;
        margin: 50px 0;
        text-align: center;
        color: white;
    }
    
    .blog-cta-section h3 {
        color: white;
        margin-bottom: 15px;
        font-size: 28px;
    }
    
    .blog-cta-section p {
        color: rgba(255,255,255,0.9);
        margin-bottom: 25px;
        font-size: 16px;
    }
    
    .blog-breadcrumb {
        margin-bottom: 30px;
        font-size: 14px;
    }
    
    .blog-breadcrumb a {
        color: #275BA7;
        text-decoration: none;
    }
    
    .blog-breadcrumb a:hover {
        text-decoration: underline;
    }
    
    .blog-breadcrumb span {
        color: #808080;
        margin: 0 8px;
    }
    
    @media (max-width: 768px) {
        .blog-author-card {
            flex-direction: column;
            text-align: center;
        }
        
        .blog-social-share {
            flex-wrap: wrap;
        }
        
        .blog-cta-section {
            padding: 30px 20px;
        }
    }
</style>

<section class="blog-details-page-section bg-white">
    <div class="container">

        <!-- Breadcrumb -->
        <nav class="blog-breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span>/</span>
            <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
            <span>/</span>
            <span>High-Functioning Depressive</span>
        </nav>

        <!-- Blog Post Content -->
        <div class="blog-details-content">

            <!-- Header Section -->
            <div class="blog-details-header">
                <!-- Meta Information -->
                <div class="blog-meta-info">
                    <div class="blog-meta-item">
                        <i class="fas fa-user"></i>
                        <span>Todd Patkin</span>
                    </div>
                    <div class="blog-meta-item">
                        <i class="far fa-calendar"></i>
                        <span><?php echo date('F j, Y'); ?></span>
                    </div>
                    <div class="blog-meta-item">
                        <i class="far fa-clock"></i>
                        <span>7 min read</span>
                    </div>
                    <div class="blog-meta-item">
                        <i class="fas fa-tag"></i>
                        <span>Mental Health</span>
                    </div>
                </div>

                <!-- Title -->
                <h1 class="blog-details-title">
                    5 Signs You're a High-Functioning Depressive (And What to Do About It)
                </h1>
            </div>

            <!-- Featured Image -->
            <div class="blog-details-featured-image mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_3.png"
                    alt="5 Signs You're a High-Functioning Depressive"
                    class="img-fluid w-100"
                    style="border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.1);">
            </div>

            <!-- Body Content -->
            <div class="blog-details-body">
                <p class="blog-details-paragraph" style="font-size: 20px; font-weight: 500; color: #2D2D2D; margin-bottom: 25px;">
                    You're successful, accomplished, and from the outside your life looks perfect. But inside, you're struggling. These are the warning signs I wish I'd recognized sooner.
                </p>
                
                <p class="blog-details-paragraph">
                    High-functioning depression is a real and often misunderstood condition. You can appear successful, maintain relationships, and excel at work—all while battling depression internally. This was my experience for many years.
                </p>
                
                <p class="blog-details-paragraph">
                    Here are 5 signs that you might be dealing with high-functioning depression: You're exhausted all the time, even after a full night's sleep. You're highly critical of yourself, no matter how much you achieve. You feel numb or empty, going through the motions without feeling much. You overcompensate with perfectionism, working harder to prove your worth. And you hide your true feelings, becoming an expert at masking your depression.
                </p>

                <!-- Key Points Section -->
                <div class="blog-key-points">
                    <h3>Key Takeaways</h3>
                    <ul>
                        <li>High-functioning depression is real and often hidden</li>
                        <li>Exhaustion and self-criticism are common symptoms</li>
                        <li>Perfectionism can be a coping mechanism</li>
                        <li>Asking for help is a sign of strength, not weakness</li>
                        <li>Professional support can be life-changing</li>
                    </ul>
                </div>

                <!-- Enhanced Blockquote -->
                <blockquote class="blog-details-blockquote">
                    <p class="blog-details-quote-text">
                        You don't have to be perfect to be worthy. Asking for help is a sign of strength, not weakness. You deserve to feel better.
                    </p>
                    <footer class="blog-details-quote-author">— Todd Patkin</footer>
                </blockquote>
                
                <p class="blog-details-paragraph">
                    If these signs resonate with you, know that you're not alone and help is available. Talk to someone—a therapist, counselor, or trusted friend can provide support. Prioritize self-care: rest, nutrition, exercise, and activities that bring you joy. Challenge perfectionism—you don't have to be perfect to be worthy. Consider professional help—therapy and/or medication can be life-changing. And be kind to yourself—you're doing the best you can, and that's enough.
                </p>
                
                <p class="blog-details-paragraph">
                    Remember: asking for help is a sign of strength, not weakness. You deserve to feel better.
                </p>
            </div>

            <!-- Author Card -->
            <div class="blog-author-card">
                <div class="blog-author-avatar">TP</div>
                <div class="blog-author-info">
                    <h4>Todd Patkin</h4>
                    <p>Author, Speaker & Happiness Advocate | Helping others discover true contentment beyond material success</p>
                </div>
            </div>

            <!-- Social Share -->
            <div class="blog-social-share">
                <span>Share this article:</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-facebook" title="Share on Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="share-twitter" title="Share on Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="share-linkedin" title="Share on LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>" class="share-email" title="Share via Email">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>

            <!-- Call to Action -->
            <div class="blog-cta-section">
                <h3>Ready to Transform Your Life?</h3>
                <p>Discover more insights on happiness, mental health, and personal transformation. Explore our resources and start your journey today.</p>
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-warning btn-lg">
                    <span class="btn-content">Explore More Blogs</span>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- RELATED BLOGS -->
<section class="blog-section bg-white">
    <div class="container ">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary-blue text-uppercase mb-2">RELATED <span class="text-warning">BLOGS</span></h2>
        </div>

        <div class="row g-4">
                <!-- Related Blog 1 -->
                <div class="col-12 col-md-4">
                    <a href="<?php echo esc_url(home_url('/blog/blog-1')); ?>" class="text-decoration-none">
                        <div class="card shadow-sm h-100 blog-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_1.png"
                                class="card-img-top blog-card-img"
                                alt="Money and Happiness">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge">Blogs</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">
                                    Money and Happiness: Why More Isn't Always Better
                                </h4>
                                <p class="card-text text-muted mb-3">
                                    Despite achieving financial success beyond my wildest dreams, I discovered the hard way that wealth can't buy happiness. Here's what actually creates lasting contentment...
                                </p>
                                <span class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Related Blog 2 -->
                <div class="col-12 col-md-4">
                    <a href="<?php echo esc_url(home_url('/blog/blog-2')); ?>" class="text-decoration-none">
                        <div class="card shadow-sm h-100 blog-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_2.png"
                                class="card-img-top blog-card-img"
                                alt="The Quiet Time Revolution">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge">Blogs</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">
                                    The Quiet Time Revolution: Why Doing Nothing Changed Everything
                                </h4>
                                <p class="card-text text-muted mb-3">
                                    As a chronic achiever and perfectionist, the concept of 'quiet time' seemed impossible—and unnecessary. But learning to be still became one of the most transformative...
                                </p>
                                <span class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Related Blog 3 -->
                <div class="col-12 col-md-4">
                    <a href="<?php echo esc_url(home_url('/blog/blog-3')); ?>" class="text-decoration-none">
                        <div class="card shadow-sm h-100 blog-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_3.png"
                                class="card-img-top blog-card-img"
                                alt="5 Signs You're a High-Functioning Depressive">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge">Blogs</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">
                                    5 Signs You're a High-Functioning Depressive (And What to Do About It)
                                </h4>
                                <p class="card-text text-muted mb-3">
                                    You're successful, accomplished, and from the outside your life looks perfect. But inside, you're struggling. These are the warning signs I wish I'd recognized sooner...
                                </p>
                                <span class="btn btn-warning btn-sm"><span class="btn-content">Read More</span></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
