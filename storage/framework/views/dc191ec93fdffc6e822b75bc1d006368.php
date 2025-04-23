<div class="col-md-12">
    <div class="table-responsive">
    <table class="table table-striped custom-table mb-0 datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Active</th>
            <th>Created Date</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $catId = 1; ?>
        <?php $__currentLoopData = $categoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rsCategoryList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($catId); ?></td>
                <td><?php echo e($rsCategoryList->category_name); ?></td>
                <td><?php echo e($rsCategoryList->active == 1 ? 'Yes' : 'No'); ?></td>
                <td><?php echo e(date('Y-M-d (l)', strtotime($rsCategoryList->created_at))); ?></td>
                <td class="text-end">
                    <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_category" data-bs-catid="<?php echo e($rsCategoryList->id); ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php $catId++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
</div><?php /**PATH C:\Users\LENOVO\OneDrive\Desktop\laravel\new_app\Expense-Tracker-main\expt_lvl\resources\views/ajax/ajax_category_body.blade.php ENDPATH**/ ?>