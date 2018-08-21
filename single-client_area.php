<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package S&C_-_Party_Tunes
 */

get_header();
?>

    <div id="primary" class="content-area client-area-page">
        <main id="main" class="site-main">
            <?php
            while ( have_posts() ) : the_post();

                $page_object = get_queried_object();
                $page_id     = get_queried_object_id();
                $page_title = the_title();


//				get_template_part( 'template-parts/content', 'page' );

                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content" id="single-client">

                        <div class="container-flex client-header">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                                    <div class="col-md-3" style="background: url('<?php echo $image[0]; ?>')">

                                                    </div>
                                                <?php endif; ?>

                                                <div class="col-md-9">
                                                    <img src="/wp-content/uploads/2018/08/13_white.png" alt="floral-header-img" />
                                                    <h3>
                                                        Welcome to your client area
                                                    </h3>
                                                    <h1>
                                                        <?php echo the_title(); ?>!
                                                    </h1>
                                                    <p>
                                                        We want to help make the planning of your reception as easy as possible. We realize the stress that the entire wedding process has on a bride (and her family), but we want this part to be fun and creative for you. If at anytime, you need assistance in filling out any of the information or have questions on something unique you want to do, feel free to contact us.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="container client-info">
                            <div class="row">
                                <h2>
                                    The Reception Planner
                                </h2>
                                <div class="col-sm-9">
                                    <p>
                                        Let’s start off with the most important document that you’ll need to return at least two (2) weeks prior to your wedding day, the same time that any unpaid balances are due. The information that you provide is what we use to make sure things go as planned at the reception. After receiving this, we’ll evaluate it and then we’ll schedule a consultation to finalize all the details and go over any last minute concerns/questions.
                                    </p>
                                    <p>
                                        We’ve provided the Planner in a Word document or PDF version. If you have Microsoft Word, you might find it handy to save the file to your computer. That will allow you to edit and save your work as you go, until you have everything finalized and ready to return. Then, all you have to do is email it to us or print it out and mail it via the Post Office; either way works great.
                                    </p>
                                    <p>
                                        If you want to simply print the Planner out, manually fill in all the information and then return it back via regular Post Office mail, that would be fine as well. Remember, the Post Office is not delivering mail as quickly in some areas, so allow enough time so that it arrives on time. Please print clearly.
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <a class="file-pdf" href="/forms/ReceptionPlanner.pdf">
                                        <i class="fas fa-file-pdf"></i>
                                        Reception Planner
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a class="file-doc" href="/forms/ReceptionPlanner.doc">
                                        <i class="fas fa-file-word"></i>
                                        Reception Planner
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <h2>
                                    The Reception Planner Guide
                                </h2>
                                <div class="col-sm-9">
                                    <p>
                                        We’ve also compiled a ‘Hints &amp; Tips’ sheet that will help guide you thru the Planner. These are thing that we&#8217;ve picked up over the many years of doing wedding receptions and my hope would be that they help you create a successful reception plan.
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <div>
                                        <a class="file-pdf" href="/forms/HintsTipsforPlanning.pdf">
                                            <i class="fas fa-file-pdf"></i>
                                            Hints & Tips For Planning
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a class="file-doc" href="/forms/HintsTipsforPlanning.doc">
                                            <i class="fas fa-file-word"></i>
                                            Hints & Tips For Planning
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Music Database
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p>
                                        This is a listing of our digital music library. You may find duplicate songs due to songs being available on multiple cds or music subscription services that we purchase music from. Feel free to use this listing to help create any special song requests or help jog your memory of tunes that you might want to hear at the reception. No worries if you want a song and it’s not on the list; we have many resources and as long as the music can be purchased legally, we’ll have it for you.
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <div>
                                        <a class="file-pdf" href="/download/PartyTunesSongLibrary.pdf">
                                            <i class="fas fa-file-pdf"></i>
                                            Music Library
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a class="file-doc" href="/download/PartyTunesSongLibrary.xls">
                                            <i class="fas fa-file-word"></i>
                                            Music Library
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2>
                                    Ceremony Outline
                                </h2>

                                <div class="col-sm-9">
                                    <p>
                                        Use this outline if we are providing ceremony service(s).
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <div>
                                        <a class="file-pdf" href="/download/CeremonyOutline.pdf">
                                            <i class="fas fa-file-pdf"></i>
                                            Ceremony Outline
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a class="file-doc" href="/download/CeremonyOutline.doc">
                                            <i class="fas fa-file-word"></i>
                                            Ceremony Outline
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-flex wedding-wire-sec">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1>
                                            Wedding Wire
                                        </h1>
                                        <p>
                                            A great resource that we highly recommend. They specialize in connecting with future brides. Areas that you may find interesting:
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4>Complete Checklist</h4>
                                        <p>A way to stay organized with all of your wedding planning.
                                        </p>
                                        <a href="https://www.weddingwire.com/wedding-checklists.html">Click Here</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>Wedding Songs</h4>
                                        <p>A great list of popular weddings song for the Bride & Groom's first dance, special moment dances such as the Bride/Father & Groom/Mother and ideas for ceremony music too.</p>
                                        <a href="http://www.weddingwire.com/wedding-ideas/songs-music--t30">Click Here</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>Registry</h4>
                                        <p>Choose a favorite retailer, compare benefits, set up your gift registry.
                                        </p>
                                        <a href="https://www.weddingwire.com/wedding-registry">Click Here</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>Website</h4>
                                        <p>create you own website to share with family & friends.
                                        </p>
                                        <a href="https://www.weddingwire.com/wedding-planning.html">Click Here</a>
                                    </div>
                                </div>
                        </div>
                        <div class="container-flex current-music">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Top 2017 Songs</h2>
                                        <p>This list was compiled by DJ Intelligence, an online DJ planning system that many DJs across the country utilize. It's a good resource to help you plan music selection.</p>
                                        <a href="/wp-content/uploads/2018/01/Most-Requested-Songs-of-2017-1.pdf">Click Here</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2>Guest Requests</h2>
                                        <p>Give your guests the opportunity to send in their own song requests by including the belpw link on your invites, email or Facebook.</p>
                                        <a href="/request-line">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-flex review-us">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1>Review Us</h1>
                                        <p>After your day, we'd love to hear your thoughts about our service(s).  We'll send out a follow-up email, but like to give you a heads up prior to it's arrival.
                                        </p>
                                        <p>We use a 3rd party application to process the feedback.  We hope you'll take just a few minutes to leave us your thoughts. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post-<?php the_ID(); ?> -->


                <?php
            endwhile; // End of the loop.
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
