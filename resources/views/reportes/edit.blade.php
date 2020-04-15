@extends('layouts.app')

@section('titulo','Editar registro')

@section('content')



<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <h3>Bienvenid@</h3>
            <p>Por favor llena los datos correctamente en el sistema!</p>
        </div>
        <div class="card-header ">
            <h5 class="float-left">{{ $machine->serial }}</h5>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Crear Registro De Averia Equipos (VIEW 2-C) </h3>
                    <table class="table table-bordered" >
                        <tbody>
                           <td>Datos Del Equipo:{{ $machine->name }}   </td>
                            <tr>
                                <tr>
                                        <td>
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-user text-info">Serial</i></div>
                                                        </div>

                                                        <input type="text" class="form-control"  id="serial" name="serial"
                                                        placeholder="{{ $machine->serial }}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-user-edit text-info">Marca</i></div>
                                                        </div>
                                                        <input type="text" class="form-control" id="marca" name="marca"
                                                        placeholder="{{ $machine->marca }}" >
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
                                                        <div class="input-group-text"><i class="fa fa-user-edit text-info">Modelo</i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="modelo" name="modelo"
                                                    placeholder="{{ $machine->modelo }}" >
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="col-lg-10">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-user-edit text-info">Nombre</i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Nombre Cliente"  >
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                        </table>

                    <form  method="post">  <!--********************************************************-->
                            @csrf
                                <table class="table table-bordered" >
                                    <tbody>
                                            <td>Codigo De Error</td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    
                                                             <div class="form-group">
                                                                <select class="form-control" name="machine_id" id="machine_id">
                                                                    @foreach ($machineid as $machine)
                                                                    <option value="{{$machine->id}}">{{$machine->name}}</option>
                                                                    @endforeach
                                                                  </select>
                                                             </div>
                                                                                      
                                                      
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                        <tr>

                                            <td>
                                                <div class="form-group">
                                                <div class="col-lg-10">
                                                <input type="text" class="form-control" id="codigoError" placeholder="Codigo De Error" name="codigoError">
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="title" class="col-lg-4 control-label">Averia Reportada</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="averiaReportada" placeholder="Averia Reportada" name="averiaReportada">
                                                    </div>
                                                </div>


                                            </td>

                                                    <td>
                                                        <div class="form-group">
                                                            <label for="content" class="col-lg-2 control-label">Comentario</label>
                                                            <div class="col-lg-10">
                                                                <textarea class="form-control" rows="3" id="comentario" name="comentario"></textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                            <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                                        <a href="{{-- route('cancelar') --}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </form>
@endsection

