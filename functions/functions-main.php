<?php

use Axioma\Helper;
use Axioma\Site;

function ct(): Site {
	return Site::getInstance();
}

function cth(): Helper {
	return Helper::getInstance();
}
