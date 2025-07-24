                    <div class="relative">
                        <button id="locationFilter"
                            class="flex items-center space-x-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-map-marker-alt text-gray-500"></i>
                            <span>Location</span>
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </button>
                        <div id="locationDropdown"
                            class="filter-dropdown absolute top-full left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                            <div class="p-2">
                                <input type="text" placeholder="Enter city..."
                                    class="w-full p-2 border border-gray-300 rounded mb-2">
                                <div class="space-y-1">
                                    <button class="w-full text-left p-2 hover:bg-gray-50 rounded location-option"
                                        data-location="New York">New York</button>
                                    <button class="w-full text-left p-2 hover:bg-gray-50 rounded location-option"
                                        data-location="Los Angeles">Los Angeles</button>
                                    <button class="w-full text-left p-2 hover:bg-gray-50 rounded location-option"
                                        data-location="Chicago">Chicago</button>
                                </div>
                            </div>
                        </div>
                    </div>