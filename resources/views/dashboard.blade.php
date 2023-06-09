{{-- @extends('nice_admin.main') --}}
@extends('sb2_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          @role('Admin')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_admin') }}">Home</a></li>
          @endrole
          @role('Lab')
          <li class="breadcrumb-item"><a href="{{ route('dashboard_lab') }}">Home</a></li>
          @endrole
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      @role('Admin')
    @include('nice_admin.dashboard.dashboard_admin')
    @endrole
    @role('Dokter')
    @include('nice_admin.dashboard.dashboard_dokter')
    @endrole
    @role('Lab')
    @include('nice_admin.dashboard.dashboard_Lab')
    @endrole
      
    </section>

  </main><!-- End #main -->
@endsection
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
