@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} National
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} National</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('national.update', $national->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('national.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection