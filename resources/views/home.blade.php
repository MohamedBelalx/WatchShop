@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    From Here You Can Manage All Website Content Please Choose An Option from
                    The Aside Links To Navigate
                </div>
            </div>
        </div>

@endsection
