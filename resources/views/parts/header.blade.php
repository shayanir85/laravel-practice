<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="hero-gradient text-white px-4 py-2 rounded-lg font-bold text-xl">
                    📚 BookStore
                </div>
            </div>

            <!-- Search Bar -->
            <div class="flex-1 max-w-lg mx-8">
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Search for books, authors, or genres..."
                        class="w-full px-4 py-2 pl-10 pr-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Location Filter -->
            <div class="flex items-center space-x-4">
                <select id="locationFilter"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <option value="">All Locations</option>
                    <option value="downtown">Downtown</option>
                    <option value="uptown">Uptown</option>
                    <option value="midtown">Midtown</option>
                    <option value="suburbs">Suburbs</option>
                </select>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-user mr-2"></i>Account
            </button>
        </div>
    </div>
</header>