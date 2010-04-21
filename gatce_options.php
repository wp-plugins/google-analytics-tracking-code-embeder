<div class="wrap">
<div class="ico-gatce" id="icon-options-gatce"><br></div>
<h2>Google Analytics Tracking Code Embeder</h2>
<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">
<tr>
	<th>Google Analytics Tracking code:</th>
	<td>
	<textarea name="gatc_code" rows="12" cols="80"><?php echo get_option('gatc_code'); ?></textarea>
	</td>
</tr>
<tr>
	<th>Disable Google Analytics Code</th>
	<td>
		<input id="gatc_disabled" type="checkbox" value='1' name="gatc_disabled" <?php echo (get_option('gatc_disabled')=='1')? "checked=\"checked\"" :  ""; ?> />
		<label for="gatc_disabled">Don't Embed the code.</label><br/><em>(Check this option if you temporarily don't want to embed the GA code through this plugin. Your GA code above will stay intact)</em>
		
	</td>
</tr>

</table>
<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="gatc_code,gatc_disabled" />
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
<p>
	Notes:
	<ol>
		<li>If you don't have your google analytics tracking code already <a href="http://www.google.com/analytics/">get your code</a>	from Google Analytics</li>
		<li>Make sure you don't have already a Google Analytics Tracking code hard-coded in your theme file.</li>
		<li>To function this plugin correctly make sure your template file has a template tag <pre style="display:inline">&lt;?php wp_footer(); ?&gt;</pre> near the footer. Get <a href="http://www.mixedwaves.com/google-analytics-tracking-code-embeder/" target="_blank">more info</a>
		</li>
	</ol>
	</p>
</form>
</div>