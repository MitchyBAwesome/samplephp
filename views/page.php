<?php

return "<!DOCTYPE html>
		<HTML>
		<HEAD>
		<TITLE>$pageData->title</TITLE>
		$pageData->css
		$pageData->jScripts
		</HEAD>
		<BODY>
		$pageData->content
		</BODY>
		</HTML>
";