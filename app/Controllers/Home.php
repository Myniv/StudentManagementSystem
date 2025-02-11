<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function __construct()
    {
        helper(["url", "form", "text", "date", "product"]);
        // helper("product");
    }

    public function helperTutorial()
    {
        //URL Helper
        $previousUrl = previous_url();
        $currentUrl = current_url();

        //Form Helper
        $dropdown = form_dropdown(
            "categories",
            [
                "1" => "Electronics",
                "2" => "Fashion",
                "3" => "Books"
            ],
            "1",
            ["class" => "form-control"]
        );

        //Text Helper
        $description = "This is product description";
        $shortDesc = word_limiter($description, 10);
        $highlightedText = highlight_phrase($description, 'product', '<span class="highlight">', '</span>');

        //Date Helper
        $now = now();
        $formattedDate = date('Y-m-d H:i:s', $now);
        // $humanDate = nice_date($formattedDate, "M,D,Y");

        //Product Helper
        $product['product'] = format_price(100000);

        return view(
            "test_helper",
            $product, 
        );
    }
    public function getIndex(): string
    {
        return view('welcome_message');
    }

    public function numMethod($id)
    {
        echo "Menampilkan ID :" . $id;
    }

    public function alphaMethod($category)
    {
        echo "Menampilkan Kategori :" . $category;
    }

    public function numAndAlphaMethod($id, $category)
    {
        echo "ID : " . $id . " Category : " . $category;
    }
    public function alphaNumMethod($id)
    {
        echo "ALPHA NUM : " . $id;
    }

    public function segmentMethod($segment)
    {
        echo "Segment : " . $segment;
    }
    public function anyMethod($any1, $any2, $any3, $any4)
    {
        echo "ANY1 : " . $any1 . " ANY2 : " . $any2 . " ANY3 : " . $any3 . " ANY4:" . $any4;
    }
    public function profile()
    {
        return redirect()->to("/profile");
    }
}
