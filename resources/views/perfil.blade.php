@extends('layouts.plantilla')

@section('title', 'Perfil de usuario')
    
@section('content')
    <div class="container-sm">
        {{-- <pre>{{$id}}</pre> --}}
        <div class="w-50 m-auto">
            <h1 class="mt-5 mb-4">Perfil</h1>
            <div class="row">
                <div class="col ">
                    <img src="https://api.lorem.space/image/face?w=200&h=200" alt="" class="rounded-circle">
                </div>
                <div class="col">
                    <div class="row">
                        <p class="fs-3">{{Auth::user()->name}}</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <p class="fs-5">{{Auth::user()->fn}}</p>
                        </div>
                        <div class="col">
                            <p class="fs-5">{{Auth::user()->gen}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="border border-3 border-dark-subtle rounded border-dark">
                    <p class=".fs-6 fw-semibold">
                        {{Auth::user()->datos}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection