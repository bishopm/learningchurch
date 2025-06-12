<?php namespace Bishopm\Learningchurch\Providers;

use Bishopm\Learningchurch\Http\Middleware\AdminRoute;
use Illuminate\Support\ServiceProvider;
use Bishopm\Learningchurch\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Livewire\Livewire;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class LearningchurchServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $router = $this->app['router'];
        $router->aliasMiddleware('adminonly', AdminRoute::class);
        Schema::defaultStringLength(191);
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'learningchurch');
        Paginator::useBootstrapFive();
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        if (Schema::hasTable('settings')) {
            Config::set('app.name',setting('general.site_name')); 
        }
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
        Blade::componentNamespace('Bishopm\\Learningchurch\\Resources\\Views\\Components', 'learningchurch');
        Config::set('auth.providers.users.model','Bishopm\Learningchurch\Models\User');
        Relation::morphMap([
            'blog' => 'Bishopm\Learningchurch\Models\Post',
            'liturgy' => 'Bishopm\Learningchurch\Models\Prayer',            
            'video' => 'Bishopm\Learningchurch\Models\Video'
        ]);
    }

    /**
     * Register any learningchurch services.
     *
     * @return void
     */
    public function register(): void
    {
        
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['learningchurch'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../../config/learningchurch.php' => config_path('learningchurch.php'),
        ], 'learningchurch.config');

        // Publishing the views.
        // $this->publishes([
        //    __DIR__.'/../Resources' => public_path('vendor/bishopm'),
        // ], 'learningchurch.views');

        // Publishes assets.
        $this->publishes([
            __DIR__.'/../Resources/assets' => public_path('learningchurch'),
          ], 'assets');
        

        // Registering learningchurch commands.
        $this->commands([
            'Bishopm\Learningchurch\Console\Commands\InstallLearningchurch'
        ]);
    }
}
