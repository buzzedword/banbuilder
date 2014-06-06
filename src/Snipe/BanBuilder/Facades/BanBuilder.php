<?php namespace Snipe\BanBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class BanBuilder extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'banbuilder'; }

}