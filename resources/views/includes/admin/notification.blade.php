@if($flash = session('info'))
    <script type="text/javascript">
        $.toast({
            heading: 'Heads up!',
            text: '{{ $flash }}',
            position: 'top-right',
            loaderBg: '#3b98b5',
            icon: 'info',
            hideAfter: 5000,
            stack: 5
        });
    </script>
@endif

@if($flash = session('success'))
    <script type="text/javascript">
        $.toast({
            heading: 'Success!',
            text: '{{ $flash }}',
            position: 'top-right',
            loaderBg: '#5ba035',
            icon: 'success',
            hideAfter: 5000,
            stack: 5
        });
    </script>
@endif

@if($flash = session('warning'))
    <script type="text/javascript">
        $.toast({
            heading: 'Warning!',
            text: '{{ $flash }}',
            position: 'top-right',
            loaderBg: '#da8609',
            icon: 'warning',
            hideAfter: 5000,
            stack: 5
        });
    </script>
@endif

@if($flash = session('error'))
    <script type="text/javascript">
        $.toast({
            heading: 'Error!',
            text: '{{ $flash }}',
            position: 'top-right',
            loaderBg: '#bf441d',
            icon: 'error',
            hideAfter: 5000,
            stack: 5
        });
    </script>
@endif

@if($errors->count() > 0)
<script type="text/javascript">
    @foreach($errors->all() as $error)
        $.toast({
            heading: 'Error!',
            text: '{{ $error }}',
            position: 'top-right',
            loaderBg: '#bf441d',
            icon: 'error',
            hideAfter: 5000,
            stack: 5
        });
    @endforeach
</script>
@endif
