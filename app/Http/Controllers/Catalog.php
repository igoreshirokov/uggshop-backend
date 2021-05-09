<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class Catalog extends Controller
{
    //
    public function get_categories()
    {
        $categories = Category::all();

        return $categories;
    }
    // Поиск категории по слагу
    // поиск товаров по id категории
    //
    public function get_products($category_slug)
    {
        $category = Category::where('slug','=',$category_slug)
                    ->get();

        $category_id = $category->pluck('id')[0];

        $products = Product::where('category','=',$category_id)
                    ->get();

        return $products;
    }

    public function get_product($product_slug)
    {
        $product = Product::where('slug','=',$product_slug)->first();

        return $product;
    }
    //
    //
    // Метод модификации значения slug таблицы Products
    //
    //
    // protected function create_all_slugs() {
    //     $products = Product::all();
    //     function cyr_to_lat($str, $reverse = 0) {
    //         $cyr = [
    //             'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
    //             'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
    //             'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
    //             'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
    //         ];
    //         $lat = [
    //             'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
    //             'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
    //             'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
    //             'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
    //         ];

    //         if ($reverse !== 1){
    //             $str = str_replace($cyr, $lat, $str);
    //         } else {
    //             $str = str_replace($lat, $cyr, $str);
    //         }

    //         return $str;
    //     }
    //     function edit_text($str){
    //         $str_replaced = trim($str);
    //         $str_replaced = cyr_to_lat($str_replaced);
    //         $str_replaced = str_replace(' ', '_',$str_replaced);
    //         $str_replaced = str_replace("'", "",$str_replaced);
    //         $str_replaced = strtolower($str_replaced);
    //         return $str_replaced;
    //     }
    //     foreach ($products as $v) {
    //         $title = $v->title;
    //         $product = Product::find($v->id);
    //         $product->slug = edit_text($title);
    //         $product->save();
    //     }
    //     $products_updated = Product::all();
    //     foreach ($products_updated as $value) {
    //         echo "<pre>";
    //         echo $value->title;
    //         echo " || ";
    //         echo $value->slug;
    //         echo "</pre>";
    //     }
    // }
}
