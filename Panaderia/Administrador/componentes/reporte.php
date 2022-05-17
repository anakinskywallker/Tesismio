
            <!---->
        
            <!---->

            <form class="was-validated">
               
                <div>
                    <!--tabla facturas-->
                    <table class="table table-striped" style="cursor: pointer;">
                        <thead>
                            <div class="col-lg-12 text-center">
                                <h6 class="section-heading text-uppercase">Facturas</h6>
                            </div>
                            <tr class="bg-secondary">
                                <th scope="col">No Factura</th>
                                <th scope="col">fecha</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">observacion</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>
                                    423423423   
                                </th>

                                <td>21/04/2019</td>
                                <td>clikeame</td>
                                <!-- nota: en esta etiqueta se envia la info a la bd para mostrar todo lo que contiene dentro en la siguiente tabla
                                los datos se deben recargar por debajo SIN actualizar la pagina esto se hace con un .js-->
                                <td>faltan se pago </td>
                                <td>200000</td>

                            </tr>
                            <tr>
                                <th>1234534
                                </th>
                                <td>21/04/2019</td>
                                <td>jorge armando</td>
                                <td>faltan se pago </td>
                                <td>200000</td>

                            </tr>
                            <tr>
                                <th>12324234
                                </th>
                                <td>21/04/2019</td>
                                <td>jorge armando</td>
                                <td>faltan se pago </td>
                                <td>200000</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- tabla INFORMACION DE LA FACTURA -->
                <div>

                    <table class="table table-striped">
                        <thead>
                            <div class="col-lg-12 text-center">
                                <h6 class="section-heading text-uppercase">informacion de la factura</h6>
                            </div>
                            <tr class="bg-secondary">
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Costo</th>
                                <th scope="col">Total</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">pan de yuca</th>
                                <td>20</td>
                                <td>200</td>
                                <td>4000</td>
                            </tr>
                            <tr>
                                <th scope="row">pan de yuca</th>
                                <td>20</td>
                                <td>200</td>
                                <td>4000</td>
                            </tr>

                        </tbody>
                    </table>

                </div>



                <form class="was-validated">
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <input type="text" class="form-control is-invalid mb-2" placeholder="Nombre"
                                aria-label="Cantidad" aria-describedby="btnGroupn" id="validationTextarea" required>
                        </div>

                        <div class="col-xs-2 col-md-7 ">
                            <input type="text" class="form-control is-invalid mb-2" placeholder="observacion"
                                aria-label="Cantidad" aria-describedby="btnGroupAn" id="validationTextarea" required>
                        </div>
                        <div class="col-xs-2 col-md-2">
                            <button type="submit" class="btn btn-secondary mb-2 col">Eliminar</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                <!-- card 1-->
                <div class="col-xl-4 col-md-3 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gastos
                                    </div>
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">$ 100.000
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">Gastos Insumos: $ 300.000</div>
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card  2-->
                <div class="col-xl-4 col-md-3 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary2 text-upperce mb-1 ">VENTAS
                                    </div>
                                    <div class="text-xs font-weight-bold text-primary2 text-uppercase mb-1"> $
                                        10.000.000
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">Gastos Insumos: $ 300.000</div>
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 3-->
                <div class="col-xl-4 col-md-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Utilidad
                                    </div>
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">$ 2.000.000
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">Reventa: $ 500.000</div>
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        