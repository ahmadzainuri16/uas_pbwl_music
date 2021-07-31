@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <img src="image\gambar.jpg" alt="[IMG]"
                   width="100" class="card-img-top">
                  
                   <h4 class="display-5">
                    <br> Selamat Datang Di Album Music Ahmadzai
                    </h4>

                    {{ __('You are logged in!') }}
                </div>
                
            </div>

        </div>
        <footer>
            <div class="row">
                
                <div class="col my-5 card-footer p-3 mb-2 bg-
                secondary text-white" style="text-align:center";>
                copyright Ahmadzai &copy;2021

                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
