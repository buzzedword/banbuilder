<?php namespace Snipe\BanBuilder;

use Illuminate\Support\ServiceProvider;

class BanBuilderServiceProvider extends ServiceProvider {

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
			return new BanBuilder;
	  	});

	  	$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('BanBuilder', 'Snipe\BanBuilder\Facades\BanBuilder');
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