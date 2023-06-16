$(document).ready(function() {
    $('#search').on('keyup', function() {
        let query = $(this).val();
        $.ajax({
            url: "{{ route('search') }}",
            type: "POST",
            data: {
                _token: $('meta[name="_token"]').attr('content'),
                query: query
            },
            success: function(response) {
                let users = response.users;
                let html = '';
                users.forEach(function(user) {
                    html += '<div class="flex items-center space-x-2 mb-2">';
                    html += '<div class="rounded-full bg-blue-500 w-10 h-10 flex-shrink-0"></div>';
                    html += '<div class="text-gray-800 dark:text-gray-100">' + user.name + '</div>';
                    html += '</div>';
                });
                $('.left_row_users').html(html);
            }
        });
    });
});
