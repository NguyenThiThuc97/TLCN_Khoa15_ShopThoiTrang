<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class shopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function showHome()
    {
        return View("client.pages.home");
    }
    public function showBlog()
    {
        return View("client.pages.blog");
    }
    public function showAbout()
    {
        return View("client.pages.about");
    }
    public function showContact()
    {
        return View("client.pages.contact");
    }
    public function showFeature()
    {
        return View("client.pages.feature");
    }
    public function showShop()
    {
        return View("client.pages.shop");
    }
    public function showProductDetail()
    {
        return View("client.pages.productDetail");
    }
    public function showShoppingCart()
    {
        return View("client.pages.shoppingCart");
    }

}
