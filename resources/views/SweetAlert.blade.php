@extends('layouts.app')

@section('content')
<div class="container">
    <h3><center>Sweet Alert</center></h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        @include('sweet::alert')

        </div>
    </div>
</div>
@endsection
