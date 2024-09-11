<div class='comments-area'>
    <?php if(have_comments()):?>
        
        <h2>Comments</h2>
        <?php wp_list_comments(); ?>
        
        <div class="pagination">
        <?php paginate_comments_links(); ?>
        
    <?php endif; ?>
</div>

    <?php if(comments_open()): ?>
        <?php comment_form(); ?>
    <?php else: ?>
        <p class='no-comments'>Comments are closed.</p>

    <?php endif; ?>
    
</div>
