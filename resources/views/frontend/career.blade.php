@extends('frontend.layout')

@section('page_name','Career')

@section('content')
<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
        <div class="topic articlethumb">
            <form class="form-horizontal" method="post" action="{{url('suggestion')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <span class="glyphicon glyphicon-hand-right"> Contact Us</span>
                <hr/>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="name">Full Name:</label>
                    <div class="col-sm-8">
                        <input type="username" name="name" class="form-control" id="username" placeholder="Enter Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="pwd" placeholder="Enter Email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Contact:</label>
                    <div class="col-sm-8">
                        <input type="number" name="phone" class="form-control" id="pwd" placeholder="Enter Phone No" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Type:</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="category" id="sel1">
                            <option value="Suggestion">Suggestion</option>
                            <option value="Complaint">Complaint</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Message:</label>
                    <div class="col-sm-8">
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Attachment:</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" name="cvfile" id="cv">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default blue">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
@endsection