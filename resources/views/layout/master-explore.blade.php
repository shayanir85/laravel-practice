<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Books - BookMarket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/style.css')}}">
</head>

<body class="bg-gray-50">
    <!-- Header -->
    @include('exploreParts.header')
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Page Title -->
        @include('exploreParts.pagetitle')

        <!-- Featured Books Section -->
        @include('exploreParts.featuredBooks')

        <!-- Category Highlights -->
        @include('exploreParts.categories')

        <!-- Filter Bar -->
        <div class="bg-white rounded-lg shadow-sm border p-6 mb-8">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-4">
                    <!-- Category Filter -->
                    @include('exploreParts.categoryFilter')

                    <!-- Price Range Filter -->
                    @include('exploreParts.priceRange')

                    <!-- Location Filter -->
                    @include('exploreParts.location')

                    <!-- Author Filter -->
                    <div class="relative">
                        <input type="text" id="authorFilter" placeholder="Search by author..."
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <!-- Sort Options -->
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600">Sort by:</span>
                    <select id="sortSelect"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="newest">Newest</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Highest Rated</option>
                        <option value="popular">Most Popular</option>
                    </select>
                </div>
            </div>

            <!-- Active Filters -->
            <div id="activeFilters" class="mt-4 flex flex-wrap gap-2 hidden">
                <span class="text-sm text-gray-600">Active filters:</span>
            </div>
        </div>

        <!-- View Toggle -->
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">View:</span>
                <div class="flex bg-gray-100 rounded-lg p-1">
                    <button id="gridView" class="px-3 py-1 rounded bg-white shadow-sm text-blue-600">
                        <i class="fas fa-th-large"></i> Grid
                    </button>
                    <button id="listView" class="px-3 py-1 rounded text-gray-600 hover:text-blue-600">
                        <i class="fas fa-list"></i> List
                    </button>
                </div>
            </div>
            <div class="text-sm text-gray-600">
                Showing <span id="resultCount">24</span> of 156 books
            </div>
        </div>

        <!-- Books Grid -->
        @yield('explore-content')
        <!-- Pagination -->
        @include('exploreParts.Pagination')
    </div>
    <script src="{{asset('asset/explore.js')}}"></script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'9633b6056298d2df',t:'MTc1MzE5NTQxMy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
</body>

</html>