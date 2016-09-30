@extends('layouts.admin.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Permissions</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ Route('permission.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
                            <label for="user_type" class="col-md-4 control-label">User Type</label>

                            <div class="col-md-6">
                                <select id="user_type" type="text" class="form-control" name="user_type" value="{{ old('user_type') }}" required autofocus>
                                    <option value="admin">Administrator</option>
                                    <option value="client">Clients</option>
                                    <option value="organisation">Organisations</option>
                                    <option value="vendor">Vendors</option>
                                </select>
                                @if ($errors->has('user_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('permission_group') ? ' has-error' : '' }}">
                            <label for="permission_group" class="col-md-4 control-label">Permission Group</label>

                            <div class="col-md-6">
                                <select id="permission_group" type="text" class="form-control" name="permission_group" value="{{ old('permission_group') }}" required autofocus>
                                    <option value="basic">Basic</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="advance">Advance</option>
                                    <option value="superuser">Superuser</option>
                                    @if(Auth::user()->user_type == 'admin')
                                    <option value="adminsuperuser">Administrative Superuser</option>
                                    @endif
                                </select>
                                @if ($errors->has('permission_group'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('permission_group') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('permission_name') ? ' has-error' : '' }}">
                            <label for="permission_name" class="col-md-4 control-label">Name of Permission</label>

                            <div class="col-md-6">
                                <input id="permission_name" type="permission_name" class="form-control" name="permission_name" value="{{ old('permission_name') }}" required>

                                @if ($errors->has('permission_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('permission_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('auth_level') ? ' has-error' : '' }}">
                            <label for="auth_level" class="col-md-4 control-label">Authentication Level (required to assign this permission)</label>

                            <div class="col-md-6">
                                <select id="auth_level" type="text" class="form-control" name="auth_level" value="{{ old('auth_level') }}" required autofocus>
                                    <option value="basic">Basic</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="advance">Advance</option>
                                    <option value="superuser">Superuser</option>
                                    @if(Auth::user()->user_type == 'admin')
                                    <option value="adminsuperuser">Administrative Superuser</option>
                                    @endif
                                </select>
                                @if ($errors->has('auth_level'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('auth_level') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

