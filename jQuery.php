<?php

namespace B2;

class jQuery extends \jquery
{
	static function load($link=NULL)
	{
		// If not defined nor css, nor version, then using latest CDN or bower-asset package
		if(empty($link))
		{
			// If not installed bower-asset/jquery then using CDN
			if(empty(\bors::$bower_asset_packages['bower-asset/jquery']))
			{
				\bors_use('https://code.jquery.com/jquery-3.3.1.min.js');
				return;
			}

			// Package bower-asset/jquery installed, use them
			$bower_asset_url = \B2\Cfg::get('bower-asset.path', '/bower-asset');
			\bors_use($bower_asset_url.'/jquery/dist/jquery.min.js');
			return;
		}

		// Use old loader
		return parent::load();
	}
}
