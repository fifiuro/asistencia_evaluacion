@extends('template/base')

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="card card-info col-md-6">
            <div class="card-header">
                <h3 class="card-title">MODIFICAR DEPARTAMENTO</h3>
            </div>
            @if ($mensaje == '')
                <form role="form" method="POST" action="{{ url('departamento/acrçtualizar') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="departamento">Departamento *</label>
                            <input type="text" name="departamento" class="form-control" id="departamento" placeholder="Escriba el Departamento" value="{{ $find->departamento }}" maxlength="15" required>
                            @if ($errors->has('departamento'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('departamento') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="sigla">Sigla *</label>
                            <input type="text" name="sigla" class="form-control" id="sigla" placeholder="Esrciba la Sigla" value="{{ $find->sigla }}" maxlength="4" required>
                            @if ($errors->has('sigla'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('sigla') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="sigla">Estado *</label>
                            <input type="text" name="estado" class="form-control" id="estado" placeholder="Esrciba la Sigla" value="{{ $find->estado }}" maxlength="4" required>
                            @if ($errors->has('sigla'))
                                <small class="form-text text-danger">
                                    {{ $errors->first('estado') }}
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">MODIFICAR</button>
                        <a href="{{ url('departamento/buscar') }}" class="btn btn-danger">CANCELAR</a>
                    </div>
                </form>
            @else
                <div class="card-body">
                    <h3>{{ $mensaje }}</h3>
                </div>
            @endif
        </div>
        <div class="col-md-3"></div>
    </div>
@stop