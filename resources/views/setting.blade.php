
@extends('layouts.app')
@section('content')
<div class="container">
@guest
<div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Create Your Account <a href="SignUP">SignUP</a> or <a href="">Login</a></div>
                <div class="card-body">
                    <p>Connect with Us by Signing up in GRE Vocab with your personal information.</p> 
                </div>
            </div>
        </div>
    </div>
 @endguest
 @auth
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                
                <div class="card-header">Personal Information</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-6">
                            {{auth()->user()->name}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                            {{auth()->user()->email}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Account Created At</label>
                        <div class="col-md-6">
                            {{auth()->user()->created_at}}
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Last Update</label>
                            <div class="col-md-6">
                                {{auth()->user()->updated_at}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
   
</div>



@endsection