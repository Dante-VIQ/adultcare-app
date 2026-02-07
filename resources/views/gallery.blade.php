<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing Palace - Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'palace-purple': '#6D28D9',
                        'palace-purple-light': '#8B5CF6',
                        'palace-purple-dark': '#5B21B6',
                        'palace-lavender': '#EDE9FE',
                        'palace-gold': '#FBBF24',
                        'palace-cream': '#FAF5FF',
                    }
                }
            }
        }
    </script>
    <style>
        .gallery-item {
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(107, 33, 168, 0.2);
        }

        .purple-gradient {
            background: linear-gradient(135deg, #6D28D9 0%, #8B5CF6 100%);
        }

        .light-purple-gradient {
            background: linear-gradient(135deg, #EDE9FE 0%, #FAF5FF 100%);
        }

        .image-zoom {
            transition: transform 0.5s ease;
        }

        .image-zoom:hover {
            transform: scale(1.05);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #6D28D9 0%, #8B5CF6 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(107, 33, 168, 0.3);
        }
    </style>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-palace-cream">
    <!-- Navigation -->
    <livewire:layout.navigation />

    <!-- Hero Section -->
    <header class="relative purple-gradient text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-64 h-64 bg-palace-gold rounded-full -translate-x-32 -translate-y-32">
            </div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-palace-gold rounded-full translate-x-48 translate-y-48">
            </div>
        </div>

        <div class="container mx-auto px-6 py-20 md:py-28 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    Amazing Palace <span class="text-palace-gold">Gallery</span>
                </h1>

            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#FAF5FF" fill-opacity="1"
                    d="M0,160L48,170.7C96,181,192,203,288,192C384,181,480,139,576,138.7C672,139,768,181,864,181.3C960,181,1056,139,1152,133.3C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </header>


    <!-- Main Gallery Grid -->
    <main class="py-8 pb-20 bg-palace-cream">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="gallery-grid">
                <div class="gallery-item bg-white rounded-2xl overflow-hidden shadow-lg border border-palace-lavender"
                    data-category="suites">
                    <livewire:image-card />
                </div>

            </div>
        </div>
    </main>

    <!-- Lightbox Modal (Hidden by default) -->
    <div id="lightbox-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-6xl w-full max-h-[90vh] overflow-hidden rounded-2xl">
            <img id="lightbox-image" src="" alt="" class="w-full h-auto max-h-[80vh] object-contain">
            <div class="absolute top-4 right-4 flex space-x-2">
                <button id="close-lightbox"
                    class="bg-white text-palace-purple-dark w-12 h-12 rounded-full flex items-center justify-center hover:bg-gray-100">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div class="absolute bottom-4 left-0 right-0 text-center">
                <h3 id="lightbox-title" class="text-white text-2xl font-bold"></h3>
            </div>
        </div>
    </div>

    @livewireScripts

    <!-- JavaScript -->
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            // const galleryItems = document.querySelectorAll('.gallery-item');
            const viewButtons = document.querySelectorAll('.gallery-item button');
            const lightboxModal = document.getElementById('lightbox-modal');
            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxTitle = document.getElementById('lightbox-title');
            const closeLightbox = document.getElementById('close-lightbox');

            // Filter functionality
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    // Show/hide gallery items
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') ===
                            filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Lightbox functionality
            viewButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const galleryItem = this.closest('.gallery-item');
                    const imageSrc = galleryItem.querySelector('img').src;
                    const title = galleryItem.querySelector('h3').textContent;

                    lightboxImage.src = imageSrc;
                    lightboxTitle.textContent = title;
                    lightboxModal.classList.remove('hidden');
                    lightboxModal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                });
            });

            // Close lightbox
            closeLightbox.addEventListener('click', function() {
                lightboxModal.classList.add('hidden');
                lightboxModal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            });

            // Close lightbox when clicking outside image
            lightboxModal.addEventListener('click', function(e) {
                if (e.target === lightboxModal) {
                    lightboxModal.classList.add('hidden');
                    lightboxModal.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                }
            });

            // Close lightbox with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !lightboxModal.classList.contains('hidden')) {
                    lightboxModal.classList.add('hidden');
                    lightboxModal.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                }
            });

            // Mobile menu toggle (simplified)
            const mobileMenuBtn = document.querySelector('button.md\\:hidden');
            mobileMenuBtn.addEventListener('click', function() {
                alert(
                    'Mobile menu would open here. In a full implementation, this would toggle a mobile navigation menu.'
                    );
            });
        });
    </script>
</body>

</html>
