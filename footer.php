<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.backstretch.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.tipsy.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script>
<script type="text/javascript">
$(function(){
	$.backstretch("<?php bloginfo('template_directory'); ?>/img/back.jpg");
	$('#Social a').tipsy({fade: true, gravity: 'n'});
	$("#TwitterFeed").tweet({
	  join_text: "auto",
	  username: "mnmtanish",
	  avatar_size: 48,
	  count: 8,
	  auto_join_text_default: "I said,",
	  auto_join_text_ed: "I",
	  auto_join_text_ing: "I was",
	  auto_join_text_reply: "I replied",
	  auto_join_text_url: "I was checking out",
	  loading_text: "loading tweets...",
	  template: "{text}"
	});
})
</script>
</body>

</html>