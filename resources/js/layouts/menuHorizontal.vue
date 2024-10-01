<template>
    <div class="fixed z-50 w-full h-12 max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-lg bottom-1 left-1/2 dark:bg-gray-800 dark:border-gray-200">
        <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
      
          <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center px-5 rounded-s-lg hover:bg-gray-50 dark:hover:bg-gray-900 group ">
            <a href="estado.php">
              <i class='w-5 h-5 mb-1 font-semibold text-gray-500 bx bx-home dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500'></i>
              <span class="sr-only">Inicio</span>
            </a>
          </button>
          <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Inicio
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
      
          <button data-tooltip-target="tooltip-wallet" id="perfil" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-900">
            <a href="#">
              <i class='w-5 h-5 mb-1 text-gray-500 bx bx-user dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500'></i>
              <span class="sr-only">Usuario</span>
            </a>
          </button>
          <div id="tooltip-wallet" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Usuario
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
      
      
          <div x-data="{ isDarkMode: false, tooltipVisible: false }" class="grid">
            <button id="toggleTheme" aria-label="Toggle Theme" type="button" class="inline-flex flex-col items-center justify-center px-5 mode hover:bg-gray-50 dark:hover:bg-gray-900 group" @click="isDarkMode = !isDarkMode" @mouseover="tooltipVisible = true" @mouseleave="tooltipVisible = false">
              <i x-show="!isDarkMode" class='w-5 h-5 text-gray-500 bx bx-moon icon moon dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500'></i>
              <i x-show="isDarkMode" class='w-5 h-5 text-gray-500 bx bx-sun icon sun dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500'></i>
            </button>
          </div>
      
      
          <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-900 group ">
            <a href="#" @click="open = true" data-href="../../modulosfm2/firmatecnico/production/digitalsignature.php?context=firmatecnico" data-toggle="modal" data-target="#modalFirma" class="showModal">
              <i class="w-5 h-5 mb-1 text-gray-500 bx bx-pencil icon dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"></i>
              <span class="sr-only">Firma</span>
            </a>
          </button>
          <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Firma
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
      
          <button data-tooltip-target="tooltip-profile" type="button" class="inline-flex flex-col items-center justify-center px-5 rounded-e-lg hover:bg-gray-50 dark:hover:bg-gray-900 group">
            <a href="../ajax/usuario.php?op=salir">
              <i class='w-5 h-5 mb-1 text-gray-500 bx bx-log-out icon dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500'></i>
              <span class="sr-only">Cerrar Sesión</span>
            </a>
          </button>
          <div id="tooltip-dark" role="tooltip" class="absolute invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 z-100 tooltip dark:bg-gray-700">
              Tooltip content
              <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
          Cerrar Sesión
          <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
      </div>
      </div>
</template>
<script>

</script>