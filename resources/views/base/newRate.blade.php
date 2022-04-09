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

<form method="post" action="{{route('newBase')}}" enctype="multipart/form-data" style="max-width: 100%;">
    @csrf

        <h2>New Accuracy</h2>
        <div class="form-group">
            <label for="newAccuracy">Value (*)</label>
            <input type="text" class="form-control @error('newAccuracy') border border-danger @enderror" value="{{old('newAccuracy')}}" id="newAccuracy" name="newAccuracy" placeholder="" required>
            @error('newAccuracy')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <h2>Reference</h2>
        <div class="form-group">
            <label for="AuthorName">Author's Names (*)</label>
            <input type="text" class="form-control @error('AuthorName') border border-danger @enderror" value="{{old('AuthorName')}}" id="AuthorName" name="AuthorName" placeholder="" required>
            @error('AuthorName')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="paperTitle">Title of the Paper (*)</label>
            <input type="text" class="form-control @error('paperTitle') border border-danger @enderror" value="{{old('paperTitle')}}" id="paperTitle" name="paperTitle" placeholder="" required>
            @error('paperTitle')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nameConferenceOrJournal">Name of the Conference / Journal</label>
            <input type="text" class="form-control @error('nameConferenceOrJournal') border border-danger @enderror" value="{{old('nameConferenceOrJournal')}}" id="nameConferenceOrJournal" name="nameConferenceOrJournal" placeholder="">
            @error('nameConferenceOrJournal')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="place">Place</label>
            <input type="text" class="form-control @error('place') border border-danger @enderror" value="{{old('place')}}" id="place" name="place" placeholder="">
            @error('place')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control @error('date') border border-danger @enderror" value="{{old('date')}}" id="date" name="date" placeholder="">
            @error('date')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="DOI">DOI</label>
            <input type="text" class="form-control @error('DOI') border border-danger @enderror" value="{{old('DOI')}}" id="DOI" name="DOI" placeholder="">
            @error('DOI')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="pages">Pages</label>
            <input type="text" class="form-control @error('pages') border border-danger @enderror" value="{{old('pages')}}" id="pages" name="pages" placeholder="">
            @error('pages')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="volume">Volume</label>
            <input type="text" class="form-control @error('volume') border border-danger @enderror" value="{{old('volume')}}" id="volume" name="volume" placeholder="">
            @error('volume')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control @error('number') border border-danger @enderror" value="{{old('number')}}" id="number" name="number" placeholder="">
            @error('number')
            <div class="text-danger mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>






    <div class="mt-2">
        <button type="submit" id="submitBtn" class="btn btn-md btn-primary button1" >Submit</button>
    </div>

</form>
