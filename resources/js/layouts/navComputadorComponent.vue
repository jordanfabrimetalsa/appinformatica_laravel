<template>
    <div>
        <div class="border border-gray-300 rounded-lg g-white sidebar close dark:bg-gray-800">
            <div class="mt-4 logo-details">
                <img class="" src="../../public/upload/logo-sintexto.png" alt="">
            </div>
            <ul class="nav-links ">
                <li>
                    <div class="iocn-link dark:hover:bg-gray-900 focus:outline-none focus:ring-2 dark:focus:ring-gray-200 dark:focus:bg-gray-900">
                        <router-link to="#" class="">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="link_name text">Estadísticas</span>
                        </router-link>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'movildash' }">Móviles</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'vehiculodash' }">Vehículo</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'computadordash' }">Computadores</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'tarjetadash' }">Tarjeta ID</router-link></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link dark:hover:bg-gray-900 focus:outline-none focus:ring-2 dark:focus:ring-gray-200 dark:focus:bg-gray-900">
                        <router-link to="#" class="">
                            <i class='bx bx-buildings icon'></i>
                            <span class="link_name text">Oficina</span>
                        </router-link>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'empleado' }">Empleados</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'docempleado' }">Doc. del Empleado</router-link></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link dark:hover:bg-gray-900 focus:outline-none focus:ring-2 dark:focus:ring-gray-200 dark:focus:bg-gray-900">
                        <router-link to="#" class="">
                            <i class='bx bx-mobile-alt icon'></i>
                            <span class="link_name text">Movil</span>
                        </router-link>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'asignacionmovil' }">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'historicomovil' }">Asig. Historicos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'movil' }">Moviles</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'tarjetarobada' }">Tarjeta SIM</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'tarjetasim' }">Tarjeta SIM Robada</router-link></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link dark:hover:bg-gray-900 focus:outline-none focus:ring-2 dark:focus:ring-gray-200 dark:focus:bg-gray-900">
                        <router-link to="#" class="">
                            <i class='bx bx-desktop icon'></i>
                            <span class="link_name text">Computador</span>
                        </router-link>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'asignacioncomputador' }">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'historicocomputador' }">Asig. Historicos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'computador' }">Computadores</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'documentacioncomputador' }">Doc. de Computadores</router-link></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link dark:hover:bg-gray-900 focus:outline-none focus:ring-2 dark:focus:ring-gray-200 dark:focus:bg-gray-900">
                        <router-link to="#" class="">
                            <i class='bx bx-car icon'></i>
                            <span class="link_name text">Vehiculo</span>
                        </router-link>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'asignacionvehiculo' }">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'historicovehiculo' }">Asig. Historicos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'vehiculo' }">Vehiculos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'documentacionvehiculo' }">Doc. de Vehiculos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'gestionvehiculo' }">Gestión de Vehiculos</router-link></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link dark:hover:bg-gray-900 focus:outline-none focus:ring-2 dark:focus:ring-gray-200 dark:focus:bg-gray-900">
                        <router-link to="#" class="">
                            <i class='bx bx-credit-card icon'></i>
                            <span class="link_name text">Tarjeta ID</span>
                        </router-link>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'asignaciontarjeta' }">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'tarjeta' }">Tarjetas</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link :to="{ name:'historicotarjeta' }">Asig. Historicos</router-link></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link dark:hover:bg-gray-900 focus:outline-none focus:ring-2 dark:focus:ring-gray-200 dark:focus:bg-gray-900">
                        <router-link to="#" class="">
                            <i class='bx bxl-chrome'></i>
                            <span class="link_name text">Network</span>
                        </router-link>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li class="dark:hover:bg-gray-900"><router-link to="https://www.fabrimetal.cl/prevencion/production/login">Prevención</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="https://www.fabrimetal.cl/gserviciosap/production/login">Servicios</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="https://www.fabrimetal.cl/router-linkppfabrimetalsap/production/login">FabrimetalSAP</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="https://www.fabrimetal.cl/bodegasap/?url=LOGIN">Bodega</router-link></li>
                    </ul>
                </li>
                <li style="bottom: 0;">
                    <router-link to="../router-linkjax/usuario?op=salir">
                        <i class='bx bx-log-out icon'></i>
                        <span class="link_name">
                        Cerrar Sesión
                        </span>
                    </router-link>
                    <ul class="sub-menu blank">
                        <li><router-link to="../router-linkjax/usuario?op=salir"> Cerrar Sesión</router-link></li>
                    </ul>
                </li>
                <li class="transition-opacity duration-500 bg-white opacity-0 dark:bg-gray-900 dark:text-white" style="bottom: 0;" id="profile-li">
                    <div class="profile-details">
                        <div class="profile-content">
                            <i class='text-black bx bx-menu-alt-left bx-menu2 dark:text-white profileImg' style="font-size: 25px"></i>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>

</script>