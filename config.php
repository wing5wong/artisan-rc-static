<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisan-static-demo.netlify.com',
    'site' => [
        'title' => 'Ruapehu College',
        'description' => ' Ruapehu College is set at the foot of the beautiful Mt Ruapehu and the location defines who we are. Our students continue to seek knowledge so they can head into the future with skills that will ensure success. Whaia e koe te iti kahurangi; ki te tuohu koe, me he maunga teitei. Seek the treasure you value most deeply: if you bow your head, let it be to the lofty mountain.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Ruapehu College',
        'facebook' => 'RuapehuCollege',
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'cloudinary' => 'ruapehu-college',
        'jumprock' => 'artisanstatic',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
        'slider_images' => [
            'path' => 'slider_images/{filename}'
        ],
        'newsletters' => [
            'path' => 'newsletters/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'events' => [
            'path' => 'events/{-title}',
            'extends' => '_layouts.events',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'staff',
        'student_leaders',
        "board_of_trustees",
        "term_dates",
        'cultural',
        'cocurricular' => [
            'path' => 'curriculum/cocurricular/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'sports' => [
            'path' => 'curriculum/sport/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'departments',
        'subjects',
        'courses' => [
            'path' => 'curriculum/ncea/{-title}',
            'extends' => '_layouts.course',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'assessments',
        'our_school' => [
            'path' => 'our-school/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'curriculum' => [
            'path' => 'curriculum/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'news' => [
            'path' => 'news/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'enrolment' => [
            'path' => 'enrolment/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'international' => [
            'path' => 'international/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
        'emergency_management' => [
            'path' => 'emergency-management/{-title}',
            'extends' => '_layouts.post',
            'sort' => '-date',
            'section' => 'postContent',
            'isPost' => true,
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
