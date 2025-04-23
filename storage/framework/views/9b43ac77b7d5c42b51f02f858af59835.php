<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-striped custom-table mb-0 datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Account Name</th>
                    <th>Account Type</th>
                    <th>Account Number</th>
                    <th>Active</th>
                    <th>Created At</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $bankAccountsId = 1; ?>
                <?php $__currentLoopData = $bankAccountsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rsBankAccountsList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($bankAccountsId); ?></td>
                        <td><?php echo e(\App\ASPLibraries\CustomFunctions::customDecrypt($rsBankAccountsList->account_name, Session::get('normalUserEncryptKey'))); ?></td>
                        <td><?php echo e(\App\ASPLibraries\CustomFunctions::customDecrypt($rsBankAccountsList->account_type, Session::get('normalUserEncryptKey'))); ?></td>
                        <td><?php echo e(\App\ASPLibraries\CustomFunctions::customDecrypt($rsBankAccountsList->account_number, Session::get('normalUserEncryptKey'))); ?></td>
                        <td><?php echo e($rsBankAccountsList->active == 1 ? 'Yes' : 'No'); ?></td>
                        <td><?php echo e(date('Y-M-d (l)', strtotime($rsBankAccountsList->created_at))); ?></td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_bank_account" data-bs-bankaccountid="<?php echo e($rsBankAccountsList->id); ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $bankAccountsId++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div><?php /**PATH C:\Users\LENOVO\OneDrive\Desktop\laravel\new_app\Expense-Tracker-main\expt_lvl\resources\views/ajax/ajax_bank_account_body.blade.php ENDPATH**/ ?>