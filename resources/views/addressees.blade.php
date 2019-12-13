@extends('layouts.appfunc')

@section('headerappfunc')
<h1>Destinatarios</h1>
<p>Sistema de Alarmas</p>
@endsection

@section('contentappfunc')
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <div class="container-addresses">
        <div class="row col-md-8 col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th class="text-center">Gestión/Administración</th>
                </tr>
                </thead>
                @foreach($addressees as $recipient)
                <tr>
                    <td>{{ $recipient->id }}</td>
                    <td>{{ $recipient->email }}</td>
                    <td class="text-center">
                        <form action="{{ action('AddresseesController@destroy', $recipient['id']) }}" method="post">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="container">
        <form method="post" action="{{url('addressees_resource')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar Email">
                <label for="exampleInputEmail1">Nuevo Email</label>
                <small id="emailHelp" class="form-text text-muted">¡Los servidores SMTP tienen límites!</small>
            </div>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
    </div>

@endsection