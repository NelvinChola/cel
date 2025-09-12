@extends('layouts.secondary')

@section('content')

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/teamteam2.jpg);">
    <div class="container">
      <h1>Team</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Team</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Team Section -->
@include('layouts/partials.teamComponent')

</main>

@endsection