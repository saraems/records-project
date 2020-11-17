@extends('layouts.app')
@section('title', 'Records list')
@section('content')
<section>
    <div style="padding: 1rem 0; display: flex; justify-content: flex-end; align-items: center;">
        <a href="/add">+ Add new record</a>
        <a href="/add" class="btn btn-primary" style="margin-left: 1rem;"> Create report</a>
    </div>
    <ul style="list-style-type: none; margin: 0; padding:0">
        <div class="card" role="list-item">
          <div class="card-header" style="display: flex; justify-content: space-between;">
            <div style="font-weight: bold;">Live concert from Bogota</div>
             <a href="#">Edit</a>
            </div>
            <div class="card-body">
                <div> Title: Whenever, ehenever</div>
                <div> Composer: Shakira</div>

            </div>
            <div class="card-footer text-muted" style="display: flex; justify-content: space-between; font-size: 12px;">
                <span> Author: User_ferrwe89 </span>
                <span> Duration: 234s | ISRC: 4982384384732 </span>
            </div>
        </div>
   </ul>
</section>
@endsection
