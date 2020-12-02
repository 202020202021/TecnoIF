@extends('painel.Layout.index')
@section('content')
    <section class="content">
        <div class="card card-success">
            <div class="card-header">

                <h3 class="card-title">Cadastro de Gestores</h3>
            </div>
            <form action="{{route('painel.coordenador.create')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nome </label>
                        <input name="nome" class="form-control  @error('nome') is-invalid @enderror" placeholder="Nome do gestor">
                        @error('nome')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" >
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>senha</label>
                        <input name="senha" class="form-control  @error('senha') is-invalid @enderror" placeholder="senha" >
                        @error('senha')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Terminar cadastro</button>
                </div>
            </form>
        </div>
    </section>


@endsection