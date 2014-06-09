<?php namespace Snipe\Banbuilder;

use Illuminate\Support\ServiceProvider;

class BanbuilderServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('snipe/banbuilder');
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    //
		$this->app['supyo'] = $this->app->share(function($app)
	  	{
			return new Banbuilder;
	  	});

	  	$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Banbuilder', 'Snipe\BanBuilder\Facades\Banbuilder');
		});
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array('banbuilder');
  }



}