<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Voerro\Laravel\VisitorTracker\Models\Visit;
use Carbon\Carbon;
use Voerro\Laravel\VisitorTracker\Facades\VisitStats;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::count();
        $authors = \App\Author::count();
        $compositions = \App\Composition::count();
        $videos = \App\Video::count();
        $periods = \App\Period::count();
        $events = \App\Event::count();
        /*$visits24h = VisitStats::query()->visits()
            ->except(['ajax', 'bots'])
            ->period(Carbon::now()->subHours(24));*/
        return view('admin.dashboard', compact(/*'visits24h',*/'users', 'authors', 'compositions', 'videos', 'periods', 'events'));
    }

    /*public function visits()
    {
        return view('visitstats::visits', array_merge([
            'visits' => VisitStats::query()
                ->visits()
                ->withUsers()
                ->latest()
                ->except(['ajax', 'bots', 'login_attempts'])
                ->paginate(config('visitortracker.results_per_page', 15)),
            'visitortrackerSubtitle' => 'Page Visits',
        ], $this->viewSettings()));
    } */

    
}
