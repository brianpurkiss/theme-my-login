<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="bthm btml-login row justify-content-center" id="theme-my-login<?php $template->the_instance(); ?>">
	<div class="col-lg-4 col-md-6 col-sm-8">
		<?php $template->the_action_template_message( 'login' ); ?>
		<?php $template->the_errors(); ?>
		<form name="loginform" id="btml-loginform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'login', 'login_post' ); ?>" method="post">
			<p class="bthm-user-login-wrap form-group">
				<label for="user_login<?php $template->the_instance(); ?>"><?php
					if ( 'username' == $theme_my_login->get_option( 'login_type' ) ) {
						_e( 'Username', 'theme-my-login' );
					} elseif ( 'email' == $theme_my_login->get_option( 'login_type' ) ) {
						_e( 'E-mail', 'theme-my-login' );
					} else {
						_e( 'Username or E-mail', 'theme-my-login' );
					}
				?></label>
				<input type="text" name="log" id="user_login<?php $template->the_instance(); ?>" class="form-control" value="<?php $template->the_posted_value( 'log' ); ?>" size="20" />
			</p>

			<p class="bthm-user-pass-wrap form-group">
				<label for="user_pass<?php $template->the_instance(); ?>"><?php _e( 'Password', 'theme-my-login' ); ?></label>
				<input type="password" name="pwd" id="user_pass<?php $template->the_instance(); ?>" class="form-control" value="" size="20" autocomplete="off" />
			</p>

			<?php do_action( 'login_form' ); ?>

			<div class="bthm-rememberme-submit-wrap">
				<div class="form-check">
					<p class="bthm-rememberme-wrap">
						<label class="form-check-label" for="rememberme<?php $template->the_instance(); ?>">
							<input name="rememberme" type="checkbox" id="rememberme<?php $template->the_instance(); ?>" value="forever" />
							<?php esc_attr_e( 'Remember Me', 'theme-my-login' ); ?>
						</label>
					</p>
				</div>

				<p class="bthm-submit-wrap">
					<input type="submit" class="btn btn-primary" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'Log In', 'theme-my-login' ); ?>" />
					<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'login' ); ?>" />
					<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
					<input type="hidden" name="action" value="login" />
				</p>
			</div>
		</form>
		<?php $template->the_action_links( array( 'login' => false ) ); ?>
	</div>
</div>
