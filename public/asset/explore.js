// Filter dropdown functionality
const filterButtons = ['categoryFilter', 'priceFilter', 'locationFilter'];
const filterDropdowns = ['categoryDropdown', 'priceDropdown', 'locationDropdown'];
const booksContainer = document.getElementById('booksContainer');
const books = [
    {
        "id": 1,
        "title": "To Kill a Mockingbird",
        "author": "Harper Lee",
        "category": "fiction",
        "location": "New York",
        "cover": "https://via.placeholder.com/200x300/2563eb/FFFFFF?text=Mockingbird",
        "price": "$14.99",
        "rating": 4.8
    },
    {
        "id": 2,
        "title": "Dune",
        "author": "Frank Herbert",
        "category": "sci-fi",
        "location": "Los Angeles",
        "cover": "https://via.placeholder.com/200x300/7c3aed/FFFFFF?text=Dune",
        "price": "$18.99",
        "rating": 4.6
    },
    {
        "id": 3,
        "title": "Pride and Prejudice",
        "author": "Jane Austen",
        "category": "romance",
        "location": "Chicago",
        "cover": "https://via.placeholder.com/200x300/ec4899/FFFFFF?text=Pride+%26+Prejudice",
        "price": "$12.99",
        "rating": 4.7
    },
    {
        "id": 4,
        "title": "Murder on the Orient Express",
        "author": "Agatha Christie",
        "category": "mystery",
        "location": "New York",
        "cover": "https://via.placeholder.com/200x300/6b7280/FFFFFF?text=Murder+Express",
        "price": "$16.99",
        "rating": 4.5
    },
    {
        "id": 5,
        "title": "Sapiens",
        "author": "Yuval Noah Harari",
        "category": "non-fiction",
        "location": "Los Angeles",
        "cover": "https://via.placeholder.com/200x300/22c55e/FFFFFF?text=Sapiens",
        "price": "$22.99",
        "rating": 4.9
    },
    {
        "id": 6,
        "title": "1984",
        "author": "George Orwell",
        "category": "fiction",
        "location": "Chicago",
        "cover": "https://via.placeholder.com/200x300/f87171/FFFFFF?text=1984",
        "price": "$19.99",
        "rating": 4.8
    },
    {
        "id": 7,
        "title": "Steve Jobs",
        "author": "Walter Isaacson",
        "category": "biography",
        "location": "New York",
        "cover": "https://via.placeholder.com/200x300/6366f1/FFFFFF?text=Steve+Jobs",
        "price": "$24.99",
        "rating": 4.4
    },
    {
        "id": 8,
        "title": "Harry Potter and the Sorcerer's Stone",
        "author": "J.K. Rowling",
        "category": "fiction",
        "location": "Los Angeles",
        "cover": "https://via.placeholder.com/200x300/facc15/000000?text=Harry+Potter+1",
        "price": "$15.99",
        "rating": 4.9
    }
];

filterButtons.forEach((buttonId, index) => {
    const button = document.getElementById(buttonId);
    const dropdown = document.getElementById(filterDropdowns[index]);

    button.addEventListener('click', (e) => {
        e.stopPropagation();
        // Close other dropdowns
        filterDropdowns.forEach((dropdownId, i) => {
            if (i !== index) {
                document.getElementById(dropdownId).classList.remove('active');
            }
        });
        dropdown.classList.toggle('active');
    });
});

// Close dropdowns when clicking outside
document.addEventListener('click', () => {
    filterDropdowns.forEach(dropdownId => {
        document.getElementById(dropdownId).classList.remove('active');
    });
});

// Category button functionality
document.querySelectorAll('.category-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const category = btn.dataset.category;
        filterBooks({ category });

        // Update active state
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('ring-2', 'ring-blue-500'));
        btn.classList.add('ring-2', 'ring-blue-500');
    });
});

// View toggle functionality
const gridView = document.getElementById('gridView');
const listView = document.getElementById('listView');


gridView.addEventListener('click', () => {
    gridView.classList.add('bg-white', 'shadow-sm', 'text-blue-600');
    gridView.classList.remove('text-gray-600');
    listView.classList.remove('bg-white', 'shadow-sm', 'text-blue-600');
    listView.classList.add('text-gray-600');

    booksContainer.className = 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8';
});

listView.addEventListener('click', () => {
    listView.classList.add('bg-white', 'shadow-sm', 'text-blue-600');
    listView.classList.remove('text-gray-600');
    gridView.classList.remove('bg-white', 'shadow-sm', 'text-blue-600');
    gridView.classList.add('text-gray-600');

    booksContainer.className = 'space-y-4 mb-8';

    // Update book cards for list view
    document.querySelectorAll('.book-card').forEach(card => {
        card.classList.add('flex', 'items-center');
        const img = card.querySelector('div:first-child');
        img.classList.remove('h-48');
        img.classList.add('h-24', 'w-20', 'flex-shrink-0');
    });
});

// Search functionality
const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', (e) => {
    const searchTerm = e.target.value.toLowerCase();
    filterBooks({ search: searchTerm });
});

// Sort functionality
const sortSelect = document.getElementById('sortSelect');
sortSelect.addEventListener('change', (e) => {
    const sortBy = e.target.value;
    sortBooks(sortBy);
});

// Filter functionality
function filterBooks(filters = {}) {
    const books = document.querySelectorAll('.book-card');
    let visibleCount = 0;

    books.forEach(book => {
        let shouldShow = true;

        // Category filter
        if (filters.category) {
            shouldShow = shouldShow && book.dataset.category === filters.category;
        }

        // Search filter
        if (filters.search) {
            const title = book.querySelector('h3').textContent.toLowerCase();
            const author = book.dataset.author.toLowerCase();
            shouldShow = shouldShow && (title.includes(filters.search) || author.includes(filters.search));
        }

        if (shouldShow) {
            book.style.display = 'block';
            visibleCount++;
        } else {
            book.style.display = 'none';
        }
    });

    document.getElementById('resultCount').textContent = visibleCount;
}

// Sort functionality
function sortBooks(sortBy) {
    const container = document.getElementById('booksContainer');
    const books = Array.from(container.querySelectorAll('.book-card'));

    books.sort((a, b) => {
        switch (sortBy) {
            case 'price-low':
                return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
            case 'price-high':
                return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
            case 'rating':
                return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
            case 'newest':
            case 'popular':
            default:
                return 0; // Keep original order for demo
        }
    });

    // Re-append sorted books
    books.forEach(book => container.appendChild(book));
}

// Location filter
document.querySelectorAll('.location-option').forEach(option => {
    option.addEventListener('click', () => {
        const location = option.dataset.location;
        document.getElementById('locationFilter').querySelector('span').textContent = location;
        document.getElementById('locationDropdown').classList.remove('active');
    });
});

// Filter checkboxes and radios
document.querySelectorAll('.category-checkbox, .price-radio').forEach(input => {
    input.addEventListener('change', updateActiveFilters);
});

function updateActiveFilters() {
    const activeFiltersContainer = document.getElementById('activeFilters');
    const activeFilters = [];

    // Check category filters
    document.querySelectorAll('.category-checkbox:checked').forEach(checkbox => {
        activeFilters.push({
            type: 'category',
            value: checkbox.value,
            label: checkbox.value.charAt(0).toUpperCase() + checkbox.value.slice(1)
        });
    });

    // Check price filters
    const selectedPrice = document.querySelector('.price-radio:checked');
    if (selectedPrice) {
        activeFilters.push({
            type: 'price',
            value: selectedPrice.value,
            label: selectedPrice.value === '30+' ? '$30+' : `$${selectedPrice.value.replace('-', ' - $')}`
        });
    }

    if (activeFilters.length > 0) {
        activeFiltersContainer.classList.remove('hidden');
        const filtersHTML = activeFilters.map(filter =>
            `<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        ${filter.label}
                        <button class="ml-2 hover:text-blue-600" onclick="removeFilter('${filter.type}', '${filter.value}')">×</button>
                    </span>`
        ).join('');
        activeFiltersContainer.innerHTML = `<span class="text-sm text-gray-600">Active filters:</span> ${filtersHTML}`;
    } else {
        activeFiltersContainer.classList.add('hidden');
    }
}

function removeFilter(type, value) {
    if (type === 'category') {
        document.querySelector(`.category-checkbox[value="${value}"]`).checked = false;
    } else if (type === 'price') {
        document.querySelector(`.price-radio[value="${value}"]`).checked = false;
    }
    updateActiveFilters();
}

// Book card click functionality
document.querySelectorAll('.book-card').forEach(card => {
    card.addEventListener('click', () => {
        const title = card.querySelector('h3').textContent;
        alert(`Opening details for: ${title}`);
    });
});

// Pagination functionality
document.getElementById('nextPage').addEventListener('click', () => {
    document.getElementById('prevPage').disabled = false;
    // In a real app, this would load the next page of results
    alert('Loading next page...');
});

document.getElementById('prevPage').addEventListener('click', () => {
    // In a real app, this would load the previous page of results
    alert('Loading previous page...');
});


books.forEach(book => {
    const card = document.createElement('div');
    card.className = 'book-card bg-white rounded-lg shadow-sm border overflow-hidden cursor-pointer';
    card.setAttribute('data-category', book.category);
    card.setAttribute('data-price', book.price);
    card.setAttribute('data-author', book.author);
    card.setAttribute('data-rating', book.rating);

    card.innerHTML = `
    <div class="h-48 bg-cover bg-center flex items-center justify-center text-white text-4xl" style="background-image: url('${book.cover}')">
    </div>
    <div class="p-4">
      <h3 class="font-semibold text-gray-900 mb-1">${book.title}</h3>
      <p class="text-sm text-gray-600 mb-2">${book.author}</p>
      <div class="flex items-center justify-between">
        <span class="text-lg font-bold text-blue-600">${book.price}</span>
        <div class="flex items-center space-x-1">
          <span class="text-yellow-400">⭐</span>
          <span class="text-sm text-gray-600">${book.rating}</span>
        </div>
      </div>
      <p class="text-xs text-gray-500 mt-2">📍 ${book.location}</p>
    </div>
  `;

    booksContainer.appendChild(card);
});