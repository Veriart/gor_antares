@if (session('success'))
    <script>
        Swal.fire({
            title: "Success",
            text: "{{ Session::get('success') }}",
            timer: 2000,
            icon: "success"
        });
    </script>
@endif

<script>
    $(".sa-success").click(function() {
        Swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'error',
            confirmButtonText: 'Cool'
        })
    })

    $(".btn-destroy").click(function() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest('form').submit()
            }
        });
    })
</script>
