<script>
    toastr.options =
            {
                "closeButton": false,
                "debug": true,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "500",
                "hideDuration": "1000",
                "timeOut": "8000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "slideDown",
                "hideMethod": "fadeOut"
                }

    //now do all your toasts here
    //toastr.success('success', 'Have fun storming the castle!');
    //new Toast('error', 'toast-bottom-left', 'bottom left');
    <?php
    if($flash = session("success"))
    {
        ?>
        toastr.success("<?php echo $flash; ?>", '<h4> Success </h4>');
        <?php
    }

    if($flash = session("error"))
    {
        ?>
        toastr.error("<?php echo $flash; ?>", '<h4> Error </h4>');
        <?php
    }

    if($flash = session("info"))
    {
        ?>
        toastr.info("<?php echo $flash; ?>", '<h4> Notice </h4>');
        <?php
    }

    if($flash = session("primary"))
    {
        ?>
        toastr.info("<?php echo $flash; ?>", '<h4> Notice </h4>');
        <?php
    }

    if($flash = session("warning"))
    {
        ?>
        toastr.warning("<?php echo $flash; ?>", '<h4> Warning </h4>');
        <?php
    }

    if(isset($errors))
    {
        foreach($errors->all() as $error)
        {
            ?>
            toastr.error("<?php echo $error; ?>", '<h4> Error </h4>');
            <?php
        }

    }
    ?>
</script>
