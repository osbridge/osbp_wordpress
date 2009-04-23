<?php
/*
Template Name: Front Page
*/
?>
<?php get_header() ?>
   <div id="frontpage_info">
      <div class='inner_container'>
         <h2>Connecting developers across projects, languages, and backgrounds.</h2>
         <div id="frontpage_sidebar">
            <p id="conference-summary">
               <strong>Open Source Bridge</strong> is a new conference for developers working with open source technologies and for people interested in learning the open source way.
            </p>
            <ul class='soc'>
               <li class='pre-bulletted'><a href='http://twitter.com/osbridge' title='@osbridge on twitter' class='twitter chicklet'>Twitter</a></li>
               <li class='pre-bulletted'><a href='http://friendfeed.com/osbridge' title='osbridge on FriendFeed' class='friendfeed chicklet'>FriendFeed</a></li>
               <li class='pre-bulletted'><a href='http://www.facebook.com/group.php?gid=50942172062' title='Open Source Bridge Facebook Group' class='facebook chicklet'>Facebook</a></li>
               <li class='pre-bulletted'><a href='http://identi.ca/group/osbridge' title='!osbridge on identi.ca' class='identica chicklet'>identi.ca</a></li>
               <li class='pre-bulletted'><a href='http://www.linkedin.com/groups?home=&amp;gid=1853451' title='Open Source Bridge on LinkedIn' class='linkedin chicklet'>LinkedIn</a></li>
               <li class='pre-bulletted'><a href='http://dplr.it/osbridge09' class='dopplr chicklet'>Add trip to Dopplr</a></li>
            </ul>
            <ul>
               <li class='pre-bulletted'><a href='http://opensourcebridge.org/proposals.atom' class='chicklet rss'>Proposals feed</a></li>
               <li class='pre-bulletted'>
                  <a href='http://opensourcebridge.org/feed/' title='Open Source Bridge Blog Feed' class='rss chicklet'>Blog feed</a>
                  <p>
                     <a href="http://feeds2.feedburner.com/OpenSourceBridge" class='feedburner'>
                        <img src="http://feeds2.feedburner.com/~fc/OpenSourceBridge.gif?bg=FFFFFF&amp;fg=116DB6&amp;anim=0" height="26" width="88" style="border:0" alt="" />
                     </a>
                  </p>
               </li>
            </ul>
            
         </div>
         <div id="frontpage_callouts">
            <div class='register-callout'>
               Registration is only <strong>$250</strong> for three days.
               <a href='/attend' class='register-button'>Register Today</a>
            </div>
            <div class='hotel-callout'>
               Rooms start at just <strong>$139</strong>/night.
               <a href='/attend' class='book-room-button'>Book Your Room</a>
            </div>
            <div class='donate-callout'>
               Support your open source community.
               <a href='/sponsors/individual-donations/' class='donate-button'>Donate Now</a>
            </div>
         </div>
         <div id="frontpage_content">
            <?php the_content(); ?>
         </div>
      </div>
   </div>
   <div class='inner_container'>
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