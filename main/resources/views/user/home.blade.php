@extends('user.layouts.app')

@section('content')
 <!-- registration form -->

 @include('user.components.carosel')

 <!-- end carousel -->

 <!-- headline start  -->

 @include('user.components.headline')


 <!-- headline end  -->

 <!-- Donor info start -->
 @include('user.components.donorinfo')
 <!-- Donor info end -->

 <!-- blood groups start-->

 @include('user.components.bloodgroup')

 <!-- blood group end -->

 <!-- blood donor start-->
 @include('user.components.becomedonor')
 <!-- blood group end -->
@endsection
