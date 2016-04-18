@extends('app.layout')

@section('pageTitle')
Profile
@endsection


@section('pageStyles')
<link rel="stylesheet" href="/assets/css/client-profile.css">
@endsection


@section('pageScripts')
@endsection

@section('breadcrumbs')

<div class="banner">

<h2>

    <a href="{{route('viewDashBoard')}}">Home</a>

    <i class="fa fa-angle-right"></i>

    <span>Profile</span>

    <a class="pull-right text-primary" href="{{route('updateClientProfilePage')}}"> UPDATE PROFILE </a>
    
</h2>
    
    
</div>

@endsection


@section('page')



<section class="blank row">


			<article class="col-lg-12 blank-page">

				<!-- client profile logo goes here -->
				@if(isset($userProfile->logo) && $userProfile->logo != null)
                
                    <img src="{{asset($userProfile->clientId.'/'.$userProfile->logo)}}" alt="" />
                
                @endif

			</article>

			<article class="col-lg-12 profile-list blank-page">

				  <div class="row">

						<div class="col-lg-3 info-label">
							Company Name:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->companyName}}
						</div>

				  </div>

					<div class="row">

						<div class="col-lg-3 info-label">
							Registration Number:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->companyRegistrationNumber}}
						</div>

				  </div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Building:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->building}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Floor:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->floor}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Road:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->road}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							City:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->city}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							State:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->state}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Country:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->country}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Portal Code:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->postalCode}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Phone:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->phone}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Fax:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->fax}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Email:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->email}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Registered On:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->created_at}}
						</div>

					</div>


					<div class="row">

						<div class="col-lg-3 info-label">
							Last Profile Update:
						</div>

						<div class="col-lg-9 info-detail">
							 {{$userProfile->updated_at}}
						</div>

					</div>


			</article>



</section>

@endsection
