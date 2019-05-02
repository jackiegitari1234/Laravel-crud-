<!-- dispaly all members -->
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
        <div id="registerpg" class="col-md-7 " >
            @if(session('id'))
                {{session('id')}}
            @endif
            <div class='accountError alert alert-danger text-center mb-3' role='alert'> Members</div>
            @if (count ($Users) > 0) 
                @foreach ( $Users->all() as $user)
                <div class="row">
                    <div class="col-md-3 mr-5">
                        {{ $user->email }}
                    </div>
                    <div class="col-md-3 ml-5"> 
                            <a href='{{ url("/update/{$user->id}") }}'>Update</a>
                    </div>
                    <div class="col-md-3">
                        <?php echo session('id'); ?> 
                            <a href='{{ url("/delete/{$user->id}") }}'>Delete</a>
                        
                    </div>
                </div> 

                @endforeach
            @endif
            
        </div>
    </div>
</div>