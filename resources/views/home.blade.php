@extends('layouts.app')

@section('subtitle', '| Full-stack Web Developer')

@section('content')
    <!-- HOME -->
    @include('modules.home-section')
    <!-- ABOUT -->
    @include('modules.about-section')
    <!--SKILLS-->
    @include('modules.skills-section')
    <!-- RESUME -->
    @include('modules.resume-section')
    <!-- CONTACT -->
    @include('modules.contact-section')
@endsection