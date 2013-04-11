<?php
echo '<html>
<script type="text/javascript">
	$(function() {
		// Fast and dirty
		$("article.tabs section > h2").click(function() {
			$("article.tabs section").removeClass("ON");
			$(this).closest("section").addClass("ON");
		});
	});</script>
	</html>';


echo $form;
?>