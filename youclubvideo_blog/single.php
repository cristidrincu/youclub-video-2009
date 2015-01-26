
    	<?php get_header(); ?>
        <div class="wrapperMottoYouClubBlog">
        	<img src="http://youclubvideo.com/webblog/wp-content/themes/youclubvideo/images/motto_youclubvideo/motto_youclubvideo.png" alt="Broadcast your clubbing experience - The official YouClubVideo Blog" border="0" width="966" height="128"/>
        </div><!--ends wrapprMottoYouClubBlog-->
        <div class="containerColumnsBlogYouClubVideo">
        	<div class="leftColumnBlogYouClubVideo">
            	<div class="topHeaderLeftColumnBlogYouClubVideo"></div><!--ends topHeaderLeftColumnBlogYouClubVideo-->
                <div class="middleHeaderLeftColumnBlogYouClubVideo">
                	<div class="containerContentBlogLeftColumn">
                    	<div class="post">
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<h2 id="feapost"><?php the_title(); ?></h2>
								<?php
								    $image = get_post_meta($post->ID, "image", true);
								        if ($image != "")
								    {    
								        $image = explode(",", $image);
								        foreach ($image as $picture)
								        {
								            echo "<img alt=\""; the_title(); echo"\" src='" . $picture . "' />";
								        }
								    }
								?>
								<?php the_content('');?>
                                </div><!--ends post div-->
								
				<div class="singlepostinfo">
					This entry was posted
					<?php /* This is commented, because it requires a little adjusting sometimes.
						You'll need to download this plugin, and follow the instructions:
						http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
						/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
					on <?php the_time('l, F jS, Y') ?> and is filed under <?php the_category(', ') ?>.
					You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.
					<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
						// Both Comments and Pings are open ?>
					You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
					<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
						// Only Pings are Open ?>
					Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
					<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
						// Comments are open, Pings are not ?>
					You can skip to the end and leave a response. Pinging is currently not allowed.
					<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
						// Neither Comments, nor Pings are open ?>
					Both comments and pings are currently closed.
					<?php } edit_post_link('Edit this entry.','',''); ?>
				</div>
				
				<div class="prevnextposts">
					<div class="left"><?php previous_post_link('&laquo; %link') ?></div>
					<div class="right"><?php next_post_link('%link &raquo;') ?></div>
					<div style="clear:both"></div>
				</div>
					
				<!-- Comment wrapper -->			
				<div class="containerFormPostAResponse">
					<?php comments_template(); ?>
				</div>
				<!-- /Comment wrapper -->	
							<?php endwhile; ?>
							<?php else : ?>
							<?php endif; ?>	
                    </div><!--ends containerContentBlogLeftColumn-->
                </div><!--ends middleHeaderLeftColumnBlogYouClubVideo-->
                <div class="bottomHeaderLeftColumnBlogYouClubVideo"></div><!--ends bottomHeaderLeftColumnBlogYouClubVideo-->

            </div><!--ends leftColumnYouClubVideo-->
			
			<?php get_sidebar(); ?>
			
            <br class="clearFloats"/>
        </div><!--ends containerColumnsBlogYouClubVideo-->
    </div><!--ends mainBoxBlog-->
	
			<?php get_footer(); ?>

</body>
</html>
