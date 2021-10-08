<?php
/**
 * Handles registering all Assets for the Plugin.
 *
 * To remove a Asset you can use the global assets handler:
 *
 * ```php
 *  tribe( 'assets' )->remove( 'asset-name' );
 * ```
 *
 * @since 1.0.0
 *
 * @package Tribe\Extensions\Tecenhancedattendeesexport
 */

namespace Tribe\Extensions\Tecenhancedattendeesexport;

/**
 * Register Assets.
 *
 * @since 1.0.0
 *
 * @package Tribe\Extensions\Tecenhancedattendeesexport
 */
class Assets extends \tad_DI52_ServiceProvider {
	/**
	 * Binds and sets up implementations.
	 *
	 * @since 1.0.0
	 */
	public function register() {
		$this->container->singleton( static::class, $this );
		$this->container->singleton( 'extension.tec_enhanced_attendees_export.assets', $this );

		$plugin = tribe( Plugin::class );

	}
}
