@include('user.layout.header')
<div class="main">
    <div class="user">
        <h1 class="text-center">User Task</h1>
        <span class="line"></span>
        <div class="input-field">
                {!! Form::open([
                    'id'=>'userReg',
                    'url'=>'/user/task/$user->id',
                ]) !!}
                <div class="field">
                    <div class="name">
                        {!! Form::hidden('email',isset($user)?$user->email:'',
                         ) !!}
                        {!! Form::text('name',isset($user)?$user->name:'', [
                            'placeholder'=>'Name',
                            'required'=>'required',
                            'readonly'=>'readonly',
                            'style'=>'text-transform: capitalize'
                        ]) !!}
                        <span>
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="name">
                        {!! Form::text('task', '', [
                            'placeholder'=>'User Task',
                            'required'=>'required',
                        ]) !!}
                        <span>
                            @error('task')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="name">
                        <span class="tas" style="color:black" >User Task: </span>
                      {!! Form::select('status', [
                        'p'=>'Pending',
                        'D'=>'Done'
                      ],'',[
                        'required'=>'required',
                        'class'=>'userTask',
                      ]) !!}
                        <span>
                            @error('task')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="btn-field">
                    <input type="submit" class="btn-send">
                    <a href="{{route('user.task.data')}}"><div class="btnBack">All Task</div></a>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
@include('user.layout.footer')