<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Product;
use App\Translate;
use DB;
use Session;
use App;

class LanguageController extends Controller
{
    public function lang($language)
    {
    	$path = url()->previous();
    	$url = explode('/', $path);
    	// dd($url);
    	if (sizeof($url) == 4) {
    		$new_url = $language;
    	}
    	elseif ( sizeof($url) == 5 ) {
    		$new_url = $language . '/' . $url[4];
    	}
    	else {
            $slug = Is_Numeric($url[5]) ? 'id' : 'slug';
    		$post = DB::table($url[4])->where($slug, $url[5])->first();

    		$translate  = DB::table($url[4])
            			->leftJoin('translates', 'translates.appID', '=', $url[4].'.id')
            			->where('appID', $post->id)
            			->first();
            			
    		// dd($translate);
            if ($translate == null) {
                return redirect()->route('home', $language);
            }

            $translate_app = Translate::where('id', $translate->id)->first();

			$post = DB::table($url[4])->where('id', $translate_app->trans_id)->first();
    		if (Is_Numeric($url[5])) {
                $new_url = $language . '/' . $url[4] . '/' . $post->id;
            } else {
                $new_url = $language . '/' . $url[4] . '/' . $post->slug;
            }
    		
    	}

        app()->setLocale($language);

        Session::put('locale', $language);

    	return redirect($new_url);
    }
}
