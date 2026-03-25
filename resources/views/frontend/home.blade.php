@extends('layouts.app')

@section('content')
    {{-- including for design sections page for homepge --}}
    @include('frontend.sections.about-agency')
    @include('frontend.sections.featured-projects', ['projects' => $projects])
@endsection
