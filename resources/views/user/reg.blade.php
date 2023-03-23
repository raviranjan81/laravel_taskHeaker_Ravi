@include('user.layout.header')
<title>User Register</title>
    <div class="main">
        <div class="user">
            <h1 class="text-center">User register </h1>
            <span class="line"></span>
            <div class="input-field">
                    {!! Form::open([
                        'id'=>'userReg',
                        'url'=>route('user.reg')
                    ]) !!}
                    <div class="field">
                        <div class="name">
                            {!! Form::text('name','', [
                                'placeholder'=>'Name',
                                'required'=>'required',
                            ]) !!}
                            <span>
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="name">
                            {!! Form::text('email', '', [
                                'placeholder'=>'Email',
                                'data-parsley-type'=>'email',
                                'required'=>'required', 
                            ]) !!}
                            <span>
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="name">
                            {!! Form::text('mobile', '', [
                                'placeholder'=>'Mobile',
                                'required'=>'required',
                                'data-parsley-pattern'=>'^[6789]\d{9}$',
                            ]) !!}
                            <span>
                                @error('mobile')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="btn-field">
                        <input type="submit" class="btn-send">
                        <a href="{{route('user.data')}}"><div class="btnBack">All Data</div></a>
                    </div>
                    {!! Form::close() !!}

                    @if (Session::has('success'))
                    <div class="alert mt-2  alert-dismissible fade show" role="alert" style="background-color:rgba(69, 7, 168, 0.568)">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                        <strong class="text-center" style="color:#fff">{{Session::get('success')}}</strong>
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert mt-2  alert-dismissible fade show" role="alert" style="background-color:rgba(230, 19, 19, 0.568)">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                        <strong class="text-center" style="color:#fff">{{Session::get('error')}}</strong>
                    </div>
                    @endif
            </div>
        </div>
    </div>
@include('user.layout.footer')