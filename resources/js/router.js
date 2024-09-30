import { createRouter, createWebHistory } from "vue-router";

import Index from "./components/Index.vue";

import MovilDash from "./components/dashboard/movilComponent.vue";
import ComputadorDash from "./components/dashboard/computadorComponent.vue";
import TarjetaDash from "./components/dashboard/tarjetaComponent.vue";
import VehiculoDash from "./components/dashboard/vehiculoComponent.vue";

import Empleado from "./components/oficina/empleadoComponent.vue";
import DocEmpleado from "./components/oficina/docempleadoComponent.vue";

import AsignacionMovil from "./components/movil/asignacionComponent.vue";
import HistoricoMovil from "./components/movil/historicoComponent.vue";
import Movil from "./components/movil/movilComponent.vue";
import TarjetaRobada from "./components/movil/tarjetarobadaComponent.vue";
import TarjetaSim from "./components/movil/tarjetasimComponent.vue";

import AsignacionComputador from "./components/computador/asignacionComponent.vue";
import Computador from "./components/computador/computadorComponent.vue";
import DocComputador from "./components/computador/docComponent.vue";
import HistoricoComputador from "./components/computador/historicoComponent.vue";

import AsignacionTarjeta from "./components/tarjeta/asignacionComponent.vue";
import HistoricoTarjeta from "./components/tarjeta/historicoComponent.vue";
import Tarjeta from "./components/tarjeta/tarjetaComponent.vue";

import AsignacionVehiculo from "./components/vehiculo/asignacionComponent.vue";
import DocVehiculo from "./components/vehiculo/docComponent.vue";
import GestionVehiculo from "./components/vehiculo/gestionComponent.vue";
import HistoricoVehiculo from "./components/vehiculo/historicoComponent.vue";
import Vehiculo from "./components/vehiculo/vehiculoComponent.vue";

import NotFound from "./components/NotFound.vue";

const routes = [

  { 
    name: 'index',
    path: '/',
    component: Index
  },

  /*DASHBOARD----------------------------*/
  { 
    name: 'movildash',
    path: '/dashboard/movil-dashboard',
    component: MovilDash
  },
  { 
    name: 'computadordash',
    path: '/dashboard/computador-dasboard',
    component: ComputadorDash
  },
  { 
    name: 'tarjetadash',
    path: '/dashboard/tarjeta-dashboard',
    component: TarjetaDash
  },
  { 
    name: 'vehiculodash',
    path: '/dashboard/vehiculo-dashboard',
    component: VehiculoDash
  },

  /*OFICINA------------------------------*/

  { 
    name: 'empleado',
    path: '/oficina/empleado',
    component: Empleado
  },
  { 
    name: 'docempleado',
    path: '/oficina/documentacion-empleado',
    component: DocEmpleado
  },

  /*MOVIL--------------------------------*/

  { 
    name: 'asignacionmovil',
    path: '/movil/empleado',
    component: AsignacionMovil
  },
  { 
    name: 'historicomovil',
    path: '/movil/documentacion-empleado',
    component: HistoricoMovil
  },
  { 
    name: 'movil',
    path: '/movil/empleado',
    component: Movil
  },
  { 
    name: 'tarjetarobada',
    path: '/movil/documentacion-empleado',
    component: TarjetaRobada
  },
  { 
    name: 'tarjetasim',
    path: '/movil/documentacion-empleado',
    component: TarjetaSim
  },

  /*COMPUTADOR---------------------------*/

  { 
    name: 'asignacioncomputador',
    path: '/computador/asignacion-computador',
    component: AsignacionComputador
  },
  { 
    name: 'computador',
    path: '/computador/computador',
    component: Computador
  },
  { 
    name: 'documentacioncomputador',
    path: '/computador/documentacion-computador',
    component: DocComputador
  },
  { 
    name: 'historicocomputador',
    path: '/computador/historico-computador',
    component: HistoricoComputador
  },

  /*VEHICULO------------------------------*/

  { 
    name: 'asignaciontarjeta',
    path: '/tarjeta/asignacion-tarjeta',
    component: AsignacionTarjeta
  },
  { 
    name: 'historicotarjeta',
    path: '/computador/historico-tarjeta',
    component: HistoricoTarjeta
  },
  { 
    name: 'tarjeta',
    path: '/tarjeta/tarjeta',
    component: Tarjeta
  },

  /*TARJETA-------------------------------*/

  { 
    name: 'asignacionvehiculo',
    path: '/vehiculo/asignacion-vehiculo',
    component: AsignacionVehiculo
  },
  { 
    name: 'documentacionvehiculo',
    path: '/vehiculo/documentacion-vehiculo',
    component: DocVehiculo
  },
  { 
    name: 'gestionvehiculo',
    path: '/vehiculo/gestion-vehiculo',
    component: GestionVehiculo
  },
  { 
    name: 'historicovehiculo',
    path: '/vehiculo/historico-vehiculo',
    component: HistoricoVehiculo
  },
  { 
    name: 'vehiculo',
    path: '/vehiculo/vehiculo',
    component: Vehiculo
  },

  /*Otros---------------------------------*/

  { 
    name: 'notFound',
    path: '/:pathMatch(.*)*',
    component: NotFound
  },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})
export default router;