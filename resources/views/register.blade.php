@include('nav')
<div class="container-fluid">
    <div  class=" row justify-content-center mb-5">
        <style>
        label{
            color:green;
        }
        #registerpg{
            margin-top:120px;
        }
        </style>
        
        <div id="registerpg" class="col-md-10 " >
            <div class='accountError alert alert-danger text-center mb-3' role='alert'> ALL FIELDS ARE MADATORY</div>
            <form id="regform" method="post" action="{{url('/insert')}}">
                {{csrf_field()}}
                @if(count($errors)>0)
                    @foreach($errors-> all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <div class="row">
                    <div class="col-md-5 mr-2"> 
                        <div class="form-group">
                            <label for="profession">PROFESSION<span class="required">*</span></label>
                            <select class="form-control " name="profession" id="profession">
                                <option selected hidden value="">CHOOSE PROFESSION</option>
                                <option value="student">STUDENT</option>
                                <option value="lecturer">LECTURER</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="col-md-6 ">
                        <div class="form-group"> 
                            <label for="fullname">FULLNAME <span class="required">*</span> </label>
                            <input class="form-control " type="name" id="fullname" name="fullname" placeholder="fullname"/>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md-5 mr-2">
                        <label for="myemail">Email <span class="required">*</span> </label>
                        <input class="form-control " type="text" id="myemail" name="email" placeholder="example@email.com" />
                    </div>
                    <div class="col-md-6"> 
                        <label for="phoneno">PHONE NUMBER <span class="required">*</span> </label><br>
                        <div class="row">
                            <div class="col-md-3 ">
                                <input class="form-control"  readonly value="+254" >
                            </div>
                            <div class="col-md-9 ">
                                <input class="form-control" type="number" id="phoneno" name="phoneno" placeholder="7********" />
                                <span class="msg">(only kenyan phone numbers)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mr-2">
                        <div class="form-group">
                            <label for="mypassword">PASSWORD <span class="required">*</span> </label>
                            <input class="form-control " type="password" id="password" name="password" placeholder="********"
                                onblur="checkvalue(this)" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cmypassword">CONFIRM PASSWORD <span class="required">*</span></label>
                            <input class="form-control" type="password" id="cpassword" name="confirmPassword" placeholder="********"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 text-right">
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-success btn-md " type="submit" name="submit"> SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>