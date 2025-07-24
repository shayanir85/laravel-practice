// Sample book data
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


let currentBooks = [...books];
let currentCategory = 'all';
let currentLocation = '';

// Initialize the page
document.addEventListener('DOMContentLoaded', function () {
    displayBooks(currentBooks);
    setupEventListeners();
});

function setupEventListeners() {
    // Search functionality
    document.getElementById('searchInput').addEventListener('input', handleSearch);

    // Location filter
    document.getElementById('locationFilter').addEventListener('change', handleLocationFilter);

    // Sort filter
    document.getElementById('sortFilter').addEventListener('change', handleSort);
}

function displayBooks(booksToShow) {
    const grid = document.getElementById('booksGrid');
    grid.innerHTML = '';

    booksToShow.forEach(book => {
        const bookCard = createBookCard(book);
        grid.appendChild(bookCard);
    });
}

function createBookCard(book) {
    const card = document.createElement('div');
    card.className = 'book-card bg-white rounded-lg shadow-md overflow-hidden';

    const stars = '★'.repeat(Math.floor(book.rating)) + '☆'.repeat(5 - Math.floor(book.rating));

    card.innerHTML = `
                <div class="aspect-w-3 aspect-h-4">
                    <img src="${book.cover}" alt="${book.title}" class="w-full h-64 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-1 text-gray-800 line-clamp-2">${book.title}</h3>
                    <p class="text-gray-600 mb-2">by ${book.author}</p>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400 text-sm">${stars}</span>
                        <span class="text-gray-500 text-sm ml-1">(${book.rating})</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-purple-600">${book.price}</span>
                        <button onclick="addToCart(${book.id})" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                            Add to Cart
                        </button>
                    </div>
                    <div class="mt-2">
                        <span class="inline-block bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs capitalize">
                            📍 ${book.location}
                        </span>
                        <span class="inline-block bg-purple-100 text-purple-600 px-2 py-1 rounded-full text-xs capitalize ml-1">
                            ${book.category}
                        </span>
                    </div>
                </div>
            `;

    return card;
}

function filterByCategory(category) {
    currentCategory = category;
    applyFilters();

    // Hide search results when browsing categories
    document.getElementById('searchResults').classList.remove('active');
    document.getElementById('booksSection').style.display = 'block';
}

function handleLocationFilter(event) {
    currentLocation = event.target.value;
    applyFilters();
}

function applyFilters() {
    let filteredBooks = [...books];

    // Filter by category
    if (currentCategory !== 'all') {
        filteredBooks = filteredBooks.filter(book => book.category === currentCategory);
    }

    // Filter by location
    if (currentLocation) {
        filteredBooks = filteredBooks.filter(book => book.location === currentLocation);
    }

    currentBooks = filteredBooks;
    displayBooks(currentBooks);
}

function handleSearch(event) {
    const searchTerm = event.target.value.toLowerCase().trim();

    if (searchTerm === '') {
        document.getElementById('searchResults').classList.remove('active');
        document.getElementById('booksSection').style.display = 'block';
        return;
    }

    const searchResults = books.filter(book =>
        book.title.toLowerCase().includes(searchTerm) ||
        book.author.toLowerCase().includes(searchTerm) ||
        book.category.toLowerCase().includes(searchTerm)
    );

    displaySearchResults(searchResults);
}

function displaySearchResults(results) {
    const searchResultsSection = document.getElementById('searchResults');
    const searchResultsGrid = document.getElementById('searchResultsGrid');

    searchResultsGrid.innerHTML = '';

    if (results.length === 0) {
        searchResultsGrid.innerHTML = '<p class="col-span-full text-center text-gray-500 py-8">No books found matching your search.</p>';
    } else {
        results.forEach(book => {
            const bookCard = createBookCard(book);
            searchResultsGrid.appendChild(bookCard);
        });
    }

    searchResultsSection.classList.add('active');
    document.getElementById('booksSection').style.display = 'none';
}

function handleSort(event) {
    const sortBy = event.target.value;

    switch (sortBy) {
        case 'title':
            currentBooks.sort((a, b) => a.title.localeCompare(b.title));
            break;
        case 'author':
            currentBooks.sort((a, b) => a.author.localeCompare(b.author));
            break;
        case 'newest':
            currentBooks.sort((a, b) => b.id - a.id);
            break;
        default:
            currentBooks = [...books];
            applyFilters();
            return;
    }

    displayBooks(currentBooks);
}

function scrollToBooks() {
    document.getElementById('booksSection').scrollIntoView({
        behavior: 'smooth'
    });
}

function addToCart(bookId) {
    const book = books.find(b => b.id === bookId);
    alert(`"${book.title}" has been added to your cart! 🛒`);
}
