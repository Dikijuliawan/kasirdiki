@extends('layouts.master')
@section('title','user')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman edit data user</h3>
                        <a class="btn btn-warning" href="/user">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method='post'>
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Name User</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        value="{{ $user->name}}"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Emil</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        value="{{ $user->email}}"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">password</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="password"
                                        id="password"
                                        value="{{ $user->password}}"
                                        placeholder=""
                                    />
                                </div>
                                <button class="btn btn-primary" type="subit">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection