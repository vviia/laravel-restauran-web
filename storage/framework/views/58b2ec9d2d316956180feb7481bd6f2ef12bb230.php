<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
      <div class="container-scroller">
        <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div style="position: relative; top:60px; right:-150px">
            <form action="<?php echo e(url('/uploadfood')); ?>" method="post" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <div>
                    <label for="">Title</label>
                    <input style="color: blue;" type="text" name="title" placeholder="write a title" required>
                </div>
                <div>
                    <label for="">Price</label>
                    <input style="color: blue;" type="num" name="price" placeholder="write a price" required>
                </div>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style="color: blue;" type="text" name="description" placeholder="write a description" required>
                </div>
                <div>
                    <input type="submit" value="save">
                </div>
            </form>
            <div>
                <table>
                    <tr>
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                        <th style="padding: 30px">Action 2</th>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center">
                            <td><?php echo e($data->title); ?></td>
                            <td><?php echo e($data->price); ?></td>
                            <td><?php echo e($data->description); ?></td>
                            <td> <img height="200" width="200" src="/foodimage/<?php echo e($data->image); ?>"> </td>
                            <td><a href="<?php echo e(url('/deletemenu', $data->id)); ?>">Delete</a></td>
                            <td><a href="<?php echo e(url('/updatemenu', $data->id)); ?>">Update</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>

      </div>
    <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html><?php /**PATH D:\laravell\restaurant\resources\views/admin/foodmenu.blade.php ENDPATH**/ ?>