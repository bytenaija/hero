<div class="form-group">
                    {!! Form::label('Firstname', 'Firstname');!!}
                    {!! Form::text('Firstname', null, ['class' => 'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Lastname', 'Lastname');!!}
                    {!! Form::text('Lastname', null, ['class' => 'form-control'] ); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email');!!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password');!!}
                    {!! Form::password('password', ['class' => 'form-control']);!!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone_number', 'Phone Number');!!}
                    {!! Form::text('phone_number', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-group">

                    {!! Form::submit($submitButton, ['class'=>'btn btn-primary']);!!}
                </div>
                {!! Form::close() !!}