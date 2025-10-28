<!----- THIS FORM USE FOR DELETE  ---->
<form method="DELETE" id="form-del">
    <input name="_method" type="hidden" value="DELETE">
    <?php echo e(csrf_field()); ?>


</form>
<!----- THIS FORM USE FOR DELETE  ---->

<footer class="footer mt-3">
    <div class="container-fluid">
        <div class="foot_text text-end">
            ©
            <script>
                document.write(new Date().getFullYear())
            </script> |<?php echo e(config('app.name')); ?>

        </div>

    </div>
</footer>
<?php /**PATH /home/wrteam-dev/ebroker/resources/views/layouts/footer.blade.php ENDPATH**/ ?>