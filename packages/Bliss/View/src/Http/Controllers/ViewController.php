<?php

namespace Bliss\View\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;

/**
 * Emails templates controller
 *
 * @author    Prashant Singh <prashant.singh852@Bliss.com> @prashant-Bliss
 * @copyright 2018 Bliss Software Pvt Ltd (http://www.Bliss.com)
 */
 class ViewController extends Controller
{
    protected $_config;
    protected $current_channel;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
     * loads the home page for the storefront
     */
    public function email($template_page)
    {

        if (!$template_page) {

           $this->notFound();

           return;

        };

        //$tpl = "emails.".$template_page;

        //echo $tpl;

        $invoice = (object)[
            "items" => (object)[
                [
                    "id" => 1,
                    "type" => "simple",
                    "name" => "Leather Shoes",
                    "url_key" => "leather-shoes",
                    "price" => "50.0000",
                    "formated_price" => "$50.00",
                    "short_description" => null,
                    "description" => "<p>Leather Shoes</p>",
                    "sku" => "men-leather-shoes",
                    "images" => [],
                    "base_image" => [],
                    "variants" => [],
                    "in_stock" => true,
                    "reviews" => [],
                    "is_saved" => false,
                    "created_at" => "2019-05-21 12:37:06",
                    "updated_at" => "2019-05-21 12:37:06"
                ]
            ]
        ];

        $order = (object)[
            "id" => 3,
            "status" => "pending",
            "status_label" => "Pending",
            "channel_name" => "Default",
            "is_guest" => 0,
            "customer_email" => "peterdoe@example.com",
            "customer_first_name" => "Peter",
            "customer_last_name" => "Doe",
            "shipping_method" => "flatrate_flatrate",
            "shipping_title" => "Flat Rate - Flat Rate",
            "payment_title" => "Cash On Delivery",
            "shipping_description" => "This is a flat rate",
            "order_id" => "123456"
        ];

        return view($this->_config["view"] . $template_page, compact('invoice','order'));
    }

    /**
     * loads the home page for the storefront
     */
    public function notFound()
    {
        return view('shop::errors.404');
    }
}