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

<a href="{{route('viewClientProfilePage')}}">Profile</a>

<i class="fa fa-angle-right"></i>

<span>Update Client Profile</span>

</h2>
</div>

@endsection


@section('page')



<section class="blank row">

        {{Form::open(['route'=>'updateClientProfileRequest','files'=>true,'method'=>'post'])}}


			<article class="col-sm-12 blank-page text-center">

				<!-- client profile logo goes here -->
				<img src="" width="150" alt="" />

			</article>

			<article class="col-sm-12 profile-list blank-page">

				  <div class="row">

              <div class="col-sm-12">


						<div class="info-detail form-group {{$errors->has('companyName') ? 'has-error' : null}}">

               {!! Form::label('companyName','Company Name') !!}
               {!! Form::text('companyName',$clientProfile->companyName,['class'=>'form-control']) !!}
						</div>

            <div class="info-detail form-group {{$errors->has('companyRegistrationNumber') ? 'has-error' : null}}">

               {!! Form::label('companyRegistrationNumber','Company Registration Number') !!}
               {!! Form::text('companyRegistrationNumber',$clientProfile->companyRegistrationNumber,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('bulidng') ? 'has-error' : null}}">

               {!! Form::label('building','Building Name') !!}
               {!! Form::text('building',$clientProfile->building,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('floor') ? 'has-error' : null}}">

               {!! Form::label('florr','Floor') !!}
               {!! Form::text('floor',$clientProfile->floor,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('road') ? 'has-error' : null}}">

               {!! Form::label('road','Road') !!}
               {!! Form::text('road',$clientProfile->road,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('city') ? 'has-error' : null}}">

               {!! Form::label('city','City') !!}
               {!! Form::text('city',$clientProfile->city,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('state') ? 'has-error' : null}}">

               {!! Form::label('state','State') !!}
               {!! Form::text('state',$clientProfile->state,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('country') ? 'has-error' : null}}">

               {!! Form::label('country','Country') !!}
               {!! Form::text('country',$clientProfile->country,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('postalCode') ? 'has-error' : null}}">

               {!! Form::label('postalCode','Postal Code') !!}
               {!! Form::text('postalCode',$clientProfile->postalCode,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('phone') ? 'has-error' : null}}">

               {!! Form::label('phone','Phone') !!}
               {!! Form::text('phone',$clientProfile->phone,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('fax') ? 'has-error' : null}}">

               {!! Form::label('fax','Fax') !!}
               {!! Form::text('fax',$clientProfile->fax,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('email') ? 'has-error' : null}}">

               {!! Form::label('email','Email') !!}
               {!! Form::text('email',$clientProfile->email,['class'=>'form-control']) !!}
            </div>

            <div class="info-detail form-group {{$errors->has('state') ? 'has-error' : null}}">

               {!! Form::submit('UPDATE',['class'=>'form-control btn btn-primary']) !!}
            </div>

          </div> <!-- col-sm-12 END -->

        </div> <!-- row END -->




        {{Form::close()}}

			</article>



</section>

@endsection
