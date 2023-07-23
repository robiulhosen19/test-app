@extends('website/layouts/default')
@section('content')
    <H3>Create Employee</H3>
    <div class="containar mg-12">
        <div class="form-group">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="text">Division</label>
                            <select name="" id="" class="form-control">
                                <option value="">Select Division</option>
                               
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label for="text">District</label>
                            <select name="" id="" class="form-control">
                                <option value="">Select District</option>
                               
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                        

                </div>
            </div>
        </div>
    </div>

    @endsection