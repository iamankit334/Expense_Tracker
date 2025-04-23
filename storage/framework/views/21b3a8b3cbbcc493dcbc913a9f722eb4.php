<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-striped custom-table mb-0 datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Account Name</th>
                    <th>Income Source</th>
                    <th>Income Amount</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $incomeId = 1; ?>
                <?php $__currentLoopData = $incomeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rsIncomeList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($incomeId); ?></td>
                        <td><?php echo e(\App\ASPLibraries\CustomFunctions::customDecrypt($rsIncomeList->account_name, Session::get('normalUserEncryptKey'))); ?></td>
                        <td><?php echo e(\App\ASPLibraries\CustomFunctions::customDecrypt($rsIncomeList->source, Session::get('normalUserEncryptKey'))); ?></td>
                        <td><span>Rs </span><?php echo e(number_format(\App\ASPLibraries\CustomFunctions::customDecrypt($rsIncomeList->amount, Session::get('normalUserEncryptKey')), 2, ".", ",")); ?></td>
                        <td><textarea cols="20" rows="1" readonly disabled><?php echo e(\App\ASPLibraries\CustomFunctions::customDecrypt($rsIncomeList->description, Session::get('normalUserEncryptKey'))); ?></textarea></td>
                        <td><?php echo e(date('Y-M-d (l)', strtotime($rsIncomeList->date))); ?></td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_income" data-bs-incomeid="<?php echo e($rsIncomeList->id); ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $incomeId++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div><?php /**PATH C:\Users\LENOVO\OneDrive\Desktop\laravel\new_app\Expense-Tracker-main\expt_lvl\resources\views/ajax/ajax_income_body.blade.php ENDPATH**/ ?>