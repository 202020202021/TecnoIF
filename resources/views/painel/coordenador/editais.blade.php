@extends('painel.Layout.index')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editais</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Filtrar">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>

                                <th>Nome</th>
                                <th>Data</th>
                                <th>Situação</th>
                                <th>Link</th>
                                <th>
                                    <button class="btn btn-success float-right">Exportar</button>
                                    <a href="{{route('painel.coordenador.cadastroGestores')}}"><button class="btn btn-primary float-right" style="margin-right:2%">Cadastrar</button></a>
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($editais as $edital)

                                <tr>
                                    <td>{{$edital->nome}}</td>
                                    <td>{{$edital->data}}</td>
                                    <td>{{$edital->situacao}}</td>
                                    <td>{{$edital->link}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                                        <button type="button" class="btn btn-danger btn-sm">Editar</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
