<template lang="">
    <div>
        <div class="border border-gray-300 rounded-lg g-white sidebar close dark:bg-gray-800">
            <div class="mt-4 logo-details">
                <img class="" src="../files/img/logo-sintexto.png" alt="">
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
                        <li class="dark:hover:bg-gray-900"><router-link to="estadomoviles">Móviles</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="estadovehiculo">Vehículo</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="estadoequipo">Computadores</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="estadotarjeta">Tarjeta ID</router-link></li>
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
                        <li class="dark:hover:bg-gray-900"><router-link to="empleado">Empleados</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="docempleado">Doc. del Empleado</router-link></li>
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
                        <li class="dark:hover:bg-gray-900"><router-link to="asignacion">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="asignacion_hist">Asig. Historicos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="equipo">Moviles</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="chip">Tarjeta SIM</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="gestionchip">Tarjeta SIM Robada</router-link></li>
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
                        <li class="dark:hover:bg-gray-900"><router-link to="asigcomputador">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="asigcomputador_hist">Asig. Historicos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="computador">Computadores</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="doccomputadores">Doc. de Computadores</router-link></li>
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
                        <li class="dark:hover:bg-gray-900"><router-link to="asignacionvehiculo">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="asignacionvehiculo_hist">Asig. Historicos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="vehiculo">Vehiculos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="docvehiculos">Doc. de Vehiculos</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="gestionvehiculos">Gestión de Vehiculos</router-link></li>
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
                        <li class="dark:hover:bg-gray-900"><router-link to="asigtarjeta">Asignaciones</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="tarjeta">Tarjetas</router-link></li>
                        <li class="dark:hover:bg-gray-900"><router-link to="asigtarjeta_hist">Asig. Historicos</router-link></li>
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
    <div class="home-section">
        <section class="home">
            <nav class="w-full rounded-md">
                <ol class="flex justify-between list-reset">
                    <li id="menu-xs" class="">
                        <div class="cursor-pointer nav-bar-menu">
                            <i class='inline-flex items-center justify-center p-2 text-sm text-gray-500 rounded-lg bx bx-menu dark:text-white md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-600' style="font-size: 25px"></i>
                        </div>
                    </li>
                    <li class="text-gray-500 transition duration-300 ease-in-out delay-150 dark:text-white hover:-translate-y-1 hover:scale-110">

                    </li>
                </ol>
            </nav>

            <div class="flex-1 p-2">
                <h1 class="p-2 mb-4 text-base font-extrabold text-center text-gray-900 dark:text-white md:text-3xl lg:text-4xl"><span class="text-lime-900 dark:text-lime-500"><i class='bx bx-data'></i> Bienvenido</span> a Informatica</h1>
                <p class="text-gray-500">Aquí puedes hacer uso de herramientas para el Departamento de Informatica y tambien Servicios Generales.</p><br>

                <div class="p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800">
                    <div class="grid grid-cols-6 p-6 card-body lg:grid-cols-1">
                        <router-view></router-view> <!-- Aqui esta la web dinamica SPA-->
                    </div>
                </div>
            </div>

            <footer class="bottom-0 left-0 z-20 w-full p-4 mx-auto content md:flex md:items-center md:justify-between md:p-4 dark:border-gray-600">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"><router-link to="" class="hover:underline">Fabrimetal™</router-link>. Derechos Reservados.
                </span>
                    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <img src="../files/img/logo-sintexto.png" class="w-10 transition duration-300 ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                    </li>
                    </ul>
            </footer>

            <MenuHorizontal/>
        </section>
    </div>    
</template>

<script>
    import MenuHorizontal from './layouts/menuHorizontal.vue';
</script>