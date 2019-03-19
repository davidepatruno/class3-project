<?php

	namespace App\Http\Controllers;

	use App\Apartment;
	use Illuminate\Http\Request;
	use Illuminate\Support\Carbon;
	use Illuminate\Support\Facades\DB;

	class ApartmentController extends Controller {

		function index() {
			$utc = Carbon::now('Europe/Rome');
			$saleApartment = Apartment::where('sale', '>', 0)->inRandomOrder()->first();
			$promoApartments = Apartment::where('end_promo', '>', $utc)->orderBy('end_promo', 'asc')->take(5)->get();
			return view('index')->withSaleApartment($saleApartment)->withPromoApartments($promoApartments);
		}

		function simpleSearch(Request $request) {
			//dd($request->all());
			if (!$request->has('lat') || !$request->has('lng') || !$request->has('query') || !$request->has('bed_count')) {
				abort(404);
			}
			$radius = 20;
			$pagination = 10;
			try {
				$lat = $request->input('lat');
				$lng = $request->input('lng');
				$bedCount = $request->input('bed_count');
				$data = Apartment::findInRange($radius, $lat, $lng)->where('bed_count', '>=', $bedCount)->paginate($pagination);
				return view('result')->withApartments($data);
			} catch (\Exception $e) {
				abort(500);
			}
		}

		function advancedSearch(Request $request) {
			return $request->all();
		}

		function showToken(){
			return csrf_token();
		}
	}