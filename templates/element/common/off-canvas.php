<div id="off-canvas">
    <div
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="overlay"></div>
    <div
        x-show="open"
        x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
        <?php // Closes off-canvas sidebar ?>
        <div
            x-transition:enter="ease-in-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute top-0 right-0 -mr-12 pt-2"">
            <button @click="open = false" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="flex-shrink-0 px-4 flex items-center justify-center">
            <svg viewBox="0 0 256 200" fill="currentColor" class="h-12 text-cake-red">
                <path d="M0,119.882843 C0,141.938825 57.2937323,159.841092 127.979753,159.841092 L127.979753,159.841092 L127.979753,199.783147 C57.2937323,199.783147 0,181.897074 0,159.841092 L0,159.841092 Z M255.999995,119.882843 L255.999995,159.832995 C255.999995,169.249701 245.530687,177.889104 228.09804,184.722895 L228.09804,184.722895 L127.971656,159.832995 L127.971656,119.882843 L228.09804,144.764647 C245.530687,137.938952 256.008088,129.299549 255.999995,119.882843 L255.999995,119.882843 Z M127.979753,0 C198.673871,0 256,17.9184609 256,39.9582488 L256,39.9582488 L256,79.9407884 C256,89.3251066 245.530687,97.9968968 228.106137,104.798301 L228.106137,104.798301 L127.979753,79.9407884 L127.979753,119.882843 C57.2937323,119.882843 0,101.988673 0,79.9407884 L0,79.9407884 L0,39.9582488 C0,17.9184609 57.2937323,0 127.979753,0 Z" />
            </svg>
        </div>

        <div class="flex-1 h-0 overflow-y-auto">
            <nav class="px-2 space-y-1">

            </nav>
        </div>
    </div>

    <?php // Dummy element to force sidebar to shrink to fit close icon ?>
    <div class="flex-shrink-0 w-14"></div>
</div>
