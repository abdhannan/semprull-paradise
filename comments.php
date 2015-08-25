<div id="comments" class="comment-grid-top">
    <?php if (have_comments()) : ?>
        <h4 class="comments-title">
            <span class="glyphicon glyphicon-comment"></span> 
            <?php
            echo (get_comments_number() . ' komentar untuk <span class="comment-entry-title">"' . get_the_title() . '"</span>' );
            ?>
        </h4>


        <ul class="comment-list media-list">
            <?php
            $args = array(
                'callback' => 'hannan_comment',
                'end-callback' => 'hannan_end_comment',
                'avatar_size' => 56,
            );
            wp_list_comments($args);
            ?>
        </ul>


        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation nav-page" role="navigation">
                <ul class="pager">
                    <?php
                    if ($prev_link = get_previous_comments_link('&larr; Older Comments')) :
                        printf('<li>%s</li> ', $prev_link);
                    endif;

                    if ($next_link = get_next_comments_link('Newer Comments &rarr;')) :
                        printf('<li>%s</li>', $next_link);
                    endif;
                    ?>
                </ul>
            </nav>
        <?php endif; ?>

        <?php
    endif;

    // If comments are closed and there are comments, let's leave a little note
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <div class="alert alert-danger no-comments"><?php _e('Comments are closed.'); ?></div>
        <?php
    endif;
    ?>
    <?php
    $fields = array(
        'author' =>
        '<div class="artical-commentbox"><div class="table-form">' .
        '<input id="author" name="author" class="textbox" placeholder="Nama" type="text" value="' . esc_attr($commenter['comment_author']) .
        '" ' . $aria_req . ' />',
        'email' =>
        '<input id="email" name="email" class="textbox" placeholder="Email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
        '" ' . $aria_req . ' />',
        'url' =>
        '<input id="url" name="url" class="textbox" placeholder="Website" type="text" value="' . esc_attr($commenter['comment_author_url']) .
        '"  /></div></div>'
    );

    $args = array(
        'title_reply' => 'Tinggalkan sebuah komentar',
        'title_reply_to' => 'Tinggalkan sebuah komentar untuk %s',
        'cancel_reply_link' => ' (Batalkan) ',
        'comment_notes_after' => '<div class="alert alert-info"><p class="form-allowed-tags">' . sprintf(__('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s'), ' <code>' . allowed_tags() . '</code>') . '</p></div>',
        'class_submit' => 'submit btn btn-primary',
        'comment_field' => '<div class="comment-form-comment form-horizontal"><div class="form-group"><label for="comment" class="col-sm-12">Komentar</label><div class="col-md-10 col-sm-12"><textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true"></textarea></div></div></div>',
        'fields' => $fields
    );
    comment_form($args);
    ?>
</div>