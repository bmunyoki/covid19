<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class HomeController extends Controller {
    // Get home page
    public function getHomePage(){
    	// Kenya Data
    	$countryCodeKE = 'KE';

		$confirmedKE = Http::get('https://coronavirus-tracker-api.herokuapp.com/confirmed')->json();
		$confirmedDataKE = collect($confirmedKE['locations'])->where('country_code', $countryCodeKE)->first();

		$chartDataKE = [
			['Date', '# Confirmed']
		];

		collect($confirmedDataKE['history'])->sortBy(function ($numConfirmed, $date) {
			return Carbon::createFromFormat('n/j/y', $date)->startOfDay();
		})->map(function ($numConfirmed, $date) use (&$chartDataKE) {
		  $chartDataKE[] = [$date, $numConfirmed];
		});


		// Rwanda Data
    	$countryCodeRW = 'RW';

		$confirmedRW = Http::get('https://coronavirus-tracker-api.herokuapp.com/confirmed')->json();
		$confirmedDataRW = collect($confirmedRW['locations'])->where('country_code', $countryCodeRW)->first();

		$chartDataRW = [
			['Date', '# Confirmed']
		];

		collect($confirmedDataRW['history'])->sortBy(function ($numConfirmedRW, $date) {
			return Carbon::createFromFormat('n/j/y', $date)->startOfDay();
		})->map(function ($numConfirmedRW, $date) use (&$chartDataRW) {
		  $chartDataRW[] = [$date, $numConfirmedRW];
		});

		// Uganda Data
    	$countryCodeUG = 'UG';

		$confirmedUG = Http::get('https://coronavirus-tracker-api.herokuapp.com/confirmed')->json();
		$confirmedDataUG = collect($confirmedUG['locations'])->where('country_code', $countryCodeUG)->first();

		$chartDataUG = [
			['Date', '# Confirmed']
		];

		collect($confirmedDataUG['history'])->sortBy(function ($numConfirmedUG, $date) {
			return Carbon::createFromFormat('n/j/y', $date)->startOfDay();
		})->map(function ($numConfirmedUG, $date) use (&$chartDataUG) {
		  $chartDataUG[] = [$date, $numConfirmedUG];
		});


		// Tanzania Data
    	$countryCodeTZ = 'TZ';

		$confirmedTZ = Http::get('https://coronavirus-tracker-api.herokuapp.com/confirmed')->json();
		$confirmedDataTZ = collect($confirmedTZ['locations'])->where('country_code', $countryCodeTZ)->first();

		$chartDataTZ = [
			['Date', '# Confirmed']
		];

		collect($confirmedDataTZ['history'])->sortBy(function ($numConfirmedTZ, $date) {
			return Carbon::createFromFormat('n/j/y', $date)->startOfDay();
		})->map(function ($numConfirmedTZ, $date) use (&$chartDataTZ) {
		  $chartDataTZ[] = [$date, $numConfirmedTZ];
		});


		// Burundi Data
    	$countryCodeBI = 'BI';

		$confirmedBI = Http::get('https://coronavirus-tracker-api.herokuapp.com/confirmed')->json();
		$confirmedDataBI = collect($confirmedBI['locations'])->where('country_code', $countryCodeBI)->first();

		$chartDataBI = [
			['Date', '# Confirmed']
		];

		collect($confirmedDataBI['history'])->sortBy(function ($numConfirmedBI, $date) {
			return Carbon::createFromFormat('n/j/y', $date)->startOfDay();
		})->map(function ($numConfirmedBI, $date) use (&$chartDataBI) {
		  $chartDataBI[] = [$date, $numConfirmedBI];
		});

		// South Sudan Data
    	$countryCodeSS = 'SS';

		$confirmedSS = Http::get('https://coronavirus-tracker-api.herokuapp.com/confirmed')->json();
		$confirmedDataSS = collect($confirmedSS['locations'])->where('country_code', $countryCodeSS)->first();

		$chartDataSS = [
			['Date', '# Confirmed']
		];

		collect($confirmedDataSS['history'])->sortBy(function ($numConfirmedSS, $date) {
			return Carbon::createFromFormat('n/j/y', $date)->startOfDay();
		})->map(function ($numConfirmedSS, $date) use (&$chartDataSS) {
		  $chartDataSS[] = [$date, $numConfirmedSS];
		});

		return view('welcome1', [
		  	'chartDataKE' => $chartDataKE,
			'countryKE' => $confirmedDataKE['country'],

			'chartDataRW' => $chartDataRW,
			'countryRW' => $confirmedDataRW['country'],

			'chartDataTZ' => $chartDataTZ,
			'countryTZ' => $confirmedDataTZ['country'],

			'chartDataUG' => $chartDataUG,
			'countryUG' => $confirmedDataUG['country'],

			'chartDataBI' => $chartDataBI,
			'countryBI' => $confirmedDataBI['country'],

			'chartDataSS' => $chartDataSS,
			'countrySS' => $confirmedDataSS['country']
		]);
    }
}
