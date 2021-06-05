@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Enter Your Username</label>
                    <input type="text" class="form-control" name="username">
                    <input class="mt-3 btn btn-outline-primary" type="submit" placeholder="Submit">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection