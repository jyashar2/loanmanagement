@extends('layouts.master')
@section('title')
    {{trans_choice('general.add',1)}} {{trans_choice('general.borrower',1)}}
@endsection
@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">{{trans_choice('general.add',1)}} {{trans_choice('general.borrower',1)}}</h6>
            <div class="heading-elements">

            </div>
        </div>
        {!! Form::open(array('url' => url('borrower/store'), 'method' => 'post', 'name' => 'form',"enctype"=>"multipart/form-data")) !!}
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('title',trans_choice('general.title',1)." *",array('class'=>'')) !!}
                        {!! Form::select('title',array('Mr'=>trans_choice('general.Mr',1),'Mrs'=>trans_choice('general.Mrs',1), 'Miss'=>trans_choice('general.Miss',1),'Ms'=>trans_choice('general.Ms',1),'Dr'=>trans_choice('general.Dr',1),'Prof'=>trans_choice('general.Prof',1),'Rev'=>trans_choice('general.Rev',1)),'Mr', array('class' => 'form-control',)) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('first_name',trans_choice('general.first_name',1)." *",array('class'=>'')) !!}
                        {!! Form::text('first_name',null, array('class' => 'form-control', 'placeholder'=>trans_choice('general.first_name',1),'required'=>'required')) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('last_name',trans_choice('general.last_name',1)." *",array('class'=>'')) !!}
                        {!! Form::text('last_name',null, array('class' => 'form-control', 'placeholder'=>trans_choice('general.last_name',1),'required'=>'required')) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('gender',trans_choice('general.gender',1)." *",array('class'=>'')) !!}
                        {!! Form::select('gender',array('Male'=>trans_choice('general.male',1),'Female'=>trans_choice('general.female',1)),'Male', array('class' => 'form-control','required'=>'required')) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('unique_number',trans_choice('general.unique_number',1),array('class'=>'')) !!}
                        {!! Form::text('unique_number',null, array('class' => 'form-control', 'placeholder'=>trans_choice('general.unique_number',1))) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('country',trans_choice('general.country',1)." *",array('class'=>'')) !!}
                        {!! Form::select('country_id',$countries,\App\Models\Setting::where('setting_key','company_country')->first()->setting_value,array('class'=>'form-control select2','placeholder'=>'','required'=>'required')) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('mobile',trans_choice('general.mobile',1),array('class'=>'')) !!}
                        {!! Form::text('mobile',null, array('class' => 'form-control', 'placeholder'=>trans_choice('general.numbers_only',1))) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('email',trans_choice('general.email',1),array('class'=>'')) !!}
                        {!! Form::text('email',null, array('class' => 'form-control', 'placeholder'=>trans_choice('general.email',1))) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('dob',trans_choice('general.dob',1),array('class'=>'')) !!}
                        {!! Form::text('dob',null, array('class' => 'form-control date-picker', 'placeholder'=>"yyyy-mm-dd")) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('phone',trans_choice('general.phone',1),array('class'=>'')) !!}
                        {!! Form::text('phone',null, array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('state',trans_choice('general.state',1),array('class'=>'')) !!}
                        {!! Form::text('state',null, array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('city',trans_choice('general.city',1),array('class'=>'')) !!}
                        {!! Form::text('city',null, array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('address',trans_choice('general.address',1),array('class'=>'')) !!}
                        {!! Form::text('address',null, array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('zip',trans_choice('general.zip',1),array('class'=>'')) !!}
                        {!! Form::text('zip',null, array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('business_name',trans_choice('general.business',1),array('class'=>'')) !!}
                        {!! Form::text('business_name',null, array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('working_status',trans_choice('general.working_status',1),array('class'=>'')) !!}
                        {!! Form::select('working_status',array('Employee'=>trans_choice('general.Employee',1),'Owner'=>trans_choice('general.Owner',1),'Student'=>trans_choice('general.Student',1),'Overseas Worker'=>trans_choice('general.Overseas Worker',1),'Pensioner'=>trans_choice('general.Pensioner',1),'Unemployed'=>trans_choice('general.Unemployed',1)),null, array('class' => 'form-control',)) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('photo',trans_choice('general.photo',1),array('class'=>'')) !!}
                        {!! Form::file('photo', array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('files',trans_choice('general.file',2). ' '.trans_choice('general.borrower_file_types',2),array('class'=>'')) !!}
                        {!! Form::file('files[]', array('class' => 'form-control', 'multiple'=>"")) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('notes',trans_choice('general.description',1),array('class'=>'')) !!}
                {!! Form::textarea('notes',null, array('class' => 'form-control', 'placeholder'=>"",'rows'=>'3')) !!}
            </div>
            <p class="bg-navy disabled color-palette">{{trans_choice('general.login',1)}} {{trans_choice('general.detail',2)}}</p>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('username',trans_choice('general.username',1),array('class'=>'')) !!}
                        {!! Form::text('username',null, array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('password',trans_choice('general.password',1),array('class'=>'')) !!}
                        {!! Form::password('password', array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('repeatpassword',trans_choice('general.repeat_password',1),array('class'=>'')) !!}
                        {!! Form::password('repeatpassword', array('class' => 'form-control', 'placeholder'=>"")) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('loan_officers',trans_choice('general.loan_officer_access',2),array('class'=>'')) !!}
                {!! Form::select('loan_officers[]',$user,null, array('class' => 'form-control select2','multiple'=>'')) !!}
            </div>
            <p class="bg-navy disabled color-palette">{{trans_choice('general.custom_field',2)}}</p>
            @foreach($custom_fields as $key)

                <div class="form-group">
                    {!! Form::label($key->id,$key->name,array('class'=>'')) !!}
                    @if($key->field_type=="number")
                        <input type="number" class="form-control" name="{{$key->id}}"
                               @if($key->required==1) required @endif>
                    @endif
                    @if($key->field_type=="textfield")
                        <input type="text" class="form-control" name="{{$key->id}}"
                               @if($key->required==1) required @endif>
                    @endif
                    @if($key->field_type=="date")
                        <input type="text" class="form-control date-picker" name="{{$key->id}}"
                               @if($key->required==1) required @endif>
                    @endif
                    @if($key->field_type=="textarea")
                        <textarea class="form-control" name="{{$key->id}}"
                                  @if($key->required==1) required @endif></textarea>
                    @endif
                    @if($key->field_type=="decimal")
                        <input type="text" class="form-control touchspin" name="{{$key->id}}"
                               @if($key->required==1) required @endif>
                    @endif
                </div>
            @endforeach
        </div>
        <!-- /.panel-body -->
        <div class="panel-footer">
            <div class="heading-elements">
                <button type="submit" class="btn btn-primary pull-right">{{trans_choice('general.save',1)}}</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- /.box -->
@endsection

