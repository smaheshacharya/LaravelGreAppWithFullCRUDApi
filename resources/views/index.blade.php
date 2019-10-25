
@extends('layouts.app')
@section('content')
<div class="container">
    @guest
    <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                <div class="card-header">Create Your Account <a href="{{url('register')}}">SignUP</a> or <a href="{{url('login')}}">Login</a></div>
                    <div class="card-body">
                        <p>Connect with Us by Signing up in GRE Vocab with your personal information.</p> 
                    </div>
                </div>
            </div>
        </div>
        @endguest
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">GRE Vocabulary</div>
                <div class="card-body">
                This is Basic Vocab Collection for GRE.
                </div>
                <div class="card-footer">Learn Words <a href="{{url('/basic')}}" style="color:rgb(107, 102, 102);"><i class="fa fa-arrow-right"></i></a> </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Intermediate Vocabulary</div>
                <div class="card-body">
                        High School Vocabulary for English speaking.
                </div>
                <div class="card-footer">Learn Words <a href="{{url('/inter')}}" style="color:rgb(107, 102, 102);"><i class="fa fa-arrow-right"></i></a> </div>
                </div>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Advance Vocabulary </div>
                <div class="card-body">
                This is Basic Vocab Collection for GRE.
                </div>
            <div class="card-footer">Learn Words <a href="{{url('/adv')}}" style="color:rgb(107, 102, 102);"><i class="fa fa-arrow-right"></i></a>  </div>
            </div>
        </div>
    </div>
</div>



@endsection