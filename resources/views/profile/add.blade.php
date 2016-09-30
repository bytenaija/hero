@extends('layouts.admin.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update your profile</div>
                <div class="panel-body">
                    <span>
                        @if(!empty($errors))
                        @foreach ($errors as $error)
                        {{$error}}<br>
                        @endforeach
                        @endif
                    </span>
                    {{Auth::user()->firstname}}, {{Auth::user()->lastname}}
                    {{Form::open(array('method'=>'POST','route' => 'profile.store', 'files' => true, 'class' => 'form-horizontal'))}}
                   <!-- <form class="form-horizontal" role="form" method="POST" action="{{ Route('profile.store') }}">
                        {{ csrf_field() }}

-->
                        <div class="form-group{{ $errors->has('organisation') ? ' has-error' : '' }}">
                            <label for="organisation" class="col-md-4 control-label">Organisation</label>

                            <div class="col-md-6">



                                <Select id="org_id" class="form-control" name="org_id" value="{{ old('org_id') }}" required>

                                    @if(!empty($orgs))
                                    @foreach($orgs as $org)
                                    <option value="{{$org->id}}">{{$org->name}}</option>
                                    @endforeach
                                    @else
                                    <option value="99999">Hero Administration</option>
                                    @endif
                                </select>

                                @if ($errors->has('org_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('org_id') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                            <label for="designation" class="col-md-4 control-label">Designation</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control" name="designation" value="{{ old('designation') }}" required autofocus>

                                @if ($errors->has('designation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('designation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">Sex</label>
                            <div class="col-md-6">
                                <Select id="sex" class="form-control" name="sex" value="{{ old('sex') }}" required>


                                    <option value="male">Male</option>
                                    <option value="female">Female</option>

                                </select>
                                @if ($errors->has('sex'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sex') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo" class="col-md-4 control-label">Photograph</label>
                            <div class="col-md-6">
                                <input type="file" name="photo" required value="{{ old('photo') }}">
                                @if ($errors->has('photo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        <?php
                        if (!empty($permissions)) {
                            ?>
                        
                            <div class="form-group permissions col-md-10">
                                <em>Permissions</em>
                                <div class="col-md-8 col-md-offset-2 row">
                                    @foreach($permissions as $permission)
                                    <div class="form-group col-md-4">
                                        <label for="permissions"> <input type="checkbox" name="permissions[]" value="{{$permission->id}}">{{$permission->permission_name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>
                        </div>
                   {{Form::close()}}
                </div>
                
             
            </div>
        </div>
    </div>
</div>
@endsection

