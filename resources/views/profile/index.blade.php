@extends('layouts.admin.master')
@section('title')
Administration
@endsection
<meta name="_token" content="{!! csrf_token() !!}"/>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
     $('document').ready(function () {
        $("#photo-link").bind('click', function (event) {
       
            event.preventDefault();
            
            $('#photo-change').hide('fast');
            
            $('#photo-div').show('fast'); 
            
        });
        
        
        $("#cancelPhoto").bind('click', function (event) {
             event.preventDefault();
             $('#photo-div').hide('fast');
             $('#photo-change').show('fast');
            
        });
//        $("#updatePhoto").bind('click', function (event) {
//            var urls = "{{Route('profile.edit.photo', $user->profile->id)}}";
//     //   var url = "profile/photo/{{$user->profile->id}}";
//        alert(urls);
//            event.preventDefault();
//            
//            
//            
//            $('#photo-div').hide('fast');
//      //     var image = $('input[name="photo"]').val();
//           
//           
//           $.ajax({
//      url: urls,
//      type: "post",
//      data: {'image':$('input[name="photo"]').val()},
//      dataType: "text",
//      success: function(data){
//        alert(data);
//      }
//    });      
//              $.post(url, {image} ,function(data){
//                   alert(data);
//                   $("#photo").attr('src', "profiles/"+data);
//                    $('#photo-change').show(3000);
//               }, "text");
                
            
//        });
        
    });

</script>
@section('content')
<div class="middle row well center-block">
<div class="panel panel-primary col-md-11 center-block" >
    <h4 class="panel-heading text-center">
        User Profile
    </h4>
    <div class="panel-body row">
        <div class="navbar-left col-md-8"> 
            <div class="rounded col-md-12">
                <div style="display: block">
                <a href="#{{--Route('profile.edit.photo', $user->profile->id)--}}" ><div class="btn-edit"><span class="glyphicon glyphicon-pencil"></div></span></a></h4>
                <span>&nbsp;</span>
                </div>
            
            <div class="col-md-12">
                <h1>{{Auth::user()->firstname}} {{Auth::user()->lastname}} <a href="{{Route('profile.edit.name', $user->id)}}" ><div class="btn-edit"><span class="glyphicon glyphicon-pencil"></span></div></a></h1>
             
            </div>
            
                
                <div class="col-md-12">
                <h2> {{   $user->email}}</h2>
                <h2> {{   $user->phone_number}}</h2>
                
                <h2> {{   $user->profile->sex}}</h2>
                </div>
               
            <div><span class="clearfix">&nbsp;</span></div></h4> 
           
            <div class="col-md-12">
                <h2> {{   $user->profile->designation}} at:</h2>
               @if(Auth::user()->user_type == 'admin')
               <h2>Hero Administration</h2>
               @elseif(Auth::user()->user_type == 'organisation')
             <h2>  {{$user->profile->organisation->name}} </h2>
               @elseif(Auth::user()->user_type == 'client')
               {{$user->profile->client->name}}
               @elseif(Auth::user()->user_type == 'vendor')
               {{$user->profile->vendor->name}}
               @endif
               
            <div><span class="clearfix">&nbsp;</span></div></h4> 
            </div>
            
            </div>
            
            
          <div class="rounded col-md-12">
              Permissions;
              <ol>
              @foreach($user->profile->permission as $permission)
              
              <h3>
                  <li>{{$permission->permission_name}}</li>
                  <ul>
                      <li>User Type => {{$permission->user_type}}</li>
                  <li>Permission Group => {{$permission->permission_group}}</li>
                  <li>Authentication Level => {{$permission->auth_level}}</li>
                  <li>Assigned at => {{$permission->pivot->created_at}}</li>
                  </ul>
              </h3>              
              
              @endforeach
            
            
              </ol>
                
                
               
            
            </div>
            
        </div>
    
        <div class="navbar-right col-md-4"> <div id="photo-change"><img src="/profiles/{{$user->profile->photo}}" class="img-rounded" id='photo'/>
           <a href="#" ><div class="btn btn-primary btn-edit"><span id='photo-link' class="glyphicon glyphicon-pencil"></div></span></a></h4>
            <div><span class="clearfix">&nbsp;</span></div>
            </div>
            
            <div id="photo-div" style="display: none">
              
                      
               <form  method="post" action="{{ Route('profile.edit.photo', $user->profile->id)}}" enctype="multipart/form-data">
                    <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
       
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
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
                    <div class="form-group">
                            <div class="col-md-12 row">
                                <button type="submit" class="col-md-6" id="updatePhoto">
                                    <span class="glyphicon glyphicon-save"></span>
                                </button>
                                
                                <button type="submit" class=" col-md-6" id="cancelPhoto">
                                    <span class="glyphicon glyphicon-ban-circle"></span>
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