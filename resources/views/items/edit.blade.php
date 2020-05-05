@extends('layouts.app')

@section('titulo','Editar registro')

@section('content')


<form  method="post"  >
    @method('PATCH')
            @csrf

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <h3>Bienvenid@</h3>
            <p>Por favor llena los datos correctamente en el sistema!</p>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Editar información de Equipos</h3>
                    <table class="table table-bordered" >
                        <tbody>
                           <td>Datos Del Equipo:  </td>
                            <tr>
                                <tr>
                                        <td>
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><span class="fa fa-user text-info">Nombre</span></div>
                                                        </div>
                                                        <input type="text" class="form-control"  id="name" name="name"
                                                        placeholder="{{  $item->name }}"  value="{{  $item->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><span class="fa fa-user-edit text-info">Codigo</span></div>
                                                        </div>
                                                        <input type="text" class="form-control" id="codigo" name=""
                                                        placeholder="{{  $item->codigo }}"  value="{{  $item->codigo }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-user-edit text-info">Serial</i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="serial" name="serial"
                                                    placeholder="{{  $item->serial }}"  value="{{  $item->serial }}">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-lg-10">

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><span class="fa fa-mask text-info">Máquina</span></div>
                                                    </div>

                                                    <select class="form-control" name="machine_id" id="machine_id" >
                                                        @foreach ($machines as $machine)
                                                            <option value="{{ $machine->id }}">
                                                                {{ $machine->modelo }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                        </table>
                        <table class="table table-bordered" >
                            <tbody>

                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                     <div class="form-group">
                                                        <select class="form-control" name=" " id=" ">

                                                            <option value="1">falla</option>

                                                          </select>
                                                     </div>
                                            </div>
                                        </div>
                                    </td>

                                <tr>



                                    <td>
                                        <div class="form-group">
                                            <label for="content" class="col-lg-2 control-label">Descripcion</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" rows="3" id="description" name="description">{{  $item->description }}</textarea>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection


