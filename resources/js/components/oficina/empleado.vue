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
                    <div v-if="redirigir" @click="listaFormulario" class="flex items-center space-x-1 md:order-2 md:space-x-2 rtl:space-x-reverse">
                      <a  class="text-gray-700 bg-gray-50 hover:bg-gray-200 border border-radius  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-800 focus:outline-none dark:focus:ring-blue-800"><i class='bx bx-message-square-add'></i></a>
                    </div>
                    <div v-else @click="listaFormulario" class="flex items-center space-x-1 md:order-2 md:space-x-2 rtl:space-x-reverse">
                      <a  class="text-gray-700  bg-gray-50 hover:bg-gray-200 border border-radius  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-800 focus:outline-none dark:focus:ring-blue-800"><i class='bx bx-table'></i></a>
                    </div>
                  </li>
                  
                </ul>
              </div>
              <br>
              <ListaEmpleado :columns="columns" :data="empleados" myClass="display" titulo="Empleados Activos"></ListaEmpleado>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</template>

<script>
import axios from 'axios';
import ListaEmpleado from './components/empleadoComponent.vue';
import Formulario from './components/formulariaempleadoComponent.vue';

export default{
    components: {
        ListaEmpleado
    },data() {
        return { 
        empleados: [],
        redirigir: true,
        columns: [
            { data: null, title: 'Opciones', render: (data, type, row) => {
                return `<button @click="verEmpleado(${row.idempleado})">Ver</button>
                        <button @click="eliminarEmpleado(${row.idempleado})">Eliminar</button>`;
            }},
            { data: 'nombre', title: 'Nombre' },
            { data: 'num_documento', title: 'Documento Identidad' },
            { data: 'cargo.nombre', title: 'Cargo' },
            { data: 'condicion', title: 'Condición', render: (data) => {
                return data === 0 ? 'Inhabilitado' : 'Habilitado';
            }},
        ],
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
            this.$router.push({ name: 'ver-datos-empleado', params: { id: id } });
        },
        async eliminarEmpleado(id) {
            try {
                await axios.delete(`/api/empleados/${id}`);
                this.obtenerEmpleados();
            } catch (error) {
                console.error('Error al eliminar empleado:', error);
            }
        },
        listaFormulario(){
          this.redirigir = !this.redirigir;
        }
    },
    mounted() {
        this.obtenerEmpleados();
    },
}

</script>