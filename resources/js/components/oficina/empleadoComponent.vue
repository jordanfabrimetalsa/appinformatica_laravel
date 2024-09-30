<template>
        <div class="flex-wrap justify-center block p-4 mb-2 bg-white border border-gray-300 rounded-lg dark:bg-gray-800">
          <div class="flex flex-col" role="main">
            <div class>
              <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <div class="flex items-center space-x-1 md:order-2 md:space-x-2 rtl:space-x-reverse">
                            <a id="op_agregar" onclick="mostarform(true)" class="text-gray-700 bg-gray-50 hover:bg-gray-200 border border-radius  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-800 focus:outline-none dark:focus:ring-blue-800"><i class='bx bx-message-square-add'></i></a>
                          </div>
                          <!--<div class="flex items-center space-x-1 md:order-2 md:space-x-2 rtl:space-x-reverse">
                            <a id="op_listar" onclick="mostarform(false)" class="text-gray-700  bg-gray-50 hover:bg-gray-200 border border-radius  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-800 focus:outline-none dark:focus:ring-blue-800"><i class='bx bx-table'></i></a>
                          </div>-->
                        </li>
                      </ul>
                    </div>
                    <br>
                    <div id="listadoempleados" class="x_content relative flex-col block min-w-0 p-2 break-words bg-white border-0 rounded-2xl bg-clip-border">
                      <h2 class="mb-4 text-lg font-semibold text-center dark:text-white"><i class='bx bx-user'></i> Listado de Empleados</h2>
                      <div class="relative p-2 overflow-x-auto border border-gray-200 rounded-lg sm:rounded-lg">
                        <table id="tblempleados" class="w-full text-sm text-left text-gray-500 border border-gray-300 rounded-lg table-datatable rtl:text-right dark:text-gray-400">
                          <thead class="text-xs text-gray-700 capitalize bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
                            <tr class="text-left">
                                <th  scope=" col" class="px-6 py-3">Nombre</th>
                                <th  scope=" col" class="px-6 py-3">Documento Identidad</th>
                                <th  scope=" col" class="px-6 py-3">Cargo</th>
                                <th scope="col" class="px-6 py-3">Condición</th>
                                <th scope="col" class="px-6 py-3">Acciones</th>
                              </tr>
                            </thead>
                            <tbody class=" dark:bg-gray-700 dark:text-gray-400">
                                <tr v-for="empleado in empleados" :key="empleado.idempleado">
                                    <td>{{ empleado.nombre }}</td>
                                    <td>{{ empleado.num_documento }}</td>
                                    <td>{{ empleado.idcargo }}</td>
                                    <td>{{ empleado.condicion == 0 ? 'Inhabilitado' : 'Habilitado'  }}</td>
                                    <td>
                                        <button @click="verEmpleado(empleado.idempleado)">Ver</button>
                                        <button @click="eliminarEmpleado(empleado.idempleado)">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                empleados: [],
            };
        },
        methods: {
            async obtenerEmpleados() {
                try {
                    const response = await axios.get(`/api/empleado`);
                    this.empleados = response.data.data;
                } catch (error) {
                    console.error('Error al obtener empleados:', error);
                }
            },
            verEmpleado(id) {
            },
            async eliminarEmpleado(id) {
                try {
                    await axios.delete(`/api/empleados/${id}`);
                    this.obtenerEmpleados(); // Recargar la lista
                } catch (error) {
                    console.error('Error al eliminar empleado:', error);
                }
            },
        },
        mounted() {
            this.obtenerEmpleados();
        },
    };
</script>