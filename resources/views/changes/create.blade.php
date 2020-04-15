@extends('layouts.app')
@section('title', 'Create Un Nuevo Estado De Equipos')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Create Un Nuevo Estado De Equipos</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <form>
                    <fieldset>
                        <div class="col-lg-10">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="form-group">
                                            <select class="form-control" name="customert_id" id="machine_id" >

                                                    <option value="">Seleccional Stado del equipo</option>

                                              </select>
                                         </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Content</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="content"></textarea>
                                <span class="help-block">Feel free to ask us any question.</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
