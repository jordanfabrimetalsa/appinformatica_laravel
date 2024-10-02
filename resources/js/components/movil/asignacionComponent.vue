<template>
    <ListaMovil :columns="columns" :data="moviles" myClass="display" titulo="Lista de Moviles"></ListaMovil>
</template>

<script>
import ListaMovil from '../../components/oficina/components/empleadoComponent.vue';

export default{
    components: {
        ListaMovil
    },
    data(){
        return{
            moviles : [],
            columns : [
                {data: 'empleado.nombre', title: 'Nombre'},
                {data: 'empleado.num_documento', title: 'Rut'},
                {data: 'equipo.detalle', title: 'Movil'},
                {data: 'equipo.imei', title: 'Imei'},
                {data: 'chip.numero', title: 'Numero'},
                {data: 'tasignacion', title: 'Tipo de Asignación'},
                {data: 'condicion', title: 'Anexo Contrato'},
                {data: 'pdf_entrega', title: 'Acta Entrega'},
                {data: 'pdf_devolucion', title: 'Acta Recepcion'},
            ]
        }
    },
    methods: {
        async obtenerMoviles(){
            try{
                const response = await axios.get('/api/asignar-movil');
                this.moviles = response.data.data;
            }catch(error){
                console.error('Ha fallado en recuperar los datos' + error);
            }
        }
    },
    mounted(){
        this.obtenerMoviles();
    }
}

</script>