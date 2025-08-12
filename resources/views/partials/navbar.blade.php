<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <img src="images/LOGO FIJADA.png" alt="FIJADA Logo" class="h-24 w-auto">
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#accueil" data-section="accueil"
                        class="nav-link text-gray-700 hover:text-fijada-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Accueil</a>
                    <a href="#apropos" data-section="apropos"
                        class="nav-link text-gray-700 hover:text-fijada-green px-3 py-2 rounded-md text-sm font-medium transition-colors">À
                        propos</a>
                    <a href="#membres" data-section="membres"
                        class="nav-link text-gray-700 hover:text-fijada-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Membres</a>
                    <a href="#partenaires" data-section="partenaires"
                        class="nav-link text-gray-700 hover:text-fijada-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Partenaires</a>
                    <a href="#actualite" data-section="actualite"
                        class="nav-link text-gray-700 hover:text-fijada-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Actualités</a>
                    <a href="#contact" data-section="contact"
                        class="nav-link text-gray-700 hover:text-fijada-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                </div>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-fijada-green cursor-pointer">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
            <a href="#accueil" data-section="accueil"
                class="nav-link text-gray-700 hover:text-fijada-green block px-3 py-2 rounded-md text-base font-medium">Accueil</a>
            <a href="#apropos" data-section="apropos"
                class="nav-link text-gray-700 hover:text-fijada-green block px-3 py-2 rounded-md text-base font-medium">À
                propos</a>
            <a href="#membres" data-section="membres"
                class="nav-link text-gray-700 hover:text-fijada-green block px-3 py-2 rounded-md text-base font-medium">Membres</a>
            <a href="#partenaires" data-section="partenaires"
                class="nav-link text-gray-700 hover:text-fijada-green block px-3 py-2 rounded-md text-base font-medium">Partenaires</a>
            <a href="#actualite" data-section="actualite"
                class="nav-link text-gray-700 hover:text-fijada-green block px-3 py-2 rounded-md text-base font-medium">Actualités</a>
            <a href="#contact" data-section="contact"
                class="nav-link text-gray-700 hover:text-fijada-green block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sectionId = entry.target.id;

                    navLinks.forEach(link => {
                        if (link.getAttribute('data-section') === sectionId) {
                            link.classList.add('text-fijada-blue', 'font-semibold');
                            link.classList.remove('text-gray-700');
                        } else {
                            link.classList.add('text-gray-700');
                            link.classList.remove('text-fijada-blue', 'font-semibold');
                        }
                    });
                }
            });
        }, {
            threshold: 0.5,
            rootMargin: '0px 0px -50% 0px'
        });

        sections.forEach(section => {
            observer.observe(section);
        });

        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
