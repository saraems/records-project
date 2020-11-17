@extends('layouts.app')
@section('title', 'Add Record')
@section('content')
<div>
    <form action="{{route('records.save')}}" method="post">
        <div class="form-group">
            <input type="text" name="name" placeholder="Add record name" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="text" name="title" placeholder="Add song title" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="text" name="ISRC" placeholder="Add record ISRC code" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="text" name="author" placeholder="Add song author" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="text" name="creator" placeholder="Add record creator" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="text" name="time" placeholder="Add song time in sec" class="form-control"/>
        </div>
        <div class="form-group">
            <button class="btn btn-link">Create new revord</button>
        </div>
   </form>
</div>
@endsection
