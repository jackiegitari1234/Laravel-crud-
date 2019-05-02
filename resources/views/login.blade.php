@include('nav')
<div class="container-fluid">
        <style>
        label{
            color:green;
        }
        #loginpg{
            margin-top:120px;
        }
        </style>
        <div  class="mt-5 row justify-content-center">
        
            <div id="loginpg" class="col-md-8 text-center" >
                <div class='accountError alert alert-danger' role='alert'> ALL FIELDS ARE MADATORY</div>

                <form action="" method="post" id="loginpage">
                    <h4>PLEASE LOGIN BELOW</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-2 mb-3"><label for="email">EMAIL </label></div>
                        <div class="col-md-4">
                            <input type="text" id="email" name="email" placeholder="example@gmail.com"  style="width:90%">
                            <span class="required">*</span>
                            <br><span class="text-danger emailerror"></span>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-2 mr-0"><label for="mypassword">PASSWORD </label></div>
                        <div class="col-md-4 ml-0">
                            <input type="password" id="mypassword" name="password" placeholder="*******" style="width:90%">
                            <span class="required">*</span>
                            <br><span class="text-danger passworderror"></span>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-1 mb-5">
                        <div class="col-md-4">
                            <button class="btn btn-danger btn-md" type="reset" name="cancel">CANCEL</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button class="btn btn-success btn-md" type="submit" name="submit">LOGIN</button>
                        </div>
                            
                    </div> 
                </form>
            </div>
        </div>
</div>