ZymSlideShareBundle
===================

This Symfony2 bundle is a wrapper for Zend Framework 2.0's `Zend\Service\SlideShare` 
component. It exposes the SlideShare API through the `zym_slide_share.api` service.

Configuration
-------------

Only api_key and shared_secret are required.

	zym_slide_share:
		api_key:
		shared_secret:
		username:
		password: