<?php

namespace App\Models\Feeds;

class Index implements FeedInterface
{
    public function getData(): array
    {
        return [
            [
                'name' => 'exp.general',
                'color' => 'deep-orange',
                'text' => '<@27 years> of experience',
                'dialog' => ['title' => 'Software engineering',
                    'content' => [
                        ['My experience',
                            'Since 1995 when I started my computer science study at the University of Alabama in USA I am entirely in the programming in different fields of computerized system development on different platforms.',
                            '27 years, 30 project, including 18 individual and 12 big corporate team projects',
                        ],
                        ['Fields of expertise', 'web application development', 'database design and maintenance', 'desktop applications for accounting, warehouse and business control and operations', 'embedded systems', 'equipment control systems',]
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
                        ['Achievements ',
                            '7 big team collaborations on scalable advanced corporate projects ',
                            '9 individual projects for the customers in different industries',
                            '6 working multipurpose web-based systems of my own architecture and implementation',
                        ]
                    ]
                ]
            ],
            [
                'name' => 'exp.php',
                'color' => 'indigo',
                'text' => 'PHP <@17 years>',
                'dialog' => [
                    'title' => 'PHP experience',
                    'content' => [
                        ['PHP technological environment',
                            '<img src="images/assets/techs.png" style="width:100%">',
                        ],
                        ['Story',
                            'There was some period of building static web resources on pure HTML with Javascript implementation.',
                            'I started in 2008 with the PHP 5.6 version for small dynamic web-site construction',
                            'In 2013 the necessity in more robust instrument brought up the need for PHP framework utilizing.',
                            'Yii and later Yii2 frameworks became my major platform for production development',
                            'Since 2019, I have actively participated in numerous projects utilizing PHP 7.4, applying its features to build efficient and scalable solutions.',
                            'I learned and built some individual projects on Laravel PHP framework.  Later I took part in 2 commercial team projects with this framework.',
                            'For the last 2 years, I have been working with Symfony on individual projects, leveraging its powerful features and best practices.',
                            'In my practice I usually follow the SOLID principles of development with the use of design patterns',
                            'Recently I took part in the projects on PHP 8 with the implementation of technologies like Memcached, Redis, ElasticSearch'
                        ],
                    ]

                ],
            ],
            [
                'name' => 'exp.yii',
                'color' => 'teal',
                'text' => 'Yii and Yii2 framework <@9 years>',
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
                            'Customer registration and access control',
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
                'text' => 'Laravel <@5 years>',
                'dialog' => [
                    'title' => 'Advanced MVC framework use',
                    'content' => [
                        ['',
                            'For last 5 years I extensively use Laravel as my preferable framework.',
                            'I was impressed by the invincible advance of this system. How quickly it came by the leading role in the PHP technological industry.',
                            'I like to employ the most auspicious technologies that this framework provides. Often incorporate Laravel elements in the other technological environments. ',
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
                'name' => 'exp.symfony',
                'color' => 'dark-gray',
                'text' => 'Symfony <@3 years>',
                'dialog' => [
                    'title' => 'Advanced MVC framework',
                    'content' => [
                        ['Symfony Framework experience',
                            'For the last 3 years, I have been working with Symfony on individual projects, leveraging its powerful features and best practices.',
                            'MVC Architecture – Utilizing Symfony’s structured approach to keep code clean, scalable, and maintainable.',
                            'I like to employ Doctrine ORM! Its powerful entity management, seamless migrations, and flexible repositories make database interactions both efficient and enjoyable.',
                            'Symfony Console – Automating tasks, running commands, and handling cron jobs',
                        ],
                        ['My favorite features',
                            'Security & Authentication – Implementing user authentication using Symfony Security (JWT, OAuth, API Token)',
                            'RESTful API Development – Building robust APIs with Symfony’s API Platform and serializer component',
                            'Event Dispatcher & Listeners – Managing event-driven logic for modular application design',
                            'Dependency Injection – Structuring services for decoupled and testable code',
                            'Testing with PHPUnit – Writing unit and functional tests for high-quality software',
                            'Integration with Third-Party APIs – Connecting to external services like payment gateways, email providers, and social logins',
                            'Dockerized Symfony Development – Running Symfony applications in Docker containers for consistent environments',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.frontend',
                'color' => 'yellow',
                'text' => 'HTML, CSS <@27 years>',
                'dialog' => [
                    'title' => 'My frontend practices',
                    'content' => [
                        ['Front end development',
                            'My frontend practices were set up when separation between fronend and backend has not come along. In my individual projects I had to fulfil all jobs.',
                            'Many technologies, extensive use of jQuery UI and components were employed.',
                            'In my own projects front-end side is built on the responsive web design principles',
                            'Cross-browser compatibility handling and progressive enhancement strategies',
                            'I extensively use Bootstrap framework',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.js',
                'color' => 'silver',
                'text' => 'JS, TS with jQuery <@16 years>',
                'dialog' => [
                    'title' => 'Javascript and Typescript',
                    'content' => [
                        ['Javascript',
                            'Extensive experience with vanilla JavaScript, DOM manipulation, and event-driven programming',
                            'Many technologies, extensive use of jQuery UI and components were employed.',
                            'Strong skills in optimizing performance and rendering, including lazy loading, code splitting, and caching strategies.',
                            'Experience with integrating third-party APIs such as Google Maps API, Facebook SDK, and payment gateways.',
                            'Managing asynchronous operations with Promises, async/await, and event-driven architectures.',
                        ],
                        ['Typescript',
                            'Developing scalable and maintainable applications using TypeScript, ensuring type safety and enhanced code quality.',
                            'Using TypeScript with Vue.js, Node.js, and frontend frameworks for structured development.',
                            'Extensive experience with Vite for ultra-fast frontend builds, live reloading, and modern JavaScript/TypeScript support.',
                            'Using npm/yarn for dependency management and script automation.',
                            'Implementing tree shaking, code splitting, and ES modules for optimized frontend performance.',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.tailwind',
                'color' => 'light-blue',
                'text' => 'Tailwind <@3 years>',
                'dialog' => [
                    'title' => 'Tailwind CSS Expertise',
                    'content' => [
                        ['Front end development',
                            'Recently, I have gained hands-on experience with Tailwind CSS, a utility-first framework that allows for rapid UI development with minimal CSS files.',
                            'Using Tailwind’s utility classes to streamline styling and reduce the need for additional CSS.',
                            'Applying dark mode support, theming, and responsive layouts efficiently.',
                            'Implementing Tailwind with Vue.js for modern frontend applications.'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.bootstrap',
                'color' => 'light-green',
                'text' => 'Bootstrap <@8 years>',
                'dialog' => [
                    'title' => 'Bootstrap Expertise',
                    'content' => [
                        ['In my frontend development',
                            'I have extensive experience using the Bootstrap framework for responsive and mobile-first web development. ',
                            'It has been an integral part of my frontend projects, providing a consistent, structured approach to UI design built on the responsive web design principles.',
                            'Proficient in Bootstrap’s grid system, utilities, and component-based development.',
                            'Utilizing AdminLTE, a powerful Bootstrap-based admin panel, for dashboards with widgets, charts, tables, and user management interfaces.'
                        ],
                        ['Js integrations',
                            'Experience with Bootstrap JavaScript components, such as modals, carousels, tooltips, and accordions.',
                            'Integrating Bootstrap with jQuery and Vue.js for dynamic UI elements.',
                            'Recently had some experience with  Tailwind CSS',
                            'Optimizing page performance by using only required Bootstrap modules instead of the full library..'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.vue',
                'color' => 'green',
                'text' => 'Vue.js <@4 years>',
                'dialog' => [
                    'title' => 'Vue.js',
                    'content' => [
                        ['Vue.js practical usage',
                            'While working on the Laravel project I used Vue.js as a frontend template.',
                            'I had experience of implementing Vue.js with Inertia.js.',
                            'Most of my personal web projects during last 4 years I built on the Vue.js basis',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.solid',
                'color' => 'blue-gray',
                'text' => 'SOLID',
                'dialog' => [
                    'title' => 'SOLID Principles and Design Patterns',
                    'content' => [
                        ['SOLID Principles:',
                            'Single Responsibility Principle (SRP): Ensures that each class has one reason to change, making the code more maintainable.',
                            'Open/Closed Principle (OCP): Classes should be open for extension but closed for modification, promoting scalability and flexibility.',
                            'Liskov Substitution Principle (LSP): Derived classes must be substitutable for their base classes without affecting correctness.',
                            'Interface Segregation Principle (ISP): Clients should not be forced to depend on interfaces they do not use.',
                            'Dependency Inversion Principle (DIP): High-level modules should not depend on low-level modules, but both should depend on abstractions',
                        ],
                        ['Design Patterns:',
                            'Creational Patterns: Deal with object creation mechanisms, such as Singleton, Factory, and Builder, to make systems more flexible and reusable.',
                            'Structural Patterns: Focus on how objects and classes are composed to form larger structures, like Adapter, Facade, and Proxy.',
                            'Behavioral Patterns: Focus on communication between objects, such as Observer, Strategy, and Command, to simplify object interactions.',
                        ],

                    ]
                ],
            ],
            [
                'name' => 'exp.mvc',
                'color' => 'indigo',
                'text' => 'MVC pattern',
                'dialog' => [
                    'title' => 'MVC',
                    'content' => [
                        ['MVC (Model-View-Controller) Pattern:',
                            'Model: Represents the data and business logic of the application.',
                            'View: Displays the data to the user and receives input.',
                            'Controller: Acts as an intermediary between the Model and View, handling user input and updating the view accordingly.',
                            'MVC enables the separation of concerns, making code more modular, reusable, and easier to maintain.',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.database',
                'color' => 'amber',
                'text' => 'database design and maintenance<@27 years>',
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
                            'MySQL	since 2009 up to now',
                            'PostgreSQL	in 2023'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.instruments',
                'color' => 'orange',
                'text' => 'popular data handling instruments<@3 years>',
                'dialog' => [
                    'title' => 'Popular tools used in web development ,',
                    'content' => [
                        ['high-performance in-memory data store',
                            'Redis',
                            'Elasticsearch',
                            'Memcached',
                        ],
                        ['NoSQL database',
                            'MongoDB',
                            'Google BigQuery',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'economy.fields',
                'color' => 'lime',
                'text' => 'various sectors of the economy',
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
                'name' => 'economy.marketing',
                'color' => 'teal',
                'text' => 'marketing tools and platforms',
                'dialog' => [
                    'title' => 'software platforms related to affiliate marketing and performance analytics',
                    'content' => [
                        ['affiliate marketing platforms for managing and optimizing performance marketing campaigns',
                            'Google Ads',
                            'Facebook Ads Manager',
                            'Everflow'
                        ],
                        ['lead distribution and performance tracking platform ',
                            'Google Analytics',
                            'Facebook Business Manager',
                            'Facebook Insights',
                            'Leadspedia',
                            'HasOffers',
                        ],
                    ]
                ],
            ],
            [
                'name' => 'projects.individual1',
                'color' => 'aqua',
                'text' => 'own architecture',
                'dialog' => [
                    'title' => 'In my individual work',
                    'content' => [
                        ['Implemented Corporate Information Systems',
                            'Built applications from the ground up based on customer-specific requirements.',
                            'Designed scalable and flexible architectures to accommodate future growth',
                            'Designed and integrated solutions tailored to enterprise-level needs',
                            'Applied industry best practices to ensure reliability, security, and maintainability',
                            'Provided System Integration and Data Migration',
                            'Optimized System performance',
                        ],
                        ['Maintaining and Enhancing Legacy Systems',
                            'Continued development and support for long-running projects with outdated codebases',
                            'Refactored and optimized existing systems while preserving core functionality',
                            'Migrated outdated platforms to more efficient and scalable architectures.',
                            'Connected new systems with existing corporate infrastructure and third-party services',
                            'Successfully connected various external services, APIs, and SaaS solutions',
                            'Ensured seamless communication between internal systems and third-party platforms',
                        ],
                    ]

                ],
            ],
            [
                'name' => 'projects.individual2',
                'color' => 'aqua',
                'text' => 'configuration and solutions',
                'dialog' => [
                    'title' => 'In my individual work',
                    'content' => [
                        ['Implemented Corporate Information Systems',
                            'Built applications from the ground up based on customer-specific requirements.',
                            'Designed scalable and flexible architectures to accommodate future growth',
                            'Designed and integrated solutions tailored to enterprise-level needs',
                            'Applied industry best practices to ensure reliability, security, and maintainability',
                            'Provided System Integration and Data Migration',
                            'Optimized System performance',
                        ],
                        ['Maintaining and Enhancing Legacy Systems',
                            'Continued development and support for long-running projects with outdated codebases',
                            'Refactored and optimized existing systems while preserving core functionality',
                            'Migrated outdated platforms to more efficient and scalable architectures.',
                            'Connected new systems with existing corporate infrastructure and third-party services',
                            'Successfully connected various external services, APIs, and SaaS solutions',
                            'Ensured seamless communication between internal systems and third-party platforms',
                        ],
                    ]

                ],
            ],
            [
                'name' => 'projects.roles',
                'color' => 'khaki',
                'text' => 'all roles',
                'dialog' => [
                    'title' => 'Roles in my individual work',
                    'content' => [
                        ['I managed the entire application development lifecycle',
                            'In-depth business analysis and set up the tasks based on customer-specific requirements.',
                            'Define project objectives, and establish clear deliverables',
                            'During the architecture planning phase, I designed scalable and efficient system architectures tailored to project needs',
                            'Choosing the right technologies and functional components for optimal performance',
                            'Development phase: coding, testing, delivery',
                            'Identified and resolved bottlenecks in slow or inefficient parts of app',
                            'Handled system deployment, overseeing the configuration of production environments and ensuring a smooth rollout',
                            'Comprehensive training for end-users and personnel, creating documentation to support ongoing operations and troubleshooting',
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
                            'Administrative panel',
                            'Import/Export Excel/XML/CSV',
                            'PDF generation',
                            'QR code generation',
                            'Google and Yandex map API',
                            'Google and Facebook SSO',
                            'Lazy loading',
                            'Mailgun integration',
                            'Worked with payment gateways, CRM platforms, marketing tools, and analytics services.'
                        ],
                        ['Functionality I developed',
                            'Shopping Cart for online ordering',
                            'Email sending',
                            'CRUD with filtering, sorting, pagination',
                            'Customer registration and access contol',
                            'Composer implementation',
                            'On-line payment',
                            'RESTful API',
                            'Automated application  deployment',
                            'Ensured seamless communication between internal systems and third-party platforms',
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
                            'The big diversity of the web engine architectures for local use were set by me.',
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
                            'Wide variety of project management tools (JIRA, Rally, Trello, Redmine, Asana) were implemented.',
                            'Different communication tools (Slack, Google and Office 365) were practiced during this period.',
                            'Kanban approach was implemented in one project.'
                        ],
                    ]
                ],
            ],
            [
                'name' => 'exp.api',
                'color' => 'blue',
                'text' => 'REST API and GraphQL',
                'dialog' => [
                    'title' => 'REST API development and third-party API integrating',
                    'content' => [
                        ['API technologies',
                            '<img src="images/assets/API_Arch.gif" style="width:100%">',
                        ],
                        ['Designing and developing RESTful APIs',
                            'Implementing authentication mechanisms such as OAuth, JWT, and API keys to secure APIs',
                            'Integrating third-party APIs like payment gateways (e.g., Stripe, Square, Mollies), social media logins (e.g., Facebook, Google), and email services (e.g., Mailgun)',
                            'Ensuring smooth data exchange through proper API versioning, error handling, and response formatting (JSON, XML)',
                            'Optimizing API performance through caching, rate limiting, and other strategies to handle high traffic and large datasets',
                            'Integrating with external services like CRMs, ERP systems, and marketing platforms to automate workflows and streamline processes',
                            'Documenting APIs using tools like Swagger or Postman to ensure ease of use and collaboration across teams',
                            'Maintaining API security by preventing vulnerabilities such as SQL injection, cross-site scripting (XSS), and cross-site request forgery (CSRF)',
                            'I have solid experience working with GraphQL, including designing schemas, optimizing queries, and integrating GraphQL APIs into PHP-based backends and frontend applications.'
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
                            'During all my individual career I had to communicate with the product owner and sometimes top company management.',
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
                            'During all my career as individual enterpreneur I had to communicate with the product owner and sometimes top company management.',
                            'Since that time I improve my language proficiency in my professional and private communications',
                            'During 15 years I worked in several companies where English was a language of communication',
                            'I worked with with employers and clients from USA, Finland, Germany, Brazil.',
                            'During all my working period I basically received and developed documentation in English.',
                        ],
                        ['Communication skills',
                            'During all my career as individual enterpreneur I had to communicate with the product owner and sometimes top company management.',
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
            'I am a web software engineer based in Batumi, Republic of Georgia. I am currently open to job opportunities and exciting new projects.',
            'With <exp.general> in software engineering, I have spent the last <@16 years> specializing in <exp.web>.',
            'My tech stack focuses on backend development with <exp.php>, utilizing <exp.yii>, as well as <exp.laravel>. I also have hands-on experience with <exp.symfony>.',
            'My frontend development expertise is built on a solid foundation of <exp.frontend> with extensive use of <exp.js> and the <exp.bootstrap> and <exp.tailwind>.  Recently, I have been extensively using <exp.vue> .',
            'Throughout my extensive experience in desktop and web application development, I have honed my skills in <exp.database> on a large scale. I have also consistently demonstrated proficiency in working with a diverse range of <exp.instruments>.',
            'The project development basically is conducted in local environment provided by the <exp.docker> with the extensive use of Git flow and CI/CD tools.',
            'My development practice is grounded in <exp.solid> principles and follows widely accepted design patterns that are central to contemporary programming. The use of the <exp.mvc> in frameworks enables the creation of clear, maintainable code while preserving the flexibility of the technology.',
            'Numerous projects were implemented both through <a.projectsp the individual efforts> and as <a.projectst a part of the team>. In the case of individual projects, I developed my <projects.individual1>, <projects.individual2> and was responsible for performing <projects.roles> typically handled by a team.',
            'Throughout my long career as a software engineer, I have been involved in web projects across <economy.fields>. I have handled a wide variety of <tasks.web> and implemented key features in many of the projects I’ve worked on.',
            'I have extensive experience in various aspects of software development, including working with both modern and legacy systems.
                Over the years, I have tackled a wide range of complex technological challenges, including:
                <i [[Maintaining, refactoring, and modernizing legacy systems with intricate architectures]]
                    [[Creating, customizing, and enhancing websites based on CMS platforms like Joomla and WordPress]]
                    [[Designing and developing [exp.api] to ensure seamless communication between services]]
                    [[Integrating third-party APIs and external services to expand system capabilities]]>',
            'Recently, I gained extensive experience in leveraging web <economy.marketing>, particularly in the areas of affiliate marketing and performance tracking.',
            'Most of my developing activity was carried out in the projects based on <exp.agile> with complete Scrum cycle and techniques of this methodology.',
            'I have hands-on experience with low-code application development and delivery using the <exp.outsystems> for over 3 years. During this time, I achieved the status of an Associate Developer certified specialist.',
            'Big part of my developer career I worked on <exp.desktop> built on C++ and Visual Basic. I also have experience in production of <exp.embed> and <exp.control> on C++ in UNIX and QNX environment.',
            '<exp.english>. Good <exp.communication> that I earned during long period of individual direct work with the customers.',
            'Registered as an individual entrepreneur in Georgia and have multicurrency account in Georgian Bank.',
        ];
    }
}
