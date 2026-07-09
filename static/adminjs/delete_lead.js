$(document).ready(function() {
    $('.leads-table').on('click', '.btn-delete', function(e) {
        e.preventDefault();
        
        const leadId = $(this).data('id');
        const row = $(this).closest('tr');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'delete_lead.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { id: leadId },
                    success: function(response) {
                        if (response.status === 'success') {
                            row.fadeOut(400, function() { $(this).remove(); });
                            Swal.fire('Deleted!', 'The lead has been deleted.', 'success');
                        } else {
                            Swal.fire('Error!', response.message || 'Could not delete the lead.', 'error');
                        }
                    }
                });
            }
        });
    });
});