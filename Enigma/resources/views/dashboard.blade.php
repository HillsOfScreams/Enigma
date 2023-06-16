<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <!-- Left Side Menu -->
            <div class="w-1/4 pr-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-4 left_row_users">
                        <div class="text-lg font-semibold mb-4">Chat</div>
                        <!-- Search bar here -->
                        <div class="flex items-center space-x-2 mb-2">
                            <div class="text-gray-800 dark:text-gray-10 w-full">
                                <input type="text" id="search" placeholder="Search users" />
                            </div>
                        </div>
                        <!-- Display the users -->
                        <div class="flex search-result items-start  mb-2 flex-col">
                        </div>
                    </div>
                </div>
            </div>


            <!-- Chat Area -->
            <div class="w-3/4 pl-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex flex-col space-y-4 h-96 overflow-y-auto">
                            <div class="flex items-start">
                                <div class="rounded-full bg-gray-300 w-10 h-10 flex-shrink-0"></div>
                                <div class="ml-4 p-4 rounded-lg bg-gray-200 dark:bg-gray-700">
                                    <div class="text-sm text-gray-800 dark:text-gray-100">Hello! How can I assist you today?</div>
                                </div>
                            </div>

                            <div class="flex items-end justify-end">
                                <div class="mr-4 p-4 rounded-lg bg-blue-500 text-white dark:bg-blue-800">
                                    <div class="text-sm">Sure! I'm here to help.</div>
                                </div>
                                <div class="rounded-full bg-gray-300 w-10 h-10 flex-shrink-0"></div>
                            </div>

                            <div class="flex items-start">
                                <div class="rounded-full bg-gray-300 w-10 h-10 flex-shrink-0"></div>
                                <div class="ml-4 p-4 rounded-lg bg-gray-200 dark:bg-gray-700">
                                    <div class="text-sm text-gray-800 dark:text-gray-100">Can you assist me with setting up my account?</div>
                                </div>
                            </div>

                            <!-- Add more chat bubbles as needed -->

                            <div class="flex items-end justify-end">
                                <div class="mr-4 p-4 rounded-lg bg-blue-500 text-white dark:bg-blue-800">
                                    <div class="text-sm">Absolutely! I'll guide you through the process.</div>
                                </div>
                                <div class="rounded-full bg-gray-300 w-10 h-10 flex-shrink-0"></div>
                            </div>
                        </div>

                        <!-- Input field for sending messages -->
                        <div class="flex items-center space-x-2 mt-4">
                            <div class="text-gray-800 dark:text-gray-10 w-full">
                                <input type="text" id="message" placeholder="Type your message" class="w-full" />
                            </div>
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    var searchInput = $('#search');
    var userContainer = $('.search-result');
    var searchBar = $('.search-bar');
    var previousResults = [];

    searchInput.on('input', function() {
        var query = searchInput.val();

        if (query.length > 0) {
            $.ajax({
                url: '/search',
                type: 'GET',
                data: {query: query},
                success: function(response) {
                    var users = response.users;

                    userContainer.empty();

                    if (users.length > 0) {
                        users.forEach(function(user) {
                            var userElement = '<a href="/dashboard/' + user.id + '">' +
                                                '<div class="flex items-center space-x-2 mb-2">' +
                                                    '<div class="rounded-full bg-blue-500 w-10 h-10 flex-shrink-0"></div>' +
                                                    '<div class="text-gray-800 dark:text-gray-100">' + user.name + '</div>' +
                                                '</div>' +
                                            '</a>';

                            userContainer.append(userElement);

                            previousResults.push(user);
                        });
                    } else {
                        var noUsersElement = '<div class="text-gray-800 dark:text-gray-100">No users found</div>';
                        userContainer.append(noUsersElement);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Search error:', error);
                }
            });
        } else {
            userContainer.empty();
        }
    });

    searchInput.on('focus', function() {
        searchBar.addClass('active');
    });

    searchInput.on('blur', function() {
        searchBar.removeClass('active');
    });
});
    </script>
</x-app-layout>