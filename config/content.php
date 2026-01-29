<?php
/**
 * Dynamic Content Configuration
 * This file contains all the dynamic content for the portfolio website
 */

return [
    // Site Meta Information
    'site' => [
        'title' => 'Sadhasivam',
        'favicon' => 'https://i.ibb.co/zRsTj3p/Frame-1-37.png',
        'copyright_year' => date('Y'),
    ],

    // Personal Information
    'personal' => [
        'name' => 'Sadhasivam',
        'greeting' => "Hi I'm",
        'tagline' => 'Welcome to my portfolio website! I\'m a passionate and aspiring software engineer with a strong desire to create innovative solutions and push the boundaries of technology. With a deep love for coding and problem-solving, I am constantly seeking opportunities to learn and grow in this ever-evolving field',
        'profile_image' => 'files/pass.png',
        'signature_image' => 'files/signaturecropped.png',
        'resume_file' => 'files/sadhasivam_resume_softwareDeveloper.pdf',
        'email' => 'sadha30102001@gmail.com',
    ],

    // About Section
    'about' => [
        'title' => 'About Me',
        'description' => [
            'I am completed Bachelor\'s Degree in Information Technology. I have built a solid foundation in software development, particularly in areas such as Java, PHP, SQL, JavaScript, and GitHub.',
            'My expertise in these areas allows me to approach projects with confidence and deliver high-quality results. I have a strong belief in the value of continuous learning and staying adaptable in the ever-evolving world of software engineering.',
            'I actively seek out opportunities to expand my knowledge and skills, embracing new technologies and approaches. Feel free to explore my work and get in touch if you have any questions or opportunities to collaborate.',
        ],
        'details' => [
            'Name' => 'Sadhasivam',
            'Age' => '21',
            'From' => 'India',
            'Email' => 'sadha30102001@gmail.com',
            'Availability' => 'Fulltime',
            'Experience' => 'Fresher',
        ],
    ],

    // Social Links
    'social_links' => [
        [
            'icon' => 'fa fa-envelope',
            'url' => 'mailto:sadha30102001@gmail.com',
            'title' => 'Email',
        ],
        [
            'icon' => 'fa-brands fa-github',
            'url' => 'https://github.com/sadhahacker',
            'title' => 'GitHub',
        ],
        [
            'icon' => 'fa fa-code',
            'url' => 'https://leetcode.com/sadhasivamsekar/',
            'title' => 'LeetCode',
        ],
        [
            'icon' => 'fa-brands fa-linkedin',
            'url' => 'https://www.linkedin.com/in/sadhasivam-sekar-452306205/',
            'title' => 'LinkedIn',
        ],
    ],

    // Navigation Menu
    'navigation' => [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Education', 'href' => '#education'],
        ['label' => 'Projects', 'href' => '#projects'],
        ['label' => 'Skills', 'href' => '#skills'],
        ['label' => 'Contact', 'href' => '#contact'],
    ],

    // Education
    'education' => [
        [
            'title' => 'B.Tech Information Technology - 76%',
            'institution' => 'University College of Engineering Anna University',
            'period' => '2019 - 2023',
        ],
        [
            'title' => 'HSC - 78%',
            'institution' => 'Dawn Matric Higher Secondary school',
            'period' => '2018 - 2019',
        ],
        [
            'title' => 'SSLC - 89%',
            'institution' => 'Dawn Matric Higher Secondary school',
            'period' => '2016 - 2017',
        ],
    ],

    // Certifications
    'certifications' => [
        [
            'title' => 'Project on Personal Expense Tracker Application',
            'issuer' => 'ICT Academy',
            'date' => 'FEB - 2023',
            'certificate_url' => 'https://courses.ictacademy.skillsnetwork.site/certificates/6a4ae63aa2ca47fcab7db39b0c7c3e02',
        ],
        [
            'title' => 'Ethical Hacking for Beginners',
            'issuer' => 'Simplilearn',
            'date' => 'JAN - 2022',
            'certificate_url' => 'https://drive.google.com/file/d/1zHTT8xoDELlW3t4ncfqoNuEhxewxm7Vl/view',
        ],
    ],

    // Projects
    'projects' => [
        [
            'icon' => 'fa fa-coffee',
            'title' => 'Cloud File Storage using Blockchain',
            'description' => 'Technologies like IPFS, Blockchain, ReactJS, and NodeJS, implementing smart contracts with Solidity on the Ethereum blockchain. The goal was to manage file ownership, access control, and incentivized storage mechanisms. I also integrated IPFS for secure and distributed file storage and retrieval.',
        ],
        [
            'icon' => 'fa fa-car',
            'title' => 'REST API for Student Profile Management',
            'description' => 'Developed using Java, MongoDB, and Android Studio, this API boasts a user-friendly interface, empowering school administrators to perform CRUD operations effectively. It provides complete control over student profiles, allowing administrators to create, read, update, and delete profiles with ease.',
        ],
        [
            'icon' => 'fa fa-desktop',
            'title' => 'Weather Application',
            'description' => 'A weather application utilizes a weather API to fetch and display real-time meteorological data, offering users accurate and up-to-date information on temperature, humidity, wind speed, and forecasts.',
        ],
    ],

    // Skills
    'skills' => [
        ['icon' => 'fa-brands fa-java', 'name' => 'Java'],
        ['icon' => 'fa-brands fa-php', 'name' => 'PHP'],
        ['icon' => 'fa-solid fa-database', 'name' => 'MySQL'],
        ['icon' => 'fa-brands fa-html5', 'name' => 'HTML'],
        ['icon' => 'fa-brands fa-css3-alt', 'name' => 'CSS'],
        ['icon' => 'fa-brands fa-js', 'name' => 'JavaScript'],
    ],

    // Contact Section
    'contact' => [
        'title' => 'Contact Me',
        'subtitle' => 'Get In Touch',
    ],

    // Footer
    'footer' => [
        'message' => 'Thanks for visiting',
        'copyright' => '© Copyright ' . date('Y') . '. All rights reserved.',
    ],
];
