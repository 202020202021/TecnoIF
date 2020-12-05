@extends('painel.Layout.index')
@section('content')
    <section class="content">
        <div class="card card-success">
            <div class="card-header">

                <h3 class="card-title">Cadastro de Projeto</h3>
            </div>
            <form action="{{route('painel.enviar')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nome do Projeto</label>
                        <input name="nome_projeto" class="form-control @error('nome_projeto') is-invalid @enderror" placeholder="Nome do Projeto">
                        @error('nome_projeto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Campus</label>
                        <select class="form-control  @error('campus') is-invalid @enderror" name="campus">
                            <option value="">Campus</option>
                            <option value="Aquidauana">Aquidauana</option>
                            <option value="Campo Grande"> Campo Grande</option>
                            <option value="Corumbá">Corumbá</option>
                            <option value="Coxim">Coxim</option>
                            <option value="Dourados">Dourados</option>
                            <option value="Jardim">Jardim</option>
                            <option value="Naviraí">Naviraí</option>
                            <option value="Nova Andradina"> Nova Andradina</option>
                            <option value="Três Lagoas">Três Lagoas</option>
                        </select>
                        @error('campus')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Área</label>
                        <select class="form-control @error('area') is-invalid @enderror" name="area">
                            <option value="">Área</option>
                            <option value="Ciências Agrárias"> Ciências Agrárias</option>
                            <option value="Exatas"> Exatas</option>
                            <option value="Meio Ambiente"> Meio Ambiente</option>
                            <option value="Saúde"> Saúde</option>
                            <option value="Tecnologia"> Tecnologia</option>
                        </select>
                        @error('area')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quais os problemas / necessidades a sua solução pretende resolver?</label>
                        <textarea name="problemas" class="form-control  @error('problemas') is-invalid @enderror" rows="3" placeholder="..." ></textarea>
                        @error('problemas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quais as características da sua solução? Quais são seus diferenciais?</label>
                        <textarea name="caracteristicas" class="form-control @error('caracteristicas') is-invalid @enderror" rows="3" placeholder="..." ></textarea>
                        @error('caracteristicas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quem é o seu público alvo?</label>
                        <textarea name="publico_alvo" class="form-control  @error('publico_alvo') is-invalid @enderror" rows="3" placeholder="..." ></textarea>
                        @error('publico_alvo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quais são as dificuldades e necessidades para realizar a ideia?</label>
                        <textarea name="dificuldades" class="form-control  @error('dificuldades') is-invalid @enderror" rows="3" placeholder="..." ></textarea>
                        @error('dificuldades')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Qual a tua disponibilidade e motivação para desenvolver o projeto?</label>
                        <textarea name="disponibilidade" class="form-control @error('disponibilidade') is-invalid @enderror" rows="3" placeholder="..."></textarea>
                        @error('disponibilidade')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quais são os resultados esperados?</label>
                        <textarea name="resultados" class="form-control @error('resultados') is-invalid @enderror" rows="3" placeholder="..."></textarea>
                        @error('resultados')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Indicação do pesquisador / mentor</label>
                        <input name="nomeMentor" class="form-control @error('nomeMentor') is-invalid @enderror" placeholder="Nome do mentor">
                        <small class="form-text text-muted">Insira o nome completo</small>
                        @error('nomeMentor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Instituição</label>
                        <input name="instituicao" class="form-control @error('instituicao') is-invalid @enderror" placeholder="Instituição">
                        <small class="form-text text-muted">Insira a instituição em que seu mentor trabalha</small>
                        @error('instituicao')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Área </label>
                        <input name="areaMentor" class="form-control @error('areaMentor') is-invalid @enderror" placeholder="Área de atuação">
                        <small class="form-text text-muted">Insira a área de atuação do seu mentor</small>
                        @error('areaMentor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        <small class="form-text text-muted">Insira o email do seu mentor</small>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Telefone </label>
                        <input name="telefone" class="form-control @error('telefone') is-invalid @enderror" placeholder="Telefone" >
                        <small class="form-text text-muted">Insira o telefone do seu mentor</small>
                        @error('telefone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <input name="editalId" value="{{$editalId}}" type="hidden">

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Finalizar cadastro</button>
                </div>
            </form>
        </div>
    </section>


@endsection
