// ─── Nav Toggle ───────────────────────────────────────────────────────────
const toggle = document.getElementById('navToggle');
const menu = document.getElementById('navMenu');

toggle.addEventListener('click', () => {
    const open = menu.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open);
});

// ─── Reviews Index — Sort & Filter ───────────────────────────────────────
const reviewsWrap = document.querySelector('.reviews-index-wrap');
if (reviewsWrap) {
    let sortDir = 'desc';
    let activeSort = 'date';

    const getVal = (card, key) => {
        if (key === 'rating') return parseFloat(card.dataset.rating || 0);
        if (key === 'date')   return card.dataset.date || '';
        return (card.dataset[key] || '').toLowerCase();
    };

    const sortCards = (key) => {
        activeSort = key;
        const cards = [...reviewsWrap.querySelectorAll('.ri-card:not([hidden])')];
        const hidden = [...reviewsWrap.querySelectorAll('.ri-card[hidden]')];
        cards.sort((a, b) => {
            const av = getVal(a, key), bv = getVal(b, key);
            if (av < bv) return sortDir === 'asc' ? -1 : 1;
            if (av > bv) return sortDir === 'asc' ? 1 : -1;
            return 0;
        });
        cards.forEach(c => reviewsWrap.appendChild(c));
        hidden.forEach(c => reviewsWrap.appendChild(c));
    };

    document.querySelectorAll('.sort-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.sort-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            sortCards(btn.dataset.sort);
        });
    });

    const dirToggle = document.getElementById('sortDir');
    if (dirToggle) {
        dirToggle.addEventListener('click', () => {
            sortDir = sortDir === 'asc' ? 'desc' : 'asc';
            dirToggle.querySelector('.sort-dir-icon').textContent = sortDir === 'asc' ? '↑' : '↓';
            sortCards(activeSort);
        });
    }

    document.querySelectorAll('.genre-filter').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.genre-filter').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const genre = btn.dataset.genre;
            reviewsWrap.querySelectorAll('.ri-card').forEach(card => {
                const match = genre === 'all' || card.dataset.genre.toLowerCase().includes(genre);
                card.hidden = !match;
            });
        });
    });
}

// ─── Oz Cabinet Filter ────────────────────────────────────────────────────
const displayCase = document.getElementById('displayCase');
if (displayCase) {
    document.querySelectorAll('.cabinet-filter').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.cabinet-filter').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.dataset.filter;
            displayCase.querySelectorAll('.cabinet-item').forEach(item => {
                const match = filter === 'all' || item.dataset.filter === filter;
                item.style.display = match ? '' : 'none';
            });
        });
    });
}
