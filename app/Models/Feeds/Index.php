<?php

namespace App\Models\Feeds;

class Index
{
    public function getData() : array
    {
        return [
            [
                'name' => 'exp.general',
                'color' => 'sand',
                'text' =>  'experience of <span class="badge">25 years</span>',
                'dialog' => [
                     [ 'My experience',
                        'Since 1995 when I started my computer science study at the University of Alabama in USA I am entirely in the programming in different fields of computerized system development on different platforms.',
                        '25 years, 28 project, including 18 individual and 10 big corporate team projects',
                     ],
                     ['Fields of my expertise', 'web application development', 'desktop applications', 'embedded systems', 'equipment control systems', ]
                ]

            ],
            [
                'name' => 'exp.web',
                'color' => 'sand',
                'text' =>  ' web-programming <span class="badge">15 years</span>',
                'dialog' => [

                   [ 'Web-programming',
                    'In 2008 I decided to switch to the web programming and took PHP as my major web technology.',
                    'Later In 2012-2013 when web programming grew in complexity, I took Yii PHP framework as a main technological stack for my career.',
                    'Since that time main focus shifted to the web technologies',
                        ],
                    [  'Working history',
                        '6 big team collaborations on scalable advanced corporate projects ',
                        '7 individual projects for the customers in different industries',
                    ]
                ]

            ],
            [
                'name' => 'exp.php',
                'color' => 'sand',
                'text' =>  'PHP <span class="badge">15 years</span>',
                'dialog' => [
                    [ 'Story',
                        'There was some period of building static web resources on pure HTML with Javascript implementation.',
                        'I started in 2008 with the PHP 5.6 version for small dynamic web-site construction',
                        'In 2013 the necessity in more robust instrument brought up the need for PHP framework utilizing.',
                        'Yii and later Yii2 frameworks became my major platform for production development',
                         'Later I learned and built some individual projects on Laravel PHP framework.',
                        'In my practice I usually follow the SOLID principles of development with the use of design patterns',
                        'Recently I took part in the projects on PHP 8 with the implementation of technologies like Memcached, Redis, ElasticSearch'
                    ],

                ],
            ],
            [
                'name' => 'exp.php',
                'color' => 'sand',
                'text' =>  'PHP <span class="badge">15 years</span>',
                'dialog' => [
                     [ 'Project Types',
                         ' Official sites',
                         'Internet platforms for specialized care',
                         'CRM systems',
                         'online marketplace',
                         'Sale calculations',
                         'ERP systems',
                         'Web store platform',
                         'Affiliate network platform',
                     ],
                    'Features' => [

                    ],
                ],
             ],
         ];
    }


}
