@if (session('warning'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'warning',
                title: 'عملیات با خطا مواجه شد !',
                text: '{{ session('warning') }}',
                confirmButtonText: 'OK'

            });
        });
    </script>
@endif
