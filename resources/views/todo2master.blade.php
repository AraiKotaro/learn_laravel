<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Todo2</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <style type="text/css">
        body {
        background-color: #fff;
        }
        
        main {
        max-width: 750px;
        word-wrap: break-word;
        }
        
        .global-header {
            //background: $red;
            background: #222 no-repeat center center;
            background-size: cover;
            margin-bottom: 30px;
        
            .header-text {
                position: relative;
                padding-bottom: 1px;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.4);
                color: rgba(255, 255, 255, 0.9);
        
            h1 {
                margin: 0 auto;
                padding-top: 30px;
                text-align: center;
                font-weight: 200;
        
                a {
                    color: rgba(255, 255, 255, 1.0);
                    text-decoration: none;
                }
            }
            }
        
            .tag-line {
                margin: 10px auto;
                padding: 0 10px;
                max-width: 430px;
                color: rgba(255, 255, 255, 0.7);
                text-align: center;
                font-weight: 300;
            }
        }
        
        .article-list h2 a {
            text-decoration: none;
            transition: color 0.1s linear;
        }
        
        .post-meta {
            margin: 5px 0;
        }
        
        .post-date {
            color: rgba(0, 0, 0, 0.4);
        }
        
        .post-tag a {
            padding: 0 10px;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 12px;
            color: rgba(0, 0, 0, 0.3);
            text-decoration: none;
            transition: color,border-color,background-color 0.1s linear;
        }
        
        .post-tag a:hover {
            background-color: rgba(0, 0, 0, 1.0);
            color: rgba(255, 255, 255, 1.0);
        }
        
        .not-found h1 {
            color: rgba(0, 0, 0, 0.2);
            font-weight: 200;
            font-size: 80px;
        }
        
        .not-found {
            text-align: center;
        }
        
        .author-info {
            padding: 25px 0;
            border-top: 1px solid rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }
        
        .author-name {
            margin: 0 0 5px 0;
            font-size: 30px;
        }
        
        .author-bio {
            color: rgba(0, 0, 0, 0.5);
        }
        
        .author-avatar img {
            max-width: 100px;
            max-height: 100px;
            width: 100px;
            height: 100px;
            border-radius: 50px;
        }
        
        .author-contact {
            position: relative;
            display: inline-block;
            padding-top: 10px;
            height: 100px;
            text-align: center;
        }
        
        .author-contact a {
            display: inline-block;
            padding: 7px 16px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 3px;
            color: rgba(0, 0, 0, 0.7);
            text-decoration: none;
            font-weight: 300;
            font-size: 13px;
            transition: background-color,border-color,color 0.1s linear;
        }
        
        .author-contact a:hover {
            border: 1px solid rgba(51, 122, 182, 1.0);
            background-color: rgba(51, 122, 183, 1.0);
            color: rgba(255, 255, 255, 1.0);
        }
        
        .pagination
        {
            width: 720px;
            text-align: center;
        }
        
        .older-posts,.newer-posts
        {
            display: inline!important;
            border: 1px solid #ddd;
            border-radius: 15px;
            text-decoration: none;
            transition: border .3s ease;
            padding: 5px 14px;
        }
        
        .page-number
        {
            display: inline-block;
            min-width: 100px;
            padding: 2px 0;
        }
        
        .newer-posts
        {
        float: left;
        }
        
        .older-posts
        {
            float: right;
        }
        
        .older-posts:hover,.newer-posts:hover
        {
            color: #889093;
            border-color: #98a0a4;
        }
        
        /* Override some of Bootstrap's styles */
        
        pre {
            font-size: 14px;
        }
        
        pre code {
            overflow: auto;
            white-space: pre;
            word-wrap: normal;
        }
        
        .pager li > a {
        transition: background-color 0.1s linear;
        }
        
        blockquote {
        font-style:italic;
        }
        
        article section img {
            max-width: 100%;
            height: auto;
            margin: 13px auto;
        }
    </style>
</head>

<body>
<header class="global-header">
    <section class="header-text">
        <h1><a href="{{ route('todo2_home') }}">Todo管理2</a></h1>
    </section>
</header>

<main id="app" class="container">
    @yield('content')
</main>

<script src="{{ mix('js/app.js') }}">
</script>
 </body>

</html>
