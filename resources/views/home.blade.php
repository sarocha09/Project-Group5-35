@extends('layouts.app')



@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header"><h2><strong>{{ __('My Profile') }}</strong></h2></div>



                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif


                    <strong>  username : </strong> {{ Auth::user()->username }} <br>
                    <strong>  Phone : </strong> {{ Auth::user()->phone }} <br>

                    @if (Auth::user()->checkIsAdmin()) 
                    <a href="{{route('index')}}" class="btn btn-primary">Product Mangements</a>
                     @endif 
                    <a href="{{ url('/') }}" class="btn btn-success">Home</a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection