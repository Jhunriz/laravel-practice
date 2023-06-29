<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Student;
use App\Models\Students;
use Illuminate\Support\Facades\DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $students = DB::table('students')->get();
        // View::share('students', $students);
        View::share('title', 'Student Admin');

        view::composer('students.index', function ($view) {
            $view->with('students', Students::all());
        });
    }
}
