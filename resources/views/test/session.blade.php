@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <pre>
                            {{ print_r($all) }}
                        </pre>

                        <pre>
                            {{ print_r($now) }}
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
