<?php

namespace App\Models\Feeds;

class Index implements FeedInterface
{
    public function getData(): array
    {
        return [
            [
                'name' => 'exp.general',
                'color' => 'sand',
                'text' => 'experience of <@25 years>',
                'dialog' => ['title' => 'Software engineering',
                    'content' => [
                        ['My experience',
                            'Since 1995 when I started my computer science study at the University of Alabama in USA I am entirely in the programming in different fields of computerized system development on different platforms.',
                            '25 years, 28 project, including 18 individual and 10 big corporate team projects',
                        ],
                        ['Fields of expertise', 'web application development', 'desktop applications', 'embedded systems', 'equipment control systems',]
                    ]
                ]

            ],
            [
                'name' => 'exp.web',
                'color' => 'dark-gray',
                'text' => 'web-programming',
                'dialog' => [
                    'title' => 'Web application development',
                    'content' => [
                        ['Web-programming',
                            'In 2008 I decided to switch to the web programming and took PHP as my major web technology.',
                            'Later In 2012-2013 when web programming grew in complexity, I took Yii PHP framework as a main technological stack for my career.',
                            'Since that time main focus shifted to the web technologies',
                        ],
                        ['Working history',
                            '6 big team collaborations on scalable advanced corporate projects ',
                            '7 individual projects for the customers in different industries',
                        ]
                    ]
                ]
            ],
            [
                'name' => 'exp.php',
                'color' => 'indigo',
                'text' => 'PHP <@15 years>',
                'dialog' => [
                    'title' => 'PHP experience',
                    'content' => [
                        ['Story',
                            'There was some period of building static web resources on pure HTML with Javascript implementation.',
                            'I started in 2008 with the PHP 5.6 version for small dynamic web-site construction',
                            'In 2013 the necessity in more robust instrument brought up the need for PHP framework utilizing.',
                            'Yii and later Yii2 frameworks became my major platform for production development',
                            'Later I learned and built some individual projects on Laravel PHP framework.',
                            'In my practice I usually follow the SOLID principles of development with the use of design patterns',
                            'Recently I took part in the projects on PHP 8 with the implementation of technologies like Memcached, Redis, ElasticSearch'
                        ],
                    ]

                ],
            ],
            [
                'name' => 'exp.yii',
                'color' => 'teal',
                'text' => 'Yii and Yii2 framework <@8 years>',
                'dialog' => [
                    'title' => 'MVC framework use',
                    'content' => [
                        ['Project Types',
                            'Official sites',
                            'Enterprise control system',
                            'Business performance management',
                            'Internet platforms for medical care',
                            'CRM systems',
                            'online marketplace',
                            'Sale calculations',
                            'ERP systems',
                            'Web store platform',
                            'Affiliate network platform',
                        ],
                        ['Features I implemented',
                            'Import/Export Excel/XML/CSV',
                            'PDF generation',
                            'Shopping Cart for online ordering',
                            'Email sending',
                            'CRUD with filtering, sorting, pagination',
                            'QR code generation',
                            'Customer registration and access contol',
                            'Composer implementation',
                            'RESTful API',
                            'Google and Yandex map API',
                            'Automated application  deployment',
                            'Google and Facebook SSO',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.laravel',
                'color' => 'pink',
                'text' => 'Laravel <@2 years>',
                'dialog' => [
                    'title' => 'Advanced MVC framework use',
                    'content' => [
                        ['',
                            'For last 2 years I extensively use Laravel as my preferable framework.',
                            'I was impressed by the invincible advance of this system. How quickly it came by the leading role in the PHP technological industry.',
                            'I like to employ the most auspicious technologies that this network provide. Often incorporate Laravel elements in the other technological environments. ',
                        ],
                        ['My favorite features',
                            'Service container',
                            'Service and model injection',
                            'Middleware for permission control',
                            'Resources for REST API',
                            'Single method controller',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.frontend',
                'color' => 'yellow',
                'text' => 'HTML, CSS, JS with jQuery <@25 years>',
                'dialog' => [
                    'title' => 'My frontend practices',
                    'content' => [
                        ['Front end development',
                            'My frontend practices were set up when separation between fronend and backend has not come along. In my individual projects I had to fulfil all jobs.',
                            'Many technologies, extensive use of jQuery UI and components were employed.',
                            'In my own projects front-end side is built on the responsive web design principles',
                            'I extensively use Bootstrap framework',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.bootstrap',
                'color' => 'light-green',
                'text' => 'Bootstrap framework <@8 years>',
                'dialog' => [
                    'title' => 'Bootstrap framework',
                    'content' => [
                        ['Front end development',
                            'In my own projects front-end side is built on the responsive web design principles.',
                            'I extensively use Bootstrap framework',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.vue',
                'color' => 'green',
                'text' => 'Vue.js <@2 years>',
                'dialog' => [
                    'title' => 'Vue.js',
                    'content' => [
                        ['Vue.js practical usage',
                            'While working on the Laravel project I had some practice in Vue.js usage.',
                            'I had some experience of implementing Vue.js with Inertia.js.',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.database',
                'color' => 'amber',
                'text' => 'database design and maintenance<@20 years>',
                'dialog' => [
                    'title' => 'Database design and maintenance',
                    'content' => [
                        ['Database management systems',
                            'Almost all projects I worked on required use of database',
                            'I had experience of database implementation even before I started web application development.',
                            'Long period of extensive use of SQL for database maintenance.',
                        ],
                        ['Database management systems',
                            'dBase, FoxBase	since 1995 for several years',
                            'MS Access	since 1999 for desktop applications',
                            'SQL Server	in some projects since 2005',
                            'PostgreSQL	in	2003 in ATIS project',
                            'MySQL	since 2009 up to now'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'economy.fields',
                'color' => 'lime',
                'text' => 'different fields of economy',
                'dialog' => [
                    'title' => 'Fields of economy',
                    'content' => [
                        ['I worked on software for',
                            'Psychological Help',
                            'Real Estate',
                            'Electronic Device Repairement Service',
                            'Hotel and Appartment Rent',
                            'Hygiene Product sales',
                            'Tourist Guide Service',
                            'Tour Sale Platform',
                            'Electronic equipment production',
                            'QR-code trading',
                            'Affiliate network',
                            'Advertising agency',
                            'Orthopedic and medical product distribution'
                        ],
                        ['Project Types',
                            'Official sites',
                            'Enterprise control system',
                            'Business performance management',
                            'Internet platforms for medical care',
                            'CRM systems',
                            'online marketplace',
                            'Sale calculations',
                            'ERP systems',
                            'Web store platform',
                            'Affiliate network platform',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'projects.individual',
                'color' => 'khaki',
                'text' => 'own architecture, configuration and solutions',
                'dialog' => [
                    'title' => 'My individual work',
                    'content' => [
                        ['I made up full cycle of application building',
                            'I made business analysis and set up the tasks.',
                            'Architecture planning.',
                            'Technology and functional components selection',
                            'Coding, testing, delivery',
                            'System deployment',
                            'Personnel training',
                        ],
                    ]

                ],
            ],
            [
                'name' => 'tasks.web',
                'color' => 'pale-green',
                'text' => 'common popular tasks',
                'dialog' => [
                    'title' => 'Popular tasks in my work',
                    'content' => [
                        ['Features I implemented',
                            'Import/Export Excel/XML/CSV',
                            'PDF generation',
                            'Shopping Cart for online ordering',
                            'Email sending',
                            'CRUD with filtering, sorting, pagination',
                            'QR code generation',
                            'Customer registration and access contol',
                            'Composer implementation',
                            'RESTful API',
                            'Google and Yandex map API',
                            'Automated application  deployment',
                            'Google and Facebook SSO',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.outsystems',
                'color' => 'red',
                'text' => 'OutSystems Platform <@3 years>',
                'dialog' => [
                    'title' => 'Low code technology',
                    'content' => [
                        ['Use of the Outsystems framework',
                            'Since 2016 up to 2019 I worked for Finnish company eSystems Nordic Oy.',
                            'This company built their technological stack on the Outystems low code platform',
                            'During 3 years I have been working at 5 projects with the use of this technology',
                            'I obtained Associate Developer certificate in this area.',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.docker',
                'color' => 'cyan',
                'text' => 'Docker <@4 years>',
                'dialog' => [
                    'title' => 'Docker use',
                    'content' => [
                        ['Docker',
                            'Since 2019 in all projects I took part the use of Docker for local environment was inevitable condition.',
                            'Some steps in the corporate project local setup I were made by me.',
                            'All my individual projects that I extensively reuse for my new projects are set with the use of Docker in different environments.',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.agile',
                'color' => 'blue',
                'text' => 'Agile principles <@7 years>',
                'dialog' => [
                    'title' => 'Agile development methods',
                    'content' => [
                        ['Participation in Agile projects',
                            'Since 2016 all team projects where I took part were Agile aligned.',
                            'Most projects involved all elements of the Scrum style process.',
                            'Wide variety of project management tools (Gira, Rally, Trello, Redmine) were implemented.',
                            'Different communication tools (Slack, Google and Office 365) were practiced during this period.',
                            'Kanban approach was implemented in one project.'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.desktop',
                'color' => 'orange',
                'text' => 'Desktop applications <@7 years>',
                'dialog' => [
                    'title' => 'Multi-user computerized systems for enterprise management',
                    'content' => [
                        ['Desktop applcations for ',
                            'primary document development',
                            'operational and accounting control',
                            'business analysis tools and enterprise decision-making process',
                            'enterprise resource planning (ERP-system)',
                            'personnel management system',
                            'customers and counterparties service and contact maintenance',
                            'financial planning',
                            'software integration of business control systems with data exchange technology',
                            'Commerce, warehouse equipment (barcode scanners, cash registers, QR-code technology and so on.)'
                        ],
                        ['Platform and Technologies',
                            'Operating systems:',
                            'Windows 9 x, 2000, XP, NT',
                            'Linux',
                            'Database management systems:',
                            'MS Access, MS SQL Server',
                            'MySQL, PostgreSQL',
                            'Programming languages:',
                            'Visual basic',
                            'C++ MFC'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.embed',
                'color' => 'deep-orange',
                'text' => 'embedded systems <@4 years>',
                'dialog' => [
                    'title' => 'Computerized control systems',
                    'content' => [
                        ['Applcations for ',
                            'I had an experience of 3 years working on the air traffic control system. ',
                            'Within this project we developed and implemented the application that',
                            'maintatined radar and other equipment control',
                            'processed the signals from different communication sources',
                            'made graphic visualization of the aircraft traffic and airplane resource parameters',
                            'made complex calculations for tracking algorithm and geometric compute',
                            'provided operator control on the guided aircrafts'
                            ],
                        ['Platform and Technologies',
                            'Operating systems:',
                            'MS DOS, Windows',
                            'QNX 6.1 / Neutrino, Photon App Builder, ',
                            'Database management systems:',
                            'PostgreSQL',
                            'Programming languages:',
                            'C++'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.control',
                'color' => 'brown',
                'text' => 'equipment control system <@4 years>',
                'dialog' => [
                    'title' => 'Computerized control systems',
                    'content' => [
                        ['Applcations for ',
                            'I had an experience of 3 years working on the air traffic control system. ',
                            'Within this project we developed and implemented the application that',
                            'maintatined radar and other equipment control',
                            'processed the signals from different communication sources',
                            'made graphic visualization of the aircraft traffic and airplane resource parameters',
                            'made complex calculations for tracking algorithm and geometric compute',
                            'provided operator control on the guided aircrafts'
                        ],
                        ['Platform and Technologies',
                            'Operating systems:',
                            'MS DOS, Windows',
                            'QNX 6.1 / Neutrino, Photon App Builder, ',
                            'Database management systems:',
                            'PostgreSQL',
                            'Programming languages:',
                            'C++'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.english',
                'color' => 'purple',
                'text' => 'Fluent English',
                'dialog' => [
                    'title' => 'English and communication skills',
                    'content' => [
                        ['Fluent English',
                            'I maintain my English since my year study in USA (University of Alabama)',
                            'Since that time I improve my language proficiency in my professional and private communications',
                            'During 15 years I worked in several companies where English was a language of communication',
                            'I worked with with employers and clients from USA, Finland, Germany, Brazil.',
                            'During all my working period I basically received and developed documentation in English.',
                        ],
                        ['Communication skills',
                            'During extensive period of my individual career I had to communicate with the product owner and sometimes top company management.',
                            'I consider my communication skills quite sold for dealing both with the business people and IT professionals.',
                            'I always try to sustain friendly style of relationships with colleagues and clients',
                            'Big experience of communication with people from different cultural and social environments is also my distinguishing trait.',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.communication',
                'color' => 'deep-purple',
                'text' => 'communication skills',
                'dialog' => [
                    'title' => 'English and communication skills',
                    'content' => [
                        ['Fluent English',
                            'I maintain my English since my year study in USA (University of Alabama)',
                            'Since that time I improve my language proficiency in my professional and private communications',
                            'During 15 years I worked in several companies where English was a language of communication',
                            'I worked with with employers and clients from USA, Finland, Germany, Brazil.',
                            'During all my working period I basically received and developed documentation in English.',
                        ],
                        ['Communication skills',
                            'During extensive period of my individual career I had to communicate with the product owner and sometimes top company management.',
                            'I consider my communication skills quite sold for dealing both with the business people and IT professionals.',
                            'I always try to sustain friendly style of relationships with colleagues and clients',
                            'Big experience of communication with people from different cultural and social environments is also my distinguishing trait.',
                        ],
                    ]
                ],
            ],

        ];
    }
    public function getText(): array
    {
        return [
            'I am a web programmer from Russia currently located in Batumi, Republic of Georgia.',
            'Now open for job proposals and interesting projects.',
            'The professional software engineer with the <exp.general>.',
            'During last <@15 years> I specialize at the field of <exp.web>.',
            'My tech stack is Backend development on <exp.php> with the use of <exp.yii>.',
            'I also have good knowledge of <exp.laravel>.',
            'Frontend development is based on the traditional basis: <exp.frontend> and <exp.bootstrap>. I have some practice in <exp.vue>.',
            'During my long practice of desktop and web applications developmet I handled <exp.database> on a large scale.',
            'Numerous projects were implemented both by <a.projectsp the individual efforts> and as <a.projectst a part of the team>',
            'My development practice is built on the SOLID principles and based on the design patterns accepted as the common attitude in contemporary programming. The use of MVC pattern in the framework allows to create a clear and easily adopted code. It also leaves open the possibility to preserve the flexibility of the technology.',
            'In my long-time activity as the software engineer I was involved in the web projects from <economy.fields>.',
            'I had big experience with the individual projects where I developed my <projects.individual>.',
            'During my extensive practice I handled many different <tasks.web>',
            'I had practice with a low-code application development and delivery <exp.outsystems>. I am an Associate Developer certified specialist.',
            'In many team projects I had experience to work with the Legacy systems and handled quite tangled technological solutions.',
            'I have experience in creating and editing existing sites based on CMS Joomla and Wordpress.',
            'Big experience in REST API development and other side API integration.',
            'The project development basically is conducted in local environment provided by the <exp.docker> with the extensive use of Git flow and CI/CD tools.',
            'Most of my developing activity was carried out in the projects based on <exp.agile> with complete Scrum cycle and techniques of this methodology.',
            'Big part of my developer career I worked on <exp.desktop> built on C++ and Visual Basic. I also have experience in production of <exp.embed> and <exp.control> on C++ in UNIX and QNX environment.',
            '<exp.english>. Good <exp.communication> that I earned during long period of individual direct work with the customers.',
            'Registered as an individual entrepreneur in Georgia and have multicurrency account in Georgian Bank.',
        ];
    }
}
