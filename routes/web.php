<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // config() used to access comics.php file in config directory
    $comics = config('comics');
    //header links
    $links = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];
    //buy-comics links
    $buyComicsLinks = [
        [
            'icon' => 'resources/img/buy-comics-digital-comics.png',
            'title' => 'digital comics'
        ],
        [
            'icon' => 'resources/img/buy-comics-merchandise.png',
            'title' => 'dc merchandise'
        ],
        [
            'icon' => 'resources/img/buy-comics-subscriptions.png',
            'title' => 'subscription'
        ],
        [
            'icon' => 'resources/img/buy-comics-shop-locator.png',
            'title' => 'comic shop locator'
        ],
        [
            'icon' => 'resources/img/buy-dc-power-visa.svg',
            'title' => 'dc power visa'
        ]
    ];
    //footer links
    $footerLinks = [
        [
            'title' => 'dc comics',
            'links' => [
                'Characters',
                'Movies',
                'TV',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            'title' => 'shop',
            'links' => [
                'Shop DC',
                'Shop DC Collectibles'
            ]
        ],
        [
            'title' => 'DC',
            'links' => [
                'Terms Of Use',
                'Privacy policy (New)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ],
        [
            'title' => 'sites',
            'links' => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ]
    ];
    //footer icons
    $icons = [
        'resources/img/footer-facebook.png',
        'resources/img/footer-twitter.png',
        'resources/img/footer-youtube.png',
        'resources/img/footer-pinterest.png',
        'resources/img/footer-periscope.png',
    ];

    return view('home', compact('comics', 'links', 'buyComicsLinks', 'footerLinks', 'icons'));
})->name('home');


Route::get( '/characters', function() {
        // config() used to access comics.php file in config directory
        $comics = config('comics');
        //header links
        $links = [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ];

        //footer links
        $footerLinks = [
            [
                'title' => 'dc comics',
                'links' => [
                    'Characters',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            [
                'title' => 'shop',
                'links' => [
                    'Shop DC',
                    'Shop DC Collectibles'
                ]
            ],
            [
                'title' => 'DC',
                'links' => [
                    'Terms Of Use',
                    'Privacy policy (New)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subscriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ],
            [
                'title' => 'sites',
                'links' => [
                    'DC',
                    'MAD Magazine',
                    'DC Kids',
                    'DC Universe',
                    'DC Power Visa'
                ]
            ]
        ];
        //footer icons
        $icons = [
            'resources/img/footer-facebook.png',
            'resources/img/footer-twitter.png',
            'resources/img/footer-youtube.png',
            'resources/img/footer-pinterest.png',
            'resources/img/footer-periscope.png',
        ];
    return view('characters', compact('comics', 'links', 'footerLinks', 'icons'));
})->name('characters');