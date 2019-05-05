<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{url('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <link href="{{url('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{url('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<body>
<div id="wrapper">
