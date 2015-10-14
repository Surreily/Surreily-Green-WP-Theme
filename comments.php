<?php
	if ( post_password_required() ) {
		return;
	}
?>

<div id="comments" class="comments-area">

	<!-- Show comments if there are any -->
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One comment for &ldquo;%2$s&rdquo;', '%1$s comments for &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>

		<ol class="comment-list">
			<?php

				// Custom comment callback
				function custom_comments_callback($comment, $args, $depth)
				{
					$GLOBALS['comment'] = $comment;
					?>

					<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
						<div class="panel panel-main panel-body depth-<?php echo $depth; ?>" id="comment-<?php comment_ID() ?>">
							
							<div class="accent accent-<?php echo $depth; ?>"></div>

							<table class="comment-table">
								<tr>

									<td>
										<div class="comment-author vcard">
											<?php echo get_avatar($comment, $size='48'); ?>
										</div>
									</td>

									<td class="comment-content">

										<p><b><?php custom_get_comment_author_link(); ?> said:</b></p>
										
										<?php comment_text() ?>

										<?php if ($comment->comment_approved == '0') : ?>
											<p><i><?php _e("This comment has not been moderated yet."); ?></i></p>
										<?php endif; ?>

										<div class="comment-meta commentmetadata">
											<p class="text-muted">
												<span class="pull-left">
													<?php printf(__('Posted on %1$s at %2$s'), get_comment_date(), get_comment_time()) ?>
												</span>
												
												<span class="pull-right">
													<?php edit_comment_link(__("Edit"), '[', ']') ?>
													<?php comment_reply_link(array_merge($args, array('depth' => $depth, 
																									  'max_depth' => $args['max_depth'], 
																									  'reply_text' => 'Reply',
																									  'before' => '[',
																									  'after' => ']'))) ?>
												</span>
											</p>

										</div>

										<div class="reply">
											
										</div>

									</td>
								</tr>
							</table>
						</div>
					<?php
				}

				// List comments using the callback
				wp_list_comments( array(
					'callback' => 'custom_comments_callback',
					'max_depth' => 3,
					'short_ping'  => true,
					'avatar_size' => 56,
				) );

			?>
		</ol>

	<?php endif; // have_comments() ?>

	<!-- Comments closed and there are comments -->
	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Commenting has been closed for this post.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

	<!-- Comments form -->
	<?php
		// Fields (later used in arguments)
		$comment_fields = array(
			'author' => '<p class="comment-form-author">
						<label for="author">' .	__('Name') . '</label>' . ($req ? '<span>*</span>' : '') . '<br />
						<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />
						</p>',
			'email' => '<p class="comment-form-email">
						<label for="email">' . __('Email') . '</label>' . ($req ? '<span>*</span>' : '') . '<br />
						<input id="email" name="email" type="text" value="' . esc_attr($commenter[comment_author_email]) . '" size="30" ' . $aria_req . ' />
						</p>',
			'url' => '<p class="comment-form-url">
						<label for="url">' . __('url') . '</label>' . ($req ? '<span>*</span>' : '') . '<br />
						<input id="url" name="url" type="text" value="' . esc_attr($commenter[comment_author_email]) . '" size="30" ' . $aria_req . ' />
						</p>'
		);

		// The array of arguments
		$comment_args = array(
			'title_reply' => 'Leave a comment:',
			'fields' => $comment_fields,
			'comment_field' => '<p>
							   <label for="comment">' . __('Comment') . '</label><br />
							   <textarea id="comment" name="comment" cols="45" rows="8" aria_required="true"></textarea>
							   </p>'
		);

		// The actual call to make the form
		comment_form($comment_args); 
	?>

</div>
