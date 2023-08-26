<!DOCTYPE html>
<!--
Template Name: Midone - Laravel Admin Dashboard Starter Kit
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ env("APP_DESCRIPTION") }}">
    <meta name="keywords" content="{{ env("APP_KEYWORDS") }}">
    <meta name="author" content="{{ env("APP_AUTHOR") }}">

    @yield('head')

    <!-- BEGIN: CSS Assets-->
    @vite(['resources/css/app.css', 'public/dist/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

@yield('body')

</html>