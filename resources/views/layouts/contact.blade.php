@extends('layouts.master')

@section('title')
   Contact Me!
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label name="subject">Email:</label>
                    <input class="form-control" id="subject" name="subject">
                </div>
                <div class="form-group">
                    <label name="email">Email:</label>
                    <textarea class="form-control" id="message" name="message">your message here</textarea>
                </div>
                <input type="submit" value="send message">
            </form>
        </div>
    </div>
</div>
@endsection