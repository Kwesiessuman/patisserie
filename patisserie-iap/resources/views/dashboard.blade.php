
<x-app-layout>
    <x-slot name="header">
            <section class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon icon-bar"></span>
                            <span class="icon icon-bar"></span>
                            <span class="icon icon-bar"></span>
                        </button>
                        <a href="/index" class="navbar-brand">LA PÂTISSERIE</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/home" class="smoothScroll">HOME</a></li>
                            <li><a href="/dashboard" class="smoothScroll">PROFILE</a></li>
                            <li><a href="/food" class="smoothScroll">FOODS</a></li>
                            <li><a href="/orders" class="smoothScroll">ORDERS</a></li>
                        </ul>
                    </div>
                </div>
            </section>
    </x-slot>

    <br><br><br>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
    </h2>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/admin.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,500' rel='stylesheet' type='text/css'>