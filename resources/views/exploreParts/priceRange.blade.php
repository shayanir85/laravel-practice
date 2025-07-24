<div class="relative">
    <button id="priceFilter"
        class="flex items-center space-x-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
        <i class="fas fa-dollar-sign text-gray-500"></i>
        <span>Price Range</span>
        <i class="fas fa-chevron-down text-gray-400"></i>
    </button>
    <div id="priceDropdown"
        class="filter-dropdown absolute top-full left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <div class="p-4">
            <div class="space-y-2">
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="price" value="0-10" class="price-radio">
                    <span>Under $10</span>
                </label>
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="price" value="10-20" class="price-radio">
                    <span>$10 - $20</span>
                </label>
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="price" value="20-30" class="price-radio">
                    <span>$20 - $30</span>
                </label>
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="price" value="30+" class="price-radio">
                    <span>$30+</span>
                </label>
            </div>
        </div>
    </div>
</div>