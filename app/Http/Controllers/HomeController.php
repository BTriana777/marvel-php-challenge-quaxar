<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Informations;
use Auth;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info = json_decode(Informations::findOrFail(Auth::user()->id));
        $client = new Client([
            'base_uri' => 'https://gateway.marvel.com/v1/public/',
            'timeout'  => 3.0,
        ]);
        $character = $client->request('GET', 'characters/'.$info->characters.'?apikey=3a711ce4c7555b1ca807bda8a0208c00&hash=80bd34e5214e6f9358d47a97cfd9be18&ts=1');
        $comic = $client->request('GET', 'comics/'.$info->comics.'?apikey=3a711ce4c7555b1ca807bda8a0208c00&hash=80bd34e5214e6f9358d47a97cfd9be18&ts=1');

        $hero = json_decode( $character->getBody()->getContents() )->data->results[0];
        $comics = json_decode( $comic->getBody()->getContents() )->data->results[0];

        return view('home', compact('info', 'hero', 'comics'));
    }

    public function edit()
    {
        $info = json_decode(Informations::findOrFail(Auth::user()->id));
        $client = new Client([
            'base_uri' => 'https://gateway.marvel.com/v1/public/',
            'timeout'  => 3.0,
        ]);

        $character = $client->request('GET', 'characters/'.$info->characters.'?apikey=3a711ce4c7555b1ca807bda8a0208c00&hash=80bd34e5214e6f9358d47a97cfd9be18&ts=1');
        $comic = $client->request('GET', 'comics/'.$info->comics.'?apikey=3a711ce4c7555b1ca807bda8a0208c00&hash=80bd34e5214e6f9358d47a97cfd9be18&ts=1');

        $hero = json_decode( $character->getBody()->getContents() )->data->results[0];
        $comics = json_decode( $comic->getBody()->getContents() )->data->results[0];
        return view('edit', compact('info', 'hero', 'comics'));
    }

    // public function store(Request $request)
    // {
    //     $information = new App/Information();
    //     $information->cities = $request->input("cities");
    //     $information->countries = $request->input("countries");
    //     $information->save();
    //     return redirect('home');
    // }

    public function update(Request $request)
    {
        $info = Informations::findOrFail(Auth::user()->id);
        if($info){
            $info->cities = $request->input('cities');
            $info->countries = $request->input('countries');
            $info->save();
            Auth::user()->name = $request->input('name');
            Auth::user()->last_name = $request->input('last_name');
            Auth::user()->sex = $request->input('sex');
            Auth::user()->age = $request->input('age');
            Auth::user()->save();
        }
        return redirect('/');
    }
    public function delete()
    {
        $info = Informations::findOrFail(Auth::user()->id);
        $info->delete();
        Auth::user()->delete();
        return redirect('/');
    }

    
}
