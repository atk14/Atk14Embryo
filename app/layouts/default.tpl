{*
 * The page Layout template
 *
 * Use {dump} to see assigned values.
 *}
<!DOCTYPE html>
<html lang="{$lang}">

	<head>
		<meta charset="utf-8">

		<title>{$page_title|strip_tags}</title>

		<meta name="description" content="{$page_description|strip_tags}">
		{stylesheet_link_tag file="application.css" media="screen, projection"}
		{javascript_script_tag file="application.js"}
	</head>

	<body class="body_{$controller}_{$action}">
		{placeholder}

		<div class="footer">
			<p>
			 	This site runs on <a href="http://www.atk14.net/">ATK14 Framework</a>, for now and ever after
			</p>
		</div>
	</body>
</html>
