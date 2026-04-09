<x-layouts.musings title="The Oz Collection — The Musings of a Bibliophile">

    @include('partials.musings.topbar')
    @include('partials.musings.nav')

    <section class="oz-collection-hero">
        <div class="oz-collection-hero-inner">
            <div class="oz-hero-ornament">✦</div>
            <div class="oz-hero-subtitle">Est. A Long Time Ago in a Land Over the Rainbow</div>
            <h1>The Collection</h1>
            <p>A lifelong obsession with all things Oz — rare editions, vintage figurines, ephemera, and the occasional
                pair of ruby slippers.</p>
            <div class="oz-hero-rule"></div>
        </div>
    </section>

    <!-- Cabinet Filter Bar -->
    <div class="cabinet-toolbar">
        <div class="cabinet-toolbar-inner">
            <span class="toolbar-label">Display Case</span>
            <div class="cabinet-filters">
                <button class="cabinet-filter active" data-filter="all">All Items</button>
                <button class="cabinet-filter" data-filter="figurine">Figurines</button>
                <button class="cabinet-filter" data-filter="book">Rare Books</button>
                <button class="cabinet-filter" data-filter="ephemera">Ephemera</button>
                <button class="cabinet-filter" data-filter="memorabilia">Memorabilia</button>
            </div>
        </div>
    </div>

    <!-- The Cabinet — felt-lined display case grid -->
    <div class="oz-cabinet">
        <div class="oz-cabinet-inner">

            <div class="cabinet-section-label">· Currently on Display ·</div>

            <div class="oz-display-case" id="displayCase">

                <!-- Item 1 -->
                <a href="/oz/scarecrow-1968" class="cabinet-item" data-filter="figurine">
                    <div class="cabinet-item-tag">
                        <div class="cabinet-tag-hole"></div>
                        <span class="cabinet-item-number">001</span>
                    </div>
                    <div class="cabinet-item-img-wrap">
                        <div class="cabinet-item-img cabinet-item-img--placeholder">
                            <span class="cabinet-img-icon">🌾</span>
                        </div>
                        <div class="cabinet-item-badges">
                            <span class="cabinet-badge cabinet-badge--video" title="Video available">▶</span>
                            <span class="cabinet-badge cabinet-badge--rare" title="Rare item">✦</span>
                        </div>
                    </div>
                    <div class="cabinet-item-info">
                        <div class="cabinet-item-category">Figurine · 1968</div>
                        <div class="cabinet-item-name">Scarecrow — Tin Litho</div>
                        <div class="cabinet-item-condition">
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-label">Very Good</span>
                        </div>
                    </div>
                </a>

                <!-- Item 2 -->
                <a href="/oz/ruby-slippers-replica" class="cabinet-item" data-filter="memorabilia">
                    <div class="cabinet-item-tag">
                        <div class="cabinet-tag-hole"></div>
                        <span class="cabinet-item-number">002</span>
                    </div>
                    <div class="cabinet-item-img-wrap">
                        <div class="cabinet-item-img cabinet-item-img--placeholder">
                            <span class="cabinet-img-icon">👠</span>
                        </div>
                        <div class="cabinet-item-badges">
                            <span class="cabinet-badge cabinet-badge--video" title="Video available">▶</span>
                        </div>
                    </div>
                    <div class="cabinet-item-info">
                        <div class="cabinet-item-category">Memorabilia · 2001</div>
                        <div class="cabinet-item-name">Ruby Slippers — Screen Replica</div>
                        <div class="cabinet-item-condition">
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-label">Mint</span>
                        </div>
                    </div>
                </a>

                <!-- Item 3 -->
                <a href="/oz/first-edition-1900" class="cabinet-item" data-filter="book">
                    <div class="cabinet-item-tag">
                        <div class="cabinet-tag-hole"></div>
                        <span class="cabinet-item-number">003</span>
                    </div>
                    <div class="cabinet-item-img-wrap">
                        <div class="cabinet-item-img cabinet-item-img--placeholder">
                            <span class="cabinet-img-icon">📖</span>
                        </div>
                        <div class="cabinet-item-badges">
                            <span class="cabinet-badge cabinet-badge--rare" title="Rare item">✦</span>
                            <span class="cabinet-badge cabinet-badge--rare" title="Rare item">R</span>
                        </div>
                    </div>
                    <div class="cabinet-item-info">
                        <div class="cabinet-item-category">Rare Book · 1900</div>
                        <div class="cabinet-item-name">The Wonderful Wizard of Oz — 1st Ed. Facsimile</div>
                        <div class="cabinet-item-condition">
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-label">Good</span>
                        </div>
                    </div>
                </a>

                <!-- Item 4 -->
                <a href="/oz/tinman-musical-box" class="cabinet-item" data-filter="figurine">
                    <div class="cabinet-item-tag">
                        <div class="cabinet-tag-hole"></div>
                        <span class="cabinet-item-number">004</span>
                    </div>
                    <div class="cabinet-item-img-wrap">
                        <div class="cabinet-item-img cabinet-item-img--placeholder">
                            <span class="cabinet-img-icon">🤖</span>
                        </div>
                        <div class="cabinet-item-badges">
                            <span class="cabinet-badge cabinet-badge--video" title="Video available">▶</span>
                        </div>
                    </div>
                    <div class="cabinet-item-info">
                        <div class="cabinet-item-category">Figurine · 1975</div>
                        <div class="cabinet-item-name">Tin Man — Musical Box</div>
                        <div class="cabinet-item-condition">
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-label">Very Good</span>
                        </div>
                    </div>
                </a>

                <!-- Item 5 -->
                <a href="/oz/program-1939" class="cabinet-item" data-filter="ephemera">
                    <div class="cabinet-item-tag">
                        <div class="cabinet-tag-hole"></div>
                        <span class="cabinet-item-number">005</span>
                    </div>
                    <div class="cabinet-item-img-wrap">
                        <div class="cabinet-item-img cabinet-item-img--placeholder">
                            <span class="cabinet-img-icon">📜</span>
                        </div>
                        <div class="cabinet-item-badges">
                            <span class="cabinet-badge cabinet-badge--rare" title="Rare item">✦</span>
                        </div>
                    </div>
                    <div class="cabinet-item-info">
                        <div class="cabinet-item-category">Ephemera · 1939</div>
                        <div class="cabinet-item-name">Original Theatre Program</div>
                        <div class="cabinet-item-condition">
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-label">Fair</span>
                        </div>
                    </div>
                </a>

                <!-- Item 6 -->
                <a href="/oz/lion-plush-1939" class="cabinet-item" data-filter="memorabilia">
                    <div class="cabinet-item-tag">
                        <div class="cabinet-tag-hole"></div>
                        <span class="cabinet-item-number">006</span>
                    </div>
                    <div class="cabinet-item-img-wrap">
                        <div class="cabinet-item-img cabinet-item-img--placeholder">
                            <span class="cabinet-img-icon">🦁</span>
                        </div>
                        <div class="cabinet-item-badges">
                            <span class="cabinet-badge cabinet-badge--video" title="Video available">▶</span>
                            <span class="cabinet-badge cabinet-badge--rare" title="Rare item">✦</span>
                        </div>
                    </div>
                    <div class="cabinet-item-info">
                        <div class="cabinet-item-category">Memorabilia · 1939</div>
                        <div class="cabinet-item-name">Cowardly Lion — Original Plush</div>
                        <div class="cabinet-item-condition">
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip condition-pip--filled"></span>
                            <span class="condition-pip"></span>
                            <span class="condition-label">Very Good</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- Individual Item View -->
    <section class="oz-item-spotlight">
        <div class="oz-item-spotlight-inner">
            <div class="spotlight-header">
                <div class="section-fade-divider"></div>
                <div class="cabinet-section-label" style="margin:1.5rem 0;">· Item Spotlight ·</div>
            </div>

            <div class="oz-item-detail">
                <div class="oz-item-gallery">
                    <div class="oz-gallery-main">
                        <div class="oz-gallery-main-img oz-gallery-placeholder">
                            <span class="cabinet-img-icon" style="font-size:5rem;">🌾</span>
                        </div>
                    </div>
                    <div class="oz-gallery-thumbs">
                        <div class="oz-gallery-thumb oz-gallery-placeholder active"><span>🌾</span></div>
                        <div class="oz-gallery-thumb oz-gallery-placeholder"><span>📐</span></div>
                        <div class="oz-gallery-thumb oz-gallery-placeholder"><span>🔍</span></div>
                    </div>
                </div>

                <div class="oz-item-detail-body">
                    <div class="oz-item-detail-crumb">
                        <a href="/" class="crumb-link">Home</a>
                        <span class="crumb-sep">›</span>
                        <a href="/oz" class="crumb-link">The Collection</a>
                        <span class="crumb-sep">›</span>
                        <span>Scarecrow — Tin Litho</span>
                    </div>

                    <div class="oz-item-number-badge">Item No. 001</div>
                    <h2 class="oz-item-detail-title">Scarecrow — Tin Litho Figurine</h2>
                    <div class="oz-item-detail-meta">
                        <span class="oz-meta-chip">Figurine</span>
                        <span class="oz-meta-chip">1968</span>
                        <span class="oz-meta-chip oz-meta-chip--rare">✦ Rare</span>
                    </div>

                    <div class="oz-item-detail-desc">
                        <p>Discovered at an estate sale in rural Ohio in 2019, this 1968 tin lithograph Scarecrow
                            figurine is one of approximately 400 produced by the Lowell Manufacturing Company. The
                            detail work on the face and the original straw-yellow paint are remarkably preserved.</p>
                        <p>The small chip on the base is consistent with age and storage — it only adds to the
                            character. This is one of my most treasured pieces and the one that started it all.</p>
                    </div>

                    <div class="oz-item-provenance">
                        <div class="oz-provenance-label">Provenance & Details</div>
                        <dl class="oz-provenance-list">
                            <dt>Year</dt>
                            <dd>1968</dd>
                            <dt>Manufacturer</dt>
                            <dd>Lowell Manufacturing Co.</dd>
                            <dt>Material</dt>
                            <dd>Tin lithograph</dd>
                            <dt>Dimensions</dt>
                            <dd>4.5" × 2" × 1.5"</dd>
                            <dt>Condition</dt>
                            <dd>Very Good (4/5)</dd>
                            <dt>Acquired</dt>
                            <dd>Estate sale, Ohio — 2019</dd>
                        </dl>
                    </div>

                    <div class="oz-item-social-bar">
                        <span class="oz-social-label">Also on</span>
                        <a href="https://youtube.com/shorts/K_0oQivpB7k?si=mORVgB-g-PxQZJby" target="_blank"
                            class="rsb-link"><span class="platform-badge platform-badge--yt">YouTube</span></a>
                        <a href="#" class="rsb-link"><span
                                class="platform-badge platform-badge--ig">Instagram</span></a>
                    </div>
                </div>
            </div>

            <!-- Video embed for item -->
            <div class="oz-item-video">
                <div class="review-video-header">
                    <span class="platform-badge platform-badge--yt">▶ Watch</span>
                    <span class="review-video-title">Wicked - Popup Book</span>
                </div>
                <div class="review-video-embed">
                    <iframe src="https://www.youtube.com/embed/K_0oQivpB7k" title="Wicked Popup Book" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </section>

    @include('partials.musings.newsletter')
    @include('partials.musings.footer')

</x-layouts.musings>