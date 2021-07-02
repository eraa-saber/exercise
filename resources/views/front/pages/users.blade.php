@extends('front.layouts.home')
@section('content')
    <h1>Phone Numbers</h1>

    <div class="card">
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label><strong>Select Country :</strong></label>
                <select id='country' class="form-control" style="width: 200px">
                    <option value="">--Select Status--</option>
                    @foreach($countries as $key=>$country)
                    <option value="{{$country}}">{{$country}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label><strong>Select State:</strong></label>
                <select id='state' class="form-control" style="width: 200px">
                    <option value="">--Select State--</option>
                    <option value="OK">Valid Phone Numbers</option>
                    <option value="NOK">Invalid Phone Numbers</option>
                </select>
            </div>
        </div>
    </div>

    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>NO</th>
            <th>Country</th>
            <th>Name</th>
            <th>State</th>
            <th>Country Code</th>
            <th>Phone</th>

        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@stop
