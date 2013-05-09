<?php
/*
Template Name: Front Page
*/
?>
<?php get_header() ?>
   <div id="frontpage_info">
      <div class='inner_container' style="z-index:10">
         <h2>Connecting developers across projects, languages, and backgrounds.</h2>
         <?php if ( is_active_sidebar( 'frontpage' ) ) : ?>
           <div id="frontpage_sidebar">
              <?php dynamic_sidebar( 'frontpage' ); ?>
           </div>
         <?php endif; ?>
            
         <?php if ( is_active_sidebar( 'sponsors' ) ) : ?>
           <div id="frontpage_callouts">
              <div id='sponsors-callout'>
                <?php dynamic_sidebar( 'sponsors' ); ?>
              </div>
           </div>
         <?php endif; ?>
         <div id="frontpage_content">
            <!-- ACCEPTING PROPOSALS:
            <div id='frontpage_cfp_callout'>
               <h3>Call for presentation proposals is open!</h3>
               <p>
                    We are accepting your proposals through March 23rd.
                    <a href='http://opensourcebridge.org/call-for-proposals/' class='button'>Submit Now</a>
               </p>
            </div>
            -->

            <!-- CONFERENCE IS HERE:
            <div id='frontpage_cfp_callout'>
               <h3>The conference is here!</h3>
               <p>
                  Check out the <a href='http://opensourcebridge.org/schedule' style="color: #fff; text-decoration: underline">schedule</a>, follow us on <a href="http://twitter.com/osbridge" style="color: #fff; text-decoration: underline">twitter</a> 
                  for announcements and updates, or stop by the <a href="http://opensourcebridge.org/2011/wiki/Hacker_Lounge" style="color: #fff; text-decoration: underline">Hacker Lounge</a> anytime!
                  
                  <a href='http://opensourcebridge.org/schedule/' class='button'>View Schedule</a>
               </p>
            </div>
            -->

            <!-- CONFERENCE IS OVER: -->
            <div id='frontpage_register_callout'>
                <h3>Registration for 2013 is open!</h3>
                <p>
                    Tickets are only $300!<br />
                    Want to help us plan the conference? <a href='http://groups.google.com/group/osbridge' style="text-decoration: underline; color: #fff;">Join our planning group!</a>

                    <a href='http://osbridge.eventbrite.com/' class='button'>Register Now</a>
                </p>
            </div>
            <?php the_content(); ?>
         </div>
      </div>
   </div>
   <div class='inner_container' style="z-index:1">
      <div id="frontpage_blog">
         <h2 id='latest_news_head'>Latest Blog Post <a href='/blog'>View more posts</a></h2>
            
         <?php query_posts('showposts=1'); ?>
            
      <?php while ( have_posts() ) : the_post() ?>

         <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
            <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
            <div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
            <div class="entry-content">
               <?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
               <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
            </div>
            <div class="entry-meta">
               <span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
               <span class="meta-sep">|</span>
               <span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
               <span class="meta-sep">|</span>
               <?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
               <?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
               <span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
            </div>
         </div><!-- .post -->

         <?php comments_template() ?>

         <?php endwhile; ?>
            
      </div>
   </div>

<?php get_footer() ?>
