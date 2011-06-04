<?php
/*
Template Name: Front Page
*/
?>
<?php get_header() ?>
   <div id="frontpage_info">
      <div class='inner_container' style="z-index:10">
         <h2>Connecting developers across projects, languages, and backgrounds.</h2>
         <div id="frontpage_sidebar">
            <p id="conference-summary">
               <strong>Open Source Bridge</strong> is a conference for developers working with open source technologies and for people interested in learning the open source way.
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
            <div id='sponsors-callout'>
              <h3><a href="/sponsors/2011/">2011 Sponsors</a></h3>
              <h4>Advocates</h4>
              <ul>
                <li><a href="http://myemma.com/"><img src='http://opensourcebridge.org/wp-content/uploads/2009/02/emma_logo09.png' alt='emma' width="170" /></a></li>
                <li><a href="http://www.gilt.com"><img src='http://opensourcebridge.org/wp-content/uploads/2011/05/Gilt_Groupe.jpg' alt='Gilt Groupe' width="170" /></a></li>
                <li><a href="http://openstack.org"><img src='http://opensourcebridge.org/wp-content/uploads/2011/05/openstack.gif' alt='OpenStack' width="170" /></a></li>
                <li><a href="http://www.discogs.com/"><img src='http://opensourcebridge.org/wp-content/uploads/2011/05/discogs.jpg' alt='Discogs' width="170" /></a></li>
                <li><a href='http://www.google.com/'><img src='<?php bloginfo('template_directory'); ?>/i/sponsors/google.png' alt='Google' /></a></li>
              </ul>
              <h4>Citizens</h4>
              <ul>
                <li><a href="http://www.puppetlabs.com/"><img src='http://opensourcebridge.org/wp-content/uploads/2010/02/puppet.png' alt='Puppet Labs' height="100" /></a></li>
                <li><a href="http://www.shopigniter.com/"><img src='http://opensourcebridge.org/wp-content/uploads/2011/05/shopigniter.png' alt='ShopIgniter' width="170" /></a></li>
                <li><a href="http://urbanairship.com/"><img src='http://opensourcebridge.org/wp-content/uploads/2011/05/Urban-Airship-Logo+tagline_COLOR.jpg' alt='Urban Airship' width="170" /></a></li>
                <li><a href="http://pdx.edu/"><img src='http://opensourcebridge.org/wp-content/uploads/2009/03/psulogo_horiz_std.gif' alt='Portland State University' width="170" /></a></li>
                <li><a href="http://saucelabs.com"><img src='http://opensourcebridge.org/wp-content/uploads/2011/06/SauceLabs-Logo.jpg' alt='Sauce Labs' width="170" /></a></li>
              </ul>
              <h4>Hosting</h4>
              <ul>
                <li><a href='http://networkredux.com/'><img src='<?php bloginfo('template_directory'); ?>/i/sponsors/networkredux.png' alt='Network Redux' /></a></li>
              </ul>
              <a href='/sponsors/2011/'>View More Sponsors</a>
            </div>
         </div>
         <div id="frontpage_content">
            <!--<div id='frontpage_cfp_callout'>
               <h3>Call for presentation proposals is open!</h3>
               <p>
                    We are accepting your proposals through March 16th.
                    <a href='http://opensourcebridge.org/call-for-proposals/' class='button'>Submit Now</a>
               </p>
            </div>-->
            <div id='frontpage_register_callout'>
               <h3>Registration for 2011 is now open!</h3>
               <p>
                    Want to help us plan the 2011 event? <a href='http://groups.google.com/group/osbridge' style='text-decoration: underline; color: #fff;'>Join our planning group!</a>

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
