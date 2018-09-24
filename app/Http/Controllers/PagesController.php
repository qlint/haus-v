<?php

namespace App\Http\Controllers;
use App\Newitem;
use App\Category;
use App\Setting;

class PagesController extends Controller {

	public function getIndex(){
		return view('pages.welcome');
	}

	public function getMan(){
		$categories = Category::all();
		$newitems = Newitem::all()->where('target', 'Man')/*->orWhere('target', 'Unisex')*/;
		return view('pages.man')->withCategories($categories)->withNewitems($newitems);
	}

	public function getWoman(){
		$categories = Category::all();
		$newitems = Newitem::all()->where('target', 'Woman')/*->orWhere('target', 'Unisex')*/;
		return view('pages.woman')->withCategories($categories)->withNewitems($newitems);
	}

	public function getKids(){
		$categories = Category::all();
		$newitems = Newitem::all()->where('target', 'Kids');
		return view('pages.kids')->withCategories($categories)->withNewitems($newitems);
	}

	public function getShop(){
		return view('pages.blog');
	}

	public function getPrivacy(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.privacy');
	}

	public function getFaq(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.faq');
	}

	public function getSizetable(){
		return view('pages.quicklinks.sizetable');
	}

	public function getFormsofpayment(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.formsofpayment');
	}

	public function getShippingcostdelivery(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.shippingcostdelivery');
	}

	public function getReturnandexchange(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.returnandexchange');
	}

	public function getComplaints(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.complaints');
	}

	public function getFullprivacypolicy(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.fullprivacypolicy');
	}

	public function getContacts(){
		$setting = Setting::all()->first();
		return view('pages.quicklinks.contacts');
	}

	public function getAdmin(){
		return view('pages.quicklinks.admin');
	}

}
