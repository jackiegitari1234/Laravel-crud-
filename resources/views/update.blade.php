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
            <div class='accountError alert alert-danger text-center mb-3' role='alert'> Update Details</div>
            <form method="post" action="{{url('/edit', array($Users->id))}}">
                {{csrf_field()}}
                @if(count($errors)>0)
                    @foreach($errors-> all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <div class="row mb-2">
                
                    <div class="col-md-8 mr-auto ml-auto">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <label for="fullname">Profession <span class="required">*</span> </label>
                                </div>
                                <div class="col-md-8 ">
                                    <label> <?php echo $Users -> profession; ?></label>
                                </div>
                            </div>
                    </div>                    
                </div>
                <div class="row mb-2">
                
                    <div class="col-md-8 mr-auto ml-auto">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <label for="fullname">Fullname <span class="required">*</span> </label>
                                </div>
                                <div class="col-md-8 ">
                                    <input class="form-control " type="name" value="<?php echo $Users -> fullname; ?>" name="fullname" placeholder="fullname"/>
                                </div>
                            </div>
                    </div>                    
                </div>

                <div class="row mb-2">
                    <div class="col-md-8 mr-auto ml-auto">
                        <div class="row">
                            <div class="col-md-4 ">
                                <label for="myemail">Email <span class="required">*</span> </label>
                            </div>
                            <div class="col-md-8 ">
                                <input class="form-control" value="<?php echo $Users -> email; ?>" type="text" name="email" placeholder="example@email.com" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-8 mr-auto ml-auto">
                        <div class="row ">
                            <div class="col-md-4 "> 
                                <label for="phoneno">Phone Number <span class="required">*</span> </label><br>
                            </div>
                            <div class="col-md-8 ">
                                <input class="form-control" type="number" value="<?php echo $Users -> phoneno; ?>" name="phoneno" placeholder="7********" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 text-right">
                        <button class="btn btn-success btn-lg ml-0" type="submit" name="cancel">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>