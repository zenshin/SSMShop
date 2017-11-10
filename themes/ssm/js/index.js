/*
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author PrestaShop SA <contact@prestashop.com>
 *  @copyright  2007-2016 PrestaShop SA
 *  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

$(document).ready(function () {
	//progress bar init
	var $progressBar = $('.progress-bar');

	// 1st carousel, main
	$('.main-carousel').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		pageDots: false
	}).on('scroll.flickity', function (event, progress) {
		progress = Math.max(0, Math.min(1, progress));
		$progressBar.width(progress * 55 + '%');
	});
	// 2nd carousel, navigation

	$('.carousel-nav').flickity({
		asNavFor: '.main-carousel',
		contain: true,
		pageDots: false,
		prevNextButtons: false,
		draggable: true
	});



	$('#home-page-tabs li:first, #index .tab-content ul:first').addClass('active');
	var scroll_start = 0;
	var startchange = $('.columns-container');
	var offset = startchange.offset();
	$(document).scroll(function () {
		scroll_start = $(this).scrollTop();
		if (scroll_start > offset.top) {
			$('#block_top_menu').addClass('navbar-fixed-top');
			$('.logo-min').css('display', 'inline-block');
		} else {
			$('#block_top_menu').removeClass('navbar-fixed-top');
			$('.logo-min').css('display', 'none');
		}
	});
	var startchangebottom = $('.home-page-tabs');
	var offsetbottom = startchangebottom.offset();
	$(document).scroll(function () {
		scroll_start = $(this).scrollTop();
		if (scroll_start > offset.top) {
			$('.product-name').addClass('visible').css('display', 'visible');
		} else {
			$('.product-name').removeClass('visible');
		}
	});
});