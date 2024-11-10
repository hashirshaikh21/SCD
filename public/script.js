const watchlist = [];

// Function to show the selected page
function showPage(page) {
    const contents = document.querySelectorAll('.content');
    contents.forEach(content => {
        content.classList.remove('active');
    });
    document.getElementById(page).classList.add('active');
}


function addToWatchlist(animeName, imageUrl) {
    if (!watchlist.some(anime => anime.name === animeName)) {
        watchlist.push({ name: animeName, image: imageUrl }); // Store name and image URL
        alert(`${animeName} has been added to your watchlist!`);
    } else {
        alert(`${animeName} is already in your watchlist.`);
    }
    updateWatchlist();
}

function updateWatchlist() {
    const watchlistContainer = document.getElementById('watchlistItems');
    watchlistContainer.innerHTML = ''; // Clear the current watchlist display

    if (watchlist.length === 0) {
        watchlistContainer.innerHTML = '<p>Your watchlist is empty. Add shows from the Library.</p>';
        return;
    }

    watchlist.forEach(anime => {
        const item = document.createElement('div');
        item.className = 'anime-item';
        item.innerHTML = `
            <img src="${anime.image}" alt="${anime.name}">
            <p>${anime.name}</p>
        `;
        watchlistContainer.appendChild(item); // Add each anime to the watchlist display
    });
}




// Function to toggle login modal
function toggleModal() {
    const modal = document.getElementById('loginModal');
    modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
}

// Function to handle login (dummy function)
function login() {
    alert('Login functionality is not implemented yet.');
}

// Function to handle registration (dummy function)
function register() {
    alert('Registration functionality is not implemented yet.');
}

// Function to submit feedback (dummy function)
function submitFeedback() {
    alert('Feedback submitted! Thank you!');
}
