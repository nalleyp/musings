<x-layouts.musings title="All Reviews — The Musings of a Bibliophile">

    @include('partials.musings.topbar')
    @include('partials.musings.nav')

    <section class="page-hero">
        <div class="page-hero-inner">
            <div class="ornament">· · ✦ · ·</div>
            <h1>From a Certain Point of View</h1>
            <p>Every book reviewed with heart, humor, and a deep love of the written word.</p>
        </div>
    </section>

    <div class="reviews-toolbar">
        <div class="reviews-toolbar-inner">
            <span class="toolbar-label">Sort by</span>
            <div class="sort-controls">
                <button class="sort-btn active" data-sort="date">Date</button>
                <button class="sort-btn" data-sort="title">Title</button>
                <button class="sort-btn" data-sort="author">Author</button>
                <button class="sort-btn" data-sort="rating">Rating</button>
            </div>
            <div class="sort-dir-toggle" id="sortDir" title="Toggle sort direction">
                <span class="sort-dir-icon">↓</span>
            </div>
            <div class="genre-filters">
                <button class="genre-filter active" data-genre="all">All</button>
                <button class="genre-filter" data-genre="fiction">Fiction</button>
                <button class="genre-filter" data-genre="thriller">Thriller</button>
                <button class="genre-filter" data-genre="horror">Horror</button>
                <button class="genre-filter" data-genre="literary fiction">Literary</button>
            </div>
        </div>
    </div>

    <main class="reviews-index-wrap">

        <article class="ri-card"
                 data-title="We Are All Guilty Here"
                 data-author="Karin Slaughter"
                 data-rating="5"
                 data-date="2026-03-15"
                 data-genre="thriller">
            <a href="/reviews/we-are-all-guilty-here" class="ri-card-cover-link">
                <div class="ri-cover" style="--cover-gradient: linear-gradient(135deg,#2a1a0e,#5a3418);">
                    <img src="https://covers.openlibrary.org/b/isbn/9780008625894-L.jpg"
                         alt="We Are All Guilty Here cover"
                         class="ri-cover-img"
                         onerror="this.parentNode.classList.add('no-cover');this.remove();" />
                </div>
            </a>
            <div class="ri-card-body">
                <div class="ri-card-meta-top">
                    <span class="genre-tag">Thriller</span>
                    <time class="ri-date" datetime="2026-03-15">Mar 15, 2026</time>
                </div>
                <h2 class="ri-title"><a href="/reviews/we-are-all-guilty-here">We Are All Guilty Here</a></h2>
                <div class="ri-author">by Karin Slaughter</div>
                <p class="ri-excerpt">A masterclass in tension and character. Slaughter delivers one of her most devastating reads yet — impossible to put down.</p>
            </div>
            <div class="ri-card-actions">
                <div class="ri-platform-icons">
                    <a href="#" class="ri-pi-link" title="Watch on YouTube"><span class="platform-badge platform-badge--yt">YouTube</span></a>
                    <a href="#" class="ri-pi-link" title="Watch on TikTok"><span class="platform-badge platform-badge--tt">TikTok</span></a>
                    <span class="ri-pi-link"><span class="platform-badge platform-badge--ig platform-badge--dim">Instagram</span></span>
                    <span class="ri-pi-link"><span class="platform-badge platform-badge--th platform-badge--dim">Threads</span></span>
                    <a href="https://pangobooks.com/bookstore/nicole77" target="_blank" class="ri-pi-link" title="Buy on Pango Shop"><span class="platform-badge platform-badge--pango">Pango Shop</span></a>
                </div>
                <a href="/reviews/we-are-all-guilty-here" class="ri-read-link">Read Review →</a>
            </div>
        </article>

        <article class="ri-card"
                 data-title="Into the Light"
                 data-author="Mark Oshiro"
                 data-rating="5"
                 data-date="2026-02-20"
                 data-genre="fiction">
            <a href="/reviews/into-the-light" class="ri-card-cover-link">
                <div class="ri-cover" style="--cover-gradient: linear-gradient(135deg,#1a2a4a,#2a4a7a);">
                    <img src="https://covers.openlibrary.org/b/isbn/9781250812278-L.jpg"
                         alt="Into the Light cover"
                         class="ri-cover-img"
                         onerror="this.parentNode.classList.add('no-cover');this.remove();" />
                </div>
            </a>
            <div class="ri-card-body">
                <div class="ri-card-meta-top">
                    <span class="genre-tag">Fiction</span>
                    <time class="ri-date" datetime="2026-02-20">Feb 20, 2026</time>
                </div>
                <h2 class="ri-title"><a href="/reviews/into-the-light">Into the Light</a></h2>
                <div class="ri-author">by Mark Oshiro</div>
                <p class="ri-excerpt">A transcendent reading experience that reminds us every life is worth exploring. I ugly-cried three times and would do it again.</p>
            </div>
            <div class="ri-card-actions">
                <div class="ri-platform-icons">
                    <a href="#" class="ri-pi-link" title="Watch on YouTube"><span class="platform-badge platform-badge--yt">YouTube</span></a>
                    <span class="ri-pi-link"><span class="platform-badge platform-badge--tt platform-badge--dim">TikTok</span></span>
                    <a href="#" class="ri-pi-link" title="View on Instagram"><span class="platform-badge platform-badge--ig">Instagram</span></a>
                    <a href="#" class="ri-pi-link" title="View on Threads"><span class="platform-badge platform-badge--th">Threads</span></a>
                    <span class="ri-pi-link"><span class="platform-badge platform-badge--pango platform-badge--dim">Pango Shop</span></span>
                </div>
                <a href="/reviews/into-the-light" class="ri-read-link">Read Review →</a>
            </div>
        </article>

        <article class="ri-card"
                 data-title="The Body"
                 data-author="Bethany C. Morrow"
                 data-rating="4"
                 data-date="2026-01-10"
                 data-genre="horror">
            <a href="/reviews/the-body" class="ri-card-cover-link">
                <div class="ri-cover" style="--cover-gradient: linear-gradient(135deg,#1a3a2a,#2a5a3a);">
                    <div class="cover-placeholder">
                        <div class="cover-placeholder-rule"></div>
                        <span class="cover-placeholder-label">Coming Soon</span>
                        <div class="cover-placeholder-rule"></div>
                    </div>
                </div>
            </a>
            <div class="ri-card-body">
                <div class="ri-card-meta-top">
                    <span class="genre-tag">Horror</span>
                    <time class="ri-date" datetime="2026-01-10">Jan 10, 2026</time>
                </div>
                <h2 class="ri-title"><a href="/reviews/the-body">The Body</a></h2>
                <div class="ri-author">by Bethany C. Morrow</div>
                <p class="ri-excerpt">Like stepping into a dream you never want to leave. Lush, atmospheric, and impossibly beautiful.</p>
            </div>
            <div class="ri-card-actions">
                <div class="ri-platform-icons">
                    <span class="ri-pi-link"><span class="platform-badge platform-badge--yt platform-badge--dim">YouTube</span></span>
                    <a href="#" class="ri-pi-link" title="Watch on TikTok"><span class="platform-badge platform-badge--tt">TikTok</span></a>
                    <a href="#" class="ri-pi-link" title="View on Instagram"><span class="platform-badge platform-badge--ig">Instagram</span></a>
                    <span class="ri-pi-link"><span class="platform-badge platform-badge--th platform-badge--dim">Threads</span></span>
                    <span class="ri-pi-link"><span class="platform-badge platform-badge--pango platform-badge--dim">Pango Shop</span></span>
                </div>
                <a href="/reviews/the-body" class="ri-read-link">Read Review →</a>
            </div>
        </article>

    </main>

    @include('partials.musings.newsletter')
    @include('partials.musings.footer')

</x-layouts.musings>
