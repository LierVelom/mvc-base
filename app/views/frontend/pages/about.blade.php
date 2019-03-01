@extends('frontend.layouts.app', ['title' => 'About']) 

@section('content')
    <div class="text-center">
        <h1 class="mt-5">This is about page</h1>
        <div>Show log in your browser to see scripts works</div>
    </div>
@endsection

 {{-- Scripts in each view --}} 
@section('scripts')
<script>
    console.log('This script block just working in about page');
</script>
@endsection 