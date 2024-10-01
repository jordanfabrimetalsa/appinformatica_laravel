<template lang="">
    <NavComputador></NavComputador>
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
            <Footer></Footer>
        </section>
    </div>    
</template>

<script>
    import NavComputador from './layouts/navComputadorComponent.vue';
    import Footer from './layouts/footerComponent.vue';

    export default {
        components: {
            NavComputador,
            Footer
        }
    };
</script>