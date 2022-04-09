@extends('app')
<!-- A FINIR -->

@section('content')


<div class="container mb-5 " style="width: 900px;">
    <div class="card login-card" style="    padding-bottom: 43px;" >
    <div class="w-75" style="margin-top: 61px;margin-left: 109px;">

    {{-- @if(isset(Auth::user()->email))
    <script>window.location="/dashboard";</script>
@endif --}}

@if ($message = Session::get('status'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif

<form method="post" action="{{route('addPermits')}}" enctype="multipart/form-data" style="max-width: 100%;">
    @csrf

        <h2>Select Base</h2>
            <select name="targetBase">
                @foreach ($bases as $base)
                    <option value={{$base->id}}>{{$base->dbname}}</option>
                @endforeach
            </select>
            <!-- selec base gauche, personne droite -->

        <h2 class="mt-4">Select Users</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Add Permission</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->firstname}}</td>
                            <td>
                                <input type="checkbox" class="form-control" value="{{$user->id}}" id="{{$user->id}}" name="{{$user->lastname}}" placeholder="">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



    <div class="mt-2">
        <button type="submit" id="submitBtn" class="btn btn-md btn-primary button1" >Submit</button>
    </div>

</form>
