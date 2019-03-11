@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">LARA-PDF Demo</div>

                <div class="card-body">
                  <div class="btn-group" role="group" aria-label="Basic example">
                     <button type="button" class="btn btn-secondary"> <a href="/lara-pdf/simple/show" target="_blank">show</a> </button>
                    <button type="button" class="btn btn-secondary"> <a href="/lara-pdf/simple/download">download</a> </button>
                    <button type="button" class="btn btn-secondary"> <a href="/lara-pdf/simple/save" target="_blank">save</a></button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
