<h1>Welcome to Kodezen Academy</h1>

<form method="post" action="<?php echo esc_url(admin_url('admin-post.php')) ?>">
    <input type="hidden" name="action" value="ka_user_register" />
    <?php 
        wp_nonce_field('ka_register_user', 'security');
    ?>
    <div>
        <input type="text" name="name" placeholder="<?php echo esc_attr__('Enter Your Name', 'kodezen-academy'); ?>" />
    </div>
    <div>
        <input type="email" name="email" placeholder="Enter Your Email" />
    </div>
    <button type="submit">Submit</button>
</form>