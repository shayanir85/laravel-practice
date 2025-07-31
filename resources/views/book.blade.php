    @extends('layout.master')
    @section('content')
        <!-- Books Section -->
        <section id="booksSection" class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Featured Books</h2>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">Sort by:</span>
                        <select id="sortFilter"
                            class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
                            <option value="featured">Featured</option>
                            <option value="title">Title A-Z</option>
                            <option value="author">Author A-Z</option>
                            <option value="newest">Newest First</option>
                        </select>
                    </div>
                </div>
    
                <div id="booksGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                </div>
            </div>
        </section>
    @endsection
