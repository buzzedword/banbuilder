<?php namespace Snipe\Banbuilder\Facades;

use Illuminate\Support\Facades\Facade;

class Banbuilder extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'banbuilder'; }

}