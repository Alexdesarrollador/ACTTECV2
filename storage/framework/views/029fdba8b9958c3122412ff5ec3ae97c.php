<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            <?php echo e(__('Formulario Creacion Empleado')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                        <form method="POST" action="<?php echo e(route('empleados.store')); ?>" class="max-w-sm mx-auto">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 mt-2">
                                    <div class="form-group">
                                        <strong>Cedula:</strong>
                                        <input type="text" name="cedula" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="cedula del equipo" >
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 mt-2">
                                    <div class="form-group">
                                        <strong>Nombre:</strong>
                                        <input class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="nombre" placeholder="Nombre del Empleado...">
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2 mt-2">
                                    <div class="form-group">
                                        <strong>Apellido:</strong>
                                        <input class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="nombre" placeholder="Apellido del Empleado...">
                                    
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                    <div class="form-group">
                                        <strong>Area:</strong>
                                        <input type="text" name="area" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="area del Empleado..." >
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 mt-2">
                                    <div class="form-group">
                                        <strong>cargo:</strong>
                                        <input class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="cargo" placeholder="Cargo del Empleado">
                                    </div>
                                </div>                
                            </div>
                            
                            <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
                            font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                            <a href="<?php echo e(route('empleados.index')); ?>" class="text-black bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 
                            font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                        </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\apenagos\proyecto\Acttec\resources\views/empleados/create.blade.php ENDPATH**/ ?>