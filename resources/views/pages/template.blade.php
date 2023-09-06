@extends('layout.masterlayout')

@section('content')
    <h2>Template</h2>
    <p>Template is used to store static information in page</p>
    <p>It consist of header,footer, navigation bars etc</p>
    <p>This project uses masterlayout template which is stored in resources/layout folder</p>
    <p>Master layout file contains html page and in head it has head.php file stored in resouce/include folder</p>
    <p>It has header tag consist of resources/include/header.php file which contains navigation bar</p>
    <p>Its article section contains dynamic data denoted by yeild('name of section')</p>
    <p>Dynamic data is filled by page using template</p>
    <p>To access dynamic section page uses @ section and name of section within function</p>
    <p>It end with @ endsection</p>

    @endsection

