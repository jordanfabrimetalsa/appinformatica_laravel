<template>
    <div class="x_content relative flex-col block min-w-0 p-2 break-words bg-white border-0 rounded-2xl bg-clip-border">
        <h2 class="mb-4 text-lg font-semibold text-center dark:text-white">
        <i class='bx bx-user'></i> {{ titulo }}
        </h2>
        <div class="relative p-2 overflow-x-auto border border-gray-200 rounded-lg sm:rounded-lg">
            <DataTable 
                    :data="data" 
                    :columns="columns" 
                    :class="myCLass" 
                    :options="dataTableOptions">
            </DataTable>
        </div>
    </div>
</template>

<script>
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net-bs5';
import Buttons from 'datatables.net-buttons-bs5';
import ButtonsHtml5 from 'datatables.net-buttons/js/buttons.html5';
import print from 'datatables.net-buttons/js/buttons.print';
import pdfmake from 'pdfmake';
import pdfFonts from 'pdfmake/build/vfs_fonts';
import 'datatables.net-select-dt';
import 'datatables.net-responsive-dt';
DataTable.use(pdfmake);
DataTable.use(pdfFonts);
DataTable.use(DataTablesCore);

export default {
    name:'ListaEmpleado',
    props: ['columns', 'data', 'myCLass', 'titulo'],
    components:{
        DataTable
    },
    data() {
        return {
            dataTableOptions: {
            paging: true,
            searching: true,
            ordering: true,
            responseive: true,
            autoWidth:false,
            dom:'Bfrtip',
            language:{
                search: 'Buscar',
                info: 'mostrando del _START_ A _END_ de _TOTAL_ registros',
                infoFiltered: '(Filtrados de _MAX_ registros.)',
                paginate: {first:'Primero', previous:'Anterior', next:'Siguiente',last:'Ultimo'}
            }
        },
        };
    },

};
</script>

<style scope>
@import 'datatables.net-bs5';

.dataTables_wrapper .dt-buttons {
padding: 1%;
float: right;
}

.dataTables_filter {
float: left;
display: ruby-text;
padding-bottom: 2%;
border-radius: 1rem /* 16px */;
}

.buttons-copy {
background: #98bf0b !important;
}

.buttons-print {
background: #98bf0b !important;
}

.buttons-pdf {
background: #98bf0b !important;
}

.buttons-csv {
background: #98bf0b !important;
}

.input-sm {
display: block;
padding: 0.5rem /* 8px */;
font-size: 0.875rem /* 14px */;
line-height: 1.25rem /* 20px */;
--tw-text-opacity: 1;
color: rgb(17 24 39 / var(--tw-text-opacity)) /* #111827 */;
border-width: 1px;
--tw-border-opacity: 1;
border-color: rgb(209 213 219 / var(--tw-border-opacity)) /* #d1d5db */;
border-radius: 0.5rem /* 8px */;
padding-inline-start: 2.5rem /* 40px */;
width: 20rem /* 320px */;
--tw-bg-opacity: 1;
background-color: rgb(249 250 251 / var(--tw-bg-opacity)) /* #f9fafb */;
}

.table-datatable tbody tr {
--tw-bg-opacity: 1;
background-color: rgb(255 255 255 / var(--tw-bg-opacity)) /* #ffffff */;
border-bottom-width: 1px;
text-transform: capitalize;
font-size: 0.875rem /* 14px */;
text-align: left;
}

body.dark .table-datatable tbody tr {
--tw-bg-opacity: 1;
background-color: rgb(55 65 81 / var(--tw-bg-opacity)) /* #374151 */;
--tw-text-opacity: 1;
color: rgb(156 163 175 / var(--tw-text-opacity)) /* #9ca3af */;
}

.table-datatable tbody tr td {
width: 1rem /* 16px */;
padding: 1rem /* 16px */;
text-transform: capitalize;
font-size: 13px;
}

.dt-buttons {
display: ruby-text;
padding: 2%;
}

.dataTables_info {
align-items: center;
justify-content: center;
display: flex;
width: 100%;
margin-bottom: 1rem /* 16px */;
font-size: 0.875rem /* 14px */;
line-height: 1.25rem /* 20px */;
font-weight: 400;
--tw-text-opacity: 1;
color: rgb(107 114 128 / var(--tw-text-opacity)) /* #6b7280 */;
padding: 10px;
}

.pagination {
display: ruby-text;
height: 2rem /* 32px */;
--tw-space-x-reverse: 0;
margin-right: calc(-1px * var(--tw-space-x-reverse));
margin-left: calc(-1px * calc(1 - var(--tw-space-x-reverse)));
font-size: 0.875rem /* 14px */;
line-height: 1.25rem /* 20px */;
--tw-space-x-reverse: 1;
}

.dataTables_paginate .pagination .previous {
display: flex;
align-items: center;
justify-content: center;
height: 2rem /* 32px */;
padding-left: 0.75rem /* 12px */;
padding-right: 0.75rem /* 12px */;
line-height: 1.25;
--tw-text-opacity: 1;
color: rgb(107 114 128 / var(--tw-text-opacity)) /* #6b7280 */;
--tw-bg-opacity: 1;
background-color: rgb(255 255 255 / var(--tw-bg-opacity)) /* #ffffff */;
--tw-border-opacity: 1;
border-color: rgb(209 213 219 / var(--tw-border-opacity)) /* #d1d5db */;
margin-inline-start: 0px;
border-start-start-radius: 0.5rem /* 8px */;
border-end-start-radius: 0.5rem /* 8px */;
}

.dataTables_paginate .pagination .previous:hover {
--tw-bg-opacity: 1;
background-color: rgb(243 244 246 / var(--tw-bg-opacity)) /* #f3f4f6 */;
--tw-text-opacity: 1;
color: rgb(55 65 81 / var(--tw-text-opacity)) /* #374151 */;
}

body.dark .dataTables_paginate .pagination .previous {
--tw-bg-opacity: 1;
background-color: rgb(31 41 55 / var(--tw-bg-opacity)) /* #1f2937 */;
--tw-border-opacity: 1;
border-color: rgb(55 65 81 / var(--tw-border-opacity)) /* #374151 */;
}

body.dark .dataTables_paginate .pagination .previous:hover {
--tw-bg-opacity: 1;
background-color: rgb(55 65 81 / var(--tw-bg-opacity)) /* #374151 */;
--tw-text-opacity: 1;
color: rgb(255 255 255 / var(--tw-text-opacity)) /* #ffffff */;
}

.paginate_button {
display: flex;
align-items: center;
justify-content: center;
height: 2rem /* 32px */;
padding-left: 0.75rem /* 12px */;
padding-right: 0.75rem /* 12px */;
line-height: 1.25;
--tw-text-opacity: 1;
color: rgb(107 114 128 / var(--tw-text-opacity)) /* #6b7280 */;
--tw-bg-opacity: 1;
background-color: rgb(255 255 255 / var(--tw-bg-opacity)) /* #ffffff */;
border-width: 1px;
--tw-border-opacity: 1;
border-color: rgb(209 213 219 / var(--tw-border-opacity)) /* #d1d5db */;
}

.paginate_button:active {
background: #f3f4f6;
}

.paginate_button:focus {
background: #f3f4f6;
}

.paginate_button:hover {
background: #f3f4f6;
}

body.dark .paginate_button {
--tw-bg-opacity: 1;
background-color: rgb(31 41 55 / var(--tw-bg-opacity)) /* #1f2937 */;
--tw-border-opacity: 1;
border-color: rgb(55 65 81 / var(--tw-border-opacity)) /* #374151 */;
}

body.dark .paginate_button:hover {
--tw-bg-opacity: 1;
background-color: rgb(55 65 81 / var(--tw-bg-opacity)) /* #374151 */;
--tw-text-opacity: 1;
color: rgb(255 255 255 / var(--tw-text-opacity)) /* #ffffff */;
}

.dataTables_paginate .pagination .next {
display: flex;
align-items: center;
justify-content: center;
height: 2rem /* 32px */;
padding-left: 0.75rem /* 12px */;
padding-right: 0.75rem /* 12px */;
line-height: 1.25;
--tw-text-opacity: 1;
color: rgb(107 114 128 / var(--tw-text-opacity)) /* #6b7280 */;
--tw-bg-opacity: 1;
background-color: rgb(255 255 255 / var(--tw-bg-opacity)) /* #ffffff */;
border-width: 1px;
--tw-border-opacity: 1;
border-color: rgb(209 213 219 / var(--tw-border-opacity)) /* #d1d5db */;
border-start-end-radius: 0.5rem /* 8px */;
border-end-end-radius: 0.5rem /* 8px */;
}

.dataTables_paginate .pagination .next:hover {
--tw-bg-opacity: 1;
background-color: rgb(243 244 246 / var(--tw-bg-opacity)) /* #f3f4f6 */;
--tw-text-opacity: 1;
color: rgb(55 65 81 / var(--tw-text-opacity)) /* #374151 */;
}

body.dark .dataTables_paginate .pagination .next {
--tw-bg-opacity: 1;
background-color: rgb(31 41 55 / var(--tw-bg-opacity)) /* #1f2937 */;
--tw-border-opacity: 1;
border-color: rgb(55 65 81 / var(--tw-border-opacity)) /* #374151 */;
}

body.dark .dataTables_paginate .pagination .next:hover {
--tw-bg-opacity: 1;
background-color: rgb(55 65 81 / var(--tw-bg-opacity)) /* #374151 */;
--tw-text-opacity: 1;
color: rgb(255 255 255 / var(--tw-text-opacity)) /* #ffffff */;
}

.w-10 {
width: 2.5rem /* 40px */;
}


.dark\:bg-gray-200:where(.dark, .dark *) {
--tw-bg-opacity: 1;
background-color: rgb(229 231 235 / var(--tw-bg-opacity)) /* #e5e7eb */;
}

.dark\:bg-gray-400:where(.dark, .dark *) {
--tw-bg-opacity: 1;
background-color: rgb(156 163 175 / var(--tw-bg-opacity)) /* #9ca3af */;
}

.dark\:bg-gray-600:where(.dark, .dark *) {
--tw-bg-opacity: 1;
background-color: rgb(75 85 99 / var(--tw-bg-opacity)) /* #4b5563 */;
}
</style>