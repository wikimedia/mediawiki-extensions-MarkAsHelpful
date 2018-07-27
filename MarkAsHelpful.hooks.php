<?php

class MarkAsHelpfulHooks {
	/**
	 * Adds MarkAsHelpful JS to the output if appropriate.
	 *
	 * @param $output OutputPage
	 * @param $skin Skin
	 */
	public static function onPageDisplay( &$output, &$skin ) {
		if ( self::addMarkAsHelpful( $output, $skin ) ) {
			$output->addModules( [ 'ext.markAsHelpful' ] );
		}

		return true;
	}

	/**
	 * Determines whether or not we should add MarkAsHelpful to the current page.
	 *
	 * @param $output OutputPage
	 * @param $skin Skin
	 */
	public static function addMarkAsHelpful( &$output, &$skin ) {
		return true;
	}

	/**
	 * Runs MarkAsHelpful schema updates#
	 *
	 * @param $updater DatabaseUpdater
	 */
	public static function onLoadExtensionSchemaUpdates( $updater = null ) {
		$updater->addExtensionTable( 'mark_as_helpful', __DIR__ . '/sql/mark_as_helpful.sql' );

		return true;
	}

}
