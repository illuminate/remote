<?php namespace Illuminate\Remote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Remote\RemoteManager
 * @see \Illuminate\Remote\Connection
 */
class RemoteFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'remote'; }

}