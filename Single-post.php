<div class="post_coments">
    <div class="number_of_coments">
        <h2>COMMENTS</h2>
        <span><?php echo get_comments_number(); ?></span>
    </div>
    <div class="comments_wrap">
        <?php
            // Display comments
            $comments = get_comments( 
                array(
                    'post_id' => get_the_id(), 
                    'status' => 'approve',
                    //Defaults
                    // 'author_email'        => '',
                    // 'author__in'          => '',
                    // 'author__not_in'      => '',
                    // 'include_unapproved'  => '',
                    // 'fields'              => '',
                    // 'comment__in'         => '',
                    // 'comment__not_in'     => '',
                    // 'karma'               => '',
                    // 'number'              => '',
                    // 'offset'              => '',
                    // 'no_found_rows'       => true,
                    // 'orderby'             => '',
                    // 'order'               => 'DESC',
                    // 'parent'              => '',
                    // 'post_author__in'     => '',
                    // 'post_author__not_in' => '',
                    // 'post_id'             => 0,
                    // 'post__in'            => '',
                    // 'post__not_in'        => '',
                    // 'post_author'         => '',
                    // 'post_name'           => '',
                    // 'post_parent'         => '',
                    // 'post_status'         => '',
                    // 'post_type'           => '',
                    // 'status'              => 'all',
                    // 'type'                => '',
                    // 'type__in'            => '',
                    // 'type__not_in'        => '',
                    // 'user_id'             => '',
                    // 'search'              => '',
                    // 'count'               => false,
                    // 'meta_key'            => '',
                    // 'meta_value'          => '',
                    // 'meta_query'          => '',
                    // 'date_query'          => null, // See WP_Date_Query
                    // 'hierarchical'        => false,
                    // 'update_comment_meta_cache'  => true,
                    // 'update_comment_post_cache'  => false,
                    ) 
                );
            wp_list_comments( array(
                'callback' => 'custom_comments'
            ), $comments ); 

            $comments_args = array(
                'label_submit' => 'Post Comment',
                'title_reply'=>'Reply',
                'comment_notes_after' => '',
                'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" aria-required="true" placeholder="Placeholder...."></textarea></p>',
                // Defaults at https://wp-kama.ru/function/comment_form
            );
            comment_form( $comments_args );
        ?>
    </div>                
</div><!-- end post_coments -->